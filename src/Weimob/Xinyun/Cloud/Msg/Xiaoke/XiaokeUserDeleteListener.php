<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,750
 * @author weimobcloud
 * @create 2023-5-23
 */
interface XiaokeUserDeleteListener
{
    const topic = 'xiaoke_user';
    const event = 'delete';
    const classType = DeleteMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class DeleteMessage implements \JsonSerializable
{
    /**
     * 删除的员工wid列表
     * @var array
     */
    private $widList;

    /**
     * 转交人wid
     * @var string
     */
    private $passUserWid;

    /**
     * @param array $widList
     */
    public function setWidList(?array $widList): void
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
     * @param string $passUserWid
     */
    public function setPassUserWid(?string $passUserWid): void
    {
        $this->passUserWid = $passUserWid;
    }

    /**
     * @return string
     */
    public function getPassUserWid(): ?string
    {
        return $this->passUserWid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

