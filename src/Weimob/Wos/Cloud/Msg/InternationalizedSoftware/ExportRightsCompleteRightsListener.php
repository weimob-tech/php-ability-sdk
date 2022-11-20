<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\InternationalizedSoftware;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,207
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface ExportRightsCompleteRightsListener
{
    const topic = 'export_rights';
    const event = 'completeRights';
    const classType = CompleteRightsMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CompleteRightsMessage implements \JsonSerializable
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
    public function setOrderNo(?string $orderNo)
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
    public function setAftersaleNo(?string $aftersaleNo)
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

