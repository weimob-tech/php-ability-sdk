<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,350
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobCrmCouponExpireCouponListener
{
    const topic = 'weimob_crm.coupon';
    const event = 'expireCoupon';
    const classType = ExpireCouponMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ExpireCouponMessage implements \JsonSerializable
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
    * 券id
    * @var int
    */
    private $couponTemplateId;

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
    * @param int $wid
    */
    public function setWid(?int $wid)
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
    * @param int $subScene
    */
    public function setSubScene(?int $subScene)
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
    public function setSubSceneId(?string $subSceneId)
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

