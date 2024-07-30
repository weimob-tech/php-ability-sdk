<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Wangpu;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 268
 * @author weimobcloud
 * @create 2023-5-29
 */
interface WPGoodsPriceChangeListener
{
    const topic = 'WP_goods';
    const event = 'priceChange';
    const classType = PriceChangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class PriceChangeMessage implements \JsonSerializable
{
    /**
     * 商品id
     * @var string
     */
    private $goods_id;

    /**
     * 更新时间
     * @var int
     */
    private $update_time;

    /**
     * @param string $goods_id
     */
    public function setGoodsId(?string $goods_id): void
    {
        $this->goods_id = $goods_id;
    }

    /**
     * @return string
     */
    public function getGoodsId(): ?string
    {
        return $this->goods_id;
    }

    /**
     * @param int $update_time
     */
    public function setUpdateTime(?int $update_time): void
    {
        $this->update_time = $update_time;
    }

    /**
     * @return int
     */
    public function getUpdateTime(): ?int
    {
        return $this->update_time;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

