<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,168
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobShopPointPaasCalcPointService
{
    const specType = 'wos';

    public function invoke(WeimobShopPointPaasCalcPointRequest $request) : WeimobShopPointPaasCalcPointResponse;
}

class WeimobShopPointPaasCalcPointRequest implements \JsonSerializable
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
     * @var WeimobShopPointPaasCalcPointParam
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
     * @param WeimobShopPointPaasCalcPointParam $param
     */
    public function setParam(?WeimobShopPointPaasCalcPointParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobShopPointPaasCalcPointParam
     */
    public function getParam(): ?WeimobShopPointPaasCalcPointParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointParam implements \JsonSerializable
{
    /**
     * 业务请求参数
     * @var WeimobShopPointPaasCalcPointParamParams2
     */
    private $params;

    /**
     * @param WeimobShopPointPaasCalcPointParamParams2 $params
     */
    public function setParams(?WeimobShopPointPaasCalcPointParamParams2 $params): void
    {
        $this->params = $params;
    }

    /**
     * @return WeimobShopPointPaasCalcPointParamParams2
     */
    public function getParams(): ?WeimobShopPointPaasCalcPointParamParams2
    {
        return $this->params;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointParamParams2 implements \JsonSerializable
{
    /**
     * 基础信息
     * @var WeimobShopPointPaasCalcPointParamBasicInfo
     */
    private $basicInfo;

    /**
     * 扩展信息
     * @var WeimobShopPointPaasCalcPointParamExtendInfo
     */
    private $extendInfo;

    /**
     * 商品集合
     * @var array
     */
    private $goodsTradeMetas;

    /**
     * 用户选择的积分信息
     * @var WeimobShopPointPaasCalcPointParamInputUserDiscountList
     */
    private $inputUserDiscountList;

    /**
     * 抵扣规则信息集合
     * @var array
     */
    private $assetDeductionRule	;

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
     * 用户id
     * @var int
     */
    private $wid;

    /**
     * @param WeimobShopPointPaasCalcPointParamBasicInfo $basicInfo
     */
    public function setBasicInfo(?WeimobShopPointPaasCalcPointParamBasicInfo $basicInfo): void
    {
        $this->basicInfo = $basicInfo;
    }

    /**
     * @return WeimobShopPointPaasCalcPointParamBasicInfo
     */
    public function getBasicInfo(): ?WeimobShopPointPaasCalcPointParamBasicInfo
    {
        return $this->basicInfo;
    }

    /**
     * @param WeimobShopPointPaasCalcPointParamExtendInfo $extendInfo
     */
    public function setExtendInfo(?WeimobShopPointPaasCalcPointParamExtendInfo $extendInfo): void
    {
        $this->extendInfo = $extendInfo;
    }

    /**
     * @return WeimobShopPointPaasCalcPointParamExtendInfo
     */
    public function getExtendInfo(): ?WeimobShopPointPaasCalcPointParamExtendInfo
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
     * @param WeimobShopPointPaasCalcPointParamInputUserDiscountList $inputUserDiscountList
     */
    public function setInputUserDiscountList(?WeimobShopPointPaasCalcPointParamInputUserDiscountList $inputUserDiscountList): void
    {
        $this->inputUserDiscountList = $inputUserDiscountList;
    }

    /**
     * @return WeimobShopPointPaasCalcPointParamInputUserDiscountList
     */
    public function getInputUserDiscountList(): ?WeimobShopPointPaasCalcPointParamInputUserDiscountList
    {
        return $this->inputUserDiscountList;
    }

    /**
     * @param array $assetDeductionRule	
     */
    public function setAssetDeductionRule	(?array $assetDeductionRule	): void
    {
        $this->assetDeductionRule	 = $assetDeductionRule	;
    }

    /**
     * @return array
     */
    public function getAssetDeductionRule	(): ?array
    {
        return $this->assetDeductionRule	;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointParamBasicInfo implements \JsonSerializable
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
     * 组织结构节点
     * @var string
     */
    private $vid;

    /**
     * vid节点类型：0-无类型,无业务意义;1-集团;2-品牌;3-区域;5-商场;10-门店;100-自提点;
     * @var int
     */
    private $vidType;

    /**
     * 调用方产品实例版本号
     * @var int
     */
    private $productVersionId;

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
     * @param string $vid
     */
    public function setVid(?string $vid): void
    {
        $this->vid = $vid;
    }

    /**
     * @return string
     */
    public function getVid(): ?string
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointParamExtendInfo implements \JsonSerializable
{
    /**
     * 调用链信息
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

class WeimobShopPointPaasCalcPointParamGoodsTradeMetas implements \JsonSerializable
{
    /**
     * 商品本身的基本信息
     * @var WeimobShopPointPaasCalcPointParamBasicGoodsInfo
     */
    private $basicGoodsInfo;

    /**
     * 已使用优惠列表
     * @var array
     */
    private $discountInfoList;

    /**
     * 带入的商品折扣列表
     * @var array
     */
    private $inputItemDiscountList;

    /**
     * 商品互斥信息
     * @var WeimobShopPointPaasCalcPointParamMutex
     */
    private $mutex;

    /**
     * 运费的优惠信息
     * @var WeimobShopPointPaasCalcPointParamPostageDiscountInfo
     */
    private $postageDiscountInfo;

    /**
     * 交易信息
     * @var WeimobShopPointPaasCalcPointParamTradeGoodsInfo
     */
    private $tradeGoodsInfo;

    /**
     * @param WeimobShopPointPaasCalcPointParamBasicGoodsInfo $basicGoodsInfo
     */
    public function setBasicGoodsInfo(?WeimobShopPointPaasCalcPointParamBasicGoodsInfo $basicGoodsInfo): void
    {
        $this->basicGoodsInfo = $basicGoodsInfo;
    }

    /**
     * @return WeimobShopPointPaasCalcPointParamBasicGoodsInfo
     */
    public function getBasicGoodsInfo(): ?WeimobShopPointPaasCalcPointParamBasicGoodsInfo
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
     * @param WeimobShopPointPaasCalcPointParamMutex $mutex
     */
    public function setMutex(?WeimobShopPointPaasCalcPointParamMutex $mutex): void
    {
        $this->mutex = $mutex;
    }

    /**
     * @return WeimobShopPointPaasCalcPointParamMutex
     */
    public function getMutex(): ?WeimobShopPointPaasCalcPointParamMutex
    {
        return $this->mutex;
    }

    /**
     * @param WeimobShopPointPaasCalcPointParamPostageDiscountInfo $postageDiscountInfo
     */
    public function setPostageDiscountInfo(?WeimobShopPointPaasCalcPointParamPostageDiscountInfo $postageDiscountInfo): void
    {
        $this->postageDiscountInfo = $postageDiscountInfo;
    }

    /**
     * @return WeimobShopPointPaasCalcPointParamPostageDiscountInfo
     */
    public function getPostageDiscountInfo(): ?WeimobShopPointPaasCalcPointParamPostageDiscountInfo
    {
        return $this->postageDiscountInfo;
    }

    /**
     * @param WeimobShopPointPaasCalcPointParamTradeGoodsInfo $tradeGoodsInfo
     */
    public function setTradeGoodsInfo(?WeimobShopPointPaasCalcPointParamTradeGoodsInfo $tradeGoodsInfo): void
    {
        $this->tradeGoodsInfo = $tradeGoodsInfo;
    }

    /**
     * @return WeimobShopPointPaasCalcPointParamTradeGoodsInfo
     */
    public function getTradeGoodsInfo(): ?WeimobShopPointPaasCalcPointParamTradeGoodsInfo
    {
        return $this->tradeGoodsInfo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointParamBasicGoodsInfo implements \JsonSerializable
{
    /**
     * 预售信息
     * @var WeimobShopPointPaasCalcPointParamPreSellInfo
     */
    private $preSellInfo;

    /**
     * 费用信息
     * @var array
     */
    private $priceInfo;

    /**
     * 商品id
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
     * skuId
     * @var int
     */
    private $skuId;

    /**
     * 节点id
     * @var int
     */
    private $vid;

    /**
     * vid节点类型：0-无类型,无业务意义;1-集团;2-品牌;3-区域;5-商场;10-门店;100-自提点;
     * @var int
     */
    private $vidType;

    /**
     * 商品编码
     * @var string
     */
    private $goodsCode;

    /**
     * sku 编码
     * @var string
     */
    private $skuCode;

    /**
     * @param WeimobShopPointPaasCalcPointParamPreSellInfo $preSellInfo
     */
    public function setPreSellInfo(?WeimobShopPointPaasCalcPointParamPreSellInfo $preSellInfo): void
    {
        $this->preSellInfo = $preSellInfo;
    }

    /**
     * @return WeimobShopPointPaasCalcPointParamPreSellInfo
     */
    public function getPreSellInfo(): ?WeimobShopPointPaasCalcPointParamPreSellInfo
    {
        return $this->preSellInfo;
    }

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointParamPreSellInfo implements \JsonSerializable
{
    /**
     * 预售类型:1-全款预售;2-比例定金预售;3-固定定金预售;
     * @var int
     */
    private $type;

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

class WeimobShopPointPaasCalcPointParamPriceInfo implements \JsonSerializable
{
    /**
     * 价格(BigDecimal)
     * @var string
     */
    private $price;

    /**
     * 价格类型:1-市场价;2-销售价;3-定金价;4-运费;
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

class WeimobShopPointPaasCalcPointParamDiscountInfoList implements \JsonSerializable
{
    /**
     * 折扣优惠金额(BigDecimal)
     * @var string
     */
    private $discountAmount;

    /**
     * 折扣id
     * @var int
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
     * 使用顺序
     * @var int
     */
    private $order;

    /**
     * 优惠计算的基础金额， 在当前checkAmount上计算出discountAmoun(BigDecimal)
     * @var string
     */
    private $checkAmount;

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
     * @param int $discountId
     */
    public function setDiscountId(?int $discountId): void
    {
        $this->discountId = $discountId;
    }

    /**
     * @return int
     */
    public function getDiscountId(): ?int
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointParamInputItemDiscountList implements \JsonSerializable
{
    /**
     * 折扣id
     * @var int
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
     * 折扣状态： 1: 使用 2: 不使用;3:默认推荐
     * @var int
     */
    private $discountStatus;

    /**
     * @param int $discountId
     */
    public function setDiscountId(?int $discountId): void
    {
        $this->discountId = $discountId;
    }

    /**
     * @return int
     */
    public function getDiscountId(): ?int
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointParamMutex implements \JsonSerializable
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

class WeimobShopPointPaasCalcPointParamPostageDiscountInfo implements \JsonSerializable
{
    /**
     * 已使用优惠列表
     * @var array
     */
    private $discountInfoList;

    /**
     * 互斥信息
     * @var WeimobShopPointPaasCalcPointParamMutex2
     */
    private $mutex;

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
     * @param WeimobShopPointPaasCalcPointParamMutex2 $mutex
     */
    public function setMutex(?WeimobShopPointPaasCalcPointParamMutex2 $mutex): void
    {
        $this->mutex = $mutex;
    }

    /**
     * @return WeimobShopPointPaasCalcPointParamMutex2
     */
    public function getMutex(): ?WeimobShopPointPaasCalcPointParamMutex2
    {
        return $this->mutex;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointParamDiscountInfoList2 implements \JsonSerializable
{
    /**
     * 折扣优惠金额(BigDecimal)
     * @var string
     */
    private $discountAmount;

    /**
     * 折扣id
     * @var int
     */
    private $discountId;

    /**
     * 折扣类型:1-满减满折;27-跨店满减满折;1-跨境满减满折;2-第X件X折;2-跨境第X件X折;3-销售价优惠券;30-跨店销售价优惠券;4-优惠码;5-市场价优惠券;6-N元N件;7-固定套装;7-商圈固定套装;8-搭配套装;9-满赠;28-跨店满赠;10-订单加价购;11-满减邮;29-满减邮;12-限时折扣;12-跨店限时折扣;1201-跨境限时折扣;13-一口价;1301-cps专享价;14-限量抢购;15-定金膨胀;16-阶梯价;17-单品加价购;18-会员优惠;19-特权价;20-企业内购;22-砍价;21-拼团;23-积分抵扣;24-余额抵扣;25-储值卡抵扣;26-直播价;999-整单开单优惠;32-整单买单优惠;997-抹零;31-裂变内购;41-直播砍价;33-兑换卡抵扣;44-订单改价;50-销售价;34-必购码;34-商圈必购码;35-买M付N;35-商圈买M付N;
     * @var int
     */
    private $discountType;

    /**
     * 活动使用顺序
     * @var int
     */
    private $order;

    /**
     * 给订单落单(BigDecimal)
     * @var string
     */
    private $checkAmount;

    /**
     * 使用的资产量，积分(BigDecimal)
     * @var string
     */
    private $costAmount;

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
     * @param int $discountId
     */
    public function setDiscountId(?int $discountId): void
    {
        $this->discountId = $discountId;
    }

    /**
     * @return int
     */
    public function getDiscountId(): ?int
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
     * @param string $costAmount
     */
    public function setCostAmount(?string $costAmount): void
    {
        $this->costAmount = $costAmount;
    }

    /**
     * @return string
     */
    public function getCostAmount(): ?string
    {
        return $this->costAmount;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointParamMutex2 implements \JsonSerializable
{
    /**
     * 自定义折扣类型：1 ：全部可用 2：部分可用
     * @var int
     */
    private $customDiscountType;

    /**
     * 可用抵扣类型、可用优惠活动类型，自定义折扣类型具体值 customDiscountType=2,必填
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

class WeimobShopPointPaasCalcPointParamTradeGoodsInfo implements \JsonSerializable
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

class WeimobShopPointPaasCalcPointParamInputUserDiscountList implements \JsonSerializable
{
    /**
     * 优惠id
     * @var int
     */
    private $discountId;

    /**
     * 折扣类型:1-满减满折;27-跨店满减满折;1-跨境满减满折;2-第X件X折;2-跨境第X件X折;3-销售价优惠券;30-跨店销售价优惠券;4-优惠码;5-市场价优惠券;6-N元N件;7-固定套装;7-商圈固定套装;8-搭配套装;9-满赠;28-跨店满赠;10-订单加价购;11-满减邮;29-满减邮;12-限时折扣;12-跨店限时折扣;1201-跨境限时折扣;13-一口价;1301-cps专享价;14-限量抢购;15-定金膨胀;16-阶梯价;17-单品加价购;18-会员优惠;19-特权价;20-企业内购;22-砍价;21-拼团;23-积分抵扣;24-余额抵扣;25-储值卡抵扣;26-直播价;999-整单开单优惠;32-整单买单优惠;997-抹零;31-裂变内购;41-直播砍价;33-兑换卡抵扣;44-订单改价;50-销售价;34-必购码;34-商圈必购码;35-买M付N;35-商圈买M付N;
     * @var string
     */
    private $discountType;

    /**
     * 序号
     * @var string
     */
    private $order;

    /**
     * 使用的资产量，积分.BigDecimal类型
     * @var string
     */
    private $costAmount;

    /**
     * 折扣状态： 1: 使用 2: 不使用;3:默认推荐
     * @var int
     */
    private $discountStatus;

    /**
     * @param int $discountId
     */
    public function setDiscountId(?int $discountId): void
    {
        $this->discountId = $discountId;
    }

    /**
     * @return int
     */
    public function getDiscountId(): ?int
    {
        return $this->discountId;
    }

    /**
     * @param string $discountType
     */
    public function setDiscountType(?string $discountType): void
    {
        $this->discountType = $discountType;
    }

    /**
     * @return string
     */
    public function getDiscountType(): ?string
    {
        return $this->discountType;
    }

    /**
     * @param string $order
     */
    public function setOrder(?string $order): void
    {
        $this->order = $order;
    }

    /**
     * @return string
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }

    /**
     * @param string $costAmount
     */
    public function setCostAmount(?string $costAmount): void
    {
        $this->costAmount = $costAmount;
    }

    /**
     * @return string
     */
    public function getCostAmount(): ?string
    {
        return $this->costAmount;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointParamAssetDeductionRule implements \JsonSerializable
{
    /**
     * 折扣类型:23-积分抵扣;
     * @var int
     */
    private $discountType;

    /**
     * 抵扣项：1-商品金额；2-积分兑换；3-运费
     * @var int
     */
    private $deductionType;

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
     * @param int $deductionType
     */
    public function setDeductionType(?int $deductionType): void
    {
        $this->deductionType = $deductionType;
    }

    /**
     * @return int
     */
    public function getDeductionType(): ?int
    {
        return $this->deductionType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobShopPointPaasCalcPointResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobShopPointPaasCalcPointData
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
     * @return WeimobShopPointPaasCalcPointData
     */
    public function getData(): ?WeimobShopPointPaasCalcPointData
    {
        return $this->data;
    }

    /**
     * @param WeimobShopPointPaasCalcPointData $data
     */
    public function setData(?WeimobShopPointPaasCalcPointData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointData implements \JsonSerializable
{
    /**
     * 业务返回数据
     * @var WeimobShopPointPaasCalcPointDataData2
     */
    private $data;

    /**
     * @param WeimobShopPointPaasCalcPointDataData2 $data
     */
    public function setData(?WeimobShopPointPaasCalcPointDataData2 $data): void
    {
        $this->data = $data;
    }

    /**
     * @return WeimobShopPointPaasCalcPointDataData2
     */
    public function getData(): ?WeimobShopPointPaasCalcPointDataData2
    {
        return $this->data;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointDataData2 implements \JsonSerializable
{
    /**
     * 商品集合
     * @var array
     */
    private $goodsTradeMetas;

    /**
     * 计算规则集合
     * @var array
     */
    private $calcRuleList;

    /**
     * 请求中的globalTicket
     * @var string
     */
    private $globalTicket;

    /**
     * 外部自己的ticket
     * @var string
     */
    private $outTicket;

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

class WeimobShopPointPaasCalcPointDataGoodsTradeMetas implements \JsonSerializable
{
    /**
     * 已使用优惠列表
     * @var array
     */
    private $discountInfoList;

    /**
     * 运费的优惠信息
     * @var WeimobShopPointPaasCalcPointDataPostageDiscountInfo
     */
    private $postageDiscountInfo;

    /**
     * 交易信息
     * @var WeimobShopPointPaasCalcPointDataTradeGoodsInfo
     */
    private $tradeGoodsInfo;

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
     * @param WeimobShopPointPaasCalcPointDataPostageDiscountInfo $postageDiscountInfo
     */
    public function setPostageDiscountInfo(?WeimobShopPointPaasCalcPointDataPostageDiscountInfo $postageDiscountInfo): void
    {
        $this->postageDiscountInfo = $postageDiscountInfo;
    }

    /**
     * @return WeimobShopPointPaasCalcPointDataPostageDiscountInfo
     */
    public function getPostageDiscountInfo(): ?WeimobShopPointPaasCalcPointDataPostageDiscountInfo
    {
        return $this->postageDiscountInfo;
    }

    /**
     * @param WeimobShopPointPaasCalcPointDataTradeGoodsInfo $tradeGoodsInfo
     */
    public function setTradeGoodsInfo(?WeimobShopPointPaasCalcPointDataTradeGoodsInfo $tradeGoodsInfo): void
    {
        $this->tradeGoodsInfo = $tradeGoodsInfo;
    }

    /**
     * @return WeimobShopPointPaasCalcPointDataTradeGoodsInfo
     */
    public function getTradeGoodsInfo(): ?WeimobShopPointPaasCalcPointDataTradeGoodsInfo
    {
        return $this->tradeGoodsInfo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointDataDiscountInfoList implements \JsonSerializable
{
    /**
     * 折扣优惠金额(BigDecimal)
     * @var string
     */
    private $discountAmount;

    /**
     * 折扣id
     * @var int
     */
    private $discountId;

    /**
     * 折扣类型:1-满减满折;27-跨店满减满折;1-跨境满减满折;2-第X件X折;2-跨境第X件X折;3-销售价优惠券;30-跨店销售价优惠券;4-优惠码;5-市场价优惠券;6-N元N件;7-固定套装;7-商圈固定套装;8-搭配套装;9-满赠;28-跨店满赠;10-订单加价购;11-满减邮;29-满减邮;12-限时折扣;12-跨店限时折扣;1201-跨境限时折扣;13-一口价;1301-cps专享价;14-限量抢购;15-定金膨胀;16-阶梯价;17-单品加价购;18-会员优惠;19-特权价;20-企业内购;22-砍价;21-拼团;23-积分抵扣;24-余额抵扣;25-储值卡抵扣;26-直播价;999-整单开单优惠;32-整单买单优惠;997-抹零;31-裂变内购;41-直播砍价;33-兑换卡抵扣;44-订单改价;50-销售价;34-必购码;34-商圈必购码;35-买M付N;35-商圈买M付N;
     * @var int
     */
    private $discountType;

    /**
     * 抵扣顺序
     * @var int
     */
    private $order;

    /**
     * 使用的资产量，积分(BigDecimal)
     * @var string
     */
    private $checkAmount;

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
     * @param int $discountId
     */
    public function setDiscountId(?int $discountId): void
    {
        $this->discountId = $discountId;
    }

    /**
     * @return int
     */
    public function getDiscountId(): ?int
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointDataPostageDiscountInfo implements \JsonSerializable
{
    /**
     * 已使用优惠列表
     * @var array
     */
    private $discountInfoList;

    /**
     * 互斥信息
     * @var WeimobShopPointPaasCalcPointDataMutex
     */
    private $mutex;

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
     * @param WeimobShopPointPaasCalcPointDataMutex $mutex
     */
    public function setMutex(?WeimobShopPointPaasCalcPointDataMutex $mutex): void
    {
        $this->mutex = $mutex;
    }

    /**
     * @return WeimobShopPointPaasCalcPointDataMutex
     */
    public function getMutex(): ?WeimobShopPointPaasCalcPointDataMutex
    {
        return $this->mutex;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointDataDiscountInfoList2 implements \JsonSerializable
{
    /**
     * 折扣优惠金额(BigDecimal)
     * @var int
     */
    private $discountAmount	;

    /**
     * 折扣id
     * @var int
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
     * 折扣计算的基础金额， 在当前checkAmount上计算出discountAmount
     * @var string
     */
    private $checkAmount;

    /**
     * 使用的资产量，积分(BigDecimal)
     * @var string
     */
    private $costAmount;

    /**
     * @param int $discountAmount	
     */
    public function setDiscountAmount	(?int $discountAmount	): void
    {
        $this->discountAmount	 = $discountAmount	;
    }

    /**
     * @return int
     */
    public function getDiscountAmount	(): ?int
    {
        return $this->discountAmount	;
    }

    /**
     * @param int $discountId
     */
    public function setDiscountId(?int $discountId): void
    {
        $this->discountId = $discountId;
    }

    /**
     * @return int
     */
    public function getDiscountId(): ?int
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
     * @param string $costAmount
     */
    public function setCostAmount(?string $costAmount): void
    {
        $this->costAmount = $costAmount;
    }

    /**
     * @return string
     */
    public function getCostAmount(): ?string
    {
        return $this->costAmount;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointDataMutex implements \JsonSerializable
{
    /**
     * 自定义优惠类型:1-所有优惠可用;2-自定义优惠类型;
     * @var int
     */
    private $customDiscountType;

    /**
     * 可用抵扣类型、可用优惠活动类型，自定义折扣类型具体值 customDiscountType=2,必填
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

class WeimobShopPointPaasCalcPointDataTradeGoodsInfo implements \JsonSerializable
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
     * @var int
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
     * @param int $tradePrice
     */
    public function setTradePrice(?int $tradePrice): void
    {
        $this->tradePrice = $tradePrice;
    }

    /**
     * @return int
     */
    public function getTradePrice(): ?int
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

class WeimobShopPointPaasCalcPointDataCalcRuleList implements \JsonSerializable
{
    /**
     * 互斥信息
     * @var WeimobShopPointPaasCalcPointDataMutex2
     */
    private $mutex;

    /**
     * 折扣使用状态： 1: 使用 2: 不使用;3:默认推荐
     * @var WeimobShopPointPaasCalcPointDataDiscountUseInfo
     */
    private $discountUseInfo;

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
     * @param WeimobShopPointPaasCalcPointDataMutex2 $mutex
     */
    public function setMutex(?WeimobShopPointPaasCalcPointDataMutex2 $mutex): void
    {
        $this->mutex = $mutex;
    }

    /**
     * @return WeimobShopPointPaasCalcPointDataMutex2
     */
    public function getMutex(): ?WeimobShopPointPaasCalcPointDataMutex2
    {
        return $this->mutex;
    }

    /**
     * @param WeimobShopPointPaasCalcPointDataDiscountUseInfo $discountUseInfo
     */
    public function setDiscountUseInfo(?WeimobShopPointPaasCalcPointDataDiscountUseInfo $discountUseInfo): void
    {
        $this->discountUseInfo = $discountUseInfo;
    }

    /**
     * @return WeimobShopPointPaasCalcPointDataDiscountUseInfo
     */
    public function getDiscountUseInfo(): ?WeimobShopPointPaasCalcPointDataDiscountUseInfo
    {
        return $this->discountUseInfo;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointDataMutex2 implements \JsonSerializable
{
    /**
     * 自定义优惠类型:1-所有优惠可用;2-自定义优惠类型;
     * @var int
     */
    private $customDiscountType;

    /**
     * 可用的优惠列表
     * @var string
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
     * @param string $customDiscountTypeList
     */
    public function setCustomDiscountTypeList(?string $customDiscountTypeList): void
    {
        $this->customDiscountTypeList = $customDiscountTypeList;
    }

    /**
     * @return string
     */
    public function getCustomDiscountTypeList(): ?string
    {
        return $this->customDiscountTypeList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointDataDiscountUseInfo implements \JsonSerializable
{
    /**
     * 已使用抵扣明细
     * @var array
     */
    private $usedDiscountDetailList;

    /**
     * 最多可抵扣金额(积分)(BigDecimal)
     * @var string
     */
    private $maxDiscountTotalAmount;

    /**
     * 最多可抵扣资产(积分)(BigDecimal)
     * @var string
     */
    private $maxDiscountTotalCostAmount	;

    /**
     * 积分的总优惠金额(BigDecimal)
     * @var string
     */
    private $useDiscountTotalAmount;

    /**
     * 实际抵扣资产(BigDecimal)
     * @var string
     */
    private $useDiscountTotalCostAmount;

    /**
     * 使用状态
     * @var bool
     */
    private $useStatus;

    /**
     * @param array $usedDiscountDetailList
     */
    public function setUsedDiscountDetailList(?array $usedDiscountDetailList): void
    {
        $this->usedDiscountDetailList = $usedDiscountDetailList;
    }

    /**
     * @return array
     */
    public function getUsedDiscountDetailList(): ?array
    {
        return $this->usedDiscountDetailList;
    }

    /**
     * @param string $maxDiscountTotalAmount
     */
    public function setMaxDiscountTotalAmount(?string $maxDiscountTotalAmount): void
    {
        $this->maxDiscountTotalAmount = $maxDiscountTotalAmount;
    }

    /**
     * @return string
     */
    public function getMaxDiscountTotalAmount(): ?string
    {
        return $this->maxDiscountTotalAmount;
    }

    /**
     * @param string $maxDiscountTotalCostAmount	
     */
    public function setMaxDiscountTotalCostAmount	(?string $maxDiscountTotalCostAmount	): void
    {
        $this->maxDiscountTotalCostAmount	 = $maxDiscountTotalCostAmount	;
    }

    /**
     * @return string
     */
    public function getMaxDiscountTotalCostAmount	(): ?string
    {
        return $this->maxDiscountTotalCostAmount	;
    }

    /**
     * @param string $useDiscountTotalAmount
     */
    public function setUseDiscountTotalAmount(?string $useDiscountTotalAmount): void
    {
        $this->useDiscountTotalAmount = $useDiscountTotalAmount;
    }

    /**
     * @return string
     */
    public function getUseDiscountTotalAmount(): ?string
    {
        return $this->useDiscountTotalAmount;
    }

    /**
     * @param string $useDiscountTotalCostAmount
     */
    public function setUseDiscountTotalCostAmount(?string $useDiscountTotalCostAmount): void
    {
        $this->useDiscountTotalCostAmount = $useDiscountTotalCostAmount;
    }

    /**
     * @return string
     */
    public function getUseDiscountTotalCostAmount(): ?string
    {
        return $this->useDiscountTotalCostAmount;
    }

    /**
     * @param bool $useStatus
     */
    public function setUseStatus(?bool $useStatus): void
    {
        $this->useStatus = $useStatus;
    }

    /**
     * @return bool
     */
    public function getUseStatus(): ?bool
    {
        return $this->useStatus;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPointPaasCalcPointDataUsedDiscountDetailList implements \JsonSerializable
{
    /**
     * 折扣优惠金额(BigDecimal)
     * @var string
     */
    private $discountAmount;

    /**
     * 使用的资产量，积分(BigDecimal)
     * @var string
     */
    private $costAmount;

    /**
     * 抵扣类型：1：商品金额，2：积分兑换，3：运费
     * @var int
     */
    private $deductionType;

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
     * @param string $costAmount
     */
    public function setCostAmount(?string $costAmount): void
    {
        $this->costAmount = $costAmount;
    }

    /**
     * @return string
     */
    public function getCostAmount(): ?string
    {
        return $this->costAmount;
    }

    /**
     * @param int $deductionType
     */
    public function setDeductionType(?int $deductionType): void
    {
        $this->deductionType = $deductionType;
    }

    /**
     * @return int
     */
    public function getDeductionType(): ?int
    {
        return $this->deductionType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

