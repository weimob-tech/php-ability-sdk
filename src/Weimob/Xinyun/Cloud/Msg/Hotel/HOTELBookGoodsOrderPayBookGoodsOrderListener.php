<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Hotel;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,440
 * @author weimobcloud
 * @create 2023-5-29
 */
interface HOTELBookGoodsOrderPayBookGoodsOrderListener
{
    const topic = 'HOTEL_BookGoodsOrder';
    const event = 'payBookGoodsOrder';
    const classType = PayBookGoodsOrderMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class PayBookGoodsOrderMessage implements \JsonSerializable
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
     * 支付金额
     * @var string
     */
    private $realAmount;

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
     * @param string $realAmount
     */
    public function setRealAmount(?string $realAmount): void
    {
        $this->realAmount = $realAmount;
    }

    /**
     * @return string
     */
    public function getRealAmount(): ?string
    {
        return $this->realAmount;
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

