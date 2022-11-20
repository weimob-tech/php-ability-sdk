<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,367
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobShopTradeOrderAuditService
{
    const specType = 'wos';

    public function invoke(WeimobShopTradeOrderAuditRequest $request) : WeimobShopTradeOrderAuditResponse;
}

class WeimobShopTradeOrderAuditRequest implements \JsonSerializable
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
     * @var WeimobShopTradeOrderAuditParam
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
     * @param WeimobShopTradeOrderAuditParam $param
     */
    public function setParam(?WeimobShopTradeOrderAuditParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobShopTradeOrderAuditParam
     */
    public function getParam(): ?WeimobShopTradeOrderAuditParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeOrderAuditParam implements \JsonSerializable
{
    /**
     * 结算订单信息
     * @var array
     */
    private $orderList;

    /**
     * 基础信息
     * @var WeimobShopTradeOrderAuditParamBasicInfo
     */
    private $basicInfo;

    /**
     * 扩展信息
     * @var WeimobShopTradeOrderAuditParamExtendInfo
     */
    private $extendInfo;

    /**
     * 用户 ID，是微盟用户身份的唯一标识。
     * @var int
     */
    private $wid;

    /**
     * 父订单号。可以通过 weimob_shop/order/list/search 接口获取该 ID。
     * @var int
     */
    private $parentOrderNo;

    /**
     * @param array $orderList
     */
    public function setOrderList(?array $orderList): void
    {
        $this->orderList = $orderList;
    }

    /**
     * @return array
     */
    public function getOrderList(): ?array
    {
        return $this->orderList;
    }

    /**
     * @param WeimobShopTradeOrderAuditParamBasicInfo $basicInfo
     */
    public function setBasicInfo(?WeimobShopTradeOrderAuditParamBasicInfo $basicInfo): void
    {
        $this->basicInfo = $basicInfo;
    }

    /**
     * @return WeimobShopTradeOrderAuditParamBasicInfo
     */
    public function getBasicInfo(): ?WeimobShopTradeOrderAuditParamBasicInfo
    {
        return $this->basicInfo;
    }

    /**
     * @param WeimobShopTradeOrderAuditParamExtendInfo $extendInfo
     */
    public function setExtendInfo(?WeimobShopTradeOrderAuditParamExtendInfo $extendInfo): void
    {
        $this->extendInfo = $extendInfo;
    }

    /**
     * @return WeimobShopTradeOrderAuditParamExtendInfo
     */
    public function getExtendInfo(): ?WeimobShopTradeOrderAuditParamExtendInfo
    {
        return $this->extendInfo;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeOrderAuditParamOrderList implements \JsonSerializable
{
    /**
     * 商品级列表
     * @var array
     */
    private $goodsList;

    /**
     * 支付信息
     * @var WeimobShopTradeOrderAuditParamPaymentInfo
     */
    private $paymentInfo;

    /**
     * 订单自定义字段
     * @var array
     */
    private $customFieldList;

    /**
     * 订单号。可以通过 weimob_shop/order/list/search 接口获取该 ID。
     * @var int
     */
    private $orderNo;

    /**
     * 服务门店节点id。可以通过 bos/organization/getList 接口获取该 ID。
     * @var int
     */
    private $vid;

    /**
     * 节点名称
     * @var string
     */
    private $vidName;

    /**
     * @param array $goodsList
     */
    public function setGoodsList(?array $goodsList): void
    {
        $this->goodsList = $goodsList;
    }

    /**
     * @return array
     */
    public function getGoodsList(): ?array
    {
        return $this->goodsList;
    }

    /**
     * @param WeimobShopTradeOrderAuditParamPaymentInfo $paymentInfo
     */
    public function setPaymentInfo(?WeimobShopTradeOrderAuditParamPaymentInfo $paymentInfo): void
    {
        $this->paymentInfo = $paymentInfo;
    }

    /**
     * @return WeimobShopTradeOrderAuditParamPaymentInfo
     */
    public function getPaymentInfo(): ?WeimobShopTradeOrderAuditParamPaymentInfo
    {
        return $this->paymentInfo;
    }

    /**
     * @param array $customFieldList
     */
    public function setCustomFieldList(?array $customFieldList): void
    {
        $this->customFieldList = $customFieldList;
    }

    /**
     * @return array
     */
    public function getCustomFieldList(): ?array
    {
        return $this->customFieldList;
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
     * @param string $vidName
     */
    public function setVidName(?string $vidName): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeOrderAuditParamGoodsList implements \JsonSerializable
{
    /**
     * 商品能力信息
     * @var array
     */
    private $goodsAbilityList;

    /**
     * 品类信息
     * @var WeimobShopTradeOrderAuditParamGoodsExtMap
     */
    private $goodsExtMap;

    /**
     * 商品仓库信息
     * @var WeimobShopTradeOrderAuditParamItemProductInfo
     */
    private $itemProductInfo;

    /**
     * 使用的活动集合
     * @var array
     */
    private $useActivityList;

    /**
     * 商品留言
     * @var array
     */
    private $itemMessageList;

    /**
     * 购买数量
     * @var int
     */
    private $buyNum;

    /**
     * 商品 ID。可以通过 weimob_shop/goods/getList 接口获取该 ID。
     * @var int
     */
    private $goodsId;

    /**
     * 商品类型:普通商品-1；虚拟商品-2；
     * @var int
     */
    private $goodsType;

    /**
     * 订单项id。可以通过weimob_shop/order/detail/get获取。
     * @var int
     */
    private $itemId;

    /**
     * 商品规格ID。可以通过 weimob_shop/goods/get接口获取该 ID。
     * @var int
     */
    private $skuId;

    /**
     * 商品销售价格，以元为单位，精确到小数点后两位。
     * @var int
     */
    private $skuSalePrice;

    /**
     * 商品销售模式：1-现货；2-预售；周期购-4；
     * @var int
     */
    private $soldType;

    /**
     * 商品子类型：普通商品-101；海淘商品-102；普通商品-无需物流-103；普通虚拟商品-201；付费券-202；
     * @var int
     */
    private $subGoodsType;

    /**
     * 结算商品类型：1-主商品;2-赠品;3-换购商品;
     * @var int
     */
    private $tradeGoodsType;

    /**
     * sku编码(规格编码)。可以通过 weimob_shop/goods/get接口获取该值。
     * @var string
     */
    private $skuCode;

    /**
     * 市场价。以元为单位，精确到小数点后两位。
     * @var string
     */
    private $skuMarketPrice;

    /**
     * @param array $goodsAbilityList
     */
    public function setGoodsAbilityList(?array $goodsAbilityList): void
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
     * @param WeimobShopTradeOrderAuditParamGoodsExtMap $goodsExtMap
     */
    public function setGoodsExtMap(?WeimobShopTradeOrderAuditParamGoodsExtMap $goodsExtMap): void
    {
        $this->goodsExtMap = $goodsExtMap;
    }

    /**
     * @return WeimobShopTradeOrderAuditParamGoodsExtMap
     */
    public function getGoodsExtMap(): ?WeimobShopTradeOrderAuditParamGoodsExtMap
    {
        return $this->goodsExtMap;
    }

    /**
     * @param WeimobShopTradeOrderAuditParamItemProductInfo $itemProductInfo
     */
    public function setItemProductInfo(?WeimobShopTradeOrderAuditParamItemProductInfo $itemProductInfo): void
    {
        $this->itemProductInfo = $itemProductInfo;
    }

    /**
     * @return WeimobShopTradeOrderAuditParamItemProductInfo
     */
    public function getItemProductInfo(): ?WeimobShopTradeOrderAuditParamItemProductInfo
    {
        return $this->itemProductInfo;
    }

    /**
     * @param array $useActivityList
     */
    public function setUseActivityList(?array $useActivityList): void
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
     * @param array $itemMessageList
     */
    public function setItemMessageList(?array $itemMessageList): void
    {
        $this->itemMessageList = $itemMessageList;
    }

    /**
     * @return array
     */
    public function getItemMessageList(): ?array
    {
        return $this->itemMessageList;
    }

    /**
     * @param int $buyNum
     */
    public function setBuyNum(?int $buyNum): void
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
     * @param int $goodsId
     */
    public function setGoodsId(?int $goodsId): void
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
     * @param int $goodsType
     */
    public function setGoodsType(?int $goodsType): void
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
     * @param int $itemId
     */
    public function setItemId(?int $itemId): void
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
     * @param int $skuId
     */
    public function setSkuId(?int $skuId): void
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
     * @param int $skuSalePrice
     */
    public function setSkuSalePrice(?int $skuSalePrice): void
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
     * @param int $soldType
     */
    public function setSoldType(?int $soldType): void
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

    /**
     * @param int $subGoodsType
     */
    public function setSubGoodsType(?int $subGoodsType): void
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
     * @param int $tradeGoodsType
     */
    public function setTradeGoodsType(?int $tradeGoodsType): void
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
     * @param string $skuCode
     */
    public function setSkuCode(?string $skuCode): void
    {
        $this->skuCode = $skuCode;
    }

    /**
     * @return string
     */
    public function getSkuCode(): ?string
    {
        return $this->skuCode;
    }

    /**
     * @param string $skuMarketPrice
     */
    public function setSkuMarketPrice(?string $skuMarketPrice): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeOrderAuditParamGoodsAbilityList implements \JsonSerializable
{
    /**
     * 能力详情信息
     * @var WeimobShopTradeOrderAuditParamAbilityDetailInfo
     */
    private $abilityDetailInfo;

    /**
     * 能力编码 唯一标识一种能力，目前商品实用的能力可以多个，但不能重复 1001:抽签购 1002:周期购 2001:积分商城
     * @var string
     */
    private $abilityCode;

    /**
     * 能力类型 1:售卖类型 2:支付类型
     * @var int
     */
    private $abilityType;

    /**
     * 能力业务ID。可以通过weimob_shop/goods/get获取
     * @var string
     */
    private $bizId;

    /**
     * @param WeimobShopTradeOrderAuditParamAbilityDetailInfo $abilityDetailInfo
     */
    public function setAbilityDetailInfo(?WeimobShopTradeOrderAuditParamAbilityDetailInfo $abilityDetailInfo): void
    {
        $this->abilityDetailInfo = $abilityDetailInfo;
    }

    /**
     * @return WeimobShopTradeOrderAuditParamAbilityDetailInfo
     */
    public function getAbilityDetailInfo(): ?WeimobShopTradeOrderAuditParamAbilityDetailInfo
    {
        return $this->abilityDetailInfo;
    }

    /**
     * @param string $abilityCode
     */
    public function setAbilityCode(?string $abilityCode): void
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
    public function setAbilityType(?int $abilityType): void
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
    public function setBizId(?string $bizId): void
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

class WeimobShopTradeOrderAuditParamAbilityDetailInfo implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeOrderAuditParamGoodsExtMap implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeOrderAuditParamItemProductInfo implements \JsonSerializable
{
    /**
     * 产品明细列表
     * @var array
     */
    private $productDetailList;

    /**
     * @param array $productDetailList
     */
    public function setProductDetailList(?array $productDetailList): void
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

class WeimobShopTradeOrderAuditParamProductDetailList implements \JsonSerializable
{
    /**
     * 仓库信息列表
     * @var array
     */
    private $warehouseList;

    /**
     * @param array $warehouseList
     */
    public function setWarehouseList(?array $warehouseList): void
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

class WeimobShopTradeOrderAuditParamWarehouseList implements \JsonSerializable
{
    /**
     * 仓库ID。可以通过获取仓库列表weimob_shop/stock/warehouse/getList获取
     * @var int
     */
    private $warehouseId;

    /**
     * 仓库名称
     * @var string
     */
    private $warehouseName;

    /**
     * 仓库类型 1-商家仓；2-门店仓；3-外部仓。
     * @var string
     */
    private $warehouseType;

    /**
     * @param int $warehouseId
     */
    public function setWarehouseId(?int $warehouseId): void
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
    public function setWarehouseName(?string $warehouseName): void
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
    public function setWarehouseType(?string $warehouseType): void
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

class WeimobShopTradeOrderAuditParamUseActivityList implements \JsonSerializable
{
    /**
     * 优惠 ID。可以通过 weimob_shop/order/list/search 接口获取该 ID。
     * @var string
     */
    private $activityId;

    /**
     * 折扣优惠名称
     * @var string
     */
    private $activityName;

    /**
     * 折扣优惠类型：1-满减满折;2-满减邮;3-限时折扣;4-砍价;5-拼团;6-优惠券;9-优惠码;10-特权价;11-支付推广;12-N元N件;13-优惠套装;14-加价购;17-会员优惠;19-社区团购;20-限量抢购;21-礼品卡;24-定金膨胀;25-阶梯价;28-整单优惠;29-抹零;31-直播砍价;32-满赠;33-储值卡抵扣;35-一口价;37-第X件X折;38-支付优惠;41-直播价;42-余额抵扣;43-积分抵扣;44-订单改价;99-外部优惠方式;1000-使用的积分;1001-商家折扣金额;1002-积分折扣金额;1003-余额抵扣金额;1004-运费抵扣金额;1005-抵扣运费使用积分;1006-积分抵扣运费金额;1007-余额抵扣运费金额;1008-折扣金额以及折扣信息;1009-满包邮折扣信息;
     * @var int
     */
    private $activityType;

    /**
     * 折扣优惠类型金额。以元为单位，精确到小数点后两位。
     * @var int
     */
    private $discountAmount;

    /**
     * 活动层级
     * @var int
     */
    private $level;

    /**
     * 套装活动的分组Key
     * @var string
     */
    private $groupKey;

    /**
     * 拼团砍价的订单号id
     * @var string
     */
    private $discountBizOrderId;

    /**
     * @param string $activityId
     */
    public function setActivityId(?string $activityId): void
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
    public function setActivityName(?string $activityName): void
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
    public function setActivityType(?int $activityType): void
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
     * @param int $discountAmount
     */
    public function setDiscountAmount(?int $discountAmount): void
    {
        $this->discountAmount = $discountAmount;
    }

    /**
     * @return int
     */
    public function getDiscountAmount(): ?int
    {
        return $this->discountAmount;
    }

    /**
     * @param int $level
     */
    public function setLevel(?int $level): void
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
     * @param string $groupKey
     */
    public function setGroupKey(?string $groupKey): void
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
     * @param string $discountBizOrderId
     */
    public function setDiscountBizOrderId(?string $discountBizOrderId): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeOrderAuditParamItemMessageList implements \JsonSerializable
{
    /**
     * 键名
     * @var string
     */
    private $key;

    /**
     * 字段名称
     * @var string
     */
    private $name;

    /**
     * 用户输入的值
     * @var string
     */
    private $value;

    /**
     * @param string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeOrderAuditParamPaymentInfo implements \JsonSerializable
{
    /**
     * 抵扣资产
     * @var array
     */
    private $deductibleAssets;

    /**
     * 实付金额，以元为单位，精确到小数点后两位。
     * @var int
     */
    private $paymentAmount;

    /**
     * 应付金额，以元为单位，精确到小数点后两位。
     * @var int
     */
    private $shouldPaymentAmount;

    /**
     * 总金额，以元为单位，精确到小数点后两位。
     * @var string
     */
    private $totalAmount;

    /**
     * 优惠总金额，以元为单位，精确到小数点后两位。
     * @var string
     */
    private $totalDiscountAmount;

    /**
     * @param array $deductibleAssets
     */
    public function setDeductibleAssets(?array $deductibleAssets): void
    {
        $this->deductibleAssets = $deductibleAssets;
    }

    /**
     * @return array
     */
    public function getDeductibleAssets(): ?array
    {
        return $this->deductibleAssets;
    }

    /**
     * @param int $paymentAmount
     */
    public function setPaymentAmount(?int $paymentAmount): void
    {
        $this->paymentAmount = $paymentAmount;
    }

    /**
     * @return int
     */
    public function getPaymentAmount(): ?int
    {
        return $this->paymentAmount;
    }

    /**
     * @param int $shouldPaymentAmount
     */
    public function setShouldPaymentAmount(?int $shouldPaymentAmount): void
    {
        $this->shouldPaymentAmount = $shouldPaymentAmount;
    }

    /**
     * @return int
     */
    public function getShouldPaymentAmount(): ?int
    {
        return $this->shouldPaymentAmount;
    }

    /**
     * @param string $totalAmount
     */
    public function setTotalAmount(?string $totalAmount): void
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
     * @param string $totalDiscountAmount
     */
    public function setTotalDiscountAmount(?string $totalDiscountAmount): void
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

class WeimobShopTradeOrderAuditParamDeductibleAssets implements \JsonSerializable
{
    /**
     * 抵扣金额。以元为单位，精确到小数点后两位。
     * @var int
     */
    private $amount;

    /**
     * 折扣优惠类型：1-满减满折;2-满减邮;3-限时折扣;4-砍价;5-拼团;6-优惠券;9-优惠码;10-特权价;11-支付推广;12-N元N件;13-优惠套装;14-加价购;17-会员优惠;19-社区团购;20-限量抢购;21-礼品卡;24-定金膨胀;25-阶梯价;28-整单优惠;29-抹零;31-直播砍价;32-满赠;33-储值卡抵扣;35-一口价;37-第X件X折;38-支付优惠;41-直播价;42-余额抵扣;43-积分抵扣;44-订单改价;99-外部优惠方式;1000-使用的积分;1001-商家折扣金额;1002-积分折扣金额;1003-余额抵扣金额;1004-运费抵扣金额;1005-抵扣运费使用积分;1006-积分抵扣运费金额;1007-余额抵扣运费金额;1008-折扣金额以及折扣信息;1009-满包邮折扣信息;
     * @var int
     */
    private $type;

    /**
     * @param int $amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int $type
     */
    public function setType(?int $type): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeOrderAuditParamCustomFieldList implements \JsonSerializable
{
    /**
     * 键名
     * @var string
     */
    private $key;

    /**
     * 字段名称
     * @var string
     */
    private $name;

    /**
     * 用户输入的值
     * @var string
     */
    private $value;

    /**
     * @param string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeOrderAuditParamBasicInfo implements \JsonSerializable
{
    /**
     * 商家 ID。可以通过 weimob_shop/order/list/search 接口获取该 ID。
     * @var int
     */
    private $merchantId;

    /**
     * 微盟新商业操作系统 ID。WOS 体系下商家创建店铺时，会自动生成 bosId，是店铺的唯一标识。可以在商家后台店铺设置的组织架构页面获取该 ID，也可以通过 bos/info/get 接口获取该 ID。
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
     * 销售门店 ID。可以通过 bos/organization/getList 接口获取该 ID。
     * @var int
     */
    private $vid;

    /**
     * 组织架构节点类型。类型包括：1-集团；2-品牌；3-区域；4部门；5-商场；6-楼层；10-门店；11-网点；100-自提点。
     * @var int
     */
    private $vidType;

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
     * @param int $sourceProductId
     */
    public function setSourceProductId(?int $sourceProductId): void
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
    public function setSourceProductVersionId(?int $sourceProductVersionId): void
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
    public function setSourceProductInstanceId(?int $sourceProductInstanceId): void
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
     * @param int $vidType
     */
    public function setVidType(?int $vidType): void
    {
        $this->vidType = $vidType;
    }

    /**
     * @return int
     */
    public function getVidType(): ?int
    {
        return $this->vidType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeOrderAuditParamExtendInfo implements \JsonSerializable
{
    /**
     * 渠道类型。支持的类型包括：0-微信h5；1-微信小程序；2-非微信环境h5；5-字节跳动小程序webview-H5；6-支付宝小程序webview-H5；8-安卓app；9-苹果app；10-百度小程序webview-H5；11-pad；12-自有app(App开店)；13-微信小程序webview；14-微信小程序webview-直播；15-线下大屏；16-企业微信；17-字节跳动小程序原生；18-芸智免密；19-qq小程序原生；20-qq小程序webview-H5；21-支付宝小程序原生；22-微信小商店；23-快手小程序原生；24-快手小程序webview-H5；25-小红书小程序原生；26-小红书小程序webview-H5；27-直播半屏小程序；28-直播h5-微信小程序webview-H5
     * @var int
     */
    private $source;

    /**
     * 销售渠道。 1: 线上;2: 线下
     * @var int
     */
    private $salesChannel;

    /**
     * 单次结算唯一标识
     * @var string
     */
    private $tradeTrackId;

    /**
     * @param int $source
     */
    public function setSource(?int $source): void
    {
        $this->source = $source;
    }

    /**
     * @return int
     */
    public function getSource(): ?int
    {
        return $this->source;
    }

    /**
     * @param int $salesChannel
     */
    public function setSalesChannel(?int $salesChannel): void
    {
        $this->salesChannel = $salesChannel;
    }

    /**
     * @return int
     */
    public function getSalesChannel(): ?int
    {
        return $this->salesChannel;
    }

    /**
     * @param string $tradeTrackId
     */
    public function setTradeTrackId(?string $tradeTrackId): void
    {
        $this->tradeTrackId = $tradeTrackId;
    }

    /**
     * @return string
     */
    public function getTradeTrackId(): ?string
    {
        return $this->tradeTrackId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobShopTradeOrderAuditResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobShopTradeOrderAuditData
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
     * @return WeimobShopTradeOrderAuditData
     */
    public function getData(): ?WeimobShopTradeOrderAuditData
    {
        return $this->data;
    }

    /**
     * @param WeimobShopTradeOrderAuditData $data
     */
    public function setData(?WeimobShopTradeOrderAuditData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeOrderAuditData implements \JsonSerializable
{
    /**
     * 返回信息
     * @var WeimobShopTradeOrderAuditDataCommitInfo
     */
    private $commitInfo;

    /**
     * @param WeimobShopTradeOrderAuditDataCommitInfo $commitInfo
     */
    public function setCommitInfo(?WeimobShopTradeOrderAuditDataCommitInfo $commitInfo): void
    {
        $this->commitInfo = $commitInfo;
    }

    /**
     * @return WeimobShopTradeOrderAuditDataCommitInfo
     */
    public function getCommitInfo(): ?WeimobShopTradeOrderAuditDataCommitInfo
    {
        return $this->commitInfo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeOrderAuditDataCommitInfo implements \JsonSerializable
{
    /**
     * 是否可以提交
     * @var bool
     */
    private $allowCommit;

    /**
     * 不能提交原因
     * @var bool
     */
    private $unCommitReason;

    /**
     * @param bool $allowCommit
     */
    public function setAllowCommit(?bool $allowCommit): void
    {
        $this->allowCommit = $allowCommit;
    }

    /**
     * @return bool
     */
    public function getAllowCommit(): ?bool
    {
        return $this->allowCommit;
    }

    /**
     * @param bool $unCommitReason
     */
    public function setUnCommitReason(?bool $unCommitReason): void
    {
        $this->unCommitReason = $unCommitReason;
    }

    /**
     * @return bool
     */
    public function getUnCommitReason(): ?bool
    {
        return $this->unCommitReason;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

