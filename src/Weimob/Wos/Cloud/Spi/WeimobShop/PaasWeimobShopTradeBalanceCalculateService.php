<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,433
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobShopTradeBalanceCalculateService
{
    const specType = 'wos';

    public function invoke(WeimobShopTradeBalanceCalculateRequest $request) : WeimobShopTradeBalanceCalculateResponse;
}

class WeimobShopTradeBalanceCalculateRequest implements \JsonSerializable
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
    * @var WeimobShopTradeBalanceCalculateParam
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
    * @param WeimobShopTradeBalanceCalculateParam $param
    */
    public function setParam(?WeimobShopTradeBalanceCalculateParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobShopTradeBalanceCalculateParam
    */
    public function getParam(): ?WeimobShopTradeBalanceCalculateParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeBalanceCalculateParam implements \JsonSerializable
{
    /**
    * 基础请求信息
    * @var WeimobShopTradeBalanceCalculateParamBasicInfo
    */
    private $basicInfo;

    /**
    * 扩展信息
    * @var WeimobShopTradeBalanceCalculateParamExtendInfo
    */
    private $extendInfo;

    /**
    * 商品集合
    * @var array
    */
    private $goodsTradeMetas;

    /**
    * 用户选择的余额信息
    * @var array
    */
    private $inputUserDiscountList;

    /**
    * 买家wid
    * @var int
    */
    private $wid;

    /**
    * @param WeimobShopTradeBalanceCalculateParamBasicInfo $basicInfo
    */
    public function setBasicInfo(?WeimobShopTradeBalanceCalculateParamBasicInfo $basicInfo)
    {
        $this->basicInfo = $basicInfo;
    }

    /**
    * @return WeimobShopTradeBalanceCalculateParamBasicInfo
    */
    public function getBasicInfo(): ?WeimobShopTradeBalanceCalculateParamBasicInfo
    {
        return $this->basicInfo;
    }

    /**
    * @param WeimobShopTradeBalanceCalculateParamExtendInfo $extendInfo
    */
    public function setExtendInfo(?WeimobShopTradeBalanceCalculateParamExtendInfo $extendInfo)
    {
        $this->extendInfo = $extendInfo;
    }

    /**
    * @return WeimobShopTradeBalanceCalculateParamExtendInfo
    */
    public function getExtendInfo(): ?WeimobShopTradeBalanceCalculateParamExtendInfo
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
    * @param array $inputUserDiscountList
    */
    public function setInputUserDiscountList(?array $inputUserDiscountList)
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeBalanceCalculateParamBasicInfo implements \JsonSerializable
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
    * 组织架构节点 ID。组织的唯一标识，是 创建组织 时自动生成的 ID，可以通过 bos/organization/getList 接口获取该 ID。
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

class WeimobShopTradeBalanceCalculateParamExtendInfo implements \JsonSerializable
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
    * 交易场景（0普通购买、1消费买单、2积分商城兑换）
    * @var int
    */
    private $tradeScene;

    /**
    * 结算唯一标识
    * @var string
    */
    private $tradeTrackId;

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

    /**
    * @param int $tradeScene
    */
    public function setTradeScene(?int $tradeScene)
    {
        $this->tradeScene = $tradeScene;
    }

    /**
    * @return int
    */
    public function getTradeScene(): ?int
    {
        return $this->tradeScene;
    }

    /**
    * @param string $tradeTrackId
    */
    public function setTradeTrackId(?string $tradeTrackId)
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

class WeimobShopTradeBalanceCalculateParamGoodsTradeMetas implements \JsonSerializable
{
    /**
    * 基础商品信息
    * @var WeimobShopTradeBalanceCalculateParamBasicGoodsInfo
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
    * @var WeimobShopTradeBalanceCalculateParamMutex
    */
    private $mutex;

    /**
    * 运费折扣信息
    * @var WeimobShopTradeBalanceCalculateParamPostageDiscountInfo
    */
    private $postageDiscountInfo;

    /**
    * 交易商品信息
    * @var WeimobShopTradeBalanceCalculateParamTradeGoodsInfo
    */
    private $tradeGoodsInfo;

    /**
    * @param WeimobShopTradeBalanceCalculateParamBasicGoodsInfo $basicGoodsInfo
    */
    public function setBasicGoodsInfo(?WeimobShopTradeBalanceCalculateParamBasicGoodsInfo $basicGoodsInfo)
    {
        $this->basicGoodsInfo = $basicGoodsInfo;
    }

    /**
    * @return WeimobShopTradeBalanceCalculateParamBasicGoodsInfo
    */
    public function getBasicGoodsInfo(): ?WeimobShopTradeBalanceCalculateParamBasicGoodsInfo
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
    * @param WeimobShopTradeBalanceCalculateParamMutex $mutex
    */
    public function setMutex(?WeimobShopTradeBalanceCalculateParamMutex $mutex)
    {
        $this->mutex = $mutex;
    }

    /**
    * @return WeimobShopTradeBalanceCalculateParamMutex
    */
    public function getMutex(): ?WeimobShopTradeBalanceCalculateParamMutex
    {
        return $this->mutex;
    }

    /**
    * @param WeimobShopTradeBalanceCalculateParamPostageDiscountInfo $postageDiscountInfo
    */
    public function setPostageDiscountInfo(?WeimobShopTradeBalanceCalculateParamPostageDiscountInfo $postageDiscountInfo)
    {
        $this->postageDiscountInfo = $postageDiscountInfo;
    }

    /**
    * @return WeimobShopTradeBalanceCalculateParamPostageDiscountInfo
    */
    public function getPostageDiscountInfo(): ?WeimobShopTradeBalanceCalculateParamPostageDiscountInfo
    {
        return $this->postageDiscountInfo;
    }

    /**
    * @param WeimobShopTradeBalanceCalculateParamTradeGoodsInfo $tradeGoodsInfo
    */
    public function setTradeGoodsInfo(?WeimobShopTradeBalanceCalculateParamTradeGoodsInfo $tradeGoodsInfo)
    {
        $this->tradeGoodsInfo = $tradeGoodsInfo;
    }

    /**
    * @return WeimobShopTradeBalanceCalculateParamTradeGoodsInfo
    */
    public function getTradeGoodsInfo(): ?WeimobShopTradeBalanceCalculateParamTradeGoodsInfo
    {
        return $this->tradeGoodsInfo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeBalanceCalculateParamBasicGoodsInfo implements \JsonSerializable
{
    /**
    * 预售信息
    * @var WeimobShopTradeBalanceCalculateParamPreSellInfo
    */
    private $preSellInfo;

    /**
    * 价格集合
    * @var array
    */
    private $priceInfo;

    /**
    * 商品编码。可以通过 weimob_shop/goods/getList 接口获取该 ID。
    * @var string
    */
    private $goodsCode;

    /**
    * 商品 ID。可以通过 weimob_shop/goods/getList 接口获取该 ID。
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
    * 商品规格Id。可以通过weimob_shop/goods/get获取
    * @var int
    */
    private $skuId;

    /**
    * 商品服务门店节点 ID。组织的唯一标识，是 创建组织 时自动生成的 ID，可以通过 bos/organization/getList 接口获取该 ID。
    * @var int
    */
    private $vid;

    /**
    * vid节点类型：0-无类型,无业务意义;1-集团;2-品牌;3-区域;5-商场;10-门店;100-自提点;
    * @var int
    */
    private $vidType;

    /**
    * sku编码信息。可以通过weimob_shop/goods/get获取
    * @var string
    */
    private $skuCode;

    /**
    * @param WeimobShopTradeBalanceCalculateParamPreSellInfo $preSellInfo
    */
    public function setPreSellInfo(?WeimobShopTradeBalanceCalculateParamPreSellInfo $preSellInfo)
    {
        $this->preSellInfo = $preSellInfo;
    }

    /**
    * @return WeimobShopTradeBalanceCalculateParamPreSellInfo
    */
    public function getPreSellInfo(): ?WeimobShopTradeBalanceCalculateParamPreSellInfo
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

class WeimobShopTradeBalanceCalculateParamPreSellInfo implements \JsonSerializable
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

class WeimobShopTradeBalanceCalculateParamPriceInfo implements \JsonSerializable
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

class WeimobShopTradeBalanceCalculateParamDiscountInfoList implements \JsonSerializable
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

class WeimobShopTradeBalanceCalculateParamInputItemDiscountList implements \JsonSerializable
{
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
    * 抵扣类型：(1:抵扣商品、2抵扣积分商品 、3:抵扣运费)
    * @var int
    */
    private $deductionType;

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

    /**
    * @param int $deductionType
    */
    public function setDeductionType(?int $deductionType)
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

class WeimobShopTradeBalanceCalculateParamMutex implements \JsonSerializable
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

class WeimobShopTradeBalanceCalculateParamPostageDiscountInfo implements \JsonSerializable
{
    /**
    * 已经使用的折扣信息集合
    * @var array
    */
    private $discountInfoList;

    /**
    * 互斥信息
    * @var WeimobShopTradeBalanceCalculateParamMutex2
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
    * @param WeimobShopTradeBalanceCalculateParamMutex2 $mutex
    */
    public function setMutex(?WeimobShopTradeBalanceCalculateParamMutex2 $mutex)
    {
        $this->mutex = $mutex;
    }

    /**
    * @return WeimobShopTradeBalanceCalculateParamMutex2
    */
    public function getMutex(): ?WeimobShopTradeBalanceCalculateParamMutex2
    {
        return $this->mutex;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeBalanceCalculateParamDiscountInfoList2 implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeBalanceCalculateParamMutex2 implements \JsonSerializable
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

class WeimobShopTradeBalanceCalculateParamTradeGoodsInfo implements \JsonSerializable
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

class WeimobShopTradeBalanceCalculateParamInputUserDiscountList implements \JsonSerializable
{
    /**
    * 折扣ID
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
    * 折扣状态： 1: 使用 2: 不使用;3:默认推荐
    * @var int
    */
    private $discountStatus;

    /**
    * 序号
    * @var int
    */
    private $order;

    /**
    * 使用的余额。(BigDecimal)
    * @var int
    */
    private $costAmount;

    /**
    * 抵扣类型：1抵扣商品、2抵扣积分商品、3抵扣运费
    * @var int
    */
    private $deductionType;

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
    * @param int $deductionType
    */
    public function setDeductionType(?int $deductionType)
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


class WeimobShopTradeBalanceCalculateResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobShopTradeBalanceCalculateData
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
    * @return WeimobShopTradeBalanceCalculateData
    */
    public function getData(): ?WeimobShopTradeBalanceCalculateData
    {
        return $this->data;
    }

    /**
    * @param WeimobShopTradeBalanceCalculateData $data
    */
    public function setData(?WeimobShopTradeBalanceCalculateData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeBalanceCalculateData implements \JsonSerializable
{
    /**
    * 商品集合
    * @var WeimobShopTradeBalanceCalculateDataGoodsTradeMetas
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
    * 是否展示自定义余额信息区
    * @var bool
    */
    private $enableInputBalance;

    /**
    * @param WeimobShopTradeBalanceCalculateDataGoodsTradeMetas $goodsTradeMetas
    */
    public function setGoodsTradeMetas(?WeimobShopTradeBalanceCalculateDataGoodsTradeMetas $goodsTradeMetas)
    {
        $this->goodsTradeMetas = $goodsTradeMetas;
    }

    /**
    * @return WeimobShopTradeBalanceCalculateDataGoodsTradeMetas
    */
    public function getGoodsTradeMetas(): ?WeimobShopTradeBalanceCalculateDataGoodsTradeMetas
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

    /**
    * @param bool $enableInputBalance
    */
    public function setEnableInputBalance(?bool $enableInputBalance)
    {
        $this->enableInputBalance = $enableInputBalance;
    }

    /**
    * @return bool
    */
    public function getEnableInputBalance(): ?bool
    {
        return $this->enableInputBalance;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeBalanceCalculateDataGoodsTradeMetas implements \JsonSerializable
{
    /**
    * 交易商品信息
    * @var WeimobShopTradeBalanceCalculateDataTradeGoodsInfo
    */
    private $tradeGoodsInfo;

    /**
    * 已经使用的折扣信息集合
    * @var array
    */
    private $discountInfoList;

    /**
    * 运费折扣信息
    * @var WeimobShopTradeBalanceCalculateDataPostageDiscountInfo
    */
    private $postageDiscountInfo;

    /**
    * @param WeimobShopTradeBalanceCalculateDataTradeGoodsInfo $tradeGoodsInfo
    */
    public function setTradeGoodsInfo(?WeimobShopTradeBalanceCalculateDataTradeGoodsInfo $tradeGoodsInfo)
    {
        $this->tradeGoodsInfo = $tradeGoodsInfo;
    }

    /**
    * @return WeimobShopTradeBalanceCalculateDataTradeGoodsInfo
    */
    public function getTradeGoodsInfo(): ?WeimobShopTradeBalanceCalculateDataTradeGoodsInfo
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
    * @param WeimobShopTradeBalanceCalculateDataPostageDiscountInfo $postageDiscountInfo
    */
    public function setPostageDiscountInfo(?WeimobShopTradeBalanceCalculateDataPostageDiscountInfo $postageDiscountInfo)
    {
        $this->postageDiscountInfo = $postageDiscountInfo;
    }

    /**
    * @return WeimobShopTradeBalanceCalculateDataPostageDiscountInfo
    */
    public function getPostageDiscountInfo(): ?WeimobShopTradeBalanceCalculateDataPostageDiscountInfo
    {
        return $this->postageDiscountInfo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeBalanceCalculateDataTradeGoodsInfo implements \JsonSerializable
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

class WeimobShopTradeBalanceCalculateDataDiscountInfoList implements \JsonSerializable
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

class WeimobShopTradeBalanceCalculateDataPostageDiscountInfo implements \JsonSerializable
{
    /**
    * 互斥信息
    * @var WeimobShopTradeBalanceCalculateDataMutex
    */
    private $mutex;

    /**
    * 已经使用的折扣信息集合
    * @var array
    */
    private $discountInfoList;

    /**
    * @param WeimobShopTradeBalanceCalculateDataMutex $mutex
    */
    public function setMutex(?WeimobShopTradeBalanceCalculateDataMutex $mutex)
    {
        $this->mutex = $mutex;
    }

    /**
    * @return WeimobShopTradeBalanceCalculateDataMutex
    */
    public function getMutex(): ?WeimobShopTradeBalanceCalculateDataMutex
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

class WeimobShopTradeBalanceCalculateDataMutex implements \JsonSerializable
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

class WeimobShopTradeBalanceCalculateDataDiscountInfoList2 implements \JsonSerializable
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

class WeimobShopTradeBalanceCalculateDataCalcRuleList implements \JsonSerializable
{
    /**
    * 互斥信息
    * @var WeimobShopTradeBalanceCalculateDataMutex2
    */
    private $mutex;

    /**
    * 折扣使用信息
    * @var WeimobShopTradeBalanceCalculateDataDiscountUseInfo
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
    * 资产总数量。(BigDecimal)
    * @var string
    */
    private $totalCostAmount;

    /**
    * @param WeimobShopTradeBalanceCalculateDataMutex2 $mutex
    */
    public function setMutex(?WeimobShopTradeBalanceCalculateDataMutex2 $mutex)
    {
        $this->mutex = $mutex;
    }

    /**
    * @return WeimobShopTradeBalanceCalculateDataMutex2
    */
    public function getMutex(): ?WeimobShopTradeBalanceCalculateDataMutex2
    {
        return $this->mutex;
    }

    /**
    * @param WeimobShopTradeBalanceCalculateDataDiscountUseInfo $discountUseInfo
    */
    public function setDiscountUseInfo(?WeimobShopTradeBalanceCalculateDataDiscountUseInfo $discountUseInfo)
    {
        $this->discountUseInfo = $discountUseInfo;
    }

    /**
    * @return WeimobShopTradeBalanceCalculateDataDiscountUseInfo
    */
    public function getDiscountUseInfo(): ?WeimobShopTradeBalanceCalculateDataDiscountUseInfo
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

    /**
    * @param string $totalCostAmount
    */
    public function setTotalCostAmount(?string $totalCostAmount)
    {
        $this->totalCostAmount = $totalCostAmount;
    }

    /**
    * @return string
    */
    public function getTotalCostAmount(): ?string
    {
        return $this->totalCostAmount;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeBalanceCalculateDataMutex2 implements \JsonSerializable
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

class WeimobShopTradeBalanceCalculateDataDiscountUseInfo implements \JsonSerializable
{
    /**
    * 已使用抵扣明细
    * @var array
    */
    private $usedDiscountDetailList;

    /**
    * 最大抵扣明细列表
    * @var array
    */
    private $maxDiscountDetailList;

    /**
    * 最多可抵扣金额(余额)（BigDecimal）
    * @var string
    */
    private $maxDiscountTotalAmount;

    /**
    * 最多可抵扣资产(余额)（BigDecimal）
    * @var string
    */
    private $maxDiscountTotalCostAmount;

    /**
    * 当前优惠的总优惠金额：余额的总优惠金额（BigDecimal）
    * @var string
    */
    private $useDiscountTotalAmount;

    /**
    * 实际抵扣资产（BigDecimal）
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
    * @param array $maxDiscountDetailList
    */
    public function setMaxDiscountDetailList(?array $maxDiscountDetailList)
    {
        $this->maxDiscountDetailList = $maxDiscountDetailList;
    }

    /**
    * @return array
    */
    public function getMaxDiscountDetailList(): ?array
    {
        return $this->maxDiscountDetailList;
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

class WeimobShopTradeBalanceCalculateDataUsedDiscountDetailList implements \JsonSerializable
{
    /**
    * 抵扣的金额（BigDecimal）
    * @var string
    */
    private $discountAmount;

    /**
    * 抵扣的资产（BigDecimal）
    * @var string
    */
    private $costAmount;

    /**
    * 抵扣类型：(1:抵扣商品、2抵扣积分商品 、3:抵扣运费)
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

class WeimobShopTradeBalanceCalculateDataMaxDiscountDetailList implements \JsonSerializable
{
    /**
    * 最大可抵扣金额（BigDecimal）
    * @var string
    */
    private $discountAmount;

    /**
    * 最大可抵扣资产（BigDecimal）
    * @var string
    */
    private $costAmount;

    /**
    * 抵扣类型：(1:抵扣商品、2抵扣积分商品 、3:抵扣运费)
    * @var int
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
    * @param int $deductionType
    */
    public function setDeductionType(?int $deductionType)
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

