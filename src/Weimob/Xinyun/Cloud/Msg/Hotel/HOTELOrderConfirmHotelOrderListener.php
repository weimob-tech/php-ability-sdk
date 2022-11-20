<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Hotel;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 483
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface HOTELOrderConfirmHotelOrderListener
{
    const topic = 'HOTEL_Order';
    const event = 'confirmHotelOrder';
    const classType = ConfirmHotelOrderMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ConfirmHotelOrderMessage implements \JsonSerializable
{
    /**
    * 房型名称
    * @var string
    */
    private $roomTypeName;

    /**
    * 房间号
    * @var string
    */
    private $roomNumber;

    /**
    * 订单号
    * @var string
    */
    private $orderNo;

    /**
    * @param string $roomTypeName
    */
    public function setRoomTypeName(?string $roomTypeName)
    {
        $this->roomTypeName = $roomTypeName;
    }

    /**
    * @return string
    */
    public function getRoomTypeName(): ?string
    {
        return $this->roomTypeName;
    }

    /**
    * @param string $roomNumber
    */
    public function setRoomNumber(?string $roomNumber)
    {
        $this->roomNumber = $roomNumber;
    }

    /**
    * @return string
    */
    public function getRoomNumber(): ?string
    {
        return $this->roomNumber;
    }

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

