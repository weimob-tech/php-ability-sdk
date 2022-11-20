<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Tour;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,038
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface TourOrderCreateRightsListener
{
    const topic = 'tour_order';
    const event = 'createRights';
    const classType = CreateRightsMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
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
    * @param string $rightNo
    */
    public function setRightNo(?string $rightNo)
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

