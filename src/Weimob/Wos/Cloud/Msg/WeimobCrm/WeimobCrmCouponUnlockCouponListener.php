<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,347
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface WeimobCrmCouponUnlockCouponListener
{
    const topic = 'weimob_crm.coupon';
    const event = 'unlockCoupon';
    const classType = UnlockCouponMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UnlockCouponMessage implements \JsonSerializable
{
    /**
     * 优惠券码
     * @var string
     */
    private $code;

    /**
     * 用户wid
     * @var int
     */
    private $wid;

    /**
     * 券模板id
     * @var int
     */
    private $couponTemplateId;

    /**
     * 请求渠道
     * @var string
     */
    private $saasChannel;

    /**
     * @param string $code
     */
    public function setCode(?string $code): void
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

    /**
     * @param int $couponTemplateId
     */
    public function setCouponTemplateId(?int $couponTemplateId): void
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
     * @param string $saasChannel
     */
    public function setSaasChannel(?string $saasChannel): void
    {
        $this->saasChannel = $saasChannel;
    }

    /**
     * @return string
     */
    public function getSaasChannel(): ?string
    {
        return $this->saasChannel;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

