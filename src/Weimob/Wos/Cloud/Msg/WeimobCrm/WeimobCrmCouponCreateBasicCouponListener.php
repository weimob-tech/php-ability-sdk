<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,361
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface WeimobCrmCouponCreateBasicCouponListener
{
    const topic = 'weimob_crm.coupon';
    const event = 'createBasicCoupon';
    const classType = CreateBasicCouponMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateBasicCouponMessage implements \JsonSerializable
{
    /**
     * 券模板id
     * @var int
     */
    private $couponTemplateId;

    /**
     * 优惠券名称
     * @var string
     */
    private $name;

    /**
     * 请求渠道
     * @var string
     */
    private $saasChannel;

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
     * @param string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
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

