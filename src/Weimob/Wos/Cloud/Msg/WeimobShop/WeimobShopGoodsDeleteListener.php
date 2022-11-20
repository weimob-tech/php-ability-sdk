<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobShop;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,264
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobShopGoodsDeleteListener
{
    const topic = 'weimob_shop.goods';
    const event = 'delete';
    const classType = DeleteMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class DeleteMessage implements \JsonSerializable
{
    /**
    * 商品ID列表
    * @var array
    */
    private $goodsIdList;

    /**
    * 组织结构节点
    * @var int
    */
    private $vid;

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
    * @param int $vid
    */
    public function setVid(?int $vid)
    {
        $this->vid = $vid;
    }

    /**
    * @return int
    */
    public function getVid(): ?int
    {
        return $this->vid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

