<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Wangpu;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 178
 * @author weimobcloud
 * @create 2023-5-23
 */
interface WpCustomerPointsettingchangeListener
{
    const topic = 'wp_customer';
    const event = 'pointsettingchange';
    const classType = PointsettingchangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PointsettingchangeMessage implements \JsonSerializable
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

