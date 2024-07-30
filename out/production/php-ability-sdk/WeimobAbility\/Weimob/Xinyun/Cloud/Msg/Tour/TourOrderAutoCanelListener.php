<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Tour;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,034
 * @author weimobcloud
 * @create 2023-5-29
 */
interface TourOrderAutoCanelListener
{
    const topic = 'tour_order';
    const event = 'autoCanel';
    const classType = AutoCanelMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class AutoCanelMessage implements \JsonSerializable
{
    /**
     * 订单编号
     * @var string
     */
    private $orderNo;

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
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

