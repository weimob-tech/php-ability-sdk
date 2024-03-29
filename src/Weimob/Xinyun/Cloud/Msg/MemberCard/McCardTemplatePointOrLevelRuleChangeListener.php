<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\MemberCard;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 643
 * @author weimobcloud
 * @create 2023-5-29
 */
interface McCardTemplatePointOrLevelRuleChangeListener
{
    const topic = 'mc_card_template';
    const event = 'pointOrLevelRuleChange';
    const classType = PointOrLevelRuleChangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class PointOrLevelRuleChangeMessage implements \JsonSerializable
{
    /**
     * 店铺pid
     * @var int
     */
    private $pid;

    /**
     * 系统来源
     * @var int
     */
    private $source;

    /**
     * 1：积分；2：等级1：积分；2：等级
     * @var int
     */
    private $changeType;

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
     * @param int $changeType
     */
    public function setChangeType(?int $changeType): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

