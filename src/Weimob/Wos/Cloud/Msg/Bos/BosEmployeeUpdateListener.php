<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\Bos;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,386
 * @author weimobcloud
 * @create 2023-5-23
 */
interface BosEmployeeUpdateListener
{
    const topic = 'bos.employee';
    const event = 'update';
    const classType = UpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateMessage implements \JsonSerializable
{
    /**
     * 账户id
     * @var int
     */
    private $wid;

    /**
     * 操作类型，0:新建 1:更新 2:删除
     * @var int
     */
    private $operateType;

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
     * @param int $operateType
     */
    public function setOperateType(?int $operateType): void
    {
        $this->operateType = $operateType;
    }

    /**
     * @return int
     */
    public function getOperateType(): ?int
    {
        return $this->operateType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

