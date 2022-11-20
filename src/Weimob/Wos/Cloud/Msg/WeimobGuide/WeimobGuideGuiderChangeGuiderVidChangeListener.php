<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,313
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobGuideGuiderChangeGuiderVidChangeListener
{
    const topic = 'weimob_guide.guider.change';
    const event = 'guiderVidChange';
    const classType = GuiderVidChangeMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class GuiderVidChangeMessage implements \JsonSerializable
{
    /**
    * 商业操作系统id
    * @var int
    */
    private $bosId;

    /**
    * 导购id
    * @var string
    */
    private $guiderId;

    /**
    * 变更时间，格式：yyyy-MM-dd HH:mm:ss
    * @var string
    */
    private $updateTime;

    /**
    * 导购wid，来源于创建导购员接口返回
    * @var int
    */
    private $guiderWid;

    /**
    * 切换前导购vid，来源于组织节点ID
    * @var int
    */
    private $guiderVid;

    /**
    * 切换前导购vid类型
    * @var int
    */
    private $guiderVidType;

    /**
    * 切换后导购Vid，来源于组织节点ID
    * @var int
    */
    private $newGuiderVid;

    /**
    * 切换后导购vid类型
    * @var int
    */
    private $newGuiderVidType;

    /**
    * 切换后的导购Id，来源于新增导购接口返回；导购员在不同的门店时，此值不同
    * @var string
    */
    private $newGuiderId;

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
    * @param int $bosId
    */
    public function setBosId(?int $bosId)
    {
        $this->bosId = $bosId;
    }

    /**
    * @return int
    */
    public function getBosId(): ?int
    {
        return $this->bosId;
    }

    /**
    * @param string $guiderId
    */
    public function setGuiderId(?string $guiderId)
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
    public function setUpdateTime(?string $updateTime)
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
    public function setGuiderWid(?int $guiderWid)
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
    public function setGuiderVid(?int $guiderVid)
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
    public function setGuiderVidType(?int $guiderVidType)
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
    * @param int $newGuiderVid
    */
    public function setNewGuiderVid(?int $newGuiderVid)
    {
        $this->newGuiderVid = $newGuiderVid;
    }

    /**
    * @return int
    */
    public function getNewGuiderVid(): ?int
    {
        return $this->newGuiderVid;
    }

    /**
    * @param int $newGuiderVidType
    */
    public function setNewGuiderVidType(?int $newGuiderVidType)
    {
        $this->newGuiderVidType = $newGuiderVidType;
    }

    /**
    * @return int
    */
    public function getNewGuiderVidType(): ?int
    {
        return $this->newGuiderVidType;
    }

    /**
    * @param string $newGuiderId
    */
    public function setNewGuiderId(?string $newGuiderId)
    {
        $this->newGuiderId = $newGuiderId;
    }

    /**
    * @return string
    */
    public function getNewGuiderId(): ?string
    {
        return $this->newGuiderId;
    }

    /**
    * @param int $sourceProductId
    */
    public function setSourceProductId(?int $sourceProductId)
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
    public function setSourceProductInstanceId(?int $sourceProductInstanceId)
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

