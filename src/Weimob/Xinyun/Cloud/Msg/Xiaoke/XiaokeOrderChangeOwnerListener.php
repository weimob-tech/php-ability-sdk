<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 2,687
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface XiaokeOrderChangeOwnerListener
{
    const topic = 'xiaoke_order';
    const event = 'changeOwner';
    const classType = ChangeOwnerMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ChangeOwnerMessage implements \JsonSerializable
{
    /**
     * 变更成功的订单唯一标识列表
     * @var array
     */
    private $keys;

    /**
     * 新所属人id
     * @var int
     */
    private $newOwnerId;

    /**
     * 操作人(企业员工id)
     * @var int
     */
    private $userWid;

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
     * @param int $userWid
     */
    public function setUserWid(?int $userWid): void
    {
        $this->userWid = $userWid;
    }

    /**
     * @return int
     */
    public function getUserWid(): ?int
    {
        return $this->userWid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

