<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,444
 * @author weimobcloud
 * @create 2023-5-29
 */
interface EcOrderUpdateOrderAmountListener
{
    const topic = 'ec_order';
    const event = 'updateOrderAmount';
    const classType = UpdateOrderAmountMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class UpdateOrderAmountMessage implements \JsonSerializable
{
    /**
     * 消息体-订单号
     * @var int
     */
    private $orderNo;

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

