<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Kld;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 322
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface KLDMemberCardOpenMemberCardListener
{
    const topic = 'KLD_MemberCard';
    const event = 'openMemberCard';
    const classType = OpenMemberCardMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class OpenMemberCardMessage implements \JsonSerializable
{
    /**
    * 会员信息
    * @var KLDMemberCardOpenMemberCardMeg_body
    */
    private $meg_body;

    /**
    * 服务商的client_id
    * @var string
    */
    private $client_id;

    /**
    * 会员卡号
    * @var string
    */
    private $MemberCardNo;

    /**
    * 会员卡手机号
    * @var string
    */
    private $Phone;

    /**
    * 会员卡姓名
    * @var string
    */
    private $Name;

    /**
    * @param KLDMemberCardOpenMemberCardMeg_body $meg_body
    */
    public function setMegBody(?KLDMemberCardOpenMemberCardMeg_body $meg_body)
    {
        $this->meg_body = $meg_body;
    }

    /**
    * @return KLDMemberCardOpenMemberCardMeg_body
    */
    public function getMegBody(): ?KLDMemberCardOpenMemberCardMeg_body
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
    * @param string $MemberCardNo
    */
    public function setMemberCardNo(?string $MemberCardNo)
    {
        $this->MemberCardNo = $MemberCardNo;
    }

    /**
    * @return string
    */
    public function getMemberCardNo(): ?string
    {
        return $this->MemberCardNo;
    }

    /**
    * @param string $Phone
    */
    public function setPhone(?string $Phone)
    {
        $this->Phone = $Phone;
    }

    /**
    * @return string
    */
    public function getPhone(): ?string
    {
        return $this->Phone;
    }

    /**
    * @param string $Name
    */
    public function setName(?string $Name)
    {
        $this->Name = $Name;
    }

    /**
    * @return string
    */
    public function getName(): ?string
    {
        return $this->Name;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class KLDMemberCardOpenMemberCardMeg_body implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

