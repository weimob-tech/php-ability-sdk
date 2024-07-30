<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,348
 * @author weimobcloud
 * @create 2023-5-23
 */
interface WeimobCrmCouponCancelCouponListener
{
    const topic = 'weimob_crm.coupon';
    const event = 'cancelCoupon';
    const classType = CancelCouponMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CancelCouponMessage implements \JsonSerializable
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
     * 优惠券ID
     * @var int
     */
    private $couponTemplateId;

    /**
     * 作废类型：1-售后作废；2-直接作废
     * @var int
     */
    private $type;

    /**
     * 领券场景
     * @var int
     */
    private $subScene;

    /**
     * 领券场景ID
     * @var string
     */
    private $subSceneId;

    /**
     * 请求渠道，weimob-saas-coupon：微盟；weimob-open-api:开放平台
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
     * @param int $type
     */
    public function setType(?int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int $subScene
     */
    public function setSubScene(?int $subScene): void
    {
        $this->subScene = $subScene;
    }

    /**
     * @return int
     */
    public function getSubScene(): ?int
    {
        return $this->subScene;
    }

    /**
     * @param string $subSceneId
     */
    public function setSubSceneId(?string $subSceneId): void
    {
        $this->subSceneId = $subSceneId;
    }

    /**
     * @return string
     */
    public function getSubSceneId(): ?string
    {
        return $this->subSceneId;
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

