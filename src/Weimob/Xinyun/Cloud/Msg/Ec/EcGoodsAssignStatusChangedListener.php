<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,677
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface EcGoodsAssignStatusChangedListener
{
    const topic = 'ec_goods';
    const event = 'assign_status_changed';
    const classType = AssignStatusChangedMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class AssignStatusChangedMessage implements \JsonSerializable
{
    /**
     * 执行分配/取消分配的商品Id列表
     * @var array
     */
    private $goodsIdList;

    /**
     * 执行分配/取消分配的门店Id列表
     * @var array
     */
    private $storeIdList;

    /**
     * 分配类型：1表分配，2代表取消分配
     * @var int
     */
    private $assignType;

    /**
     * @param array $goodsIdList
     */
    public function setGoodsIdList(?array $goodsIdList): void
    {
        $this->goodsIdList = $goodsIdList;
    }

    /**
     * @return array
     */
    public function getGoodsIdList(): ?array
    {
        return $this->goodsIdList;
    }

    /**
     * @param array $storeIdList
     */
    public function setStoreIdList(?array $storeIdList): void
    {
        $this->storeIdList = $storeIdList;
    }

    /**
     * @return array
     */
    public function getStoreIdList(): ?array
    {
        return $this->storeIdList;
    }

    /**
     * @param int $assignType
     */
    public function setAssignType(?int $assignType): void
    {
        $this->assignType = $assignType;
    }

    /**
     * @return int
     */
    public function getAssignType(): ?int
    {
        return $this->assignType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

