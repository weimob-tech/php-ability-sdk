<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Uc;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,443
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface UcUserPhoneChangeListener
{
    const topic = 'uc_user';
    const event = 'phone_change';
    const classType = PhoneChangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PhoneChangeMessage implements \JsonSerializable
{
    /**
     * 微盟用户wid，客户唯一标识
     * @var int
     */
    private $wid;

    /**
     * 老手机号列表
     * @var array
     */
    private $oldPhoneList;

    /**
     * 新手机号
     * @var string
     */
    private $newPhone;

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
     * @param array $oldPhoneList
     */
    public function setOldPhoneList(?array $oldPhoneList): void
    {
        $this->oldPhoneList = $oldPhoneList;
    }

    /**
     * @return array
     */
    public function getOldPhoneList(): ?array
    {
        return $this->oldPhoneList;
    }

    /**
     * @param string $newPhone
     */
    public function setNewPhone(?string $newPhone): void
    {
        $this->newPhone = $newPhone;
    }

    /**
     * @return string
     */
    public function getNewPhone(): ?string
    {
        return $this->newPhone;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

