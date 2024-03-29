<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Hotel;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 2,342
 * @author weimobcloud
 * @create 2023-5-29
 */
interface HOTELRefundCancelRefundListener
{
    const topic = 'HOTEL_Refund';
    const event = 'cancelRefund';
    const classType = CancelRefundMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class CancelRefundMessage implements \JsonSerializable
{
    /**
     * orderNo
     * @var string
     */
    private $orderNo;

    /**
     * refundNo
     * @var string
     */
    private $refundNo;

    /**
     * storeId
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
     * @param string $refundNo
     */
    public function setRefundNo(?string $refundNo): void
    {
        $this->refundNo = $refundNo;
    }

    /**
     * @return string
     */
    public function getRefundNo(): ?string
    {
        return $this->refundNo;
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

