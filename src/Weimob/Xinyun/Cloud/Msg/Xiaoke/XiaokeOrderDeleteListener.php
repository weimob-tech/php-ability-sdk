<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 2,685
 * @author weimobcloud
 * @create 2023-5-29
 */
interface XiaokeOrderDeleteListener
{
    const topic = 'xiaoke_order';
    const event = 'delete';
    const classType = DeleteMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class DeleteMessage implements \JsonSerializable
{
    /**
     * 订单号
     * @var array
     */
    private $orderNumberList;

    /**
     * 删除
     * @var int
     */
    private $isDel;

    /**
     * 最后操作人
     * @var int
     */
    private $lastUpdateUserWid;

    /**
     * 最后操作时间
     * @var int
     */
    private $lastUpdateTime;

    /**
     * @param array $orderNumberList
     */
    public function setOrderNumberList(?array $orderNumberList): void
    {
        $this->orderNumberList = $orderNumberList;
    }

    /**
     * @return array
     */
    public function getOrderNumberList(): ?array
    {
        return $this->orderNumberList;
    }

    /**
     * @param int $isDel
     */
    public function setIsDel(?int $isDel): void
    {
        $this->isDel = $isDel;
    }

    /**
     * @return int
     */
    public function getIsDel(): ?int
    {
        return $this->isDel;
    }

    /**
     * @param int $lastUpdateUserWid
     */
    public function setLastUpdateUserWid(?int $lastUpdateUserWid): void
    {
        $this->lastUpdateUserWid = $lastUpdateUserWid;
    }

    /**
     * @return int
     */
    public function getLastUpdateUserWid(): ?int
    {
        return $this->lastUpdateUserWid;
    }

    /**
     * @param int $lastUpdateTime
     */
    public function setLastUpdateTime(?int $lastUpdateTime): void
    {
        $this->lastUpdateTime = $lastUpdateTime;
    }

    /**
     * @return int
     */
    public function getLastUpdateTime(): ?int
    {
        return $this->lastUpdateTime;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

