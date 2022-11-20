<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,349
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobCrmCouponPresentCouponListener
{
    const topic = 'weimob_crm.coupon';
    const event = 'presentCoupon';
    const classType = PresentCouponMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PresentCouponMessage implements \JsonSerializable
{
    /**
    * 优惠券码
    * @var string
    */
    private $code;

    /**
    * 转赠人wid
    * @var int
    */
    private $fromWid;

    /**
    * 受赠人wid
    * @var int
    */
    private $toWid;

    /**
    * 优惠券ID
    * @var int
    */
    private $couponTemplateId;

    /**
    * 转赠类型：0-转赠中；1-已转赠；2- 取消转赠
    * @var int
    */
    private $statusType;

    /**
    * @param string $code
    */
    public function setCode(?string $code)
    {
        $this->code = $code;
    }

    /**
    * @return string
    */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
    * @param int $fromWid
    */
    public function setFromWid(?int $fromWid)
    {
        $this->fromWid = $fromWid;
    }

    /**
    * @return int
    */
    public function getFromWid(): ?int
    {
        return $this->fromWid;
    }

    /**
    * @param int $toWid
    */
    public function setToWid(?int $toWid)
    {
        $this->toWid = $toWid;
    }

    /**
    * @return int
    */
    public function getToWid(): ?int
    {
        return $this->toWid;
    }

    /**
    * @param int $couponTemplateId
    */
    public function setCouponTemplateId(?int $couponTemplateId)
    {
        $this->couponTemplateId = $couponTemplateId;
    }

    /**
    * @return int
    */
    public function getCouponTemplateId(): ?int
    {
        return $this->couponTemplateId;
    }

    /**
    * @param int $statusType
    */
    public function setStatusType(?int $statusType)
    {
        $this->statusType = $statusType;
    }

    /**
    * @return int
    */
    public function getStatusType(): ?int
    {
        return $this->statusType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

