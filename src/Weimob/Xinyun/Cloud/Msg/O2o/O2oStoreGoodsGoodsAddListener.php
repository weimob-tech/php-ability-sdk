<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\O2o;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 189
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface O2oStoreGoodsGoodsAddListener
{
    const topic = 'o2o_store_goods';
    const event = 'goodsAdd';
    const classType = GoodsAddMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class GoodsAddMessage implements \JsonSerializable
{
    /**
    * 菜品Id
    * @var int
    */
    private $goodsId;

    /**
    * 门店Id
    * @var int
    */
    private $storeId;

    /**
    * 菜品第三方编码
    * @var string
    */
    private $thirdGoodsId;

    /**
    * @param int $goodsId
    */
    public function setGoodsId(?int $goodsId)
    {
        $this->goodsId = $goodsId;
    }

    /**
    * @return int
    */
    public function getGoodsId(): ?int
    {
        return $this->goodsId;
    }

    /**
    * @param int $storeId
    */
    public function setStoreId(?int $storeId)
    {
        $this->storeId = $storeId;
    }

    /**
    * @return int
    */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }

    /**
    * @param string $thirdGoodsId
    */
    public function setThirdGoodsId(?string $thirdGoodsId)
    {
        $this->thirdGoodsId = $thirdGoodsId;
    }

    /**
    * @return string
    */
    public function getThirdGoodsId(): ?string
    {
        return $this->thirdGoodsId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

