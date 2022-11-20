<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,343
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface WeimobCrmCouponUpdateCouponTemplateStatusListener
{
    const topic = 'weimob_crm.coupon';
    const event = 'updateCouponTemplateStatus';
    const classType = UpdateCouponTemplateStatusMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateCouponTemplateStatusMessage implements \JsonSerializable
{
    /**
     * 优惠券ID
     * @var int
     */
    private $couponTemplateId;

    /**
     * 券状态：0-不可用；1-可用；2-已过期；3；暂停投放
     * @var int
     */
    private $status;

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
     * @param int $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

