<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\MemberCard;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,448
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface McMemberImportMemberCardListener
{
    const topic = 'mc_member';
    const event = 'importMemberCard';
    const classType = ImportMemberCardMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ImportMemberCardMessage implements \JsonSerializable
{
    /**
    * 用户wid集合
    * @var array
    */
    private $widList;

    /**
    * 会员卡模板id
    * @var int
    */
    private $memberCardTemplateId;

    /**
    * @param array $widList
    */
    public function setWidList(?array $widList)
    {
        $this->widList = $widList;
    }

    /**
    * @return array
    */
    public function getWidList(): ?array
    {
        return $this->widList;
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

