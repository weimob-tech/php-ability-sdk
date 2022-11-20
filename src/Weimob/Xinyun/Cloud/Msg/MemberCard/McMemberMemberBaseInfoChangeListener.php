<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\MemberCard;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 625
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface McMemberMemberBaseInfoChangeListener
{
    const topic = 'mc_member';
    const event = 'memberBaseInfoChange';
    const classType = MemberBaseInfoChangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class MemberBaseInfoChangeMessage implements \JsonSerializable
{
    /**
     * public_account_id（pid）：商户店铺id（新云）
     * @var int
     */
    private $pid;

    /**
     * 微盟用户wid，客户唯一标识
     * @var int
     */
    private $wid;

    /**
     * 系统来源（该字段无实际意义无需关注）
     * @var int
     */
    private $source;

    /**
     * 会员卡号
     * @var string
     */
    private $memberCode;

    /**
     * 会员卡类型
     * @var int
     */
    private $type;

    /**
     * @param int $pid
     */
    public function setPid(?int $pid): void
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

    /**
     * @param int $source
     */
    public function setSource(?int $source): void
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
    public function setMemberCode(?string $memberCode): void
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
     * @param int $type
     */
    public function setType(?int $type): void
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

