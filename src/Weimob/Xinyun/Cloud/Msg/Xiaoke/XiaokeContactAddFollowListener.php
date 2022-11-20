<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,856
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface XiaokeContactAddFollowListener
{
    const topic = 'xiaoke_contact';
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
     * 语音url地址,分号隔开
     * @var string
     */
    private $voiceAddress;

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
     * 文件地址
     * @var string
     */
    private $fileAddress;

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
    public function setBusinessId(?int $businessId): void
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
    public function setBehavior(?string $behavior): void
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
    public function setOpType(?int $opType): void
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
    public function setOpContentText(?string $opContentText): void
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
    public function setOpContent(?string $opContent): void
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
    public function setRemark(?string $remark): void
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
    public function setOpTime(?int $opTime): void
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
    public function setImgAddress(?string $imgAddress): void
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
     * @param string $voiceAddress
     */
    public function setVoiceAddress(?string $voiceAddress): void
    {
        $this->voiceAddress = $voiceAddress;
    }

    /**
     * @return string
     */
    public function getVoiceAddress(): ?string
    {
        return $this->voiceAddress;
    }

    /**
     * @param string $checkInAddress
     */
    public function setCheckInAddress(?string $checkInAddress): void
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
    public function setLongitude(?float $longitude): void
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
    public function setLatitude(?float $latitude): void
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
     * @param string $fileAddress
     */
    public function setFileAddress(?string $fileAddress): void
    {
        $this->fileAddress = $fileAddress;
    }

    /**
     * @return string
     */
    public function getFileAddress(): ?string
    {
        return $this->fileAddress;
    }

    /**
     * @param string $clueDescription
     */
    public function setClueDescription(?string $clueDescription): void
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
    public function setVoiceText(?string $voiceText): void
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

