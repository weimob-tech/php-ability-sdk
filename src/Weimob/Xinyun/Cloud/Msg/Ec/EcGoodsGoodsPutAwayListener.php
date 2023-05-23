<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,896
 * @author weimobcloud
 * @create 2023-5-23
 */
interface EcGoodsGoodsPutAwayListener
{
    const topic = 'ec_goods';
    const event = 'goodsPutAway';
    const classType = GoodsPutAwayMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class GoodsPutAwayMessage implements \JsonSerializable
{
    /**
     * 商品id列表
     * @var array
     */
    private $goodsIdList;

    /**
     * 0:上架1:下架
     * @var string
     */
    private $putAway;

    /**
     * 店铺id
     * @var string
     */
    private $storeId;

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
     * @param string $putAway
     */
    public function setPutAway(?string $putAway): void
    {
        $this->putAway = $putAway;
    }

    /**
     * @return string
     */
    public function getPutAway(): ?string
    {
        return $this->putAway;
    }

    /**
     * @param string $storeId
     */
    public function setStoreId(?string $storeId): void
    {
        $this->storeId = $storeId;
    }

    /**
     * @return string
     */
    public function getStoreId(): ?string
    {
        return $this->storeId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

