<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobShop;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,231
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface WeimobShopGoodsGoodsStoreRelationUpdateListener
{
    const topic = 'weimob_shop.goods';
    const event = 'goodsStoreRelationUpdate';
    const classType = GoodsStoreRelationUpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class GoodsStoreRelationUpdateMessage implements \JsonSerializable
{
    /**
     * 商品ID列表,可以通过接口weimob_shop/goods/getList获得
     * @var array
     */
    private $goodsIdList;

    /**
     * 组织结构节点
     * @var array
     */
    private $vidList;

    /**
     * 是否分配，分配-true；未分配；false
     * @var bool
     */
    private $isAssigned;

    /**
     * 商品上架状态，上架-true；下架-false；
     * @var bool
     */
    private $isOnline;

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
     * @param array $vidList
     */
    public function setVidList(?array $vidList): void
    {
        $this->vidList = $vidList;
    }

    /**
     * @return array
     */
    public function getVidList(): ?array
    {
        return $this->vidList;
    }

    /**
     * @param bool $isAssigned
     */
    public function setIsAssigned(?bool $isAssigned): void
    {
        $this->isAssigned = $isAssigned;
    }

    /**
     * @return bool
     */
    public function getIsAssigned(): ?bool
    {
        return $this->isAssigned;
    }

    /**
     * @param bool $isOnline
     */
    public function setIsOnline(?bool $isOnline): void
    {
        $this->isOnline = $isOnline;
    }

    /**
     * @return bool
     */
    public function getIsOnline(): ?bool
    {
        return $this->isOnline;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopGoodsGoodsStoreRelationUpdateGoodsIdList implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopGoodsGoodsStoreRelationUpdateVidList implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

