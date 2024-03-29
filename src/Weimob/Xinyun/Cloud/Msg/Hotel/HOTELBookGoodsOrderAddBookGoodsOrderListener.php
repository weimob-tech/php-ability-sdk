<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Hotel;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,439
 * @author weimobcloud
 * @create 2023-5-29
 */
interface HOTELBookGoodsOrderAddBookGoodsOrderListener
{
    const topic = 'HOTEL_BookGoodsOrder';
    const event = 'addBookGoodsOrder';
    const classType = AddBookGoodsOrderMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class AddBookGoodsOrderMessage implements \JsonSerializable
{
    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 商品名称
     * @var string
     */
    private $goodsName;

    /**
     * 商品数量
     * @var string
     */
    private $count;

    /**
     * 类别
     * @var string
     */
    private $type;

    /**
     * 商品总额
     * @var string
     */
    private $goodsCharge;

    /**
     * 门店id
     * @var string
     */
    private $storeId;

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $goodsName
     */
    public function setGoodsName(?string $goodsName): void
    {
        $this->goodsName = $goodsName;
    }

    /**
     * @return string
     */
    public function getGoodsName(): ?string
    {
        return $this->goodsName;
    }

    /**
     * @param string $count
     */
    public function setCount(?string $count): void
    {
        $this->count = $count;
    }

    /**
     * @return string
     */
    public function getCount(): ?string
    {
        return $this->count;
    }

    /**
     * @param string $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $goodsCharge
     */
    public function setGoodsCharge(?string $goodsCharge): void
    {
        $this->goodsCharge = $goodsCharge;
    }

    /**
     * @return string
     */
    public function getGoodsCharge(): ?string
    {
        return $this->goodsCharge;
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

