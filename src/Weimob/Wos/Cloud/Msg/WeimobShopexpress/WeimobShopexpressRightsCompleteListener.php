<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobShopexpress;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,337
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobShopexpressRightsCompleteListener
{
    const topic = 'weimob_shopexpress.rights';
    const event = 'complete';
    const classType = CompleteMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CompleteMessage implements \JsonSerializable
{
    /**
    * 订单编号
    * @var string
    */
    private $orderNo;

    /**
    * 售后单号
    * @var string
    */
    private $aftersaleNo;

    /**
    * @param string $orderNo
    */
    public function setOrderNo(?string $orderNo)
    {
        $this->orderNo = $orderNo;
    }

    /**
    * @return string
    */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
    * @param string $aftersaleNo
    */
    public function setAftersaleNo(?string $aftersaleNo)
    {
        $this->aftersaleNo = $aftersaleNo;
    }

    /**
    * @return string
    */
    public function getAftersaleNo(): ?string
    {
        return $this->aftersaleNo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

