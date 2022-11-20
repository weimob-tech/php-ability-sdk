<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Kld;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 325
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface KLDMemberCardUpdateMemberTemplateListener
{
    const topic = 'KLD_MemberCard';
    const event = 'updateMemberTemplate';
    const classType = UpdateMemberTemplateMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateMemberTemplateMessage implements \JsonSerializable
{
    /**
    * 会员信息
    * @var KLDMemberCardUpdateMemberTemplateMeg_body
    */
    private $meg_body;

    /**
    * 服务商的client_id
    * @var string
    */
    private $client_id;

    /**
    * 消息信息，具体的区分：基本会员卡的配置更新，积分配置的更新，等级配置的更新
    * @var string
    */
    private $message;

    /**
    * @param KLDMemberCardUpdateMemberTemplateMeg_body $meg_body
    */
    public function setMegBody(?KLDMemberCardUpdateMemberTemplateMeg_body $meg_body)
    {
        $this->meg_body = $meg_body;
    }

    /**
    * @return KLDMemberCardUpdateMemberTemplateMeg_body
    */
    public function getMegBody(): ?KLDMemberCardUpdateMemberTemplateMeg_body
    {
        return $this->meg_body;
    }

    /**
    * @param string $client_id
    */
    public function setClientId(?string $client_id)
    {
        $this->client_id = $client_id;
    }

    /**
    * @return string
    */
    public function getClientId(): ?string
    {
        return $this->client_id;
    }

    /**
    * @param string $message
    */
    public function setMessage(?string $message)
    {
        $this->message = $message;
    }

    /**
    * @return string
    */
    public function getMessage(): ?string
    {
        return $this->message;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class KLDMemberCardUpdateMemberTemplateMeg_body implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

