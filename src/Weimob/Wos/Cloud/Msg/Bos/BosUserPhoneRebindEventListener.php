<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\Bos;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,215
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface BosUserPhoneRebindEventListener
{
    const topic = 'bos.user';
    const event = 'phoneRebindEvent';
    const classType = PhoneRebindEventMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PhoneRebindEventMessage implements \JsonSerializable
{
    /**
     * 用户id
     * @var int
     */
    private $wid;

    /**
     * 商家操作系统id
     * @var int
     */
    private $bosId;

    /**
     * 换绑前的旧手机号
     * @var string
     */
    private $oldPhone;

    /**
     * 换绑后的新手机号
     * @var string
     */
    private $phone;

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
     * @param string $oldPhone
     */
    public function setOldPhone(?string $oldPhone): void
    {
        $this->oldPhone = $oldPhone;
    }

    /**
     * @return string
     */
    public function getOldPhone(): ?string
    {
        return $this->oldPhone;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

