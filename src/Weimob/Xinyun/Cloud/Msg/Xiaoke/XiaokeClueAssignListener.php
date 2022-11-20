<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,760
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface XiaokeClueAssignListener
{
    const topic = 'xiaoke_clue';
    const event = 'assign';
    const classType = AssignMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class AssignMessage implements \JsonSerializable
{
    /**
     * 线索主键集合
     * @var array
     */
    private $clueKeys;

    /**
     * 线索新所属人wid
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
     * @param array $clueKeys
     */
    public function setClueKeys(?array $clueKeys): void
    {
        $this->clueKeys = $clueKeys;
    }

    /**
     * @return array
     */
    public function getClueKeys(): ?array
    {
        return $this->clueKeys;
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

