<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,360
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobCrmCouponUpdateBasicCouponTemplateListener
{
    const topic = 'weimob_crm.coupon';
    const event = 'updateBasicCouponTemplate';
    const classType = UpdateBasicCouponTemplateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateBasicCouponTemplateMessage implements \JsonSerializable
{
    /**
    * 券模板id
    * @var int
    */
    private $couponTemplateId;

    /**
    * 券名称
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
    * @param string $name
    */
    public function setName(?string $name)
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
    public function setSaasChannel(?string $saasChannel)
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

