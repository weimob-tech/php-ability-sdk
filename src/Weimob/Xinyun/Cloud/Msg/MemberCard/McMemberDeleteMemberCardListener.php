<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\MemberCard;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,703
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface McMemberDeleteMemberCardListener
{
    const topic = 'mc_member';
    const event = 'deleteMemberCard';
    const classType = DeleteMemberCardMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class DeleteMemberCardMessage implements \JsonSerializable
{
    /**
     * 商户pid
     * @var int
     */
    private $pid;

    /**
     * 用户wid
     * @var int
     */
    private $wid;

    /**
     * 卡模板id
     * @var int
     */
    private $mcTemplateId;

    /**
     * 会员唯一标示mid
     * @var int
     */
    private $mid;

    /**
     * 会员卡code
     * @var string
     */
    private $code;

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
     * @param int $mcTemplateId
     */
    public function setMcTemplateId(?int $mcTemplateId): void
    {
        $this->mcTemplateId = $mcTemplateId;
    }

    /**
     * @return int
     */
    public function getMcTemplateId(): ?int
    {
        return $this->mcTemplateId;
    }

    /**
     * @param int $mid
     */
    public function setMid(?int $mid): void
    {
        $this->mid = $mid;
    }

    /**
     * @return int
     */
    public function getMid(): ?int
    {
        return $this->mid;
    }

    /**
     * @param string $code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

