<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\Bos;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,364
 * @author weimobcloud
 * @create 2023-5-23
 */
interface BosBosUserPhoneReleaseEventListener
{
    const topic = 'bos.bos.user';
    const event = 'phoneReleaseEvent';
    const classType = PhoneReleaseEventMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PhoneReleaseEventMessage implements \JsonSerializable
{
    /**
     * 用户ID
     * @var int
     */
    private $wid;

    /**
     * 解绑前的手机号
     * @var int
     */
    private $phone;

    /**
     * 商家操作系统id
     * @var int
     */
    private $bosId;

    /**
     * 解绑手机号时间，时间戳
     * @var int
     */
    private $time;

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
     * @param int $phone
     */
    public function setPhone(?int $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return int
     */
    public function getPhone(): ?int
    {
        return $this->phone;
    }

    /**
     * @param int $bosId
     */
    public function setBosId(?int $bosId): void
    {
        $this->bosId = $bosId;
    }

    /**
     * @return int
     */
    public function getBosId(): ?int
    {
        return $this->bosId;
    }

    /**
     * @param int $time
     */
    public function setTime(?int $time): void
    {
        $this->time = $time;
    }

    /**
     * @return int
     */
    public function getTime(): ?int
    {
        return $this->time;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

