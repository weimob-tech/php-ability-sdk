<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,025
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobShopTradePassAuditTradeOrderService
{
    const specType = 'wos';

    public function invoke(WeimobShopTradePassAuditTradeOrderRequest $request) : WeimobShopTradePassAuditTradeOrderResponse;
}

class WeimobShopTradePassAuditTradeOrderRequest implements \JsonSerializable
{
    /**
    * 商业操作系统ID
    * @var int
    */
    private $bosId;

    /**
    * 全局唯一的扩展点
    * @var string
    */
    private $actionKey;

    /**
    * 功能集ID
    * @var int
    */
    private $functionId;

    /**
    * 组织结构节点ID
    * @var int
    */
    private $vid;

    /**
    * 	组织结构节点类型
    * @var int
    */
    private $vType;

    /**
    * @var WeimobShopTradePassAuditTradeOrderParam
    */
    private $params;

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
    * @param string $actionKey
    */
    public function setActionKey(?string $actionKey): void
    {
        $this->actionKey = $actionKey;
    }

    /**
    * @return string
    */
    public function getActionKey(): ?string
    {
        return $this->actionKey;
    }

    /**
    * @param int $functionId
    */
    public function setFunctionId(?int $functionId): void
    {
        $this->functionId = $functionId;
    }

    /**
    * @return int
    */
    public function getFunctionId(): ?int
    {
        return $this->functionId;
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
    * @param int $vType
    */
    public function setVType(?int $vType): void
    {
        $this->vType = $vType;
    }

    /**
    * @return int
    */
    public function getVType(): ?int
    {
        return $this->vType;
    }

    /**
    * @param WeimobShopTradePassAuditTradeOrderParam $param
    */
    public function setParam(?WeimobShopTradePassAuditTradeOrderParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobShopTradePassAuditTradeOrderParam
    */
    public function getParam(): ?WeimobShopTradePassAuditTradeOrderParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradePassAuditTradeOrderParam implements \JsonSerializable
{
    /**
    * 基础请求信息
    * @var WeimobShopTradePassAuditTradeOrderParamBasicInfo
    */
    private $basicInfo;

    /**
    * ""
    * @var array
    */
    private $confirmOrderShopGroupReqList;

    /**
    * 调用方产品ID,
    * @var int
    */
    private $productId;

    /**
    * 调用方产品实例ID.
    * @var int
    */
    private $productInstanceId;

    /**
    * 被调用方产品ID
    * @var int
    */
    private $targetProductId;

    /**
    * 被调用方产品实例ID
    * @var int
    */
    private $targetProductInstanceId;

    /**
    * 提供产品的租户.
    * @var string
    */
    private $tcode;

    /**
    * 商户标识.
    * @var int
    */
    private $merchantId;

    /**
    * @param WeimobShopTradePassAuditTradeOrderParamBasicInfo $basicInfo
    */
    public function setBasicInfo(?WeimobShopTradePassAuditTradeOrderParamBasicInfo $basicInfo)
    {
        $this->basicInfo = $basicInfo;
    }

    /**
    * @return WeimobShopTradePassAuditTradeOrderParamBasicInfo
    */
    public function getBasicInfo(): ?WeimobShopTradePassAuditTradeOrderParamBasicInfo
    {
        return $this->basicInfo;
    }

    /**
    * @param array $confirmOrderShopGroupReqList
    */
    public function setConfirmOrderShopGroupReqList(?array $confirmOrderShopGroupReqList)
    {
        $this->confirmOrderShopGroupReqList = $confirmOrderShopGroupReqList;
    }

    /**
    * @return array
    */
    public function getConfirmOrderShopGroupReqList(): ?array
    {
        return $this->confirmOrderShopGroupReqList;
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
    * @param int $targetProductId
    */
    public function setTargetProductId(?int $targetProductId)
    {
        $this->targetProductId = $targetProductId;
    }

    /**
    * @return int
    */
    public function getTargetProductId(): ?int
    {
        return $this->targetProductId;
    }

    /**
    * @param int $targetProductInstanceId
    */
    public function setTargetProductInstanceId(?int $targetProductInstanceId)
    {
        $this->targetProductInstanceId = $targetProductInstanceId;
    }

    /**
    * @return int
    */
    public function getTargetProductInstanceId(): ?int
    {
        return $this->targetProductInstanceId;
    }

    /**
    * @param string $tcode
    */
    public function setTcode(?string $tcode)
    {
        $this->tcode = $tcode;
    }

    /**
    * @return string
    */
    public function getTcode(): ?string
    {
        return $this->tcode;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradePassAuditTradeOrderParamBasicInfo implements \JsonSerializable
{
    /**
    * 商户标识
    * @var int
    */
    private $merchantId;

    /**
    * bosId不能为空
    * @var int
    */
    private $bosId;

    /**
    * 产品标识
    * @var int
    */
    private $sourceProductId;

    /**
    * 产品版本标识
    * @var int
    */
    private $sourceProductVersionId;

    /**
    * 产品实例标识
    * @var int
    */
    private $sourceProductInstanceId;

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
    * @param int $sourceProductId
    */
    public function setSourceProductId(?int $sourceProductId)
    {
        $this->sourceProductId = $sourceProductId;
    }

    /**
    * @return int
    */
    public function getSourceProductId(): ?int
    {
        return $this->sourceProductId;
    }

    /**
    * @param int $sourceProductVersionId
    */
    public function setSourceProductVersionId(?int $sourceProductVersionId)
    {
        $this->sourceProductVersionId = $sourceProductVersionId;
    }

    /**
    * @return int
    */
    public function getSourceProductVersionId(): ?int
    {
        return $this->sourceProductVersionId;
    }

    /**
    * @param int $sourceProductInstanceId
    */
    public function setSourceProductInstanceId(?int $sourceProductInstanceId)
    {
        $this->sourceProductInstanceId = $sourceProductInstanceId;
    }

    /**
    * @return int
    */
    public function getSourceProductInstanceId(): ?int
    {
        return $this->sourceProductInstanceId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradePassAuditTradeOrderParamConfirmOrderShopGroupReqList implements \JsonSerializable
{
    /**
    * 商品级列表
    * @var array
    */
    private $goodsReqList;

    /**
    * 支付信息 
    * @var WeimobShopTradePassAuditTradeOrderParamPaymentInfo
    */
    private $paymentInfo;

    /**
    * bosId不能为空
    * @var int
    */
    private $bosId;

    /**
    * 商户标识
    * @var int
    */
    private $merchantId;

    /**
    * 商户名
    * @var string
    */
    private $merchantName;

    /**
    * 用户id
    * @var int
    */
    private $wid;

    /**
    * 组织结构节点
    * @var int
    */
    private $vid;

    /**
    * vid节点名
    * @var string
    */
    private $vidName;

    /**
    * 渠道类型
    * @var int
    */
    private $channelType;

    /**
    * 订单号1
    * @var int
    */
    private $orderNo;

    /**
    * 父单号
    * @var int
    */
    private $parentOrderNo;

    /**
    * @param array $goodsReqList
    */
    public function setGoodsReqList(?array $goodsReqList)
    {
        $this->goodsReqList = $goodsReqList;
    }

    /**
    * @return array
    */
    public function getGoodsReqList(): ?array
    {
        return $this->goodsReqList;
    }

    /**
    * @param WeimobShopTradePassAuditTradeOrderParamPaymentInfo $paymentInfo
    */
    public function setPaymentInfo(?WeimobShopTradePassAuditTradeOrderParamPaymentInfo $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;
    }

    /**
    * @return WeimobShopTradePassAuditTradeOrderParamPaymentInfo
    */
    public function getPaymentInfo(): ?WeimobShopTradePassAuditTradeOrderParamPaymentInfo
    {
        return $this->paymentInfo;
    }

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
    * @param string $merchantName
    */
    public function setMerchantName(?string $merchantName)
    {
        $this->merchantName = $merchantName;
    }

    /**
    * @return string
    */
    public function getMerchantName(): ?string
    {
        return $this->merchantName;
    }

    /**
    * @param int $wid
    */
    public function setWid(?int $wid)
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
    * @param string $vidName
    */
    public function setVidName(?string $vidName)
    {
        $this->vidName = $vidName;
    }

    /**
    * @return string
    */
    public function getVidName(): ?string
    {
        return $this->vidName;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradePassAuditTradeOrderParamGoodsReqList implements \JsonSerializable
{
    /**
    * ""
    * @var WeimobShopTradePassAuditTradeOrderParamGoodsAbilityReq
    */
    private $goodsAbilityReq;

    /**
    * 使用的活动集合
    * @var array
    */
    private $useActivityList;

    /**
    * ItemProductInfo
    * @var WeimobShopTradePassAuditTradeOrderParamItemProductInfo
    */
    private $itemProductInfo;

    /**
    * 品类信息key:productCategory(该参数为map)
    * @var WeimobShopTradePassAuditTradeOrderParamGoodsExtMap
    */
    private $goodsExtMap;

    /**
    * 商品能力
    * @var array
    */
    private $goodsAbilityList;

    /**
    * 商品级拆分ID,一次交易过程中唯一
    * @var int
    */
    private $itemId;

    /**
    * 商品ID
    * @var int
    */
    private $goodsId;

    /**
    * SKUID
    * @var int
    */
    private $skuId;

    /**
    * 购买数量
    * @var int
    */
    private $buyNum;

    /**
    * 商品销售价格(BigDecimal)
    * @var int
    */
    private $skuSalePrice;

    /**
    * 市场价(BigDecimal)
    * @var string
    */
    private $skuMarketPrice;

    /**
    * 结算商品类型1、普通商品2、赠品3、加价购换购商品
    * @var int
    */
    private $tradeGoodsType;

    /**
    * 商品类型
    * @var int
    */
    private $goodsType;

    /**
    * 商品子类型
    * @var int
    */
    private $subGoodsType;

    /**
    * 商品销售模式
    * @var int
    */
    private $soldType;

    /**
    * @param WeimobShopTradePassAuditTradeOrderParamGoodsAbilityReq $goodsAbilityReq
    */
    public function setGoodsAbilityReq(?WeimobShopTradePassAuditTradeOrderParamGoodsAbilityReq $goodsAbilityReq)
    {
        $this->goodsAbilityReq = $goodsAbilityReq;
    }

    /**
    * @return WeimobShopTradePassAuditTradeOrderParamGoodsAbilityReq
    */
    public function getGoodsAbilityReq(): ?WeimobShopTradePassAuditTradeOrderParamGoodsAbilityReq
    {
        return $this->goodsAbilityReq;
    }

    /**
    * @param array $useActivityList
    */
    public function setUseActivityList(?array $useActivityList)
    {
        $this->useActivityList = $useActivityList;
    }

    /**
    * @return array
    */
    public function getUseActivityList(): ?array
    {
        return $this->useActivityList;
    }

    /**
    * @param WeimobShopTradePassAuditTradeOrderParamItemProductInfo $itemProductInfo
    */
    public function setItemProductInfo(?WeimobShopTradePassAuditTradeOrderParamItemProductInfo $itemProductInfo)
    {
        $this->itemProductInfo = $itemProductInfo;
    }

    /**
    * @return WeimobShopTradePassAuditTradeOrderParamItemProductInfo
    */
    public function getItemProductInfo(): ?WeimobShopTradePassAuditTradeOrderParamItemProductInfo
    {
        return $this->itemProductInfo;
    }

    /**
    * @param WeimobShopTradePassAuditTradeOrderParamGoodsExtMap $goodsExtMap
    */
    public function setGoodsExtMap(?WeimobShopTradePassAuditTradeOrderParamGoodsExtMap $goodsExtMap)
    {
        $this->goodsExtMap = $goodsExtMap;
    }

    /**
    * @return WeimobShopTradePassAuditTradeOrderParamGoodsExtMap
    */
    public function getGoodsExtMap(): ?WeimobShopTradePassAuditTradeOrderParamGoodsExtMap
    {
        return $this->goodsExtMap;
    }

    /**
    * @param array $goodsAbilityList
    */
    public function setGoodsAbilityList(?array $goodsAbilityList)
    {
        $this->goodsAbilityList = $goodsAbilityList;
    }

    /**
    * @return array
    */
    public function getGoodsAbilityList(): ?array
    {
        return $this->goodsAbilityList;
    }

    /**
    * @param int $itemId
    */
    public function setItemId(?int $itemId)
    {
        $this->itemId = $itemId;
    }

    /**
    * @return int
    */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
    * @param int $goodsId
    */
    public function setGoodsId(?int $goodsId)
    {
        $this->goodsId = $goodsId;
    }

    /**
    * @return int
    */
    public function getGoodsId(): ?int
    {
        return $this->goodsId;
    }

    /**
    * @param int $skuId
    */
    public function setSkuId(?int $skuId)
    {
        $this->skuId = $skuId;
    }

    /**
    * @return int
    */
    public function getSkuId(): ?int
    {
        return $this->skuId;
    }

    /**
    * @param int $buyNum
    */
    public function setBuyNum(?int $buyNum)
    {
        $this->buyNum = $buyNum;
    }

    /**
    * @return int
    */
    public function getBuyNum(): ?int
    {
        return $this->buyNum;
    }

    /**
    * @param int $skuSalePrice
    */
    public function setSkuSalePrice(?int $skuSalePrice)
    {
        $this->skuSalePrice = $skuSalePrice;
    }

    /**
    * @return int
    */
    public function getSkuSalePrice(): ?int
    {
        return $this->skuSalePrice;
    }

    /**
    * @param string $skuMarketPrice
    */
    public function setSkuMarketPrice(?string $skuMarketPrice)
    {
        $this->skuMarketPrice = $skuMarketPrice;
    }

    /**
    * @return string
    */
    public function getSkuMarketPrice(): ?string
    {
        return $this->skuMarketPrice;
    }

    /**
    * @param int $tradeGoodsType
    */
    public function setTradeGoodsType(?int $tradeGoodsType)
    {
        $this->tradeGoodsType = $tradeGoodsType;
    }

    /**
    * @return int
    */
    public function getTradeGoodsType(): ?int
    {
        return $this->tradeGoodsType;
    }

    /**
    * @param int $goodsType
    */
    public function setGoodsType(?int $goodsType)
    {
        $this->goodsType = $goodsType;
    }

    /**
    * @return int
    */
    public function getGoodsType(): ?int
    {
        return $this->goodsType;
    }

    /**
    * @param int $subGoodsType
    */
    public function setSubGoodsType(?int $subGoodsType)
    {
        $this->subGoodsType = $subGoodsType;
    }

    /**
    * @return int
    */
    public function getSubGoodsType(): ?int
    {
        return $this->subGoodsType;
    }

    /**
    * @param int $soldType
    */
    public function setSoldType(?int $soldType)
    {
        $this->soldType = $soldType;
    }

    /**
    * @return int
    */
    public function getSoldType(): ?int
    {
        return $this->soldType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradePassAuditTradeOrderParamGoodsAbilityReq implements \JsonSerializable
{
    /**
    * 周期购商品信息
    * @var WeimobShopTradePassAuditTradeOrderParamCycleInfoReq
    */
    private $cycleInfoReq;

    /**
    * @param WeimobShopTradePassAuditTradeOrderParamCycleInfoReq $cycleInfoReq
    */
    public function setCycleInfoReq(?WeimobShopTradePassAuditTradeOrderParamCycleInfoReq $cycleInfoReq)
    {
        $this->cycleInfoReq = $cycleInfoReq;
    }

    /**
    * @return WeimobShopTradePassAuditTradeOrderParamCycleInfoReq
    */
    public function getCycleInfoReq(): ?WeimobShopTradePassAuditTradeOrderParamCycleInfoReq
    {
        return $this->cycleInfoReq;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradePassAuditTradeOrderParamCycleInfoReq implements \JsonSerializable
{
    /**
    * 商品能力Id(例如：周期购的总期数对应的ID)
    * @var string
    */
    private $cycleBizId;

    /**
    * @param string $cycleBizId
    */
    public function setCycleBizId(?string $cycleBizId)
    {
        $this->cycleBizId = $cycleBizId;
    }

    /**
    * @return string
    */
    public function getCycleBizId(): ?string
    {
        return $this->cycleBizId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradePassAuditTradeOrderParamUseActivityList implements \JsonSerializable
{
    /**
    * 折扣优惠名称编码
    * @var string
    */
    private $activityId;

    /**
    * 折扣优惠名称
    * @var string
    */
    private $activityName;

    /**
    * 折扣优惠类型
    * @var int
    */
    private $activityType;

    /**
    * 折扣优惠类型金额(BigDecimal)
    * @var string
    */
    private $discountAmount;

    /**
    * 拼团砍价的订单号id
    * @var string
    */
    private $discountBizOrderId;

    /**
    * 套装活动的分组Key
    * @var string
    */
    private $groupKey;

    /**
    * 活动层级
    * @var int
    */
    private $level;

    /**
    * 活动模版ID
    * @var int
    */
    private $templateId;

    /**
    * @param string $activityId
    */
    public function setActivityId(?string $activityId)
    {
        $this->activityId = $activityId;
    }

    /**
    * @return string
    */
    public function getActivityId(): ?string
    {
        return $this->activityId;
    }

    /**
    * @param string $activityName
    */
    public function setActivityName(?string $activityName)
    {
        $this->activityName = $activityName;
    }

    /**
    * @return string
    */
    public function getActivityName(): ?string
    {
        return $this->activityName;
    }

    /**
    * @param int $activityType
    */
    public function setActivityType(?int $activityType)
    {
        $this->activityType = $activityType;
    }

    /**
    * @return int
    */
    public function getActivityType(): ?int
    {
        return $this->activityType;
    }

    /**
    * @param string $discountAmount
    */
    public function setDiscountAmount(?string $discountAmount)
    {
        $this->discountAmount = $discountAmount;
    }

    /**
    * @return string
    */
    public function getDiscountAmount(): ?string
    {
        return $this->discountAmount;
    }

    /**
    * @param string $discountBizOrderId
    */
    public function setDiscountBizOrderId(?string $discountBizOrderId)
    {
        $this->discountBizOrderId = $discountBizOrderId;
    }

    /**
    * @return string
    */
    public function getDiscountBizOrderId(): ?string
    {
        return $this->discountBizOrderId;
    }

    /**
    * @param string $groupKey
    */
    public function setGroupKey(?string $groupKey)
    {
        $this->groupKey = $groupKey;
    }

    /**
    * @return string
    */
    public function getGroupKey(): ?string
    {
        return $this->groupKey;
    }

    /**
    * @param int $level
    */
    public function setLevel(?int $level)
    {
        $this->level = $level;
    }

    /**
    * @return int
    */
    public function getLevel(): ?int
    {
        return $this->level;
    }

    /**
    * @param int $templateId
    */
    public function setTemplateId(?int $templateId)
    {
        $this->templateId = $templateId;
    }

    /**
    * @return int
    */
    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradePassAuditTradeOrderParamItemProductInfo implements \JsonSerializable
{
    /**
    * ""
    * @var array
    */
    private $productDetailList;

    /**
    * @param array $productDetailList
    */
    public function setProductDetailList(?array $productDetailList)
    {
        $this->productDetailList = $productDetailList;
    }

    /**
    * @return array
    */
    public function getProductDetailList(): ?array
    {
        return $this->productDetailList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradePassAuditTradeOrderParamProductDetailList implements \JsonSerializable
{
    /**
    * ""
    * @var array
    */
    private $warehouseList;

    /**
    * @param array $warehouseList
    */
    public function setWarehouseList(?array $warehouseList)
    {
        $this->warehouseList = $warehouseList;
    }

    /**
    * @return array
    */
    public function getWarehouseList(): ?array
    {
        return $this->warehouseList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradePassAuditTradeOrderParamWarehouseList implements \JsonSerializable
{
    /**
    * ""
    * @var int
    */
    private $warehouseId;

    /**
    * ""
    * @var string
    */
    private $warehouseName;

    /**
    * ""
    * @var string
    */
    private $warehouseType;

    /**
    * @param int $warehouseId
    */
    public function setWarehouseId(?int $warehouseId)
    {
        $this->warehouseId = $warehouseId;
    }

    /**
    * @return int
    */
    public function getWarehouseId(): ?int
    {
        return $this->warehouseId;
    }

    /**
    * @param string $warehouseName
    */
    public function setWarehouseName(?string $warehouseName)
    {
        $this->warehouseName = $warehouseName;
    }

    /**
    * @return string
    */
    public function getWarehouseName(): ?string
    {
        return $this->warehouseName;
    }

    /**
    * @param string $warehouseType
    */
    public function setWarehouseType(?string $warehouseType)
    {
        $this->warehouseType = $warehouseType;
    }

    /**
    * @return string
    */
    public function getWarehouseType(): ?string
    {
        return $this->warehouseType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradePassAuditTradeOrderParamGoodsExtMap implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradePassAuditTradeOrderParamGoodsAbilityList implements \JsonSerializable
{
    /**
    * Objects
    * @var WeimobShopTradePassAuditTradeOrderParamAbilityDetailInfo
    */
    private $abilityDetailInfo;

    /**
    * ""
    * @var string
    */
    private $abilityCode;

    /**
    * ""
    * @var int
    */
    private $abilityType;

    /**
    * ""
    * @var string
    */
    private $bizId;

    /**
    * @param WeimobShopTradePassAuditTradeOrderParamAbilityDetailInfo $abilityDetailInfo
    */
    public function setAbilityDetailInfo(?WeimobShopTradePassAuditTradeOrderParamAbilityDetailInfo $abilityDetailInfo)
    {
        $this->abilityDetailInfo = $abilityDetailInfo;
    }

    /**
    * @return WeimobShopTradePassAuditTradeOrderParamAbilityDetailInfo
    */
    public function getAbilityDetailInfo(): ?WeimobShopTradePassAuditTradeOrderParamAbilityDetailInfo
    {
        return $this->abilityDetailInfo;
    }

    /**
    * @param string $abilityCode
    */
    public function setAbilityCode(?string $abilityCode)
    {
        $this->abilityCode = $abilityCode;
    }

    /**
    * @return string
    */
    public function getAbilityCode(): ?string
    {
        return $this->abilityCode;
    }

    /**
    * @param int $abilityType
    */
    public function setAbilityType(?int $abilityType)
    {
        $this->abilityType = $abilityType;
    }

    /**
    * @return int
    */
    public function getAbilityType(): ?int
    {
        return $this->abilityType;
    }

    /**
    * @param string $bizId
    */
    public function setBizId(?string $bizId)
    {
        $this->bizId = $bizId;
    }

    /**
    * @return string
    */
    public function getBizId(): ?string
    {
        return $this->bizId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradePassAuditTradeOrderParamAbilityDetailInfo implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradePassAuditTradeOrderParamPaymentInfo implements \JsonSerializable
{
    /**
    * 抵扣资产（积分、余额、）
    * @var array
    */
    private $DeductibleAssetList;

    /**
    * 实付金额(BigDecimal)
    * @var string
    */
    private $paymentAmount;

    /**
    * 总金额(BigDecimal)
    * @var string
    */
    private $totalAmount;

    /**
    * 应付金额
    * @var string
    */
    private $shouldPaymentAmount;

    /**
    * 优惠总金额(BigDecimal)
    * @var string
    */
    private $totalDiscountAmount;

    /**
    * @param array $DeductibleAssetList
    */
    public function setDeductibleAssetList(?array $DeductibleAssetList)
    {
        $this->DeductibleAssetList = $DeductibleAssetList;
    }

    /**
    * @return array
    */
    public function getDeductibleAssetList(): ?array
    {
        return $this->DeductibleAssetList;
    }

    /**
    * @param string $paymentAmount
    */
    public function setPaymentAmount(?string $paymentAmount)
    {
        $this->paymentAmount = $paymentAmount;
    }

    /**
    * @return string
    */
    public function getPaymentAmount(): ?string
    {
        return $this->paymentAmount;
    }

    /**
    * @param string $totalAmount
    */
    public function setTotalAmount(?string $totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    /**
    * @return string
    */
    public function getTotalAmount(): ?string
    {
        return $this->totalAmount;
    }

    /**
    * @param string $shouldPaymentAmount
    */
    public function setShouldPaymentAmount(?string $shouldPaymentAmount)
    {
        $this->shouldPaymentAmount = $shouldPaymentAmount;
    }

    /**
    * @return string
    */
    public function getShouldPaymentAmount(): ?string
    {
        return $this->shouldPaymentAmount;
    }

    /**
    * @param string $totalDiscountAmount
    */
    public function setTotalDiscountAmount(?string $totalDiscountAmount)
    {
        $this->totalDiscountAmount = $totalDiscountAmount;
    }

    /**
    * @return string
    */
    public function getTotalDiscountAmount(): ?string
    {
        return $this->totalDiscountAmount;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradePassAuditTradeOrderParamDeductibleAssetList implements \JsonSerializable
{
    /**
    * 抵扣类型
    * @var int
    */
    private $type;

    /**
    * 抵扣金额(BigDecimal)
    * @var string
    */
    private $amount;

    /**
    * @param int $type
    */
    public function setType(?int $type)
    {
        $this->type = $type;
    }

    /**
    * @return int
    */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
    * @param string $amount
    */
    public function setAmount(?string $amount)
    {
        $this->amount = $amount;
    }

    /**
    * @return string
    */
    public function getAmount(): ?string
    {
        return $this->amount;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobShopTradePassAuditTradeOrderResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobShopTradePassAuditTradeOrderData
    */
    private $data;

    /**
    * @return int
    */
    public function getCode(): ?PaasResponseCode
    {
        return $this->code;
    }

    /**
    * @param PaasResponseCode $code
    */
    public function setCode(?PaasResponseCode $code): void
    {
        $this->code = $code;
    }

    /**
    * @return WeimobShopTradePassAuditTradeOrderData
    */
    public function getData(): ?WeimobShopTradePassAuditTradeOrderData
    {
        return $this->data;
    }

    /**
    * @param WeimobShopTradePassAuditTradeOrderData $data
    */
    public function setData(?WeimobShopTradePassAuditTradeOrderData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradePassAuditTradeOrderData implements \JsonSerializable
{
    /**
    * ""
    * @var WeimobShopTradePassAuditTradeOrderDataCommitInfo
    */
    private $commitInfo;

    /**
    * @param WeimobShopTradePassAuditTradeOrderDataCommitInfo $commitInfo
    */
    public function setCommitInfo(?WeimobShopTradePassAuditTradeOrderDataCommitInfo $commitInfo)
    {
        $this->commitInfo = $commitInfo;
    }

    /**
    * @return WeimobShopTradePassAuditTradeOrderDataCommitInfo
    */
    public function getCommitInfo(): ?WeimobShopTradePassAuditTradeOrderDataCommitInfo
    {
        return $this->commitInfo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradePassAuditTradeOrderDataCommitInfo implements \JsonSerializable
{
    /**
    * 是否可以提交
    * @var bool
    */
    private $commitInfo;

    /**
    * 不能提交原因
    * @var string
    */
    private $unCommitReason	;

    /**
    * @param bool $commitInfo
    */
    public function setCommitInfo(?bool $commitInfo)
    {
        $this->commitInfo = $commitInfo;
    }

    /**
    * @return bool
    */
    public function getCommitInfo(): ?bool
    {
        return $this->commitInfo;
    }

    /**
    * @param string $unCommitReason	
    */
    public function setUnCommitReason	(?string $unCommitReason	)
    {
        $this->unCommitReason	 = $unCommitReason	;
    }

    /**
    * @return string
    */
    public function getUnCommitReason	(): ?string
    {
        return $this->unCommitReason	;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

