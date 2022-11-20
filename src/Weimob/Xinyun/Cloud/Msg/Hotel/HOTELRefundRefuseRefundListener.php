<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Hotel;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 2,340
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface HOTELRefundRefuseRefundListener
{
    const topic = 'HOTEL_Refund';
    const event = 'refuseRefund';
    const classType = RefuseRefundMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class RefuseRefundMessage implements \JsonSerializable
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
    * @param string $refundNo
    */
    public function setRefundNo(?string $refundNo)
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

