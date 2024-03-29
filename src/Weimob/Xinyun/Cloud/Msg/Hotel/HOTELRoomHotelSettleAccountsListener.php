<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Hotel;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,778
 * @author weimobcloud
 * @create 2023-5-29
 */
interface HOTELRoomHotelSettleAccountsListener
{
    const topic = 'HOTEL_Room';
    const event = 'hotelSettleAccounts';
    const classType = HotelSettleAccountsMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class HotelSettleAccountsMessage implements \JsonSerializable
{
    /**
     * 住宿单号
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
     * @param string $pid
     */
    public function setPid(?string $pid): void
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
    public function setStoreId(?string $storeId): void
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

