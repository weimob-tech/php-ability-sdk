<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\MemberCard;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,446
 * @author weimobcloud
 * @create 2023-5-29
 */
interface McMemberBecomeCustomerListener
{
    const topic = 'mc_member';
    const event = 'becomeCustomer';
    const classType = BecomeCustomerMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class BecomeCustomerMessage implements \JsonSerializable
{
    /**
     * 用户wid
     * @var int
     */
    private $wid;

    /**
     * @param int $wid
     */
    public function setWid(?int $wid): void
    {
        $this->wid = $wid;
    }

    /**
     * @return int
     */
    public function getWid(): ?int
    {
        return $this->wid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

