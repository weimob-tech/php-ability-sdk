<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Wangpu;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 174
 * @author weimobcloud
 * @create 2023-5-29
 */
interface WpCustomerAddmemberListener
{
    const topic = 'wp_customer';
    const event = 'addmember';
    const classType = AddmemberMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class AddmemberMessage implements \JsonSerializable
{
    /**
     * 变更时间
     * @var int
     */
    private $change_time;

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

