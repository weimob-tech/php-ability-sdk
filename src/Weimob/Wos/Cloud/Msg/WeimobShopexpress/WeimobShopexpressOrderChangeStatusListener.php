<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobShopexpress;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,339
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobShopexpressOrderChangeStatusListener
{
    const topic = 'weimob_shopexpress.order';
    const event = 'changeStatus';
    const classType = ChangeStatusMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ChangeStatusMessage implements \JsonSerializable
{
    /**
    * 订单编号
    * @var string
    */
    private $orderNo;

    /**
    * 支持的订单状态，包含：1-待付款；2-待发货；3=已发货；5-已关闭；6-已退款
    * @var string
    */
    private $orderStatus;

    /**
    * 订单状态文案，包含：1-待付款；2-待发货；3=已发货；5-已关闭；6-已退款
    * @var string
    */
    private $orderStatusText;

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
    * @param string $orderStatus
    */
    public function setOrderStatus(?string $orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    /**
    * @return string
    */
    public function getOrderStatus(): ?string
    {
        return $this->orderStatus;
    }

    /**
    * @param string $orderStatusText
    */
    public function setOrderStatusText(?string $orderStatusText)
    {
        $this->orderStatusText = $orderStatusText;
    }

    /**
    * @return string
    */
    public function getOrderStatusText(): ?string
    {
        return $this->orderStatusText;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

