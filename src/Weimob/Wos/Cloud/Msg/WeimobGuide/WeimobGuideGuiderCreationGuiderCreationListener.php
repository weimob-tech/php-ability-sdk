<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,242
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobGuideGuiderCreationGuiderCreationListener
{
    const topic = 'weimob_guide.guider.creation';
    const event = 'guiderCreation';
    const classType = GuiderCreationMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class GuiderCreationMessage implements \JsonSerializable
{
    /**
    * 商业操作系统ID
    * @var int
    */
    private $bosId;

    /**
    * 导购所属门店vid，来源于组织节点ID
    * @var int
    */
    private $guiderVid;

    /**
    * 导购Wid
    * @var int
    */
    private $guiderWid;

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
    * 成为导购时间，格式：yyyy-MM-dd HH:mm:ss
    * @var string
    */
    private $createTime;

    /**
    * 导购姓名
    * @var string
    */
    private $guiderName;

    /**
    * 导购Id
    * @var string
    */
    private $guiderId;

    /**
    * 导购手机号
    * @var string
    */
    private $guiderPhone;

    /**
    * 导购所属vid类型
    * @var int
    */
    private $guiderVidType;

    /**
    * 导购启停用状态，0:停用,1:启用
    * @var int
    */
    private $isUsed;

    /**
    * 是否专属客服：0:专属客服-仅主动服务，1:专属客服-专属服务, 2:非专属客服（默认）
    * @var int
    */
    private $isExclusiveCus;

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

    /**
    * @param string $createTime
    */
    public function setCreateTime(?string $createTime)
    {
        $this->createTime = $createTime;
    }

    /**
    * @return string
    */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
    * @param string $guiderName
    */
    public function setGuiderName(?string $guiderName)
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
    * @param string $guiderPhone
    */
    public function setGuiderPhone(?string $guiderPhone)
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
    * @param int $isUsed
    */
    public function setIsUsed(?int $isUsed)
    {
        $this->isUsed = $isUsed;
    }

    /**
    * @return int
    */
    public function getIsUsed(): ?int
    {
        return $this->isUsed;
    }

    /**
    * @param int $isExclusiveCus
    */
    public function setIsExclusiveCus(?int $isExclusiveCus)
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

