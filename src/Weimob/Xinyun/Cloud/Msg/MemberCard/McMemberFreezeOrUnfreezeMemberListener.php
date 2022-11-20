<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\MemberCard;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 623
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface McMemberFreezeOrUnfreezeMemberListener
{
    const topic = 'mc_member';
    const event = 'freezeOrUnfreezeMember';
    const classType = FreezeOrUnfreezeMemberMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class FreezeOrUnfreezeMemberMessage implements \JsonSerializable
{
    /**
    * 微盟用户wid，客户唯一标识
    * @var int
    */
    private $wid;

    /**
    * 会员卡号
    * @var string
    */
    private $memberCode;

    /**
    * 1：冻结 2：解冻
    * @var int
    */
    private $changeType;

    /**
    * 会员卡类型
    * @var int
    */
    private $type;

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
    * @param string $memberCode
    */
    public function setMemberCode(?string $memberCode)
    {
        $this->memberCode = $memberCode;
    }

    /**
    * @return string
    */
    public function getMemberCode(): ?string
    {
        return $this->memberCode;
    }

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
    * @param int $type
    */
    public function setType(?int $type)
    {
        $this->type = $type;
    }

    /**
    * @return int
    */
    public function getType(): ?int
    {
        return $this->type;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

