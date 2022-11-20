<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobShop;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,218
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobShopRightsRightsStatusUpdateListener
{
    const topic = 'weimob_shop.rights';
    const event = 'rightsStatusUpdate';
    const classType = RightsStatusUpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class RightsStatusUpdateMessage implements \JsonSerializable
{
    private $rightsInfo;

    private $orderInfo;

    private $rightsOrderNo;

    private $orderNo;

    private $statusBefore;

    private $status;

    /**
    * @param WeimobShopRightsRightsStatusUpdateRightsInfo $rightsInfo
    */
    public function setRightsInfo(?WeimobShopRightsRightsStatusUpdateRightsInfo $rightsInfo)
    {
        $this->rightsInfo = $rightsInfo;
    }

    /**
    * @return WeimobShopRightsRightsStatusUpdateRightsInfo
    */
    public function getRightsInfo(): ?WeimobShopRightsRightsStatusUpdateRightsInfo
    {
        return $this->rightsInfo;
    }

    /**
    * @param WeimobShopRightsRightsStatusUpdateOrderInfo $orderInfo
    */
    public function setOrderInfo(?WeimobShopRightsRightsStatusUpdateOrderInfo $orderInfo)
    {
        $this->orderInfo = $orderInfo;
    }

    /**
    * @return WeimobShopRightsRightsStatusUpdateOrderInfo
    */
    public function getOrderInfo(): ?WeimobShopRightsRightsStatusUpdateOrderInfo
    {
        return $this->orderInfo;
    }

    /**
    * @param int $rightsOrderNo
    */
    public function setRightsOrderNo(?int $rightsOrderNo)
    {
        $this->rightsOrderNo = $rightsOrderNo;
    }

    /**
    * @return int
    */
    public function getRightsOrderNo(): ?int
    {
        return $this->rightsOrderNo;
    }

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
    * @param int $statusBefore
    */
    public function setStatusBefore(?int $statusBefore)
    {
        $this->statusBefore = $statusBefore;
    }

    /**
    * @return int
    */
    public function getStatusBefore(): ?int
    {
        return $this->statusBefore;
    }

    /**
    * @param int $status
    */
    public function setStatus(?int $status)
    {
        $this->status = $status;
    }

    /**
    * @return int
    */
    public function getStatus(): ?int
    {
        return $this->status;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopRightsRightsStatusUpdateRightsInfo implements \JsonSerializable
{
    private $bosId;

    private $merchantId;

    private $productId;

    private $productInstanceId;

    private $vid;

    private $processVid;

    private $rightsType;

    private $rightsStatus;

    private $rightsCauseType;

    private $rightsSource;

    private $refundType;

    /**
    * @param int $bosId
    */
    public function setBosId(?int $bosId)
    {
        $this->bosId = $bosId;
    }

    /**
    * @return int
    */
    public function getBosId(): ?int
    {
        return $this->bosId;
    }

    /**
    * @param int $merchantId
    */
    public function setMerchantId(?int $merchantId)
    {
        $this->merchantId = $merchantId;
    }

    /**
    * @return int
    */
    public function getMerchantId(): ?int
    {
        return $this->merchantId;
    }

    /**
    * @param int $productId
    */
    public function setProductId(?int $productId)
    {
        $this->productId = $productId;
    }

    /**
    * @return int
    */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
    * @param int $productInstanceId
    */
    public function setProductInstanceId(?int $productInstanceId)
    {
        $this->productInstanceId = $productInstanceId;
    }

    /**
    * @return int
    */
    public function getProductInstanceId(): ?int
    {
        return $this->productInstanceId;
    }

    /**
    * @param int $vid
    */
    public function setVid(?int $vid)
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
    * @param int $processVid
    */
    public function setProcessVid(?int $processVid)
    {
        $this->processVid = $processVid;
    }

    /**
    * @return int
    */
    public function getProcessVid(): ?int
    {
        return $this->processVid;
    }

    /**
    * @param int $rightsType
    */
    public function setRightsType(?int $rightsType)
    {
        $this->rightsType = $rightsType;
    }

    /**
    * @return int
    */
    public function getRightsType(): ?int
    {
        return $this->rightsType;
    }

    /**
    * @param int $rightsStatus
    */
    public function setRightsStatus(?int $rightsStatus)
    {
        $this->rightsStatus = $rightsStatus;
    }

    /**
    * @return int
    */
    public function getRightsStatus(): ?int
    {
        return $this->rightsStatus;
    }

    /**
    * @param int $rightsCauseType
    */
    public function setRightsCauseType(?int $rightsCauseType)
    {
        $this->rightsCauseType = $rightsCauseType;
    }

    /**
    * @return int
    */
    public function getRightsCauseType(): ?int
    {
        return $this->rightsCauseType;
    }

    /**
    * @param int $rightsSource
    */
    public function setRightsSource(?int $rightsSource)
    {
        $this->rightsSource = $rightsSource;
    }

    /**
    * @return int
    */
    public function getRightsSource(): ?int
    {
        return $this->rightsSource;
    }

    /**
    * @param int $refundType
    */
    public function setRefundType(?int $refundType)
    {
        $this->refundType = $refundType;
    }

    /**
    * @return int
    */
    public function getRefundType(): ?int
    {
        return $this->refundType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopRightsRightsStatusUpdateOrderInfo implements \JsonSerializable
{
    private $parentOrderNo;

    private $orderType;

    private $orderSource;

    private $channelType;

    private $bizSourceType;

    /**
    * @param int $parentOrderNo
    */
    public function setParentOrderNo(?int $parentOrderNo)
    {
        $this->parentOrderNo = $parentOrderNo;
    }

    /**
    * @return int
    */
    public function getParentOrderNo(): ?int
    {
        return $this->parentOrderNo;
    }

    /**
    * @param int $orderType
    */
    public function setOrderType(?int $orderType)
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
    * @param int $orderSource
    */
    public function setOrderSource(?int $orderSource)
    {
        $this->orderSource = $orderSource;
    }

    /**
    * @return int
    */
    public function getOrderSource(): ?int
    {
        return $this->orderSource;
    }

    /**
    * @param int $channelType
    */
    public function setChannelType(?int $channelType)
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

    /**
    * @param int $bizSourceType
    */
    public function setBizSourceType(?int $bizSourceType)
    {
        $this->bizSourceType = $bizSourceType;
    }

    /**
    * @return int
    */
    public function getBizSourceType(): ?int
    {
        return $this->bizSourceType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

