<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,324
 * @author weimobcloud
 * @create 2023-5-29
 */
interface EcGoodsGoodsUpdateListener
{
    const topic = 'ec_goods';
    const event = 'goodsUpdate';
    const classType = GoodsUpdateMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class GoodsUpdateMessage implements \JsonSerializable
{
    /**
     * 商品id
     * @var string
     */
    private $goodsIdList;

    /**
     * @param string $goodsIdList
     */
    public function setGoodsIdList(?string $goodsIdList): void
    {
        $this->goodsIdList = $goodsIdList;
    }

    /**
     * @return string
     */
    public function getGoodsIdList(): ?string
    {
        return $this->goodsIdList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

