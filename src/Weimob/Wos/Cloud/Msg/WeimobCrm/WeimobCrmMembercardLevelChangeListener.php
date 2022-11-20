<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,314
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface WeimobCrmMembercardLevelChangeListener
{
    const topic = 'weimob_crm.membercard.level';
    const event = 'change';
    const classType = ChangeMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ChangeMessage implements \JsonSerializable
{
    /**
     * 商业操作系统ID
     * @var int
     */
    private $bosId	;

    /**
     * 等级变更原因
     * @var string
     */
    private $reason;

    /**
     * 等级变更时间
     * @var int
     */
    private $changeTime;

    /**
     * 等级变更后的等级ID
     * @var int
     */
    private $newLevelId;

    /**
     * 等级变更前的等级ID
     * @var int
     */
    private $oldLevelId;

    /**
     * 产品实例ID
     * @var int
     */
    private $productInstanceId;

    /**
     * 节点ID
     * @var int
     */
    private $vid;

    /**
     * 客户ID
     * @var int
     */
    private $wid;

    /**
     * @param int $bosId	
     */
    public function setBosId	(?int $bosId	): void
    {
        $this->bosId	 = $bosId	;
    }

    /**
     * @return int
     */
    public function getBosId	(): ?int
    {
        return $this->bosId	;
    }

    /**
     * @param string $reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param int $changeTime
     */
    public function setChangeTime(?int $changeTime): void
    {
        $this->changeTime = $changeTime;
    }

    /**
     * @return int
     */
    public function getChangeTime(): ?int
    {
        return $this->changeTime;
    }

    /**
     * @param int $newLevelId
     */
    public function setNewLevelId(?int $newLevelId): void
    {
        $this->newLevelId = $newLevelId;
    }

    /**
     * @return int
     */
    public function getNewLevelId(): ?int
    {
        return $this->newLevelId;
    }

    /**
     * @param int $oldLevelId
     */
    public function setOldLevelId(?int $oldLevelId): void
    {
        $this->oldLevelId = $oldLevelId;
    }

    /**
     * @return int
     */
    public function getOldLevelId(): ?int
    {
        return $this->oldLevelId;
    }

    /**
     * @param int $productInstanceId
     */
    public function setProductInstanceId(?int $productInstanceId): void
    {
        $this->productInstanceId = $productInstanceId;
    }

    /**
     * @return int
     */
    public function getProductInstanceId(): ?int
    {
        return $this->productInstanceId;
    }

    /**
     * @param int $vid
     */
    public function setVid(?int $vid): void
    {
        $this->vid = $vid;
    }

    /**
     * @return int
     */
    public function getVid(): ?int
    {
        return $this->vid;
    }

    /**
     * @param int $wid
     */
    public function setWid(?int $wid): void
    {
        $this->wid = $wid;
    }

    /**
     * @return int
     */
    public function getWid(): ?int
    {
        return $this->wid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

