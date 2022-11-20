<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Kld;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 323
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface KLDMemberCardUpdateMemberCardAccountInfoListener
{
    const topic = 'KLD_MemberCard';
    const event = 'updateMemberCardAccountInfo';
    const classType = UpdateMemberCardAccountInfoMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateMemberCardAccountInfoMessage implements \JsonSerializable
{
    /**
     * 会员信息
     * @var KLDMemberCardUpdateMemberCardAccountInfoMeg_body
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
     * 消息提示，分为 积分变更，余额变更
     * @var string
     */
    private $Message;

    /**
     * @param KLDMemberCardUpdateMemberCardAccountInfoMeg_body $meg_body
     */
    public function setMegBody(?KLDMemberCardUpdateMemberCardAccountInfoMeg_body $meg_body): void
    {
        $this->meg_body = $meg_body;
    }

    /**
     * @return KLDMemberCardUpdateMemberCardAccountInfoMeg_body
     */
    public function getMegBody(): ?KLDMemberCardUpdateMemberCardAccountInfoMeg_body
    {
        return $this->meg_body;
    }

    /**
     * @param string $client_id
     */
    public function setClientId(?string $client_id): void
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
    public function setMemberCardNo(?string $MemberCardNo): void
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
     * @param string $Message
     */
    public function setMessage(?string $Message): void
    {
        $this->Message = $Message;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->Message;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class KLDMemberCardUpdateMemberCardAccountInfoMeg_body implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

