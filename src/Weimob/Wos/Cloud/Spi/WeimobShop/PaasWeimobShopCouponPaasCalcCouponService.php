<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 581
 * @author weimobcloud
 * @create 2023-5-23
 */
interface PaasWeimobShopCouponPaasCalcCouponService
{
    const specType = 'wos';

    public function invoke(WeimobShopCouponPaasCalcCouponRequest $request) : WeimobShopCouponPaasCalcCouponResponse;
}

class WeimobShopCouponPaasCalcCouponRequest implements \JsonSerializable
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
     * @var WeimobShopCouponPaasCalcCouponParam
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
     * @param WeimobShopCouponPaasCalcCouponParam $param
     */
    public function setParam(?WeimobShopCouponPaasCalcCouponParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobShopCouponPaasCalcCouponParam
     */
    public function getParam(): ?WeimobShopCouponPaasCalcCouponParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasCalcCouponParam implements \JsonSerializable
{
    /**
     * 基础信息
     * @var WeimobShopCouponPaasCalcCouponParamBasicInfo
     */
    private $basicInfo;

    /**
     * 扩展信息
     * @var WeimobShopCouponPaasCalcCouponParamExtendInfo
     */
    private $extendInfo;

    /**
     * 商品信息
     * @var array
     */
    private $goodsTradeMetas;

    /**
     * 带入的活动信息
     * @var array
     */
    private $inputUserDiscountList;

    /**
     * 店铺标识
     * @var int
     */
    private $bosId;

    /**
     * 调用方产品ID
     * @var int
     */
    private $productId;

    /**
     * 调用方产品实例ID
     * @var int
     */
    private $productInstanceId;

    /**
     * 提供产品的租户
     * @var string
     */
    private $tcode;

    /**
     * 用户wid
     * @var int
     */
    private $wid;

    /**
     * 组织节点
     * @var int
     */
    private $vid;

    /**
     * vid节点类型：0-无类型,无业务意义;1-集团;2-品牌;3-区域;5-商场;10-门店;100-自提点;
     * @var int
     */
    private $vidType;

    /**
     * @param WeimobShopCouponPaasCalcCouponParamBasicInfo $basicInfo
     */
    public function setBasicInfo(?WeimobShopCouponPaasCalcCouponParamBasicInfo $basicInfo): void
    {
        $this->basicInfo = $basicInfo;
    }

    /**
     * @return WeimobShopCouponPaasCalcCouponParamBasicInfo
     */
    public function getBasicInfo(): ?WeimobShopCouponPaasCalcCouponParamBasicInfo
    {
        return $this->basicInfo;
    }

    /**
     * @param WeimobShopCouponPaasCalcCouponParamExtendInfo $extendInfo
     */
    public function setExtendInfo(?WeimobShopCouponPaasCalcCouponParamExtendInfo $extendInfo): void
    {
        $this->extendInfo = $extendInfo;
    }

    /**
     * @return WeimobShopCouponPaasCalcCouponParamExtendInfo
     */
    public function getExtendInfo(): ?WeimobShopCouponPaasCalcCouponParamExtendInfo
    {
        return $this->extendInfo;
    }

    /**
     * @param array $goodsTradeMetas
     */
    public function setGoodsTradeMetas(?array $goodsTradeMetas): void
    {
        $this->goodsTradeMetas = $goodsTradeMetas;
    }

    /**
     * @return array
     */
    public function getGoodsTradeMetas(): ?array
    {
        return $this->goodsTradeMetas;
    }

    /**
     * @param array $inputUserDiscountList
     */
    public function setInputUserDiscountList(?array $inputUserDiscountList): void
    {
        $this->inputUserDiscountList = $inputUserDiscountList;
    }

    /**
     * @return array
     */
    public function getInputUserDiscountList(): ?array
    {
        return $this->inputUserDiscountList;
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
     * @param string $tcode
     */
    public function setTcode(?string $tcode): void
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

class WeimobShopCouponPaasCalcCouponParamBasicInfo implements \JsonSerializable
{
    /**
     * 店铺标识
     * @var int
     */
    private $bosId;

    /**
     * 调用方产品ID
     * @var int
     */
    private $productId;

    /**
     * 调用方产品实例ID
     * @var int
     */
    private $productInstanceId;

    /**
     * 调用方产品实例版本号
     * @var int
     */
    private $productVersionId;

    /**
     * 组织结构节点
     * @var int
     */
    private $vid;

    /**
     * vid节点类型：0-无类型,无业务意义;1-集团;2-品牌;3-区域;5-商场;10-门店;100-自提点;
     * @var int
     */
    private $vidType;

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
     * @param int $productVersionId
     */
    public function setProductVersionId(?int $productVersionId): void
    {
        $this->productVersionId = $productVersionId;
    }

    /**
     * @return int
     */
    public function getProductVersionId(): ?int
    {
        return $this->productVersionId;
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

class WeimobShopCouponPaasCalcCouponParamExtendInfo implements \JsonSerializable
{
    /**
     * 全局调用链
     * @var string
     */
    private $globalTicket;

    /**
     * 销售渠道:1-线上;2-线下;
     * @var int
     */
    private $salesChannel;

    /**
     * 渠道类型：0-微信h5  ;1-微信小程序 ;2-非微信环境h5   ;5-字节跳动小程序webview-H5 ;6-支付宝小程序webview-H5  ;8-安卓app ;9-苹果app ;10-百度小程序webview-H5  ;11-pad  ;12-自有app(App开店) ;13-微信小程序webview ;14-微信小程序webview-直播  ;15-线下大屏 ;16-企业微信 ;17-字节跳动小程序原生    ;18-芸智免密 ;19-qq小程序原生  ;20-qq小程序webview-H5  ;21-支付宝小程序原生 ;22-微信小商店    ;23-快手小程序原生  ;24-快手小程序webview-H5  ;25-小红书小程序原生 ;26-小红书小程序webview-H5 ;27-直播半屏小程序  ;28-直播h5-微信小程序webview-H5 ;
     * @var int
     */
    private $source;

    /**
     * @param string $globalTicket
     */
    public function setGlobalTicket(?string $globalTicket): void
    {
        $this->globalTicket = $globalTicket;
    }

    /**
     * @return string
     */
    public function getGlobalTicket(): ?string
    {
        return $this->globalTicket;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasCalcCouponParamGoodsTradeMetas implements \JsonSerializable
{
    /**
     * 商品基础信息
     * @var WeimobShopCouponPaasCalcCouponParamBasicGoodsInfo
     */
    private $basicGoodsInfo;

    /**
     * 折扣信息
     * @var array
     */
    private $discountInfoList;

    /**
     * 带入的折扣信息
     * @var array
     */
    private $inputItemDiscountList;

    /**
     * 商品的互斥信息
     * @var WeimobShopCouponPaasCalcCouponParamMutex
     */
    private $mutex;

    /**
     * 交易信息
     * @var WeimobShopCouponPaasCalcCouponParamTradeGoodsInfo
     */
    private $tradeGoodsInfo;

    /**
     * @param WeimobShopCouponPaasCalcCouponParamBasicGoodsInfo $basicGoodsInfo
     */
    public function setBasicGoodsInfo(?WeimobShopCouponPaasCalcCouponParamBasicGoodsInfo $basicGoodsInfo): void
    {
        $this->basicGoodsInfo = $basicGoodsInfo;
    }

    /**
     * @return WeimobShopCouponPaasCalcCouponParamBasicGoodsInfo
     */
    public function getBasicGoodsInfo(): ?WeimobShopCouponPaasCalcCouponParamBasicGoodsInfo
    {
        return $this->basicGoodsInfo;
    }

    /**
     * @param array $discountInfoList
     */
    public function setDiscountInfoList(?array $discountInfoList): void
    {
        $this->discountInfoList = $discountInfoList;
    }

    /**
     * @return array
     */
    public function getDiscountInfoList(): ?array
    {
        return $this->discountInfoList;
    }

    /**
     * @param array $inputItemDiscountList
     */
    public function setInputItemDiscountList(?array $inputItemDiscountList): void
    {
        $this->inputItemDiscountList = $inputItemDiscountList;
    }

    /**
     * @return array
     */
    public function getInputItemDiscountList(): ?array
    {
        return $this->inputItemDiscountList;
    }

    /**
     * @param WeimobShopCouponPaasCalcCouponParamMutex $mutex
     */
    public function setMutex(?WeimobShopCouponPaasCalcCouponParamMutex $mutex): void
    {
        $this->mutex = $mutex;
    }

    /**
     * @return WeimobShopCouponPaasCalcCouponParamMutex
     */
    public function getMutex(): ?WeimobShopCouponPaasCalcCouponParamMutex
    {
        return $this->mutex;
    }

    /**
     * @param WeimobShopCouponPaasCalcCouponParamTradeGoodsInfo $tradeGoodsInfo
     */
    public function setTradeGoodsInfo(?WeimobShopCouponPaasCalcCouponParamTradeGoodsInfo $tradeGoodsInfo): void
    {
        $this->tradeGoodsInfo = $tradeGoodsInfo;
    }

    /**
     * @return WeimobShopCouponPaasCalcCouponParamTradeGoodsInfo
     */
    public function getTradeGoodsInfo(): ?WeimobShopCouponPaasCalcCouponParamTradeGoodsInfo
    {
        return $this->tradeGoodsInfo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasCalcCouponParamBasicGoodsInfo implements \JsonSerializable
{
    /**
     * 价格信息
     * @var array
     */
    private $priceInfo;

    /**
     * 商品编码
     * @var string
     */
    private $goodsCode;

    /**
     * 商品ID
     * @var int
     */
    private $goodsId;

    /**
     * 商品数量
     * @var int
     */
    private $num;

    /**
     * 商品销售模式：1-现货销售； 2-预售）
     * @var int
     */
    private $sellModelType;

    /**
     * sku编码
     * @var string
     */
    private $skuCode;

    /**
     * skuId
     * @var int
     */
    private $skuId;

    /**
     * 组织结构节点
     * @var int
     */
    private $vid;

    /**
     * vid节点类型：0-无类型,无业务意义;1-集团;2-品牌;3-区域;5-商场;10-门店;100-自提点;
     * @var int
     */
    private $vidType;

    /**
     * @param array $priceInfo
     */
    public function setPriceInfo(?array $priceInfo): void
    {
        $this->priceInfo = $priceInfo;
    }

    /**
     * @return array
     */
    public function getPriceInfo(): ?array
    {
        return $this->priceInfo;
    }

    /**
     * @param string $goodsCode
     */
    public function setGoodsCode(?string $goodsCode): void
    {
        $this->goodsCode = $goodsCode;
    }

    /**
     * @return string
     */
    public function getGoodsCode(): ?string
    {
        return $this->goodsCode;
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
     * @param int $num
     */
    public function setNum(?int $num): void
    {
        $this->num = $num;
    }

    /**
     * @return int
     */
    public function getNum(): ?int
    {
        return $this->num;
    }

    /**
     * @param int $sellModelType
     */
    public function setSellModelType(?int $sellModelType): void
    {
        $this->sellModelType = $sellModelType;
    }

    /**
     * @return int
     */
    public function getSellModelType(): ?int
    {
        return $this->sellModelType;
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

class WeimobShopCouponPaasCalcCouponParamPriceInfo implements \JsonSerializable
{
    /**
     * 价格(BigDecimal)
     * @var string
     */
    private $price;

    /**
     * 价格类型:1-销售价;2-市场价;3-定金价;4-运费;
     * @var int
     */
    private $type;

    /**
     * @param string $price
     */
    public function setPrice(?string $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getPrice(): ?string
    {
        return $this->price;
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

class WeimobShopCouponPaasCalcCouponParamDiscountInfoList implements \JsonSerializable
{
    /**
     * 折扣id
     * @var string
     */
    private $discountId;

    /**
     * 折扣类型:1-满减满折;27-跨店满减满折;1-跨境满减满折;2-第X件X折;2-跨境第X件X折;3-销售价优惠券;30-跨店销售价优惠券;4-优惠码;5-市场价优惠券;6-N元N件;7-固定套装;7-商圈固定套装;8-搭配套装;9-满赠;28-跨店满赠;10-订单加价购;11-满减邮;29-满减邮;12-限时折扣;12-跨店限时折扣;1201-跨境限时折扣;13-一口价;1301-cps专享价;14-限量抢购;15-定金膨胀;16-阶梯价;17-单品加价购;18-会员优惠;19-特权价;20-企业内购;22-砍价;21-拼团;23-积分抵扣;24-余额抵扣;25-储值卡抵扣;26-直播价;999-整单开单优惠;32-整单买单优惠;997-抹零;31-裂变内购;41-直播砍价;33-兑换卡抵扣;44-订单改价;50-销售价;34-必购码;34-商圈必购码;35-买M付N;35-商圈买M付N;
     * @var int
     */
    private $discountType;

    /**
     * 层级
     * @var int
     */
    private $discountLevel;

    /**
     * 顺序
     * @var int
     */
    private $order;

    /**
     * 优惠计算的基础金额， 在当前checkAmount上计算出discountAmoun(BigDecimal)
     * @var string
     */
    private $checkAmount;

    /**
     * 折扣优惠金额(BigDecimal)
     * @var string
     */
    private $discountAmount;

    /**
     * @param string $discountId
     */
    public function setDiscountId(?string $discountId): void
    {
        $this->discountId = $discountId;
    }

    /**
     * @return string
     */
    public function getDiscountId(): ?string
    {
        return $this->discountId;
    }

    /**
     * @param int $discountType
     */
    public function setDiscountType(?int $discountType): void
    {
        $this->discountType = $discountType;
    }

    /**
     * @return int
     */
    public function getDiscountType(): ?int
    {
        return $this->discountType;
    }

    /**
     * @param int $discountLevel
     */
    public function setDiscountLevel(?int $discountLevel): void
    {
        $this->discountLevel = $discountLevel;
    }

    /**
     * @return int
     */
    public function getDiscountLevel(): ?int
    {
        return $this->discountLevel;
    }

    /**
     * @param int $order
     */
    public function setOrder(?int $order): void
    {
        $this->order = $order;
    }

    /**
     * @return int
     */
    public function getOrder(): ?int
    {
        return $this->order;
    }

    /**
     * @param string $checkAmount
     */
    public function setCheckAmount(?string $checkAmount): void
    {
        $this->checkAmount = $checkAmount;
    }

    /**
     * @return string
     */
    public function getCheckAmount(): ?string
    {
        return $this->checkAmount;
    }

    /**
     * @param string $discountAmount
     */
    public function setDiscountAmount(?string $discountAmount): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasCalcCouponParamInputItemDiscountList implements \JsonSerializable
{
    /**
     * 折扣id
     * @var string
     */
    private $discountId;

    /**
     * 折扣类型:1-满减满折;27-跨店满减满折;1-跨境满减满折;2-第X件X折;2-跨境第X件X折;3-销售价优惠券;30-跨店销售价优惠券;4-优惠码;5-市场价优惠券;6-N元N件;7-固定套装;7-商圈固定套装;8-搭配套装;9-满赠;28-跨店满赠;10-订单加价购;11-满减邮;29-满减邮;12-限时折扣;12-跨店限时折扣;1201-跨境限时折扣;13-一口价;1301-cps专享价;14-限量抢购;15-定金膨胀;16-阶梯价;17-单品加价购;18-会员优惠;19-特权价;20-企业内购;22-砍价;21-拼团;23-积分抵扣;24-余额抵扣;25-储值卡抵扣;26-直播价;999-整单开单优惠;32-整单买单优惠;997-抹零;31-裂变内购;41-直播砍价;33-兑换卡抵扣;44-订单改价;50-销售价;34-必购码;34-商圈必购码;35-买M付N;35-商圈买M付N;	1
     * @var int
     */
    private $discountType;

    /**
     * 折扣状态： 1: 使用 2: 不使用;3:默认推荐
     * @var int
     */
    private $discountStatus;

    /**
     * 层级
     * @var int
     */
    private $discountLevel;

    /**
     * @param string $discountId
     */
    public function setDiscountId(?string $discountId): void
    {
        $this->discountId = $discountId;
    }

    /**
     * @return string
     */
    public function getDiscountId(): ?string
    {
        return $this->discountId;
    }

    /**
     * @param int $discountType
     */
    public function setDiscountType(?int $discountType): void
    {
        $this->discountType = $discountType;
    }

    /**
     * @return int
     */
    public function getDiscountType(): ?int
    {
        return $this->discountType;
    }

    /**
     * @param int $discountStatus
     */
    public function setDiscountStatus(?int $discountStatus): void
    {
        $this->discountStatus = $discountStatus;
    }

    /**
     * @return int
     */
    public function getDiscountStatus(): ?int
    {
        return $this->discountStatus;
    }

    /**
     * @param int $discountLevel
     */
    public function setDiscountLevel(?int $discountLevel): void
    {
        $this->discountLevel = $discountLevel;
    }

    /**
     * @return int
     */
    public function getDiscountLevel(): ?int
    {
        return $this->discountLevel;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasCalcCouponParamMutex implements \JsonSerializable
{
    /**
     * 自定义优惠类型:1-所有优惠可用;2-自定义优惠类型;
     * @var int
     */
    private $customDiscountType;

    /**
     * 可用的优惠列表
     * @var array
     */
    private $customDiscountTypeList;

    /**
     * @param int $customDiscountType
     */
    public function setCustomDiscountType(?int $customDiscountType): void
    {
        $this->customDiscountType = $customDiscountType;
    }

    /**
     * @return int
     */
    public function getCustomDiscountType(): ?int
    {
        return $this->customDiscountType;
    }

    /**
     * @param array $customDiscountTypeList
     */
    public function setCustomDiscountTypeList(?array $customDiscountTypeList): void
    {
        $this->customDiscountTypeList = $customDiscountTypeList;
    }

    /**
     * @return array
     */
    public function getCustomDiscountTypeList(): ?array
    {
        return $this->customDiscountTypeList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasCalcCouponParamTradeGoodsInfo implements \JsonSerializable
{
    /**
     * 交易商品id
     * @var int
     */
    private $itemId;

    /**
     * 结算商品类型：1-主商品;2-赠品;3-换购商品
     * @var int
     */
    private $tradeGoodsType;

    /**
     * 交易基准价(BigDecimal)
     * @var string
     */
    private $tradePrice;

    /**
     * 交易价格类型：1-市场价;2-销售价;
     * @var int
     */
    private $tradePriceType;

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
     * @param string $tradePrice
     */
    public function setTradePrice(?string $tradePrice): void
    {
        $this->tradePrice = $tradePrice;
    }

    /**
     * @return string
     */
    public function getTradePrice(): ?string
    {
        return $this->tradePrice;
    }

    /**
     * @param int $tradePriceType
     */
    public function setTradePriceType(?int $tradePriceType): void
    {
        $this->tradePriceType = $tradePriceType;
    }

    /**
     * @return int
     */
    public function getTradePriceType(): ?int
    {
        return $this->tradePriceType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasCalcCouponParamInputUserDiscountList implements \JsonSerializable
{
    /**
     * 折扣id
     * @var string
     */
    private $discountId;

    /**
     * 折扣类型:1-满减满折;27-跨店满减满折;1-跨境满减满折;2-第X件X折;2-跨境第X件X折;3-销售价优惠券;30-跨店销售价优惠券;4-优惠码;5-市场价优惠券;6-N元N件;7-固定套装;7-商圈固定套装;8-搭配套装;9-满赠;28-跨店满赠;10-订单加价购;11-满减邮;29-满减邮;12-限时折扣;12-跨店限时折扣;1201-跨境限时折扣;13-一口价;1301-cps专享价;14-限量抢购;15-定金膨胀;16-阶梯价;17-单品加价购;18-会员优惠;19-特权价;20-企业内购;22-砍价;21-拼团;23-积分抵扣;24-余额抵扣;25-储值卡抵扣;26-直播价;999-整单开单优惠;32-整单买单优惠;997-抹零;31-裂变内购;41-直播砍价;33-兑换卡抵扣;44-订单改价;50-销售价;34-必购码;34-商圈必购码;35-买M付N;35-商圈买M付N;
     * @var int
     */
    private $discountType;

    /**
     * 顺序
     * @var int
     */
    private $order;

    /**
     * 折扣状态： 1: 使用 2: 不使用;3:默认推荐
     * @var int
     */
    private $discountStatus;

    /**
     * 券模板id
     * @var string
     */
    private $couponTemplateId;

    /**
     * 券名称
     * @var string
     */
    private $name;

    /**
     * @param string $discountId
     */
    public function setDiscountId(?string $discountId): void
    {
        $this->discountId = $discountId;
    }

    /**
     * @return string
     */
    public function getDiscountId(): ?string
    {
        return $this->discountId;
    }

    /**
     * @param int $discountType
     */
    public function setDiscountType(?int $discountType): void
    {
        $this->discountType = $discountType;
    }

    /**
     * @return int
     */
    public function getDiscountType(): ?int
    {
        return $this->discountType;
    }

    /**
     * @param int $order
     */
    public function setOrder(?int $order): void
    {
        $this->order = $order;
    }

    /**
     * @return int
     */
    public function getOrder(): ?int
    {
        return $this->order;
    }

    /**
     * @param int $discountStatus
     */
    public function setDiscountStatus(?int $discountStatus): void
    {
        $this->discountStatus = $discountStatus;
    }

    /**
     * @return int
     */
    public function getDiscountStatus(): ?int
    {
        return $this->discountStatus;
    }

    /**
     * @param string $couponTemplateId
     */
    public function setCouponTemplateId(?string $couponTemplateId): void
    {
        $this->couponTemplateId = $couponTemplateId;
    }

    /**
     * @return string
     */
    public function getCouponTemplateId(): ?string
    {
        return $this->couponTemplateId;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobShopCouponPaasCalcCouponResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobShopCouponPaasCalcCouponData
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
     * @return WeimobShopCouponPaasCalcCouponData
     */
    public function getData(): ?WeimobShopCouponPaasCalcCouponData
    {
        return $this->data;
    }

    /**
     * @param WeimobShopCouponPaasCalcCouponData $data
     */
    public function setData(?WeimobShopCouponPaasCalcCouponData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasCalcCouponData implements \JsonSerializable
{
    /**
     * 计算规则集合
     * @var array
     */
    private $calcRuleList;

    /**
     * 商品集合
     * @var array
     */
    private $goodsTradeMetas;

    /**
     * 请求中的globalTicket
     * @var string
     */
    private $globalTicket;

    /**
     * 外部的调用链
     * @var string
     */
    private $outTicket;

    /**
     * @param array $calcRuleList
     */
    public function setCalcRuleList(?array $calcRuleList): void
    {
        $this->calcRuleList = $calcRuleList;
    }

    /**
     * @return array
     */
    public function getCalcRuleList(): ?array
    {
        return $this->calcRuleList;
    }

    /**
     * @param array $goodsTradeMetas
     */
    public function setGoodsTradeMetas(?array $goodsTradeMetas): void
    {
        $this->goodsTradeMetas = $goodsTradeMetas;
    }

    /**
     * @return array
     */
    public function getGoodsTradeMetas(): ?array
    {
        return $this->goodsTradeMetas;
    }

    /**
     * @param string $globalTicket
     */
    public function setGlobalTicket(?string $globalTicket): void
    {
        $this->globalTicket = $globalTicket;
    }

    /**
     * @return string
     */
    public function getGlobalTicket(): ?string
    {
        return $this->globalTicket;
    }

    /**
     * @param string $outTicket
     */
    public function setOutTicket(?string $outTicket): void
    {
        $this->outTicket = $outTicket;
    }

    /**
     * @return string
     */
    public function getOutTicket(): ?string
    {
        return $this->outTicket;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasCalcCouponDataCalcRuleList implements \JsonSerializable
{
    /**
     * 互斥信息
     * @var WeimobShopCouponPaasCalcCouponDataMutex
     */
    private $mutex;

    /**
     * 计算规则
     * @var WeimobShopCouponPaasCalcCouponDataRuleGroup
     */
    private $ruleGroup;

    /**
     * 使用信息
     * @var WeimobShopCouponPaasCalcCouponDataUseInfo
     */
    private $useInfo;

    /**
     * 开始时间
     * @var string
     */
    private $useStartTime;

    /**
     * 计算类型 1-最高层级享受; 2-单层级多次享受;
     * @var int
     */
    private $calculateType;

    /**
     * 折扣值（保留2位小数）
     * @var string
     */
    private $discountAmount;

    /**
     * 结束时间
     * @var string
     */
    private $useEndTime;

    /**
     * 组织节点id
     * @var int
     */
    private $vid;

    /**
     * 优惠券副标题
     * @var string
     */
    private $subName;

    /**
     * 1-固定金额;2-固定折扣;3-兑换券;4-随机金额代金券;
     * @var int
     */
    private $couponType;

    /**
     * 折扣描述
     * @var string
     */
    private $instructionContent;

    /**
     * 优惠券名称
     * @var string
     */
    private $name;

    /**
     * 折扣类型:1-满减满折;27-跨店满减满折;1-跨境满减满折;2-第X件X折;2-跨境第X件X折;3-销售价优惠券;30-跨店销售价优惠券;4-优惠码;5-市场价优惠券;6-N元N件;7-固定套装;7-商圈固定套装;8-搭配套装;9-满赠;28-跨店满赠;10-订单加价购;11-满减邮;29-满减邮;12-限时折扣;12-跨店限时折扣;1201-跨境限时折扣;13-一口价;1301-cps专享价;14-限量抢购;15-定金膨胀;16-阶梯价;17-单品加价购;18-会员优惠;19-特权价;20-企业内购;22-砍价;21-拼团;23-积分抵扣;24-余额抵扣;25-储值卡抵扣;26-直播价;999-整单开单优惠;32-整单买单优惠;997-抹零;31-裂变内购;41-直播砍价;33-兑换卡抵扣;44-订单改价;50-销售价;34-必购码;34-商圈必购码;35-买M付N;35-商圈买M付N;
     * @var int
     */
    private $discountType;

    /**
     * 核销凭证code
     * @var string
     */
    private $consumerCode;

    /**
     * 折扣id
     * @var string
     */
    private $discountId;

    /**
     * vid节点类型：0-无类型,无业务意义;1-集团;2-品牌;3-区域;5-商场;10-门店;100-自提点;
     * @var int
     */
    private $vidType;

    /**
     * @param WeimobShopCouponPaasCalcCouponDataMutex $mutex
     */
    public function setMutex(?WeimobShopCouponPaasCalcCouponDataMutex $mutex): void
    {
        $this->mutex = $mutex;
    }

    /**
     * @return WeimobShopCouponPaasCalcCouponDataMutex
     */
    public function getMutex(): ?WeimobShopCouponPaasCalcCouponDataMutex
    {
        return $this->mutex;
    }

    /**
     * @param WeimobShopCouponPaasCalcCouponDataRuleGroup $ruleGroup
     */
    public function setRuleGroup(?WeimobShopCouponPaasCalcCouponDataRuleGroup $ruleGroup): void
    {
        $this->ruleGroup = $ruleGroup;
    }

    /**
     * @return WeimobShopCouponPaasCalcCouponDataRuleGroup
     */
    public function getRuleGroup(): ?WeimobShopCouponPaasCalcCouponDataRuleGroup
    {
        return $this->ruleGroup;
    }

    /**
     * @param WeimobShopCouponPaasCalcCouponDataUseInfo $useInfo
     */
    public function setUseInfo(?WeimobShopCouponPaasCalcCouponDataUseInfo $useInfo): void
    {
        $this->useInfo = $useInfo;
    }

    /**
     * @return WeimobShopCouponPaasCalcCouponDataUseInfo
     */
    public function getUseInfo(): ?WeimobShopCouponPaasCalcCouponDataUseInfo
    {
        return $this->useInfo;
    }

    /**
     * @param string $useStartTime
     */
    public function setUseStartTime(?string $useStartTime): void
    {
        $this->useStartTime = $useStartTime;
    }

    /**
     * @return string
     */
    public function getUseStartTime(): ?string
    {
        return $this->useStartTime;
    }

    /**
     * @param int $calculateType
     */
    public function setCalculateType(?int $calculateType): void
    {
        $this->calculateType = $calculateType;
    }

    /**
     * @return int
     */
    public function getCalculateType(): ?int
    {
        return $this->calculateType;
    }

    /**
     * @param string $discountAmount
     */
    public function setDiscountAmount(?string $discountAmount): void
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
     * @param string $useEndTime
     */
    public function setUseEndTime(?string $useEndTime): void
    {
        $this->useEndTime = $useEndTime;
    }

    /**
     * @return string
     */
    public function getUseEndTime(): ?string
    {
        return $this->useEndTime;
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
     * @param string $subName
     */
    public function setSubName(?string $subName): void
    {
        $this->subName = $subName;
    }

    /**
     * @return string
     */
    public function getSubName(): ?string
    {
        return $this->subName;
    }

    /**
     * @param int $couponType
     */
    public function setCouponType(?int $couponType): void
    {
        $this->couponType = $couponType;
    }

    /**
     * @return int
     */
    public function getCouponType(): ?int
    {
        return $this->couponType;
    }

    /**
     * @param string $instructionContent
     */
    public function setInstructionContent(?string $instructionContent): void
    {
        $this->instructionContent = $instructionContent;
    }

    /**
     * @return string
     */
    public function getInstructionContent(): ?string
    {
        return $this->instructionContent;
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
     * @param int $discountType
     */
    public function setDiscountType(?int $discountType): void
    {
        $this->discountType = $discountType;
    }

    /**
     * @return int
     */
    public function getDiscountType(): ?int
    {
        return $this->discountType;
    }

    /**
     * @param string $consumerCode
     */
    public function setConsumerCode(?string $consumerCode): void
    {
        $this->consumerCode = $consumerCode;
    }

    /**
     * @return string
     */
    public function getConsumerCode(): ?string
    {
        return $this->consumerCode;
    }

    /**
     * @param string $discountId
     */
    public function setDiscountId(?string $discountId): void
    {
        $this->discountId = $discountId;
    }

    /**
     * @return string
     */
    public function getDiscountId(): ?string
    {
        return $this->discountId;
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

class WeimobShopCouponPaasCalcCouponDataMutex implements \JsonSerializable
{
    /**
     * 可用优惠类型
     * @var array
     */
    private $customDiscountTypeList;

    /**
     * 自定义优惠类型:1-所有优惠可用;2-自定义优惠类型;
     * @var int
     */
    private $customDiscountType;

    /**
     * @param array $customDiscountTypeList
     */
    public function setCustomDiscountTypeList(?array $customDiscountTypeList): void
    {
        $this->customDiscountTypeList = $customDiscountTypeList;
    }

    /**
     * @return array
     */
    public function getCustomDiscountTypeList(): ?array
    {
        return $this->customDiscountTypeList;
    }

    /**
     * @param int $customDiscountType
     */
    public function setCustomDiscountType(?int $customDiscountType): void
    {
        $this->customDiscountType = $customDiscountType;
    }

    /**
     * @return int
     */
    public function getCustomDiscountType(): ?int
    {
        return $this->customDiscountType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasCalcCouponDataRuleGroup implements \JsonSerializable
{
    /**
     * 可叠加信息
     * @var WeimobShopCouponPaasCalcCouponDataSuperposable
     */
    private $superposable;

    /**
     * 结果值
     * @var string
     */
    private $resultValue;

    /**
     * 条件值
     * @var int
     */
    private $conditionValue;

    /**
     * 条件类型：100-无条件；102-金额；103-数量；104-折扣；
     * @var int
     */
    private $conditionType;

    /**
     * 结果类型:1001-减钱;1002-打折;1003-一口价;1004-减免数量;1005-赠送数量;1006-膨胀倍数;1007-膨胀固定金额;1008-减百分比;2001-包邮;2002-减邮;3001-赠品;3002-优惠券;3003-积分;3004-余额;3005-换购商品;11001-随机减钱;11002-随机折扣;
     * @var int
     */
    private $resultType;

    /**
     * @param WeimobShopCouponPaasCalcCouponDataSuperposable $superposable
     */
    public function setSuperposable(?WeimobShopCouponPaasCalcCouponDataSuperposable $superposable): void
    {
        $this->superposable = $superposable;
    }

    /**
     * @return WeimobShopCouponPaasCalcCouponDataSuperposable
     */
    public function getSuperposable(): ?WeimobShopCouponPaasCalcCouponDataSuperposable
    {
        return $this->superposable;
    }

    /**
     * @param string $resultValue
     */
    public function setResultValue(?string $resultValue): void
    {
        $this->resultValue = $resultValue;
    }

    /**
     * @return string
     */
    public function getResultValue(): ?string
    {
        return $this->resultValue;
    }

    /**
     * @param int $conditionValue
     */
    public function setConditionValue(?int $conditionValue): void
    {
        $this->conditionValue = $conditionValue;
    }

    /**
     * @return int
     */
    public function getConditionValue(): ?int
    {
        return $this->conditionValue;
    }

    /**
     * @param int $conditionType
     */
    public function setConditionType(?int $conditionType): void
    {
        $this->conditionType = $conditionType;
    }

    /**
     * @return int
     */
    public function getConditionType(): ?int
    {
        return $this->conditionType;
    }

    /**
     * @param int $resultType
     */
    public function setResultType(?int $resultType): void
    {
        $this->resultType = $resultType;
    }

    /**
     * @return int
     */
    public function getResultType(): ?int
    {
        return $this->resultType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasCalcCouponDataSuperposable implements \JsonSerializable
{
    /**
     * 可叠加数量
     * @var int
     */
    private $superposableCouponNum;

    /**
     * @param int $superposableCouponNum
     */
    public function setSuperposableCouponNum(?int $superposableCouponNum): void
    {
        $this->superposableCouponNum = $superposableCouponNum;
    }

    /**
     * @return int
     */
    public function getSuperposableCouponNum(): ?int
    {
        return $this->superposableCouponNum;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasCalcCouponDataUseInfo implements \JsonSerializable
{
    /**
     * 是否有效：1-有效；0-无效；
     * @var int
     */
    private $valid;

    /**
     * 不可用原因
     * @var string
     */
    private $disabledReason;

    /**
     * 使用状态：1-使用；0-不使用
     * @var int
     */
    private $use;

    /**
     * 是否可用：1-可用；0-不可用；
     * @var int
     */
    private $enable;

    /**
     * 券排序号
     * @var int
     */
    private $order;

    /**
     * @param int $valid
     */
    public function setValid(?int $valid): void
    {
        $this->valid = $valid;
    }

    /**
     * @return int
     */
    public function getValid(): ?int
    {
        return $this->valid;
    }

    /**
     * @param string $disabledReason
     */
    public function setDisabledReason(?string $disabledReason): void
    {
        $this->disabledReason = $disabledReason;
    }

    /**
     * @return string
     */
    public function getDisabledReason(): ?string
    {
        return $this->disabledReason;
    }

    /**
     * @param int $use
     */
    public function setUse(?int $use): void
    {
        $this->use = $use;
    }

    /**
     * @return int
     */
    public function getUse(): ?int
    {
        return $this->use;
    }

    /**
     * @param int $enable
     */
    public function setEnable(?int $enable): void
    {
        $this->enable = $enable;
    }

    /**
     * @return int
     */
    public function getEnable(): ?int
    {
        return $this->enable;
    }

    /**
     * @param int $order
     */
    public function setOrder(?int $order): void
    {
        $this->order = $order;
    }

    /**
     * @return int
     */
    public function getOrder(): ?int
    {
        return $this->order;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasCalcCouponDataGoodsTradeMetas implements \JsonSerializable
{
    /**
     * 交易信息
     * @var WeimobShopCouponPaasCalcCouponDataTradeGoodsInfo
     */
    private $tradeGoodsInfo;

    /**
     * 使用的优惠信息
     * @var array
     */
    private $discountInfoList;

    /**
     * 互斥信息
     * @var WeimobShopCouponPaasCalcCouponDataMutex2
     */
    private $mutex;

    /**
     * @param WeimobShopCouponPaasCalcCouponDataTradeGoodsInfo $tradeGoodsInfo
     */
    public function setTradeGoodsInfo(?WeimobShopCouponPaasCalcCouponDataTradeGoodsInfo $tradeGoodsInfo): void
    {
        $this->tradeGoodsInfo = $tradeGoodsInfo;
    }

    /**
     * @return WeimobShopCouponPaasCalcCouponDataTradeGoodsInfo
     */
    public function getTradeGoodsInfo(): ?WeimobShopCouponPaasCalcCouponDataTradeGoodsInfo
    {
        return $this->tradeGoodsInfo;
    }

    /**
     * @param array $discountInfoList
     */
    public function setDiscountInfoList(?array $discountInfoList): void
    {
        $this->discountInfoList = $discountInfoList;
    }

    /**
     * @return array
     */
    public function getDiscountInfoList(): ?array
    {
        return $this->discountInfoList;
    }

    /**
     * @param WeimobShopCouponPaasCalcCouponDataMutex2 $mutex
     */
    public function setMutex(?WeimobShopCouponPaasCalcCouponDataMutex2 $mutex): void
    {
        $this->mutex = $mutex;
    }

    /**
     * @return WeimobShopCouponPaasCalcCouponDataMutex2
     */
    public function getMutex(): ?WeimobShopCouponPaasCalcCouponDataMutex2
    {
        return $this->mutex;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasCalcCouponDataTradeGoodsInfo implements \JsonSerializable
{
    /**
     * 交易商品id
     * @var int
     */
    private $itemId;

    /**
     * 结算商品类型：1-主商品;2-赠品;3-换购商品
     * @var int
     */
    private $tradeGoodsType;

    /**
     * 交易价格类型：1-市场价;2-销售价;
     * @var int
     */
    private $tradePriceType;

    /**
     * 交易基准价(BigDecimal)（保留2位小数）
     * @var string
     */
    private $tradePrice;

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
     * @param int $tradePriceType
     */
    public function setTradePriceType(?int $tradePriceType): void
    {
        $this->tradePriceType = $tradePriceType;
    }

    /**
     * @return int
     */
    public function getTradePriceType(): ?int
    {
        return $this->tradePriceType;
    }

    /**
     * @param string $tradePrice
     */
    public function setTradePrice(?string $tradePrice): void
    {
        $this->tradePrice = $tradePrice;
    }

    /**
     * @return string
     */
    public function getTradePrice(): ?string
    {
        return $this->tradePrice;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasCalcCouponDataDiscountInfoList implements \JsonSerializable
{
    /**
     * 优惠计算的基础金额， 在当前checkAmount上计算出discountAmoun(BigDecimal)（保留2位小数）
     * @var string
     */
    private $checkAmount;

    /**
     * 折扣优惠金额(BigDecimal)（保留2位小数）
     * @var string
     */
    private $discountAmount;

    /**
     * 折扣类型:1-满减满折;27-跨店满减满折;1-跨境满减满折;2-第X件X折;2-跨境第X件X折;3-销售价优惠券;30-跨店销售价优惠券;4-优惠码;5-市场价优惠券;6-N元N件;7-固定套装;7-商圈固定套装;8-搭配套装;9-满赠;28-跨店满赠;10-订单加价购;11-满减邮;29-满减邮;12-限时折扣;12-跨店限时折扣;1201-跨境限时折扣;13-一口价;1301-cps专享价;14-限量抢购;15-定金膨胀;16-阶梯价;17-单品加价购;18-会员优惠;19-特权价;20-企业内购;22-砍价;21-拼团;23-积分抵扣;24-余额抵扣;25-储值卡抵扣;26-直播价;999-整单开单优惠;32-整单买单优惠;997-抹零;31-裂变内购;41-直播砍价;33-兑换卡抵扣;44-订单改价;50-销售价;34-必购码;34-商圈必购码;35-买M付N;35-商圈买M付N;
     * @var int
     */
    private $discountType;

    /**
     * 折扣id
     * @var string
     */
    private $discountId;

    /**
     * 折扣顺序
     * @var int
     */
    private $order;

    /**
     * @param string $checkAmount
     */
    public function setCheckAmount(?string $checkAmount): void
    {
        $this->checkAmount = $checkAmount;
    }

    /**
     * @return string
     */
    public function getCheckAmount(): ?string
    {
        return $this->checkAmount;
    }

    /**
     * @param string $discountAmount
     */
    public function setDiscountAmount(?string $discountAmount): void
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
     * @param int $discountType
     */
    public function setDiscountType(?int $discountType): void
    {
        $this->discountType = $discountType;
    }

    /**
     * @return int
     */
    public function getDiscountType(): ?int
    {
        return $this->discountType;
    }

    /**
     * @param string $discountId
     */
    public function setDiscountId(?string $discountId): void
    {
        $this->discountId = $discountId;
    }

    /**
     * @return string
     */
    public function getDiscountId(): ?string
    {
        return $this->discountId;
    }

    /**
     * @param int $order
     */
    public function setOrder(?int $order): void
    {
        $this->order = $order;
    }

    /**
     * @return int
     */
    public function getOrder(): ?int
    {
        return $this->order;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasCalcCouponDataMutex2 implements \JsonSerializable
{
    /**
     * 可用优惠类型
     * @var array
     */
    private $customDiscountTypeList;

    /**
     * 自定义优惠类型:1-所有优惠可用;2-自定义优惠类型;
     * @var int
     */
    private $customDiscountType;

    /**
     * @param array $customDiscountTypeList
     */
    public function setCustomDiscountTypeList(?array $customDiscountTypeList): void
    {
        $this->customDiscountTypeList = $customDiscountTypeList;
    }

    /**
     * @return array
     */
    public function getCustomDiscountTypeList(): ?array
    {
        return $this->customDiscountTypeList;
    }

    /**
     * @param int $customDiscountType
     */
    public function setCustomDiscountType(?int $customDiscountType): void
    {
        $this->customDiscountType = $customDiscountType;
    }

    /**
     * @return int
     */
    public function getCustomDiscountType(): ?int
    {
        return $this->customDiscountType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

