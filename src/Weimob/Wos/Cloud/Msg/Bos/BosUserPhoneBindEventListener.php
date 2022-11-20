<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\Bos;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,214
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface BosUserPhoneBindEventListener
{
    const topic = 'bos.user';
    const event = 'phoneBindEvent';
    const classType = PhoneBindEventMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PhoneBindEventMessage implements \JsonSerializable
{
    /**
     * 用户wid
     * @var int
     */
    private $wid;

    /**
     * 新手机号
     * @var string
     */
    private $phone;

    /**
     * 商家操作系统id
     * @var int
     */
    private $bosId;

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
     * @param string $phone
     */
    public function setPhone(?string $phone): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

