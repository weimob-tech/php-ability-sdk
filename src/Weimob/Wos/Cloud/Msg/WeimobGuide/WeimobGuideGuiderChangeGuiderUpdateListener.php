<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,308
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface WeimobGuideGuiderChangeGuiderUpdateListener
{
    const topic = 'weimob_guide.guider.change';
    const event = 'guiderUpdate';
    const classType = GuiderUpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class GuiderUpdateMessage implements \JsonSerializable
{
    /**
     * 商业操作系统id
     * @var string
     */
    private $bosId;

    /**
     * 导购名称
     * @var string
     */
    private $guiderName;

    /**
     * 导购id，用于管理导购员的生命周期，同一个导购wid在同一个门店多次入离职，guiderId不同；同一个导购员，在不同的门店，guiderId不同
     * @var string
     */
    private $guiderId;

    /**
     * 变更时间，格式：yyyy-MM-dd HH:mm:ss
     * @var string
     */
    private $updateTime;

    /**
     * 导购wid，来源于新增导购接口返回
     * @var int
     */
    private $guiderWid;

    /**
     * 导购归属门店vid，来源于组织节点ID
     * @var int
     */
    private $guiderVid;

    /**
     * 导购vid类型
     * @var int
     */
    private $guiderVidType;

    /**
     * 导购员工号
     * @var string
     */
    private $jobNumber;

    /**
     * 是否专属客服：0:专属客服-仅主动服务，1:专属客服-专属服务, 2:非专属客服（默认）
     * @var int
     */
    private $isExclusiveCus;

    /**
     * 导购手机号
     * @var string
     */
    private $guiderPhone;

    /**
     * 来源产品ID
     * @var int
     */
    private $sourceProductId;

    /**
     * 来源产品实例ID
     * @var int
     */
    private $sourceProductInstanceId;

    /**
     * @param string $bosId
     */
    public function setBosId(?string $bosId): void
    {
        $this->bosId = $bosId;
    }

    /**
     * @return string
     */
    public function getBosId(): ?string
    {
        return $this->bosId;
    }

    /**
     * @param string $guiderName
     */
    public function setGuiderName(?string $guiderName): void
    {
        $this->guiderName = $guiderName;
    }

    /**
     * @return string
     */
    public function getGuiderName(): ?string
    {
        return $this->guiderName;
    }

    /**
     * @param string $guiderId
     */
    public function setGuiderId(?string $guiderId): void
    {
        $this->guiderId = $guiderId;
    }

    /**
     * @return string
     */
    public function getGuiderId(): ?string
    {
        return $this->guiderId;
    }

    /**
     * @param string $updateTime
     */
    public function setUpdateTime(?string $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    /**
     * @return string
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * @param int $guiderWid
     */
    public function setGuiderWid(?int $guiderWid): void
    {
        $this->guiderWid = $guiderWid;
    }

    /**
     * @return int
     */
    public function getGuiderWid(): ?int
    {
        return $this->guiderWid;
    }

    /**
     * @param int $guiderVid
     */
    public function setGuiderVid(?int $guiderVid): void
    {
        $this->guiderVid = $guiderVid;
    }

    /**
     * @return int
     */
    public function getGuiderVid(): ?int
    {
        return $this->guiderVid;
    }

    /**
     * @param int $guiderVidType
     */
    public function setGuiderVidType(?int $guiderVidType): void
    {
        $this->guiderVidType = $guiderVidType;
    }

    /**
     * @return int
     */
    public function getGuiderVidType(): ?int
    {
        return $this->guiderVidType;
    }

    /**
     * @param string $jobNumber
     */
    public function setJobNumber(?string $jobNumber): void
    {
        $this->jobNumber = $jobNumber;
    }

    /**
     * @return string
     */
    public function getJobNumber(): ?string
    {
        return $this->jobNumber;
    }

    /**
     * @param int $isExclusiveCus
     */
    public function setIsExclusiveCus(?int $isExclusiveCus): void
    {
        $this->isExclusiveCus = $isExclusiveCus;
    }

    /**
     * @return int
     */
    public function getIsExclusiveCus(): ?int
    {
        return $this->isExclusiveCus;
    }

    /**
     * @param string $guiderPhone
     */
    public function setGuiderPhone(?string $guiderPhone): void
    {
        $this->guiderPhone = $guiderPhone;
    }

    /**
     * @return string
     */
    public function getGuiderPhone(): ?string
    {
        return $this->guiderPhone;
    }

    /**
     * @param int $sourceProductId
     */
    public function setSourceProductId(?int $sourceProductId): void
    {
        $this->sourceProductId = $sourceProductId;
    }

    /**
     * @return int
     */
    public function getSourceProductId(): ?int
    {
        return $this->sourceProductId;
    }

    /**
     * @param int $sourceProductInstanceId
     */
    public function setSourceProductInstanceId(?int $sourceProductInstanceId): void
    {
        $this->sourceProductInstanceId = $sourceProductInstanceId;
    }

    /**
     * @return int
     */
    public function getSourceProductInstanceId(): ?int
    {
        return $this->sourceProductInstanceId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

