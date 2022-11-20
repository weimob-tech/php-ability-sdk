<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\MemberCard;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 624
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface McMemberMemberRankChangeListener
{
    const topic = 'mc_member';
    const event = 'memberRankChange';
    const classType = MemberRankChangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class MemberRankChangeMessage implements \JsonSerializable
{
    /**
    * 店铺pid
    * @var int
    */
    private $pid;

    /**
    * 会员唯一标识
    * @var int
    */
    private $wid;

    /**
    * 系统来源
    * @var int
    */
    private $source;

    /**
    * 会员卡号
    * @var string
    */
    private $memberCode;

    /**
    * 变更前会员等级
    * @var int
    */
    private $oldRankId;

    /**
    * 变更后会员等级
    * @var int
    */
    private $newRankId;

    /**
    * 变更原因
    * @var string
    */
    private $changeReason;

    /**
    * 变更时间
    * @var int
    */
    private $changeTime;

    /**
    * 会员卡类型
    * @var int
    */
    private $type;

    /**
    * @param int $pid
    */
    public function setPid(?int $pid)
    {
        $this->pid = $pid;
    }

    /**
    * @return int
    */
    public function getPid(): ?int
    {
        return $this->pid;
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
    * @param int $source
    */
    public function setSource(?int $source)
    {
        $this->source = $source;
    }

    /**
    * @return int
    */
    public function getSource(): ?int
    {
        return $this->source;
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
    * @param int $oldRankId
    */
    public function setOldRankId(?int $oldRankId)
    {
        $this->oldRankId = $oldRankId;
    }

    /**
    * @return int
    */
    public function getOldRankId(): ?int
    {
        return $this->oldRankId;
    }

    /**
    * @param int $newRankId
    */
    public function setNewRankId(?int $newRankId)
    {
        $this->newRankId = $newRankId;
    }

    /**
    * @return int
    */
    public function getNewRankId(): ?int
    {
        return $this->newRankId;
    }

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

