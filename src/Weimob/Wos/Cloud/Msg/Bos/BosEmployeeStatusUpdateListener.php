<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\Bos;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,387
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface BosEmployeeStatusUpdateListener
{
    const topic = 'bos.employee.status';
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
     * 账户状态，status 0启用 1禁用
     * @var int
     */
    private $status;

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
     * @param int $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

