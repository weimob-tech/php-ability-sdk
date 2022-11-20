<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Wangpu;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,295
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface WPOrderAddListener
{
    const topic = 'WP_order';
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
     * 订单创建时间
     * @var string
     */
    private $create_time;

    /**
     * 订单来源
     * @var string
     */
    private $order_source;

    /**
     * @param string $order_no
     */
    public function setOrderNo(?string $order_no): void
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
    public function setCreateTime(?string $create_time): void
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
     * @param string $order_source
     */
    public function setOrderSource(?string $order_source): void
    {
        $this->order_source = $order_source;
    }

    /**
     * @return string
     */
    public function getOrderSource(): ?string
    {
        return $this->order_source;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

