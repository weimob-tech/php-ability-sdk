<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,610
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface EcOrderUpdateCycleDeliveryAddressListener
{
    const topic = 'ec_order';
    const event = 'updateCycleDeliveryAddress';
    const classType = UpdateCycleDeliveryAddressMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateCycleDeliveryAddressMessage implements \JsonSerializable
{
    /**
    * 订单编号
    * @var int
    */
    private $orderNo;

    /**
    * 商家id
    * @var int
    */
    private $pid;

    /**
    * 订单状态（orderStatus：0-未支付，1-部分支付，2-已支付，3-可发货，4-部分发货，5-已发货/已备货，6-部分确认收货，7-确认收货/已核销，8-已完成（不能再申请售后），9-取消）
    * @var int
    */
    private $orderStatus;

    /**
    * 是否可发货
    * @var string
    */
    private $enableDelivery;

    /**
    * 收货人所在省份
    * @var string
    */
    private $receiverProvince;

    /**
    * 收货人所在城市
    * @var string
    */
    private $receiverCity;

    /**
    * 收货人所在区/县
    * @var string
    */
    private $receiverCounty;

    /**
    * 收货人所在乡镇/街道
    * @var string
    */
    private $receiverArea;

    /**
    * 收货人详细地址
    * @var string
    */
    private $receiverAddress;

    /**
    * 收货人经度
    * @var string
    */
    private $receiverLongitude;

    /**
    * 收货人维度
    * @var string
    */
    private $receiverLatitude;

    /**
    * 收货人姓名
    * @var string
    */
    private $receiverName;

    /**
    * 收货人电话
    * @var string
    */
    private $receiverMobile;

    /**
    * 收货人邮编
    * @var string
    */
    private $receiverZip;

    /**
    * 发送时间
    * @var string
    */
    private $datetime;

    /**
    * @param int $orderNo
    */
    public function setOrderNo(?int $orderNo)
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
    * @param int $pid
    */
    public function setPid(?int $pid)
    {
        $this->pid = $pid;
    }

    /**
    * @return int
    */
    public function getPid(): ?int
    {
        return $this->pid;
    }

    /**
    * @param int $orderStatus
    */
    public function setOrderStatus(?int $orderStatus)
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
    * @param string $enableDelivery
    */
    public function setEnableDelivery(?string $enableDelivery)
    {
        $this->enableDelivery = $enableDelivery;
    }

    /**
    * @return string
    */
    public function getEnableDelivery(): ?string
    {
        return $this->enableDelivery;
    }

    /**
    * @param string $receiverProvince
    */
    public function setReceiverProvince(?string $receiverProvince)
    {
        $this->receiverProvince = $receiverProvince;
    }

    /**
    * @return string
    */
    public function getReceiverProvince(): ?string
    {
        return $this->receiverProvince;
    }

    /**
    * @param string $receiverCity
    */
    public function setReceiverCity(?string $receiverCity)
    {
        $this->receiverCity = $receiverCity;
    }

    /**
    * @return string
    */
    public function getReceiverCity(): ?string
    {
        return $this->receiverCity;
    }

    /**
    * @param string $receiverCounty
    */
    public function setReceiverCounty(?string $receiverCounty)
    {
        $this->receiverCounty = $receiverCounty;
    }

    /**
    * @return string
    */
    public function getReceiverCounty(): ?string
    {
        return $this->receiverCounty;
    }

    /**
    * @param string $receiverArea
    */
    public function setReceiverArea(?string $receiverArea)
    {
        $this->receiverArea = $receiverArea;
    }

    /**
    * @return string
    */
    public function getReceiverArea(): ?string
    {
        return $this->receiverArea;
    }

    /**
    * @param string $receiverAddress
    */
    public function setReceiverAddress(?string $receiverAddress)
    {
        $this->receiverAddress = $receiverAddress;
    }

    /**
    * @return string
    */
    public function getReceiverAddress(): ?string
    {
        return $this->receiverAddress;
    }

    /**
    * @param string $receiverLongitude
    */
    public function setReceiverLongitude(?string $receiverLongitude)
    {
        $this->receiverLongitude = $receiverLongitude;
    }

    /**
    * @return string
    */
    public function getReceiverLongitude(): ?string
    {
        return $this->receiverLongitude;
    }

    /**
    * @param string $receiverLatitude
    */
    public function setReceiverLatitude(?string $receiverLatitude)
    {
        $this->receiverLatitude = $receiverLatitude;
    }

    /**
    * @return string
    */
    public function getReceiverLatitude(): ?string
    {
        return $this->receiverLatitude;
    }

    /**
    * @param string $receiverName
    */
    public function setReceiverName(?string $receiverName)
    {
        $this->receiverName = $receiverName;
    }

    /**
    * @return string
    */
    public function getReceiverName(): ?string
    {
        return $this->receiverName;
    }

    /**
    * @param string $receiverMobile
    */
    public function setReceiverMobile(?string $receiverMobile)
    {
        $this->receiverMobile = $receiverMobile;
    }

    /**
    * @return string
    */
    public function getReceiverMobile(): ?string
    {
        return $this->receiverMobile;
    }

    /**
    * @param string $receiverZip
    */
    public function setReceiverZip(?string $receiverZip)
    {
        $this->receiverZip = $receiverZip;
    }

    /**
    * @return string
    */
    public function getReceiverZip(): ?string
    {
        return $this->receiverZip;
    }

    /**
    * @param string $datetime
    */
    public function setDatetime(?string $datetime)
    {
        $this->datetime = $datetime;
    }

    /**
    * @return string
    */
    public function getDatetime(): ?string
    {
        return $this->datetime;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

