<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,758
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface XiaokeClueAddFollowListener
{
    const topic = 'xiaoke_clue';
    const event = 'addFollow';
    const classType = AddFollowMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class AddFollowMessage implements \JsonSerializable
{
    /**
    * 关联的业务对象id
    * @var int
    */
    private $businessId;

    /**
    * 行为
    * @var string
    */
    private $behavior;

    /**
    * 8.写跟进，41.用户行为
    * @var int
    */
    private $opType;

    /**
    * 内容
    * @var string
    */
    private $opContentText;

    /**
    * 线索操作日志
    * @var string
    */
    private $opContent;

    /**
    * 备注信息
    * @var string
    */
    private $remark;

    /**
    * 操作时间
    * @var int
    */
    private $opTime;

    /**
    * 图片url地址,分号隔开
    * @var string
    */
    private $imgAddress;

    /**
    * 签到地址
    * @var string
    */
    private $checkInAddress;

    /**
    * 经度
    * @var float
    */
    private $longitude;

    /**
    * 纬度
    * @var float
    */
    private $latitude;

    /**
    * 线索描述
    * @var string
    */
    private $clueDescription;

    /**
    * 语音文字
    * @var string
    */
    private $voiceText;

    /**
    * @param int $businessId
    */
    public function setBusinessId(?int $businessId)
    {
        $this->businessId = $businessId;
    }

    /**
    * @return int
    */
    public function getBusinessId(): ?int
    {
        return $this->businessId;
    }

    /**
    * @param string $behavior
    */
    public function setBehavior(?string $behavior)
    {
        $this->behavior = $behavior;
    }

    /**
    * @return string
    */
    public function getBehavior(): ?string
    {
        return $this->behavior;
    }

    /**
    * @param int $opType
    */
    public function setOpType(?int $opType)
    {
        $this->opType = $opType;
    }

    /**
    * @return int
    */
    public function getOpType(): ?int
    {
        return $this->opType;
    }

    /**
    * @param string $opContentText
    */
    public function setOpContentText(?string $opContentText)
    {
        $this->opContentText = $opContentText;
    }

    /**
    * @return string
    */
    public function getOpContentText(): ?string
    {
        return $this->opContentText;
    }

    /**
    * @param string $opContent
    */
    public function setOpContent(?string $opContent)
    {
        $this->opContent = $opContent;
    }

    /**
    * @return string
    */
    public function getOpContent(): ?string
    {
        return $this->opContent;
    }

    /**
    * @param string $remark
    */
    public function setRemark(?string $remark)
    {
        $this->remark = $remark;
    }

    /**
    * @return string
    */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
    * @param int $opTime
    */
    public function setOpTime(?int $opTime)
    {
        $this->opTime = $opTime;
    }

    /**
    * @return int
    */
    public function getOpTime(): ?int
    {
        return $this->opTime;
    }

    /**
    * @param string $imgAddress
    */
    public function setImgAddress(?string $imgAddress)
    {
        $this->imgAddress = $imgAddress;
    }

    /**
    * @return string
    */
    public function getImgAddress(): ?string
    {
        return $this->imgAddress;
    }

    /**
    * @param string $checkInAddress
    */
    public function setCheckInAddress(?string $checkInAddress)
    {
        $this->checkInAddress = $checkInAddress;
    }

    /**
    * @return string
    */
    public function getCheckInAddress(): ?string
    {
        return $this->checkInAddress;
    }

    /**
    * @param float $longitude
    */
    public function setLongitude(?float $longitude)
    {
        $this->longitude = $longitude;
    }

    /**
    * @return float
    */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    /**
    * @param float $latitude
    */
    public function setLatitude(?float $latitude)
    {
        $this->latitude = $latitude;
    }

    /**
    * @return float
    */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
    * @param string $clueDescription
    */
    public function setClueDescription(?string $clueDescription)
    {
        $this->clueDescription = $clueDescription;
    }

    /**
    * @return string
    */
    public function getClueDescription(): ?string
    {
        return $this->clueDescription;
    }

    /**
    * @param string $voiceText
    */
    public function setVoiceText(?string $voiceText)
    {
        $this->voiceText = $voiceText;
    }

    /**
    * @return string
    */
    public function getVoiceText(): ?string
    {
        return $this->voiceText;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

