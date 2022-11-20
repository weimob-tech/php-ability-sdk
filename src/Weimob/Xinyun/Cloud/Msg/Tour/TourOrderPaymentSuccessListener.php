<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Tour;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,036
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface TourOrderPaymentSuccessListener
{
    const topic = 'tour_order';
    const event = 'paymentSuccess';
    const classType = PaymentSuccessMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PaymentSuccessMessage implements \JsonSerializable
{
    /**
    * 订单编号
    * @var string
    */
    private $orderNo;

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

