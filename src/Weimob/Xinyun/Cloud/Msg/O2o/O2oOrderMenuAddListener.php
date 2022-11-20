<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\O2o;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,298
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface O2oOrderMenuAddListener
{
    const topic = 'o2o_order_menu';
    const event = 'add';
    const classType = AddMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class AddMessage implements \JsonSerializable
{
    /**
     * 菜单列表
     * @var array
     */
    private $menuItems;

    /**
     * 门店Id
     * @var int
     */
    private $storeId;

    /**
     * 订单Id
     * @var int
     */
    private $orderId;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 订单状态，0：未处理；1：已确认；2：已完成；3：已取消；4：已拒绝；5：已作废；6：申请退款
     * @var int
     */
    private $orderStatus;

    /**
     * 变更时间，单位毫秒
     * @var int
     */
    private $updateTime;

    /**
     * 加菜流水号 第一次点菜流水号是0 每加一次菜流水号+1 流水号
     * @var int
     */
    private $serialNo;

    /**
     * 加菜状态 0 未处理 1：已确认 2：已拒绝 3：已取消
     * @var int
     */
    private $menuStatus;

    /**
     * 门店第三方编号
     * @var string
     */
    private $storeChannelId;

    /**
     * @param array $menuItems
     */
    public function setMenuItems(?array $menuItems): void
    {
        $this->menuItems = $menuItems;
    }

    /**
     * @return array
     */
    public function getMenuItems(): ?array
    {
        return $this->menuItems;
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

    /**
     * @param int $orderId
     */
    public function setOrderId(?int $orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
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
     * @param int $updateTime
     */
    public function setUpdateTime(?int $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    /**
     * @return int
     */
    public function getUpdateTime(): ?int
    {
        return $this->updateTime;
    }

    /**
     * @param int $serialNo
     */
    public function setSerialNo(?int $serialNo): void
    {
        $this->serialNo = $serialNo;
    }

    /**
     * @return int
     */
    public function getSerialNo(): ?int
    {
        return $this->serialNo;
    }

    /**
     * @param int $menuStatus
     */
    public function setMenuStatus(?int $menuStatus): void
    {
        $this->menuStatus = $menuStatus;
    }

    /**
     * @return int
     */
    public function getMenuStatus(): ?int
    {
        return $this->menuStatus;
    }

    /**
     * @param string $storeChannelId
     */
    public function setStoreChannelId(?string $storeChannelId): void
    {
        $this->storeChannelId = $storeChannelId;
    }

    /**
     * @return string
     */
    public function getStoreChannelId(): ?string
    {
        return $this->storeChannelId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

