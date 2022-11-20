<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Hotel;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 486
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface HOTELRoomCheckInHotelListener
{
    const topic = 'HOTEL_Room';
    const event = 'checkInHotel';
    const classType = CheckInHotelMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CheckInHotelMessage implements \JsonSerializable
{
    /**
    * 订单号
    * @var string
    */
    private $orderNo;

    /**
    * pid
    * @var string
    */
    private $pid;

    /**
    * 门店ID
    * @var string
    */
    private $storeId;

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
    * @param string $pid
    */
    public function setPid(?string $pid)
    {
        $this->pid = $pid;
    }

    /**
    * @return string
    */
    public function getPid(): ?string
    {
        return $this->pid;
    }

    /**
    * @param string $storeId
    */
    public function setStoreId(?string $storeId)
    {
        $this->storeId = $storeId;
    }

    /**
    * @return string
    */
    public function getStoreId(): ?string
    {
        return $this->storeId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

