<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobShop;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,262
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobShopGoodsSellStatusUpdateListener
{
    const topic = 'weimob_shop.goods';
    const event = 'sellStatusUpdate';
    const classType = SellStatusUpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class SellStatusUpdateMessage implements \JsonSerializable
{
    /**
    * 商品ID列表，可通接口weimob_shop/goods/getList获得此编号
    * @var array
    */
    private $goodsIdList;

    /**
    * 商品销售状态，可售-true；禁售-false；
    * @var bool
    */
    private $isCanShell;

    /**
    * @param array $goodsIdList
    */
    public function setGoodsIdList(?array $goodsIdList)
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
    * @param bool $isCanShell
    */
    public function setIsCanShell(?bool $isCanShell)
    {
        $this->isCanShell = $isCanShell;
    }

    /**
    * @return bool
    */
    public function getIsCanShell(): ?bool
    {
        return $this->isCanShell;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopGoodsSellStatusUpdateGoodsIdList implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

