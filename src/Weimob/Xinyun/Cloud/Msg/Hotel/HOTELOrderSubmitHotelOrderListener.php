<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Hotel;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 482
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface HOTELOrderSubmitHotelOrderListener
{
    const topic = 'HOTEL_Order';
    const event = 'submitHotelOrder';
    const classType = SubmitHotelOrderMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class SubmitHotelOrderMessage implements \JsonSerializable
{
    /**
     * 房型名称
     * @var string
     */
    private $roomTypeName;

    /**
     * 入住时间
     * @var string
     */
    private $checkInTime;

    /**
     * 离店时间
     * @var string
     */
    private $checkOutTime;

    /**
     * 实付金额
     * @var string
     */
    private $roomCharge;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * @param string $roomTypeName
     */
    public function setRoomTypeName(?string $roomTypeName): void
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
     * @param string $checkInTime
     */
    public function setCheckInTime(?string $checkInTime): void
    {
        $this->checkInTime = $checkInTime;
    }

    /**
     * @return string
     */
    public function getCheckInTime(): ?string
    {
        return $this->checkInTime;
    }

    /**
     * @param string $checkOutTime
     */
    public function setCheckOutTime(?string $checkOutTime): void
    {
        $this->checkOutTime = $checkOutTime;
    }

    /**
     * @return string
     */
    public function getCheckOutTime(): ?string
    {
        return $this->checkOutTime;
    }

    /**
     * @param string $roomCharge
     */
    public function setRoomCharge(?string $roomCharge): void
    {
        $this->roomCharge = $roomCharge;
    }

    /**
     * @return string
     */
    public function getRoomCharge(): ?string
    {
        return $this->roomCharge;
    }

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

