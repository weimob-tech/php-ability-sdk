<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Uc;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 3,695
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface UcUserBeginMergeListener
{
    const topic = 'uc_user';
    const event = 'begin_merge';
    const classType = BeginMergeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class BeginMergeMessage implements \JsonSerializable
{
    /**
    * 开始合并的用户 ID 列表。
    * @var array
    */
    private $widList;

    /**
    * 开始合并时间，时间戳，单位是毫秒。
    * @var int
    */
    private $time;

    /**
    * @param array $widList
    */
    public function setWidList(?array $widList)
    {
        $this->widList = $widList;
    }

    /**
    * @return array
    */
    public function getWidList(): ?array
    {
        return $this->widList;
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

