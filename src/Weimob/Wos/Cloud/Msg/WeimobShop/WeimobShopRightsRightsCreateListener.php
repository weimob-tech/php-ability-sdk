<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobShop;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,219
 * @author weimobcloud
 * @create 2023-5-23
 */
interface WeimobShopRightsRightsCreateListener
{
    const topic = 'weimob_shop.rights';
    const event = 'rightsCreate';
    const classType = RightsCreateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class RightsCreateMessage implements \JsonSerializable
{
    private $rightsInfo;

    private $orderInfo;

    private $rightsOrderNo;

    private $orderNo;

    /**
     * @param WeimobShopRightsRightsCreateRightsInfo $rightsInfo
     */
    public function setRightsInfo(?WeimobShopRightsRightsCreateRightsInfo $rightsInfo): void
    {
        $this->rightsInfo = $rightsInfo;
    }

    /**
     * @return WeimobShopRightsRightsCreateRightsInfo
     */
    public function getRightsInfo(): ?WeimobShopRightsRightsCreateRightsInfo
    {
        return $this->rightsInfo;
    }

    /**
     * @param WeimobShopRightsRightsCreateOrderInfo $orderInfo
     */
    public function setOrderInfo(?WeimobShopRightsRightsCreateOrderInfo $orderInfo): void
    {
        $this->orderInfo = $orderInfo;
    }

    /**
     * @return WeimobShopRightsRightsCreateOrderInfo
     */
    public function getOrderInfo(): ?WeimobShopRightsRightsCreateOrderInfo
    {
        return $this->orderInfo;
    }

    /**
     * @param int $rightsOrderNo
     */
    public function setRightsOrderNo(?int $rightsOrderNo): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopRightsRightsCreateRightsInfo implements \JsonSerializable
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
    public function setBosId(?int $bosId): void
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
    public function setMerchantId(?int $merchantId): void
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
    public function setProductId(?int $productId): void
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
    public function setProductInstanceId(?int $productInstanceId): void
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
     * @param int $processVid
     */
    public function setProcessVid(?int $processVid): void
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
    public function setRightsType(?int $rightsType): void
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
    public function setRightsStatus(?int $rightsStatus): void
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
    public function setRightsCauseType(?int $rightsCauseType): void
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
    public function setRightsSource(?int $rightsSource): void
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
    public function setRefundType(?int $refundType): void
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

class WeimobShopRightsRightsCreateOrderInfo implements \JsonSerializable
{
    private $parentOrderNo;

    private $orderType;

    private $orderSource;

    private $channelType;

    private $bizSourceType;

    /**
     * @param int $parentOrderNo
     */
    public function setParentOrderNo(?int $parentOrderNo): void
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
     * @param int $orderSource
     */
    public function setOrderSource(?int $orderSource): void
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

    /**
     * @param int $bizSourceType
     */
    public function setBizSourceType(?int $bizSourceType): void
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

