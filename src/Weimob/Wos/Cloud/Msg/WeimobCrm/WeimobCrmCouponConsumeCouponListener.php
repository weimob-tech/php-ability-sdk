<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,341
 * @author weimobcloud
 * @create 2023-5-23
 */
interface WeimobCrmCouponConsumeCouponListener
{
    const topic = 'weimob_crm.coupon';
    const event = 'consumeCoupon';
    const classType = ConsumeCouponMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ConsumeCouponMessage implements \JsonSerializable
{
    /**
     * 用户wid
     * @var int
     */
    private $wid;

    /**
     * 码值
     * @var string
     */
    private $code;

    /**
     * 优惠券ID
     * @var int
     */
    private $couponTemplateId;

    /**
     * 门店id
     * @var int
     */
    private $vid;

    /**
     * 核销场景：1-网店订单；3-app&收银台；7-商城api核销；8-商城买家直接消费；9-买家直接消费
     * @var int
     */
    private $useScene;

    /**
     * 订单号
     * @var int
     */
    private $orderNo;

    /**
     * 核销时间
     * @var int
     */
    private $useTime;

    /**
     * 发券人WID，比如导购WID
     * @var int
     */
    private $sWid;

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
     * @param int $vid
     */
    public function setVid(?int $vid): void
    {
        $this->vid = $vid;
    }

    /**
     * @return int
     */
    public function getVid(): ?int
    {
        return $this->vid;
    }

    /**
     * @param int $useScene
     */
    public function setUseScene(?int $useScene): void
    {
        $this->useScene = $useScene;
    }

    /**
     * @return int
     */
    public function getUseScene(): ?int
    {
        return $this->useScene;
    }

    /**
     * @param int $orderNo
     */
    public function setOrderNo(?int $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }

    /**
     * @param int $useTime
     */
    public function setUseTime(?int $useTime): void
    {
        $this->useTime = $useTime;
    }

    /**
     * @return int
     */
    public function getUseTime(): ?int
    {
        return $this->useTime;
    }

    /**
     * @param int $sWid
     */
    public function setSWid(?int $sWid): void
    {
        $this->sWid = $sWid;
    }

    /**
     * @return int
     */
    public function getSWid(): ?int
    {
        return $this->sWid;
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

