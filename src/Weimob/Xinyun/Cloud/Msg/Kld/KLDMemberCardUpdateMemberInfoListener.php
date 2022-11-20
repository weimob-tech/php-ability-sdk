<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Kld;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 324
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface KLDMemberCardUpdateMemberInfoListener
{
    const topic = 'KLD_MemberCard';
    const event = 'updateMemberInfo';
    const classType = UpdateMemberInfoMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateMemberInfoMessage implements \JsonSerializable
{
    /**
     * 会员信息
     * @var KLDMemberCardUpdateMemberInfoMeg_body
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
     * @param KLDMemberCardUpdateMemberInfoMeg_body $meg_body
     */
    public function setMegBody(?KLDMemberCardUpdateMemberInfoMeg_body $meg_body): void
    {
        $this->meg_body = $meg_body;
    }

    /**
     * @return KLDMemberCardUpdateMemberInfoMeg_body
     */
    public function getMegBody(): ?KLDMemberCardUpdateMemberInfoMeg_body
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class KLDMemberCardUpdateMemberInfoMeg_body implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

