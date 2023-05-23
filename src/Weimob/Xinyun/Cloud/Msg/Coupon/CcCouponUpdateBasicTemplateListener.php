<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Coupon;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 3,958
 * @author weimobcloud
 * @create 2023-5-23
 */
interface CcCouponUpdateBasicTemplateListener
{
    const topic = 'cc_coupon';
    const event = 'updateBasicTemplate';
    const classType = UpdateBasicTemplateMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateBasicTemplateMessage implements \JsonSerializable
{
    /**
     * 业务请求参数
     * @var CcCouponUpdateBasicTemplateParams
     */
    private $params;

    /**
     * @param CcCouponUpdateBasicTemplateParams $params
     */
    public function setParams(?CcCouponUpdateBasicTemplateParams $params): void
    {
        $this->params = $params;
    }

    /**
     * @return CcCouponUpdateBasicTemplateParams
     */
    public function getParams(): ?CcCouponUpdateBasicTemplateParams
    {
        return $this->params;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class CcCouponUpdateBasicTemplateParams implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

