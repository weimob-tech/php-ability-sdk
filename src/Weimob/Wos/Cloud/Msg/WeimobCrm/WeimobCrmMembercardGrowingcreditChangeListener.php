<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,282
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobCrmMembercardGrowingcreditChangeListener
{
    const topic = 'weimob_crm.membercard.growingcredit';
    const event = 'change';
    const classType = ChangeMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ChangeMessage implements \JsonSerializable
{
    /**
    * 变更原因
    * @var string
    */
    private $changeReason;

    /**
    * 变更时间（时间戳类型）
    * @var int
    */
    private $changeTime;

    /**
    * 客户编号ID
    * @var int
    */
    private $wid;

    /**
    * 修改的成长值，整数类型，正数表示增加成长值，负数表示减少成长值
    * @var int
    */
    private $changeGrowth;

    /**
    * 会员方案ID
    * @var int
    */
    private $membershipPlanId;

    /**
    * @param string $changeReason
    */
    public function setChangeReason(?string $changeReason)
    {
        $this->changeReason = $changeReason;
    }

    /**
    * @return string
    */
    public function getChangeReason(): ?string
    {
        return $this->changeReason;
    }

    /**
    * @param int $changeTime
    */
    public function setChangeTime(?int $changeTime)
    {
        $this->changeTime = $changeTime;
    }

    /**
    * @return int
    */
    public function getChangeTime(): ?int
    {
        return $this->changeTime;
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

    /**
    * @param int $changeGrowth
    */
    public function setChangeGrowth(?int $changeGrowth)
    {
        $this->changeGrowth = $changeGrowth;
    }

    /**
    * @return int
    */
    public function getChangeGrowth(): ?int
    {
        return $this->changeGrowth;
    }

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

