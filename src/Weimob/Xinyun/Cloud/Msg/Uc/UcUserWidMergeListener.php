<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Uc;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,155
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface UcUserWidMergeListener
{
    const topic = 'uc_user';
    const event = 'wid_merge';
    const classType = WidMergeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class WidMergeMessage implements \JsonSerializable
{
    /**
     * public_account_id（pid）：商户店铺id（新云）
     * @var int
     */
    private $pid;

    /**
     * 微盟用户wid，客户唯一标识
     * @var int
     */
    private $wid;

    /**
     * @param int $pid
     */
    public function setPid(?int $pid): void
    {
        $this->pid = $pid;
    }

    /**
     * @return int
     */
    public function getPid(): ?int
    {
        return $this->pid;
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

