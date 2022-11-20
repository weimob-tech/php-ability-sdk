<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,310
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobCrmCustomerStatusChangeListener
{
    const topic = 'weimob_crm.customer.status';
    const event = 'change';
    const classType = ChangeMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ChangeMessage implements \JsonSerializable
{
    /**
    * 状态类型。可选值：1（解冻），3（冻结）
    * @var int
    */
    private $changeType;

    /**
    * 用户ID
    * @var int
    */
    private $wid;

    /**
    * @param int $changeType
    */
    public function setChangeType(?int $changeType)
    {
        $this->changeType = $changeType;
    }

    /**
    * @return int
    */
    public function getChangeType(): ?int
    {
        return $this->changeType;
    }

    /**
    * @param int $wid
    */
    public function setWid(?int $wid)
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

