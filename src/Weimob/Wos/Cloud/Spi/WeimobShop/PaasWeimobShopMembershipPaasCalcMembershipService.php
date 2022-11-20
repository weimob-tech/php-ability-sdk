<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,167
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobShopMembershipPaasCalcMembershipService
{
    const specType = 'wos';

    public function invoke(WeimobShopMembershipPaasCalcMembershipRequest $request) : WeimobShopMembershipPaasCalcMembershipResponse;
}

class WeimobShopMembershipPaasCalcMembershipRequest implements \JsonSerializable
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
    * @var WeimobShopMembershipPaasCalcMembershipParam
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
    * @param WeimobShopMembershipPaasCalcMembershipParam $param
    */
    public function setParam(?WeimobShopMembershipPaasCalcMembershipParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobShopMembershipPaasCalcMembershipParam
    */
    public function getParam(): ?WeimobShopMembershipPaasCalcMembershipParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMembershipPaasCalcMembershipParam implements \JsonSerializable
{
    /**
    * 基础请求信息
    * @var WeimobShopMembershipPaasCalcMembershipParamBasicInfo
    */
    private $basicInfo;

    /**
    * 扩展信息
    * @var WeimobShopMembershipPaasCalcMembershipParamExtendInfo
    */
    private $extendInfo;

    /**
    * 商品集合
    * @var array
    */
    private $goodsTradeMetas;

    /**
    * 调用方产品ID
    * @var int
    */
    private $productId;

    /**
    * 调用方产品实例ID.
    * @var int
    */
    private $productInstanceId;

    /**
    * 提供产品的租户
    * @var string
    */
    private $tcode;

    /**
    * 买家wid
    * @var int
    */
    private $wid;

    /**
    * 客户端版本号
    * @var int
    */
    private $wxTemplateId;

    /**
    * @param WeimobShopMembershipPaasCalcMembershipParamBasicInfo $basicInfo
    */
    public function setBasicInfo(?WeimobShopMembershipPaasCalcMembershipParamBasicInfo $basicInfo)
    {
        $this->basicInfo = $basicInfo;
    }

    /**
    * @return WeimobShopMembershipPaasCalcMembershipParamBasicInfo
    */
    public function getBasicInfo(): ?WeimobShopMembershipPaasCalcMembershipParamBasicInfo
    {
        return $this->basicInfo;
    }

    /**
    * @param WeimobShopMembershipPaasCalcMembershipParamExtendInfo $extendInfo
    */
    public function setExtendInfo(?WeimobShopMembershipPaasCalcMembershipParamExtendInfo $extendInfo)
    {
        $this->extendInfo = $extendInfo;
    }

    /**
    * @return WeimobShopMembershipPaasCalcMembershipParamExtendInfo
    */
    public function getExtendInfo(): ?WeimobShopMembershipPaasCalcMembershipParamExtendInfo
    {
        return $this->extendInfo;
    }

    /**
    * @param array $goodsTradeMetas
    */
    public function setGoodsTradeMetas(?array $goodsTradeMetas)
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
    * @param int $wxTemplateId
    */
    public function setWxTemplateId(?int $wxTemplateId)
    {
        $this->wxTemplateId = $wxTemplateId;
    }

    /**
    * @return int
    */
    public function getWxTemplateId(): ?int
    {
        return $this->wxTemplateId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMembershipPaasCalcMembershipParamBasicInfo implements \JsonSerializable
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
    * @var string
    */
    private $productVersionId;

    /**
    * 提供产品的租户
    * @var string
    */
    private $tcode;

    /**
    * 组织结构节点.
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
    * @param string $productVersionId
    */
    public function setProductVersionId(?string $productVersionId)
    {
        $this->productVersionId = $productVersionId;
    }

    /**
    * @return string
    */
    public function getProductVersionId(): ?string
    {
        return $this->productVersionId;
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
    * @param int $vidType
    */
    public function setVidType(?int $vidType)
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

class WeimobShopMembershipPaasCalcMembershipParamExtendInfo implements \JsonSerializable
{
    /**
    * 全局追踪链标识
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
    public function setGlobalTicket(?string $globalTicket)
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
    public function setSalesChannel(?int $salesChannel)
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
    public function setSource(?int $source)
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

class WeimobShopMembershipPaasCalcMembershipParamGoodsTradeMetas implements \JsonSerializable
{
    /**
    * 基础商品信息
    * @var WeimobShopMembershipPaasCalcMembershipParamBasicGoodsInfo
    */
    private $basicGoodsInfo;

    /**
    * 已经使用的折扣信息集合
    * @var array
    */
    private $discountInfoList;

    /**
    * 带入商品item级别折扣信息集合
    * @var array
    */
    private $inputItemDiscountList;

    /**
    * 互斥信息
    * @var WeimobShopMembershipPaasCalcMembershipParamMutex
    */
    private $mutex;

    /**
    * 运费折扣信息
    * @var WeimobShopMembershipPaasCalcMembershipParamPostageDiscountInfo
    */
    private $postageDiscountInfo;

    /**
    * 交易商品信息
    * @var WeimobShopMembershipPaasCalcMembershipParamTradeGoodsInfo
    */
    private $tradeGoodsInfo;

    /**
    * @param WeimobShopMembershipPaasCalcMembershipParamBasicGoodsInfo $basicGoodsInfo
    */
    public function setBasicGoodsInfo(?WeimobShopMembershipPaasCalcMembershipParamBasicGoodsInfo $basicGoodsInfo)
    {
        $this->basicGoodsInfo = $basicGoodsInfo;
    }

    /**
    * @return WeimobShopMembershipPaasCalcMembershipParamBasicGoodsInfo
    */
    public function getBasicGoodsInfo(): ?WeimobShopMembershipPaasCalcMembershipParamBasicGoodsInfo
    {
        return $this->basicGoodsInfo;
    }

    /**
    * @param array $discountInfoList
    */
    public function setDiscountInfoList(?array $discountInfoList)
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
    public function setInputItemDiscountList(?array $inputItemDiscountList)
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
    * @param WeimobShopMembershipPaasCalcMembershipParamMutex $mutex
    */
    public function setMutex(?WeimobShopMembershipPaasCalcMembershipParamMutex $mutex)
    {
        $this->mutex = $mutex;
    }

    /**
    * @return WeimobShopMembershipPaasCalcMembershipParamMutex
    */
    public function getMutex(): ?WeimobShopMembershipPaasCalcMembershipParamMutex
    {
        return $this->mutex;
    }

    /**
    * @param WeimobShopMembershipPaasCalcMembershipParamPostageDiscountInfo $postageDiscountInfo
    */
    public function setPostageDiscountInfo(?WeimobShopMembershipPaasCalcMembershipParamPostageDiscountInfo $postageDiscountInfo)
    {
        $this->postageDiscountInfo = $postageDiscountInfo;
    }

    /**
    * @return WeimobShopMembershipPaasCalcMembershipParamPostageDiscountInfo
    */
    public function getPostageDiscountInfo(): ?WeimobShopMembershipPaasCalcMembershipParamPostageDiscountInfo
    {
        return $this->postageDiscountInfo;
    }

    /**
    * @param WeimobShopMembershipPaasCalcMembershipParamTradeGoodsInfo $tradeGoodsInfo
    */
    public function setTradeGoodsInfo(?WeimobShopMembershipPaasCalcMembershipParamTradeGoodsInfo $tradeGoodsInfo)
    {
        $this->tradeGoodsInfo = $tradeGoodsInfo;
    }

    /**
    * @return WeimobShopMembershipPaasCalcMembershipParamTradeGoodsInfo
    */
    public function getTradeGoodsInfo(): ?WeimobShopMembershipPaasCalcMembershipParamTradeGoodsInfo
    {
        return $this->tradeGoodsInfo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMembershipPaasCalcMembershipParamBasicGoodsInfo implements \JsonSerializable
{
    /**
    * 预售信息
    * @var WeimobShopMembershipPaasCalcMembershipParamPreSellInfo
    */
    private $preSellInfo;

    /**
    * 价格集合
    * @var array
    */
    private $priceInfo;

    /**
    * goods编码
    * @var string
    */
    private $goodsCode;

    /**
    * 商品id
    * @var int
    */
    private $goodsId;

    /**
    * 数量
    * @var int
    */
    private $num;

    /**
    * 商品销售模式：1-现货销售； 2-预售）
    * @var int
    */
    private $sellModelType;

    /**
    * 对应的skuId
    * @var int
    */
    private $skuId;

    /**
    * 商圈id门店id
    * @var int
    */
    private $vid;

    /**
    * vid节点类型：0-无类型,无业务意义;1-集团;2-品牌;3-区域;5-商场;10-门店;100-自提点;
    * @var int
    */
    private $vidType;

    /**
    * sku编码信息
    * @var string
    */
    private $skuCode;

    /**
    * @param WeimobShopMembershipPaasCalcMembershipParamPreSellInfo $preSellInfo
    */
    public function setPreSellInfo(?WeimobShopMembershipPaasCalcMembershipParamPreSellInfo $preSellInfo)
    {
        $this->preSellInfo = $preSellInfo;
    }

    /**
    * @return WeimobShopMembershipPaasCalcMembershipParamPreSellInfo
    */
    public function getPreSellInfo(): ?WeimobShopMembershipPaasCalcMembershipParamPreSellInfo
    {
        return $this->preSellInfo;
    }

    /**
    * @param array $priceInfo
    */
    public function setPriceInfo(?array $priceInfo)
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
    public function setGoodsCode(?string $goodsCode)
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
    * @param int $num
    */
    public function setNum(?int $num)
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
    public function setSellModelType(?int $sellModelType)
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
    * @param int $vidType
    */
    public function setVidType(?int $vidType)
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
    * @param string $skuCode
    */
    public function setSkuCode(?string $skuCode)
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

class WeimobShopMembershipPaasCalcMembershipParamPreSellInfo implements \JsonSerializable
{
    /**
    * 预售类型:1-全款预售;2-比例定金预售;3-固定定金预售;
    * @var int
    */
    private $type;

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMembershipPaasCalcMembershipParamPriceInfo implements \JsonSerializable
{
    /**
    * 价格
    * @var int
    */
    private $price;

    /**
    * 价格类型:1-市场价;2-销售价;3-定金价;4-运费;
    * @var int
    */
    private $type;

    /**
    * @param int $price
    */
    public function setPrice(?int $price)
    {
        $this->price = $price;
    }

    /**
    * @return int
    */
    public function getPrice(): ?int
    {
        return $this->price;
    }

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMembershipPaasCalcMembershipParamDiscountInfoList implements \JsonSerializable
{
    /**
    * 折扣计算的基础金额
    * @var string
    */
    private $checkAmount;

    /**
    * 折扣金额
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
    * 折扣层级
    * @var int
    */
    private $discountLevel;

    /**
    * 折扣使用状态：1-使用;2-不使用;3-默认推荐;
    * @var int
    */
    private $discountStatus;

    /**
    * 使用顺序
    * @var int
    */
    private $order;

    /**
    * 使用的资产量，积分、余额
    * @var string
    */
    private $costAmount;

    /**
    * @param string $checkAmount
    */
    public function setCheckAmount(?string $checkAmount)
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
    * @param int $discountId
    */
    public function setDiscountId(?int $discountId)
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
    public function setDiscountType(?int $discountType)
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
    public function setDiscountLevel(?int $discountLevel)
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
    public function setDiscountStatus(?int $discountStatus)
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
    * @param int $order
    */
    public function setOrder(?int $order)
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
    * @param string $costAmount
    */
    public function setCostAmount(?string $costAmount)
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

class WeimobShopMembershipPaasCalcMembershipParamInputItemDiscountList implements \JsonSerializable
{
    /**
    * 规则组
    * @var WeimobShopMembershipPaasCalcMembershipParamRuleGroup
    */
    private $ruleGroup;

    /**
    * 使用的资产量，积分、余额
    * @var int
    */
    private $costAmount;

    /**
    * 折扣id
    * @var string
    */
    private $discountId;

    /**
    * 折扣使用状态：1-使用;2-不使用;3-默认推荐;
    * @var int
    */
    private $discountStatus;

    /**
    * 折扣类型:1-满减满折;27-跨店满减满折;1-跨境满减满折;2-第X件X折;2-跨境第X件X折;3-销售价优惠券;30-跨店销售价优惠券;4-优惠码;5-市场价优惠券;6-N元N件;7-固定套装;7-商圈固定套装;8-搭配套装;9-满赠;28-跨店满赠;10-订单加价购;11-满减邮;29-满减邮;12-限时折扣;12-跨店限时折扣;1201-跨境限时折扣;13-一口价;1301-cps专享价;14-限量抢购;15-定金膨胀;16-阶梯价;17-单品加价购;18-会员优惠;19-特权价;20-企业内购;22-砍价;21-拼团;23-积分抵扣;24-余额抵扣;25-储值卡抵扣;26-直播价;999-整单开单优惠;32-整单买单优惠;997-抹零;31-裂变内购;41-直播砍价;33-兑换卡抵扣;44-订单改价;50-销售价;34-必购码;34-商圈必购码;35-买M付N;35-商圈买M付N;
    * @var int
    */
    private $discountType;

    /**
    * 使用顺序
    * @var int
    */
    private $order;

    /**
    * 折扣层级
    * @var int
    */
    private $discountLevel;

    /**
    * @param WeimobShopMembershipPaasCalcMembershipParamRuleGroup $ruleGroup
    */
    public function setRuleGroup(?WeimobShopMembershipPaasCalcMembershipParamRuleGroup $ruleGroup)
    {
        $this->ruleGroup = $ruleGroup;
    }

    /**
    * @return WeimobShopMembershipPaasCalcMembershipParamRuleGroup
    */
    public function getRuleGroup(): ?WeimobShopMembershipPaasCalcMembershipParamRuleGroup
    {
        return $this->ruleGroup;
    }

    /**
    * @param int $costAmount
    */
    public function setCostAmount(?int $costAmount)
    {
        $this->costAmount = $costAmount;
    }

    /**
    * @return int
    */
    public function getCostAmount(): ?int
    {
        return $this->costAmount;
    }

    /**
    * @param string $discountId
    */
    public function setDiscountId(?string $discountId)
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
    * @param int $discountStatus
    */
    public function setDiscountStatus(?int $discountStatus)
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
    * @param int $discountType
    */
    public function setDiscountType(?int $discountType)
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
    public function setOrder(?int $order)
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
    * @param int $discountLevel
    */
    public function setDiscountLevel(?int $discountLevel)
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

class WeimobShopMembershipPaasCalcMembershipParamRuleGroup implements \JsonSerializable
{
    /**
    * 可叠加信息
    * @var WeimobShopMembershipPaasCalcMembershipParamSuperposable
    */
    private $superposable;

    /**
    * 条件类型：100-无条件；102-金额；103-数量；104-折扣；
    * @var int
    */
    private $conditionType;

    /**
    * 条件值
    * @var string
    */
    private $conditionValue;

    /**
    * 结果类型:1001-减钱;1002-打折;1003-一口价;1004-减免数量;1005-赠送数量;1006-膨胀倍数;1007-膨胀固定金额;1008-减百分比;2001-包邮;2002-减邮;3001-赠品;3002-优惠券;3003-积分;3004-余额;3005-换购商品;11001-随机减钱;11002-随机折扣;
    * @var int
    */
    private $resultType;

    /**
    * 结果值
    * @var string
    */
    private $resultValue;

    /**
    * @param WeimobShopMembershipPaasCalcMembershipParamSuperposable $superposable
    */
    public function setSuperposable(?WeimobShopMembershipPaasCalcMembershipParamSuperposable $superposable)
    {
        $this->superposable = $superposable;
    }

    /**
    * @return WeimobShopMembershipPaasCalcMembershipParamSuperposable
    */
    public function getSuperposable(): ?WeimobShopMembershipPaasCalcMembershipParamSuperposable
    {
        return $this->superposable;
    }

    /**
    * @param int $conditionType
    */
    public function setConditionType(?int $conditionType)
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
    * @param string $conditionValue
    */
    public function setConditionValue(?string $conditionValue)
    {
        $this->conditionValue = $conditionValue;
    }

    /**
    * @return string
    */
    public function getConditionValue(): ?string
    {
        return $this->conditionValue;
    }

    /**
    * @param int $resultType
    */
    public function setResultType(?int $resultType)
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

    /**
    * @param string $resultValue
    */
    public function setResultValue(?string $resultValue)
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMembershipPaasCalcMembershipParamSuperposable implements \JsonSerializable
{
    /**
    * 优惠券可叠加数量
    * @var int
    */
    private $superposableCouponNum;

    /**
    * 是否可叠加
    * @var bool
    */
    private $superposable;

    /**
    * 相同是否可叠加
    * @var bool
    */
    private $identicalSuperposable;

    /**
    * 不同是否可叠加
    * @var bool
    */
    private $differentSuperposable;

    /**
    * @param int $superposableCouponNum
    */
    public function setSuperposableCouponNum(?int $superposableCouponNum)
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

    /**
    * @param bool $superposable
    */
    public function setSuperposable(?bool $superposable)
    {
        $this->superposable = $superposable;
    }

    /**
    * @return bool
    */
    public function getSuperposable(): ?bool
    {
        return $this->superposable;
    }

    /**
    * @param bool $identicalSuperposable
    */
    public function setIdenticalSuperposable(?bool $identicalSuperposable)
    {
        $this->identicalSuperposable = $identicalSuperposable;
    }

    /**
    * @return bool
    */
    public function getIdenticalSuperposable(): ?bool
    {
        return $this->identicalSuperposable;
    }

    /**
    * @param bool $differentSuperposable
    */
    public function setDifferentSuperposable(?bool $differentSuperposable)
    {
        $this->differentSuperposable = $differentSuperposable;
    }

    /**
    * @return bool
    */
    public function getDifferentSuperposable(): ?bool
    {
        return $this->differentSuperposable;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMembershipPaasCalcMembershipParamMutex implements \JsonSerializable
{
    /**
    * 自定义优惠类型:1-所有优惠可用;2-自定义优惠类型;
    * @var int
    */
    private $customDiscountType;

    /**
    * 自定义折扣类型具体值:可用的折扣类型
    * @var array
    */
    private $customDiscountTypeList;

    /**
    * @param int $customDiscountType
    */
    public function setCustomDiscountType(?int $customDiscountType)
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
    public function setCustomDiscountTypeList(?array $customDiscountTypeList)
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

class WeimobShopMembershipPaasCalcMembershipParamPostageDiscountInfo implements \JsonSerializable
{
    /**
    * 已经使用的折扣信息集合
    * @var array
    */
    private $discountInfoList;

    /**
    * 互斥信息
    * @var WeimobShopMembershipPaasCalcMembershipParamMutex2
    */
    private $mutex;

    /**
    * @param array $discountInfoList
    */
    public function setDiscountInfoList(?array $discountInfoList)
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
    * @param WeimobShopMembershipPaasCalcMembershipParamMutex2 $mutex
    */
    public function setMutex(?WeimobShopMembershipPaasCalcMembershipParamMutex2 $mutex)
    {
        $this->mutex = $mutex;
    }

    /**
    * @return WeimobShopMembershipPaasCalcMembershipParamMutex2
    */
    public function getMutex(): ?WeimobShopMembershipPaasCalcMembershipParamMutex2
    {
        return $this->mutex;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMembershipPaasCalcMembershipParamDiscountInfoList2 implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMembershipPaasCalcMembershipParamMutex2 implements \JsonSerializable
{
    /**
    * 自定义优惠类型:1-所有优惠可用;2-自定义优惠类型;
    * @var int
    */
    private $customDiscountType;

    /**
    * 自定义折扣类型具体值:可用的折扣类型
    * @var array
    */
    private $customDiscountTypeList;

    /**
    * @param int $customDiscountType
    */
    public function setCustomDiscountType(?int $customDiscountType)
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
    public function setCustomDiscountTypeList(?array $customDiscountTypeList)
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

class WeimobShopMembershipPaasCalcMembershipParamTradeGoodsInfo implements \JsonSerializable
{
    /**
    * 标识商品item的唯一id
    * @var int
    */
    private $itemId;

    /**
    * 结算商品类型：1-主商品;2-赠品;3-换购商品
    * @var int
    */
    private $tradeGoodsType;

    /**
    * 结算价(结算流程中的基准计算价格，可以是销售价、市场价)
    * @var string
    */
    private $tradePrice;

    /**
    * 价格类型：1-市场价;2-销售价;
    * @var int
    */
    private $tradePriceType;

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
    * @param string $tradePrice
    */
    public function setTradePrice(?string $tradePrice)
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
    public function setTradePriceType(?int $tradePriceType)
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


class WeimobShopMembershipPaasCalcMembershipResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobShopMembershipPaasCalcMembershipData
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
    * @return WeimobShopMembershipPaasCalcMembershipData
    */
    public function getData(): ?WeimobShopMembershipPaasCalcMembershipData
    {
        return $this->data;
    }

    /**
    * @param WeimobShopMembershipPaasCalcMembershipData $data
    */
    public function setData(?WeimobShopMembershipPaasCalcMembershipData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMembershipPaasCalcMembershipData implements \JsonSerializable
{
    /**
    * 商品集合
    * @var WeimobShopMembershipPaasCalcMembershipDataGoodsTradeMetas
    */
    private $goodsTradeMetas;

    /**
    * 计算规则集合
    * @var array
    */
    private $calcRuleList;

    /**
    * 全局追踪链标识
    * @var string
    */
    private $globalTicket;

    /**
    * 外部追踪链标识
    * @var string
    */
    private $outTicket;

    /**
    * @param WeimobShopMembershipPaasCalcMembershipDataGoodsTradeMetas $goodsTradeMetas
    */
    public function setGoodsTradeMetas(?WeimobShopMembershipPaasCalcMembershipDataGoodsTradeMetas $goodsTradeMetas)
    {
        $this->goodsTradeMetas = $goodsTradeMetas;
    }

    /**
    * @return WeimobShopMembershipPaasCalcMembershipDataGoodsTradeMetas
    */
    public function getGoodsTradeMetas(): ?WeimobShopMembershipPaasCalcMembershipDataGoodsTradeMetas
    {
        return $this->goodsTradeMetas;
    }

    /**
    * @param array $calcRuleList
    */
    public function setCalcRuleList(?array $calcRuleList)
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
    public function setGlobalTicket(?string $globalTicket)
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
    public function setOutTicket(?string $outTicket)
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

class WeimobShopMembershipPaasCalcMembershipDataGoodsTradeMetas implements \JsonSerializable
{
    /**
    * 交易商品信息
    * @var WeimobShopMembershipPaasCalcMembershipDataTradeGoodsInfo
    */
    private $tradeGoodsInfo;

    /**
    * 已经使用的折扣信息集合
    * @var array
    */
    private $discountInfoList;

    /**
    * 运费折扣信息
    * @var WeimobShopMembershipPaasCalcMembershipDataPostageDiscountInfo
    */
    private $postageDiscountInfo;

    /**
    * @param WeimobShopMembershipPaasCalcMembershipDataTradeGoodsInfo $tradeGoodsInfo
    */
    public function setTradeGoodsInfo(?WeimobShopMembershipPaasCalcMembershipDataTradeGoodsInfo $tradeGoodsInfo)
    {
        $this->tradeGoodsInfo = $tradeGoodsInfo;
    }

    /**
    * @return WeimobShopMembershipPaasCalcMembershipDataTradeGoodsInfo
    */
    public function getTradeGoodsInfo(): ?WeimobShopMembershipPaasCalcMembershipDataTradeGoodsInfo
    {
        return $this->tradeGoodsInfo;
    }

    /**
    * @param array $discountInfoList
    */
    public function setDiscountInfoList(?array $discountInfoList)
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
    * @param WeimobShopMembershipPaasCalcMembershipDataPostageDiscountInfo $postageDiscountInfo
    */
    public function setPostageDiscountInfo(?WeimobShopMembershipPaasCalcMembershipDataPostageDiscountInfo $postageDiscountInfo)
    {
        $this->postageDiscountInfo = $postageDiscountInfo;
    }

    /**
    * @return WeimobShopMembershipPaasCalcMembershipDataPostageDiscountInfo
    */
    public function getPostageDiscountInfo(): ?WeimobShopMembershipPaasCalcMembershipDataPostageDiscountInfo
    {
        return $this->postageDiscountInfo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMembershipPaasCalcMembershipDataTradeGoodsInfo implements \JsonSerializable
{
    /**
    * 标识商品item的唯一id
    * @var int
    */
    private $itemId;

    /**
    * 结算商品类型：1-主商品;2-赠品;
    * @var int
    */
    private $tradeGoodsType;

    /**
    * 结算价(结算流程中的基准计算价格，可以是销售价、市场价)
    * @var string
    */
    private $tradePrice;

    /**
    * 1-市场价;2-销售价;
    * @var int
    */
    private $tradePriceType;

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
    * @param string $tradePrice
    */
    public function setTradePrice(?string $tradePrice)
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
    public function setTradePriceType(?int $tradePriceType)
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

class WeimobShopMembershipPaasCalcMembershipDataDiscountInfoList implements \JsonSerializable
{
    /**
    * 折扣计算的基础金额，在当前checkAmount上计算出discountAmount
    * @var string
    */
    private $checkAmount;

    /**
    * 折扣金额
    * @var string
    */
    private $discountAmount;

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
    * 折扣层级
    * @var int
    */
    private $discountLevel;

    /**
    * 折扣使用状态：1-使用;2-不使用;3-默认推荐;
    * @var int
    */
    private $discountStatus;

    /**
    * 使用顺序
    * @var int
    */
    private $order;

    /**
    * 使用的资产量，积分、余额
    * @var string
    */
    private $costAmount;

    /**
    * @param string $checkAmount
    */
    public function setCheckAmount(?string $checkAmount)
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
    * @param string $discountId
    */
    public function setDiscountId(?string $discountId)
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
    public function setDiscountType(?int $discountType)
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
    public function setDiscountLevel(?int $discountLevel)
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
    public function setDiscountStatus(?int $discountStatus)
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
    * @param int $order
    */
    public function setOrder(?int $order)
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
    * @param string $costAmount
    */
    public function setCostAmount(?string $costAmount)
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

class WeimobShopMembershipPaasCalcMembershipDataPostageDiscountInfo implements \JsonSerializable
{
    /**
    * 互斥信息
    * @var WeimobShopMembershipPaasCalcMembershipDataMutex
    */
    private $mutex;

    /**
    * 已经使用的折扣信息集合
    * @var array
    */
    private $discountInfoList;

    /**
    * @param WeimobShopMembershipPaasCalcMembershipDataMutex $mutex
    */
    public function setMutex(?WeimobShopMembershipPaasCalcMembershipDataMutex $mutex)
    {
        $this->mutex = $mutex;
    }

    /**
    * @return WeimobShopMembershipPaasCalcMembershipDataMutex
    */
    public function getMutex(): ?WeimobShopMembershipPaasCalcMembershipDataMutex
    {
        return $this->mutex;
    }

    /**
    * @param array $discountInfoList
    */
    public function setDiscountInfoList(?array $discountInfoList)
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMembershipPaasCalcMembershipDataMutex implements \JsonSerializable
{
    /**
    * 自定义优惠类型:1-所有优惠可用;2-自定义优惠类型;
    * @var string
    */
    private $customDiscountType;

    /**
    * 自定义折扣类型具体值
    * @var string
    */
    private $customDiscountTypeList;

    /**
    * @param string $customDiscountType
    */
    public function setCustomDiscountType(?string $customDiscountType)
    {
        $this->customDiscountType = $customDiscountType;
    }

    /**
    * @return string
    */
    public function getCustomDiscountType(): ?string
    {
        return $this->customDiscountType;
    }

    /**
    * @param string $customDiscountTypeList
    */
    public function setCustomDiscountTypeList(?string $customDiscountTypeList)
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

class WeimobShopMembershipPaasCalcMembershipDataDiscountInfoList2 implements \JsonSerializable
{
    /**
    * 折扣计算的基础金额，在当前checkAmount上计算出discountAmount
    * @var string
    */
    private $checkAmount	;

    /**
    * 折扣金额
    * @var string
    */
    private $discountAmount;

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
    * 折扣层级
    * @var int
    */
    private $discountLevel;

    /**
    * 折扣使用状态：1-使用;2-不使用;3-默认推荐;
    * @var int
    */
    private $discountStatus;

    /**
    * 序号
    * @var int
    */
    private $order;

    /**
    * 使用的资产量，积分、余额
    * @var string
    */
    private $costAmount;

    /**
    * @param string $checkAmount	
    */
    public function setCheckAmount	(?string $checkAmount	)
    {
        $this->checkAmount	 = $checkAmount	;
    }

    /**
    * @return string
    */
    public function getCheckAmount	(): ?string
    {
        return $this->checkAmount	;
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
    * @param string $discountId
    */
    public function setDiscountId(?string $discountId)
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
    public function setDiscountType(?int $discountType)
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
    public function setDiscountLevel(?int $discountLevel)
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
    public function setDiscountStatus(?int $discountStatus)
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
    * @param int $order
    */
    public function setOrder(?int $order)
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
    * @param string $costAmount
    */
    public function setCostAmount(?string $costAmount)
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

class WeimobShopMembershipPaasCalcMembershipDataCalcRuleList implements \JsonSerializable
{
    /**
    * 互斥信息
    * @var WeimobShopMembershipPaasCalcMembershipDataMutex2
    */
    private $mutex;

    /**
    * 折扣使用状态：1-使用;2-不使用;3-默认推荐;
    * @var WeimobShopMembershipPaasCalcMembershipDataDiscountUseInfo
    */
    private $discountUseInfo;

    /**
    * 折扣id
    * @var string
    */
    private $discountId;

    /**
    * 折扣类型:1-满减满折;27-跨店满减满折;1-跨境满减满折;2-第X件X折;2-跨境第X件X折;3-销售价优惠券;30-跨店销售价优惠券;4-优惠码;5-市场价优惠券;6-N元N件;7-固定套装;7-商圈固定套装;8-搭配套装;9-满赠;28-跨店满赠;10-订单加价购;11-满减邮;29-满减邮;12-限时折扣;12-跨店限时折扣;1201-跨境限时折扣;13-一口价;1301-cps专享价;14-限量抢购;15-定金膨胀;16-阶梯价;17-单品加价购;18-会员优惠;19-特权价;20-企业内购;22-砍价;21-拼团;23-积分抵扣;24-余额抵扣;25-储值卡抵扣;26-直播价;999-整单开单优惠;32-整单买单优惠;997-抹零;31-裂变内购;41-直播砍价;33-兑换卡抵扣;44-订单改价;50-销售价;34-必购码;34-商圈必购码;35-买M付N;35-商圈买M付N;
    * @var string
    */
    private $discountType;

    /**
    * @param WeimobShopMembershipPaasCalcMembershipDataMutex2 $mutex
    */
    public function setMutex(?WeimobShopMembershipPaasCalcMembershipDataMutex2 $mutex)
    {
        $this->mutex = $mutex;
    }

    /**
    * @return WeimobShopMembershipPaasCalcMembershipDataMutex2
    */
    public function getMutex(): ?WeimobShopMembershipPaasCalcMembershipDataMutex2
    {
        return $this->mutex;
    }

    /**
    * @param WeimobShopMembershipPaasCalcMembershipDataDiscountUseInfo $discountUseInfo
    */
    public function setDiscountUseInfo(?WeimobShopMembershipPaasCalcMembershipDataDiscountUseInfo $discountUseInfo)
    {
        $this->discountUseInfo = $discountUseInfo;
    }

    /**
    * @return WeimobShopMembershipPaasCalcMembershipDataDiscountUseInfo
    */
    public function getDiscountUseInfo(): ?WeimobShopMembershipPaasCalcMembershipDataDiscountUseInfo
    {
        return $this->discountUseInfo;
    }

    /**
    * @param string $discountId
    */
    public function setDiscountId(?string $discountId)
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
    * @param string $discountType
    */
    public function setDiscountType(?string $discountType)
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMembershipPaasCalcMembershipDataMutex2 implements \JsonSerializable
{
    /**
    * 自定义优惠类型:1-所有优惠可用;2-自定义优惠类型;
    * @var int
    */
    private $customDiscountType;

    /**
    * 自定义折扣类型具体值
    * @var array
    */
    private $customDiscountTypeList;

    /**
    * @param int $customDiscountType
    */
    public function setCustomDiscountType(?int $customDiscountType)
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
    public function setCustomDiscountTypeList(?array $customDiscountTypeList)
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

class WeimobShopMembershipPaasCalcMembershipDataDiscountUseInfo implements \JsonSerializable
{
    /**
    * 已使用抵扣明细
    * @var array
    */
    private $usedDiscountDetailList;

    /**
    * 最多可抵扣金额(积分，余额)
    * @var string
    */
    private $maxDiscountTotalAmount;

    /**
    * 最多可抵扣资产(积分，余额)
    * @var string
    */
    private $maxDiscountTotalCostAmount;

    /**
    * 当前优惠的总优惠金额：一张券作用于三个商品，这张券在三个商品的总优惠金额,积分的总优惠金额
    * @var string
    */
    private $useDiscountTotalAmount;

    /**
    * 实际抵扣资产
    * @var string
    */
    private $useDiscountTotalCostAmount;

    /**
    * 折扣使用状态：1-使用;2-不使用;3-默认推荐;
    * @var bool
    */
    private $useStatus;

    /**
    * 置灰状态：true-置灰；false-不置灰
    * @var bool
    */
    private $greyStatus;

    /**
    * 提示信息
    * @var string
    */
    private $toast;

    /**
    * @param array $usedDiscountDetailList
    */
    public function setUsedDiscountDetailList(?array $usedDiscountDetailList)
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
    public function setMaxDiscountTotalAmount(?string $maxDiscountTotalAmount)
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
    public function setMaxDiscountTotalCostAmount(?string $maxDiscountTotalCostAmount)
    {
        $this->maxDiscountTotalCostAmount = $maxDiscountTotalCostAmount;
    }

    /**
    * @return string
    */
    public function getMaxDiscountTotalCostAmount(): ?string
    {
        return $this->maxDiscountTotalCostAmount;
    }

    /**
    * @param string $useDiscountTotalAmount
    */
    public function setUseDiscountTotalAmount(?string $useDiscountTotalAmount)
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
    public function setUseDiscountTotalCostAmount(?string $useDiscountTotalCostAmount)
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
    public function setUseStatus(?bool $useStatus)
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

    /**
    * @param bool $greyStatus
    */
    public function setGreyStatus(?bool $greyStatus)
    {
        $this->greyStatus = $greyStatus;
    }

    /**
    * @return bool
    */
    public function getGreyStatus(): ?bool
    {
        return $this->greyStatus;
    }

    /**
    * @param string $toast
    */
    public function setToast(?string $toast)
    {
        $this->toast = $toast;
    }

    /**
    * @return string
    */
    public function getToast(): ?string
    {
        return $this->toast;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMembershipPaasCalcMembershipDataUsedDiscountDetailList implements \JsonSerializable
{
    /**
    * ""
    * @var string
    */
    private $discountAmount;

    /**
    * ""
    * @var string
    */
    private $costAmount;

    /**
    * ""
    * @var string
    */
    private $deductionType;

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
    * @param string $costAmount
    */
    public function setCostAmount(?string $costAmount)
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
    * @param string $deductionType
    */
    public function setDeductionType(?string $deductionType)
    {
        $this->deductionType = $deductionType;
    }

    /**
    * @return string
    */
    public function getDeductionType(): ?string
    {
        return $this->deductionType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

