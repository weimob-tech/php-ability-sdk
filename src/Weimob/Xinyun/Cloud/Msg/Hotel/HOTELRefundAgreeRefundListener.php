<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Hotel;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 2,341
 * @author weimobcloud
 * @create 2023-5-29
 */
interface HOTELRefundAgreeRefundListener
{
    const topic = 'HOTEL_Refund';
    const event = 'agreeRefund';
    const classType = AgreeRefundMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class AgreeRefundMessage implements \JsonSerializable
{
    /**
     * 门店id
     * @var int
     */
    private $storeId;

    /**
     * 售后单号
     * @var int
     */
    private $refundNo;

    /**
     * 关联订单号
     * @var string
     */
    private $orderNo;

    /**
     * @param int $storeId
     */
    public function setStoreId(?int $storeId): void
    {
        $this->storeId = $storeId;
    }

    /**
     * @return int
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }

    /**
     * @param int $refundNo
     */
    public function setRefundNo(?int $refundNo): void
    {
        $this->refundNo = $refundNo;
    }

    /**
     * @return int
     */
    public function getRefundNo(): ?int
    {
        return $this->refundNo;
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

