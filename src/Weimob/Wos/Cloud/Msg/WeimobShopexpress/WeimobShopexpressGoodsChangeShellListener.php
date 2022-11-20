<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobShopexpress;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,335
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobShopexpressGoodsChangeShellListener
{
    const topic = 'weimob_shopexpress.goods';
    const event = 'changeShell';
    const classType = ChangeShellMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ChangeShellMessage implements \JsonSerializable
{
    /**
    * 商品编码
    * @var string
    */
    private $goodsCode;

    /**
    * 商品上下架状态， 包含：1-上架；2-下架。
    * @var int
    */
    private $goodsStatus;

    /**
    * @param string $goodsCode
    */
    public function setGoodsCode(?string $goodsCode)
    {
        $this->goodsCode = $goodsCode;
    }

    /**
    * @return string
    */
    public function getGoodsCode(): ?string
    {
        return $this->goodsCode;
    }

    /**
    * @param int $goodsStatus
    */
    public function setGoodsStatus(?int $goodsStatus)
    {
        $this->goodsStatus = $goodsStatus;
    }

    /**
    * @return int
    */
    public function getGoodsStatus(): ?int
    {
        return $this->goodsStatus;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

