<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,757
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface XiaokeClueEditListener
{
    const topic = 'xiaoke_clue';
    const event = 'edit';
    const classType = EditMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class EditMessage implements \JsonSerializable
{
    /**
     * 线索主键集合
     * @var array
     */
    private $keys;

    /**
     * 线索新所属人wid
     * @var int
     */
    private $newOwnerId;

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
     * @param int $newOwnerId
     */
    public function setNewOwnerId(?int $newOwnerId): void
    {
        $this->newOwnerId = $newOwnerId;
    }

    /**
     * @return int
     */
    public function getNewOwnerId(): ?int
    {
        return $this->newOwnerId;
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

