<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\Bos;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,439
 * @author weimobcloud
 * @create 2023-5-23
 */
interface BosUserShippingaddressDeleteListener
{
    const topic = 'bos.user.shippingaddress';
    const event = 'delete';
    const classType = DeleteMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class DeleteMessage implements \JsonSerializable
{
    /**
     * 操作类型 1.新增 2.编辑 3.删除
     * @var int
     */
    private $operateType;

    /**
     * 用户id
     * @var int
     */
    private $wid;

    /**
     * 收货地址id
     * @var int
     */
    private $addressId;

    /**
     * @param int $operateType
     */
    public function setOperateType(?int $operateType): void
    {
        $this->operateType = $operateType;
    }

    /**
     * @return int
     */
    public function getOperateType(): ?int
    {
        return $this->operateType;
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

    /**
     * @param int $addressId
     */
    public function setAddressId(?int $addressId): void
    {
        $this->addressId = $addressId;
    }

    /**
     * @return int
     */
    public function getAddressId(): ?int
    {
        return $this->addressId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

