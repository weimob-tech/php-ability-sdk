<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Wangpu;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,266
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WPReturnOrderAddListener
{
    const topic = 'WP_returnOrder';
    const event = 'add';
    const classType = AddMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class AddMessage implements \JsonSerializable
{
    /**
    * 订单编号
    * @var string
    */
    private $order_no;

    /**
    * 维权单创建时间
    * @var string
    */
    private $create_time;

    /**
    * 维权单编号
    * @var string
    */
    private $return_order_no;

    /**
    * @param string $order_no
    */
    public function setOrderNo(?string $order_no)
    {
        $this->order_no = $order_no;
    }

    /**
    * @return string
    */
    public function getOrderNo(): ?string
    {
        return $this->order_no;
    }

    /**
    * @param string $create_time
    */
    public function setCreateTime(?string $create_time)
    {
        $this->create_time = $create_time;
    }

    /**
    * @return string
    */
    public function getCreateTime(): ?string
    {
        return $this->create_time;
    }

    /**
    * @param string $return_order_no
    */
    public function setReturnOrderNo(?string $return_order_no)
    {
        $this->return_order_no = $return_order_no;
    }

    /**
    * @return string
    */
    public function getReturnOrderNo(): ?string
    {
        return $this->return_order_no;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

