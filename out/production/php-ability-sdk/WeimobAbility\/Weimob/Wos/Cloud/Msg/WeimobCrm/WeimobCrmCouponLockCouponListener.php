<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,346
 * @author weimobcloud
 * @create 2023-5-23
 */
interface WeimobCrmCouponLockCouponListener
{
    const topic = 'weimob_crm.coupon';
    const event = 'lockCoupon';
    const classType = LockCouponMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class LockCouponMessage implements \JsonSerializable
{
    /**
     * 用户id
     * @var int
     */
    private $wid;

    /**
     * 优惠券码
     * @var string
     */
    private $code;

    /**
     * 请求渠道，weimob-saas-coupon：微盟；weimob-open-api:开放平台
     * @var string
     */
    private $saasChannel;

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

