<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,281
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobCrmMembercardPlanChangeListener
{
    const topic = 'weimob_crm.membercard.plan';
    const event = 'change';
    const classType = ChangeMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ChangeMessage implements \JsonSerializable
{
    /**
    * 会员方案ID
    * @var int
    */
    private $membershipPlanId;

    /**
    * @param int $membershipPlanId
    */
    public function setMembershipPlanId(?int $membershipPlanId)
    {
        $this->membershipPlanId = $membershipPlanId;
    }

    /**
    * @return int
    */
    public function getMembershipPlanId(): ?int
    {
        return $this->membershipPlanId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

