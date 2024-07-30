<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,363
 * @author weimobcloud
 * @create 2023-5-23
 */
interface WeimobCrmCouponCreateCouponTemplateListener
{
    const topic = 'weimob_crm.coupon';
    const event = 'createCouponTemplate';
    const classType = CreateCouponTemplateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateCouponTemplateMessage implements \JsonSerializable
{
    /**
     * 优惠券ID
     * @var int
     */
    private $couponTemplateId;

    /**
     * 券名称
     * @var string
     */
    private $name;

    /**
     * 优惠券类型：1-代金券；2-折扣券；3-兑换券；5-随机金额代金券；9-免运费
     * @var int
     */
    private $couponType;

    /**
     * 请求渠道，weimob-saas-coupon：微盟；weimob-open-api:开放平台
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
     * @param int $couponType
     */
    public function setCouponType(?int $couponType): void
    {
        $this->couponType = $couponType;
    }

    /**
     * @return int
     */
    public function getCouponType(): ?int
    {
        return $this->couponType;
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

