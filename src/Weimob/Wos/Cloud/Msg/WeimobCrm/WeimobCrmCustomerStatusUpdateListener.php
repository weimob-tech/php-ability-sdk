<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,356
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobCrmCustomerStatusUpdateListener
{
    const topic = 'weimob_crm.customer';
    const event = 'statusUpdate';
    const classType = StatusUpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class StatusUpdateMessage implements \JsonSerializable
{
    /**
    * 客户的状态类型。可能出现的状态类型包括:1-解冻;3-冻结。
    * @var int
    */
    private $changeType;

    /**
    * 客户编号，是用户身份的唯一标识。可以通过B端页面客户列表/客户详情找到该编号。
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

