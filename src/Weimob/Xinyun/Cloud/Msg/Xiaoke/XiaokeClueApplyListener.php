<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,759
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface XiaokeClueApplyListener
{
    const topic = 'xiaoke_clue';
    const event = 'apply';
    const classType = ApplyMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ApplyMessage implements \JsonSerializable
{
    /**
     * 防篡改签名：md5(client_id+id+msg_body+client_secret)
     * @var string
     */
    private $msgSignature;

    /**
     * @param string $msgSignature
     */
    public function setMsgSignature(?string $msgSignature): void
    {
        $this->msgSignature = $msgSignature;
    }

    /**
     * @return string
     */
    public function getMsgSignature(): ?string
    {
        return $this->msgSignature;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

