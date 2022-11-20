<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,311
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface WeimobCrmCustomerChangeListener
{
    const topic = 'weimob_crm.customer';
    const event = 'change';
    const classType = ChangeMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ChangeMessage implements \JsonSerializable
{
    /**
     * 客户wid
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

