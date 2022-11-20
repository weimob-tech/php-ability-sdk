<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\Bos;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,365
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface BosUserPhoneReleaseEventListener
{
    const topic = 'bos.user';
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
    * @var string
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
    public function setWid(?int $wid)
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
    * @param string $phone
    */
    public function setPhone(?string $phone)
    {
        $this->phone = $phone;
    }

    /**
    * @return string
    */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
    * @param int $bosId
    */
    public function setBosId(?int $bosId)
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
    public function setTime(?int $time)
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

