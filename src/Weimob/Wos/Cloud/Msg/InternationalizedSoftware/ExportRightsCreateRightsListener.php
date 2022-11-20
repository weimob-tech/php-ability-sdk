<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\InternationalizedSoftware;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,206
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface ExportRightsCreateRightsListener
{
    const topic = 'export_rights';
    const event = 'createRights';
    const classType = CreateRightsMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateRightsMessage implements \JsonSerializable
{
    /**
     * 订单编号
     * @var string
     */
    private $orderNo;

    /**
     * 售后单号
     * @var string
     */
    private $aftersaleNo;

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
     * @param string $aftersaleNo
     */
    public function setAftersaleNo(?string $aftersaleNo): void
    {
        $this->aftersaleNo = $aftersaleNo;
    }

    /**
     * @return string
     */
    public function getAftersaleNo(): ?string
    {
        return $this->aftersaleNo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

