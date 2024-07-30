<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\Bos;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,424
 * @author weimobcloud
 * @create 2023-5-23
 */
interface BosMessageWechatSubscribeSendListener
{
    const topic = 'bos.message.wechat.subscribe';
    const event = 'send';
    const classType = SendMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class SendMessage implements \JsonSerializable
{
    /**
     * 业务请求id
     * @var string
     */
    private $requestId;

    /**
     * 用户id

     * @var int
     */
    private $wid;

    /**
     * 返回码

     * @var string
     */
    private $errorCode;

    /**
     * 返回描述

     * @var string
     */
    private $errorMsg;

    /**
     * @param string $requestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * @return string
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
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
     * @param string $errorCode
     */
    public function setErrorCode(?string $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorMsg
     */
    public function setErrorMsg(?string $errorMsg): void
    {
        $this->errorMsg = $errorMsg;
    }

    /**
     * @return string
     */
    public function getErrorMsg(): ?string
    {
        return $this->errorMsg;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

