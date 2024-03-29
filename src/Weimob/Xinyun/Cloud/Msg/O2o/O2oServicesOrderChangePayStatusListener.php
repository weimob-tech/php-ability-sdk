<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\O2o;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,061
 * @author weimobcloud
 * @create 2023-5-29
 */
interface O2oServicesOrderChangePayStatusListener
{
    const topic = 'o2o_services_order';
    const event = 'changePayStatus';
    const classType = ChangePayStatusMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class ChangePayStatusMessage implements \JsonSerializable
{
    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 订单类型：41=服务项目
     * @var int
     */
    private $orderType;

    /**
     * 下单时间
     * @var int
     */
    private $orderTime;

    /**
     * 订单状态，1：已确认；2：已完成；3：已取消；4：已拒绝；5：已作废；6：申请退款；17：同意退款；18：拒绝退款
     * @var int
     */
    private $orderStatus;

    /**
     * 支付状态0未支付1已支付2已退款3退款中4退款失败5申请退款6拒绝退款
     * @var int
     */
    private $payStatus;

    /**
     * 门店ID
     * @var int
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
     * @param int $orderType
     */
    public function setOrderType(?int $orderType): void
    {
        $this->orderType = $orderType;
    }

    /**
     * @return int
     */
    public function getOrderType(): ?int
    {
        return $this->orderType;
    }

    /**
     * @param int $orderTime
     */
    public function setOrderTime(?int $orderTime): void
    {
        $this->orderTime = $orderTime;
    }

    /**
     * @return int
     */
    public function getOrderTime(): ?int
    {
        return $this->orderTime;
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
     * @param int $payStatus
     */
    public function setPayStatus(?int $payStatus): void
    {
        $this->payStatus = $payStatus;
    }

    /**
     * @return int
     */
    public function getPayStatus(): ?int
    {
        return $this->payStatus;
    }

    /**
     * @param int $storeId
     */
    public function setStoreId(?int $storeId): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

