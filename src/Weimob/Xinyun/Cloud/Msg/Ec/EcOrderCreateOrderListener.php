<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 371
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface EcOrderCreateOrderListener
{
    const topic = 'ec_order';
    const event = 'createOrder';
    const classType = CreateOrderMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateOrderMessage implements \JsonSerializable
{
    /**
     * 订单编号
     * @var int
     */
    private $orderNo;

    /**
     * 创建时间
     * @var int
     */
    private $createTime;

    /**
     * 渠道类型(0-公众号,1-小程序,2-H5,3-QQ,4-微博,5-头条,6-支付宝,7-线下)
     * @var int
     */
    private $channelType;

    /**
     * @param int $orderNo
     */
    public function setOrderNo(?int $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }

    /**
     * @param int $createTime
     */
    public function setCreateTime(?int $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * @param int $channelType
     */
    public function setChannelType(?int $channelType): void
    {
        $this->channelType = $channelType;
    }

    /**
     * @return int
     */
    public function getChannelType(): ?int
    {
        return $this->channelType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

