<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Hotel;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 488
 * @author weimobcloud
 * @create 2023-5-29
 */
interface HOTELGoodsOrderPayGoodsOrderListener
{
    const topic = 'HOTEL_GoodsOrder';
    const event = 'payGoodsOrder';
    const classType = PayGoodsOrderMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class PayGoodsOrderMessage implements \JsonSerializable
{
    /**
     * 商品ID
     * @var string
     */
    private $goodsId;

    /**
     * 商品名称
     * @var string
     */
    private $goodsName;

    /**
     * 商品类型0普通团购1客房现金券
     * @var string
     */
    private $type;

    /**
     * 件数
     * @var string
     */
    private $count;

    /**
     * 实付金额
     * @var string
     */
    private $realAmount;

    /**
     * 订单编号
     * @var string
     */
    private $orderNo;

    /**
     * @param string $goodsId
     */
    public function setGoodsId(?string $goodsId): void
    {
        $this->goodsId = $goodsId;
    }

    /**
     * @return string
     */
    public function getGoodsId(): ?string
    {
        return $this->goodsId;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

