<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Wangpu;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,268
 * @author weimobcloud
 * @create 2023-5-23
 */
interface WpCustomerCustomerinfochangeListener
{
    const topic = 'wp_customer';
    const event = 'customerinfochange';
    const classType = CustomerinfochangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CustomerinfochangeMessage implements \JsonSerializable
{
    /**
     * 客户编号列表
     * @var array
     */
    private $customer_nos;

    /**
     * 变更时间
     * @var int
     */
    private $change_time;

    /**
     * @param array $customer_nos
     */
    public function setCustomerNos(?array $customer_nos): void
    {
        $this->customer_nos = $customer_nos;
    }

    /**
     * @return array
     */
    public function getCustomerNos(): ?array
    {
        return $this->customer_nos;
    }

    /**
     * @param int $change_time
     */
    public function setChangeTime(?int $change_time): void
    {
        $this->change_time = $change_time;
    }

    /**
     * @return int
     */
    public function getChangeTime(): ?int
    {
        return $this->change_time;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

