<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,761
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface XiaokeCustomerDropListener
{
    const topic = 'xiaoke_customer';
    const event = 'drop';
    const classType = DropMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class DropMessage implements \JsonSerializable
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
    public function setKeys(?array $keys)
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
    public function setOwner(?int $owner)
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
    * @param int $buildTime
    */
    public function setBuildTime(?int $buildTime)
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

