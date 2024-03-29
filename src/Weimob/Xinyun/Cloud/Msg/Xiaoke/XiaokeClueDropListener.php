<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,751
 * @author weimobcloud
 * @create 2023-5-29
 */
interface XiaokeClueDropListener
{
    const topic = 'xiaoke_clue';
    const event = 'drop';
    const classType = DropMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class DropMessage implements \JsonSerializable
{
    /**
     * 线索主键集合
     * @var array
     */
    private $keys;

    /**
     * 线索原所属人wid
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

