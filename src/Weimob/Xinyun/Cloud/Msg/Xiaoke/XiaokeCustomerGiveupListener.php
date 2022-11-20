<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,762
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface XiaokeCustomerGiveupListener
{
    const topic = 'xiaoke_customer';
    const event = 'giveup';
    const classType = GiveupMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class GiveupMessage implements \JsonSerializable
{
    /**
     * 客户主键集合
     * @var array
     */
    private $keys;

    /**
     * 客户原所属人wid
     * @var int
     */
    private $owner;

    /**
     * 原因
     * @var string
     */
    private $reason;

    /**
     * 操作时间,时间戳
     * @var int
     */
    private $buildTime;

    /**
     * 操作用户wid
     * @var int
     */
    private $wid;

    /**
     * @param array $keys
     */
    public function setKeys(?array $keys): void
    {
        $this->keys = $keys;
    }

    /**
     * @return array
     */
    public function getKeys(): ?array
    {
        return $this->keys;
    }

    /**
     * @param int $owner
     */
    public function setOwner(?int $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return int
     */
    public function getOwner(): ?int
    {
        return $this->owner;
    }

    /**
     * @param string $reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param int $buildTime
     */
    public function setBuildTime(?int $buildTime): void
    {
        $this->buildTime = $buildTime;
    }

    /**
     * @return int
     */
    public function getBuildTime(): ?int
    {
        return $this->buildTime;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

