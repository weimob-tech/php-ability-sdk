<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\MemberCard;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 629
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface McCardTemplateMemberCardTemplateChangeListener
{
    const topic = 'mc_card_template';
    const event = 'memberCardTemplateChange';
    const classType = MemberCardTemplateChangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class MemberCardTemplateChangeMessage implements \JsonSerializable
{
    /**
    * public_account_id（pid）：商户店铺id（新云）
    * @var int
    */
    private $pid;

    /**
    * 系统来源
    * @var int
    */
    private $source;

    /**
    * 会员卡模板id
    * @var int
    */
    private $cardTemplateId;

    /**
    * 卡模板唯一id
    * @var int
    */
    private $memberCardTemplateId;

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
    * @param int $cardTemplateId
    */
    public function setCardTemplateId(?int $cardTemplateId)
    {
        $this->cardTemplateId = $cardTemplateId;
    }

    /**
    * @return int
    */
    public function getCardTemplateId(): ?int
    {
        return $this->cardTemplateId;
    }

    /**
    * @param int $memberCardTemplateId
    */
    public function setMemberCardTemplateId(?int $memberCardTemplateId)
    {
        $this->memberCardTemplateId = $memberCardTemplateId;
    }

    /**
    * @return int
    */
    public function getMemberCardTemplateId(): ?int
    {
        return $this->memberCardTemplateId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

