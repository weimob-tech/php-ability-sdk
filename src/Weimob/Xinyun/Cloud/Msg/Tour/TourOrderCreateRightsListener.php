<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Tour;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,038
 * @author weimobcloud
 * @create 2023-5-29
 */
interface TourOrderCreateRightsListener
{
    const topic = 'tour_order';
    const event = 'createRights';
    const classType = CreateRightsMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class CreateRightsMessage implements \JsonSerializable
{
    /**
     * 订单编号
     * @var string
     */
    private $orderNo;

    /**
     * 维权单号
     * @var string
     */
    private $rightNo;

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

    /**
     * @param string $rightNo
     */
    public function setRightNo(?string $rightNo): void
    {
        $this->rightNo = $rightNo;
    }

    /**
     * @return string
     */
    public function getRightNo(): ?string
    {
        return $this->rightNo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

