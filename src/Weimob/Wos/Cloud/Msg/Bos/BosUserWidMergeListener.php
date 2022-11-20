<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\Bos;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,352
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface BosUserWidMergeListener
{
    const topic = 'bos.user';
    const event = 'widMerge';
    const classType = WidMergeMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class WidMergeMessage implements \JsonSerializable
{
    /**
    * 用户wid
    * @var int
    */
    private $wid;

    /**
    * 商户ID
    * @var int
    */
    private $bosId;

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

    /**
    * @param int $bosId
    */
    public function setBosId(?int $bosId)
    {
        $this->bosId = $bosId;
    }

    /**
    * @return int
    */
    public function getBosId(): ?int
    {
        return $this->bosId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

