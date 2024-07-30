<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,418
 * @author weimobcloud
 * @create 2023-5-23
 */
interface WeimobCrmOrderCreateListener
{
    const topic = 'weimob_crm.order';
    const event = 'create';
    const classType = CreateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateMessage implements \JsonSerializable
{
    /**
     * 订单号
     * @var int
     */
    private $orderNo;

    /**
     * 外部订单号
     * @var string
     */
    private $outOrderNo;

    /**
     * 订单状态。支持的类型包括：8-已完成。
     * @var int
     */
    private $orderStatus;

    /**
     * 组织节点 ID
     * @var int
     */
    private $vid;

    /**
     * 用户 ID
     * @var int
     */
    private $wid;

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
     * @param string $outOrderNo
     */
    public function setOutOrderNo(?string $outOrderNo): void
    {
        $this->outOrderNo = $outOrderNo;
    }

    /**
     * @return string
     */
    public function getOutOrderNo(): ?string
    {
        return $this->outOrderNo;
    }

    /**
     * @param int $orderStatus
     */
    public function setOrderStatus(?int $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return int
     */
    public function getOrderStatus(): ?int
    {
        return $this->orderStatus;
    }

    /**
     * @param int $vid
     */
    public function setVid(?int $vid): void
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

    /**
     * @param int $wid
     */
    public function setWid(?int $wid): void
    {
        $this->wid = $wid;
    }

    /**
     * @return int
     */
    public function getWid(): ?int
    {
        return $this->wid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

