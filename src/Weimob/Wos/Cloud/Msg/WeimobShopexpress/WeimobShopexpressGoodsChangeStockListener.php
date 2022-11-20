<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobShopexpress;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,375
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface WeimobShopexpressGoodsChangeStockListener
{
    const topic = 'weimob_shopexpress.goods';
    const event = 'changeStock';
    const classType = ChangeStockMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ChangeStockMessage implements \JsonSerializable
{
    /**
     * 商品编码
     * @var string
     */
    private $goodsCode;

    /**
     * sku编码
     * @var string
     */
    private $skuCode;

    /**
     * @param string $goodsCode
     */
    public function setGoodsCode(?string $goodsCode): void
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
     * @param string $skuCode
     */
    public function setSkuCode(?string $skuCode): void
    {
        $this->skuCode = $skuCode;
    }

    /**
     * @return string
     */
    public function getSkuCode(): ?string
    {
        return $this->skuCode;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

