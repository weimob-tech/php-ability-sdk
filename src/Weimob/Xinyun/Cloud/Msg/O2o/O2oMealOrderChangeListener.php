<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\O2o;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,296
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface O2oMealOrderChangeListener
{
    const topic = 'o2o_meal_order';
    const event = 'change';
    const classType = ChangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ChangeMessage implements \JsonSerializable
{
    /**
    * 门店Id
    * @var int
    */
    private $storeId;

    /**
    * 订单Id
    * @var int
    */
    private $orderId;

    /**
    * 订单号
    * @var string
    */
    private $orderNo;

    /**
    * 订单状态，0：未处理；1：已确认；2：已完成；3：已取消；4：已拒绝；5：已作废
    * @var int
    */
    private $orderStatus;

    /**
    * 变更时间，单位毫秒
    * @var int
    */
    private $updateTime;

    /**
    * 门店第三方编号
    * @var string
    */
    private $storeChannelId;

    /**
    * @param int $storeId
    */
    public function setStoreId(?int $storeId)
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
    * @param int $orderId
    */
    public function setOrderId(?int $orderId)
    {
        $this->orderId = $orderId;
    }

    /**
    * @return int
    */
    public function getOrderId(): ?int
    {
        return $this->orderId;
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

    /**
    * @param int $orderStatus
    */
    public function setOrderStatus(?int $orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    /**
    * @return int
    */
    public function getOrderStatus(): ?int
    {
        return $this->orderStatus;
    }

    /**
    * @param int $updateTime
    */
    public function setUpdateTime(?int $updateTime)
    {
        $this->updateTime = $updateTime;
    }

    /**
    * @return int
    */
    public function getUpdateTime(): ?int
    {
        return $this->updateTime;
    }

    /**
    * @param string $storeChannelId
    */
    public function setStoreChannelId(?string $storeChannelId)
    {
        $this->storeChannelId = $storeChannelId;
    }

    /**
    * @return string
    */
    public function getStoreChannelId(): ?string
    {
        return $this->storeChannelId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

