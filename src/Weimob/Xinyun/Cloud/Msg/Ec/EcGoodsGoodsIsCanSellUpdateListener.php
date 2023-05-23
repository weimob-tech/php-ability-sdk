<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,897
 * @author weimobcloud
 * @create 2023-5-23
 */
interface EcGoodsGoodsIsCanSellUpdateListener
{
    const topic = 'ec_goods';
    const event = 'goodsIsCanSellUpdate';
    const classType = GoodsIsCanSellUpdateMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class GoodsIsCanSellUpdateMessage implements \JsonSerializable
{
    /**
     * 商品id列表
     * @var array
     */
    private $goodsIdList;

    /**
     * 0：不可售1：可售
     * @var string
     */
    private $isCanSell;

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
     * @param string $isCanSell
     */
    public function setIsCanSell(?string $isCanSell): void
    {
        $this->isCanSell = $isCanSell;
    }

    /**
     * @return string
     */
    public function getIsCanSell(): ?string
    {
        return $this->isCanSell;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

