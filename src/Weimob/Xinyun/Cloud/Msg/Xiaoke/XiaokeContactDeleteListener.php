<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,776
 * @author weimobcloud
 * @create 2023-5-29
 */
interface XiaokeContactDeleteListener
{
    const topic = 'xiaoke_contact';
    const event = 'delete';
    const classType = DeleteMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class DeleteMessage implements \JsonSerializable
{
    /**
     * 删除的联系人keys列表
     * @var array
     */
    private $contactKeys;

    /**
     * 消息体创建时间
     * @var int
     */
    private $buildTime;

    /**
     * 操作用户wid
     * @var int
     */
    private $wid;

    /**
     * @param array $contactKeys
     */
    public function setContactKeys(?array $contactKeys): void
    {
        $this->contactKeys = $contactKeys;
    }

    /**
     * @return array
     */
    public function getContactKeys(): ?array
    {
        return $this->contactKeys;
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

