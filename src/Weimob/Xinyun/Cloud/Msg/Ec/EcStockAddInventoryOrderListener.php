<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 591
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface EcStockAddInventoryOrderListener
{
    const topic = 'ec_stock';
    const event = 'add_inventory_order';
    const classType = AddInventoryOrderMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class AddInventoryOrderMessage implements \JsonSerializable
{
    /**
     * 单据Id
     * @var int
     */
    private $orderId;

    /**
     * 关联单据Id
     * @var int
     */
    private $referId;

    /**
     * 单据类型
     * @var int
     */
    private $inventoryType;

    /**
     * 单据类型
     * @var string
     */
    private $inventoryName;

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
     * @param int $referId
     */
    public function setReferId(?int $referId): void
    {
        $this->referId = $referId;
    }

    /**
     * @return int
     */
    public function getReferId(): ?int
    {
        return $this->referId;
    }

    /**
     * @param int $inventoryType
     */
    public function setInventoryType(?int $inventoryType): void
    {
        $this->inventoryType = $inventoryType;
    }

    /**
     * @return int
     */
    public function getInventoryType(): ?int
    {
        return $this->inventoryType;
    }

    /**
     * @param string $inventoryName
     */
    public function setInventoryName(?string $inventoryName): void
    {
        $this->inventoryName = $inventoryName;
    }

    /**
     * @return string
     */
    public function getInventoryName(): ?string
    {
        return $this->inventoryName;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

