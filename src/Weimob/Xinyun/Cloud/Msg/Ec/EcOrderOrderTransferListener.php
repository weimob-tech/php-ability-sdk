<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,174
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface EcOrderOrderTransferListener
{
    const topic = 'ec_order';
    const event = 'orderTransfer';
    const classType = OrderTransferMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class OrderTransferMessage implements \JsonSerializable
{
    /**
     * 订单编号
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

