<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,701
 * @author weimobcloud
 * @create 2024-7-29
 */
interface PaasWeimobShopTradeExternalDiscountCardUseService
{
    const specType = 'wos';

    public function invoke(WeimobShopTradeExternalDiscountCardUseRequest $request) : WeimobShopTradeExternalDiscountCardUseResponse;
}

class WeimobShopTradeExternalDiscountCardUseRequest implements \JsonSerializable
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
     * @var WeimobShopTradeExternalDiscountCardUseParam
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
     * @param WeimobShopTradeExternalDiscountCardUseParam $param
     */
    public function setParams(?WeimobShopTradeExternalDiscountCardUseParam $param): void
    {
        $this->params = $param;
    }

    /**
     * @return WeimobShopTradeExternalDiscountCardUseParam
     */
    public function getParams(): ?WeimobShopTradeExternalDiscountCardUseParam
    {
        return $this->params;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeExternalDiscountCardUseParam implements \JsonSerializable
{
    /**
     * 商品集合
     * @var array
     */
    private $goodsTradeMetas;

    /**
     * 带入的使用外部优惠卡的信息
     * @var array
     */
    private $inputUserDiscountList;

    /**
     * 业务扩展信息字段
     * @var WeimobShopTradeExternalDiscountCardUseParamBizExt
     */
    private $bizExt;

    /**
     * 扩展信息
     * @var WeimobShopTradeExternalDiscountCardUseParamExtendInfo
     */
    private $extendInfo;

    /**
     * 微盟新商业操作系统 ID。WOS 体系下商家创建店铺时，会自动生成 bosId，是店铺的唯一标识。可以在商家后台店铺设置的组织架构页面获取该 ID，也可以通过 bos/info/get 接口获取该 ID。
     * @var int
     */
    private $bosId;

    /**
     * 产品标识
     * @var int
     */
    private $productId;

    /**
     * 产品实例标识
     * @var int
     */
    private $productInstanceId;

    /**
     * 组织架构节点Id
     * @var int
     */
    private $vid;

    /**
     * 组织架构节点类型。类型包括：1-集团；2-品牌；3-区域；4部门；5-商场；6-楼层；10-门店；11-网点；100-自提点。
     * @var int
     */
    private $vidType;

    /**
     * 用户 ID，是微盟用户身份的唯一标识。
     * @var int
     */
    private $wid;

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
     * @param WeimobShopTradeExternalDiscountCardUseParamBizExt $bizExt
     */
    public function setBizExt(?WeimobShopTradeExternalDiscountCardUseParamBizExt $bizExt): void
    {
        $this->bizExt = $bizExt;
    }

    /**
     * @return WeimobShopTradeExternalDiscountCardUseParamBizExt
     */
    public function getBizExt(): ?WeimobShopTradeExternalDiscountCardUseParamBizExt
    {
        return $this->bizExt;
    }

    /**
     * @param WeimobShopTradeExternalDiscountCardUseParamExtendInfo $extendInfo
     */
    public function setExtendInfo(?WeimobShopTradeExternalDiscountCardUseParamExtendInfo $extendInfo): void
    {
        $this->extendInfo = $extendInfo;
    }

    /**
     * @return WeimobShopTradeExternalDiscountCardUseParamExtendInfo
     */
    public function getExtendInfo(): ?WeimobShopTradeExternalDiscountCardUseParamExtendInfo
    {
        return $this->extendInfo;
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

class WeimobShopTradeExternalDiscountCardUseParamGoodsTradeMetas implements \JsonSerializable
{
    /**
     * 商品本身的基本信息
     * @var WeimobShopTradeExternalDiscountCardUseParamBasicGoodsInfo
     */
    private $basicGoodsInfo;

    /**
     * 商品交易信息
     * @var WeimobShopTradeExternalDiscountCardUseParamTradeGoodsInfo
     */
    private $tradeGoodsInfo;

    /**
     * 已使用优惠列表
     * @var array
     */
    private $discountInfoList;

    /**
     * 商品级互斥信息
     * @var WeimobShopTradeExternalDiscountCardUseParamMutex
     */
    private $mutex;

    /**
     * 费用类型信息
     * @var array
     */
    private $feeTypeDiscountInfos;

    /**
     * @param WeimobShopTradeExternalDiscountCardUseParamBasicGoodsInfo $basicGoodsInfo
     */
    public function setBasicGoodsInfo(?WeimobShopTradeExternalDiscountCardUseParamBasicGoodsInfo $basicGoodsInfo): void
    {
        $this->basicGoodsInfo = $basicGoodsInfo;
    }

    /**
     * @return WeimobShopTradeExternalDiscountCardUseParamBasicGoodsInfo
     */
    public function getBasicGoodsInfo(): ?WeimobShopTradeExternalDiscountCardUseParamBasicGoodsInfo
    {
        return $this->basicGoodsInfo;
    }

    /**
     * @param WeimobShopTradeExternalDiscountCardUseParamTradeGoodsInfo $tradeGoodsInfo
     */
    public function setTradeGoodsInfo(?WeimobShopTradeExternalDiscountCardUseParamTradeGoodsInfo $tradeGoodsInfo): void
    {
        $this->tradeGoodsInfo = $tradeGoodsInfo;
    }

    /**
     * @return WeimobShopTradeExternalDiscountCardUseParamTradeGoodsInfo
     */
    public function getTradeGoodsInfo(): ?WeimobShopTradeExternalDiscountCardUseParamTradeGoodsInfo
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
     * @param WeimobShopTradeExternalDiscountCardUseParamMutex $mutex
     */
    public function setMutex(?WeimobShopTradeExternalDiscountCardUseParamMutex $mutex): void
    {
        $this->mutex = $mutex;
    }

    /**
     * @return WeimobShopTradeExternalDiscountCardUseParamMutex
     */
    public function getMutex(): ?WeimobShopTradeExternalDiscountCardUseParamMutex
    {
        return $this->mutex;
    }

    /**
     * @param array $feeTypeDiscountInfos
     */
    public function setFeeTypeDiscountInfos(?array $feeTypeDiscountInfos): void
    {
        $this->feeTypeDiscountInfos = $feeTypeDiscountInfos;
    }

    /**
     * @return array
     */
    public function getFeeTypeDiscountInfos(): ?array
    {
        return $this->feeTypeDiscountInfos;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeExternalDiscountCardUseParamBasicGoodsInfo implements \JsonSerializable
{
    /**
     * 费用信息
     * @var array
     */
    private $priceInfo;

    /**
     * 预售信息
     * @var WeimobShopTradeExternalDiscountCardUseParamPreSellInfo
     */
    private $preSellInfo;

    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * skuId
     * @var int
     */
    private $skuId;

    /**
     * 商品数量
     * @var int
     */
    private $num;

    /**
     * 商品归属节点id
     * @var int
     */
    private $vid;

    /**
     * 节点类型
     * @var int
     */
    private $vidType;

    /**
     * 商品销售模式（1：现货销售； 2：预售）
     * @var int
     */
    private $sellModelType;

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
     * @param WeimobShopTradeExternalDiscountCardUseParamPreSellInfo $preSellInfo
     */
    public function setPreSellInfo(?WeimobShopTradeExternalDiscountCardUseParamPreSellInfo $preSellInfo): void
    {
        $this->preSellInfo = $preSellInfo;
    }

    /**
     * @return WeimobShopTradeExternalDiscountCardUseParamPreSellInfo
     */
    public function getPreSellInfo(): ?WeimobShopTradeExternalDiscountCardUseParamPreSellInfo
    {
        return $this->preSellInfo;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeExternalDiscountCardUseParamPriceInfo implements \JsonSerializable
{
    /**
     * 价格详情信息（id级别）
     * @var array
     */
    private $details;

    /**
     * 价格 BigDecimal类型，保留小数点后两位
     * @var string
     */
    private $price;

    /**
     * 价格类型:1-销售价;2-市场价;3-定金价;4-运费;5-服务费
     * @var int
     */
    private $type;

    /**
     * @param array $details
     */
    public function setDetails(?array $details): void
    {
        $this->details = $details;
    }

    /**
     * @return array
     */
    public function getDetails(): ?array
    {
        return $this->details;
    }

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

class WeimobShopTradeExternalDiscountCardUseParamDetails implements \JsonSerializable
{
    /**
     * 价格 BigDecimal类型，保留小数点后两位
     * @var int
     */
    private $amt;

    /**
     * 费用id
     * @var string
     */
    private $id;

    /**
     * @param int $amt
     */
    public function setAmt(?int $amt): void
    {
        $this->amt = $amt;
    }

    /**
     * @return int
     */
    public function getAmt(): ?int
    {
        return $this->amt;
    }

    /**
     * @param string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeExternalDiscountCardUseParamPreSellInfo implements \JsonSerializable
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

class WeimobShopTradeExternalDiscountCardUseParamTradeGoodsInfo implements \JsonSerializable
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
     * 结算价格类型：1-市场价，2-销售价
     * @var int
     */
    private $tradePriceType;

    /**
     * 交易基准价。BigDecimal类型，保留小数点后两位
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

class WeimobShopTradeExternalDiscountCardUseParamDiscountInfoList implements \JsonSerializable
{
    /**
     * 活动层级
     * @var int
     */
    private $discountLevel;

    /**
     * 优惠计算的基础金额， 在当前checkAmount上计算出discountAmount。BigDecimal类型，保留小数点后两位
     * @var string
     */
    private $checkAmount;

    /**
     * 优惠金额
     * @var string
     */
    private $discountAmount;

    /**
     * 使用的资产值
     * @var string
     */
    private $costAmount;

    /**
     * 折扣类型:1-满减满折;27-跨店满减满折;1-跨境满减满折;2-第X件X折;2-跨境第X件X折;3-销售价优惠券;30-跨店销售价优惠券;4-优惠码;5-市场价优惠券;6-N元N件;7-固定套装;7-商圈固定套装;8-搭配套装;9-满赠;28-跨店满赠;10-订单加价购;11-满减邮;29-满减邮;12-限时折扣;12-跨店限时折扣;1201-跨境限时折扣;13-一口价;1301-cps专享价;14-限量抢购;15-定金膨胀;16-阶梯价;17-单品加价购;18-会员优惠;19-特权价;20-企业内购;22-砍价;21-拼团;23-积分抵扣;24-余额抵扣;25-储值卡抵扣;26-直播价;999-整单开单优惠;32-整单买单优惠;997-抹零;31-裂变内购;41-直播砍价;33-兑换卡抵扣;44-订单改价;50-销售价;34-必购码;34-商圈必购码;35-买M付N;35-商圈买M付N;-1-外部优惠;
     * @var int
     */
    private $discountType;

    /**
     * 折扣ID
     * @var string
     */
    private $discountId;

    /**
     * 顺序
     * @var int
     */
    private $order;

    /**
     * 折扣子类型
     * @var int
     */
    private $discountSubType;

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

    /**
     * @param int $discountSubType
     */
    public function setDiscountSubType(?int $discountSubType): void
    {
        $this->discountSubType = $discountSubType;
    }

    /**
     * @return int
     */
    public function getDiscountSubType(): ?int
    {
        return $this->discountSubType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeExternalDiscountCardUseParamMutex implements \JsonSerializable
{
    /**
     * 自定义折扣类型具体值:可用的折扣类型
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

class WeimobShopTradeExternalDiscountCardUseParamFeeTypeDiscountInfos implements \JsonSerializable
{
    /**
     * 优惠信息
     * @var array
     */
    private $disDetails;

    /**
     * 互斥信息
     * @var WeimobShopTradeExternalDiscountCardUseParamMutex2
     */
    private $mutex;

    /**
     * 费用类型 3-运费 4-附加费 5-服务费
     * @var int
     */
    private $feeType;

    /**
     * @param array $disDetails
     */
    public function setDisDetails(?array $disDetails): void
    {
        $this->disDetails = $disDetails;
    }

    /**
     * @return array
     */
    public function getDisDetails(): ?array
    {
        return $this->disDetails;
    }

    /**
     * @param WeimobShopTradeExternalDiscountCardUseParamMutex2 $mutex
     */
    public function setMutex(?WeimobShopTradeExternalDiscountCardUseParamMutex2 $mutex): void
    {
        $this->mutex = $mutex;
    }

    /**
     * @return WeimobShopTradeExternalDiscountCardUseParamMutex2
     */
    public function getMutex(): ?WeimobShopTradeExternalDiscountCardUseParamMutex2
    {
        return $this->mutex;
    }

    /**
     * @param int $feeType
     */
    public function setFeeType(?int $feeType): void
    {
        $this->feeType = $feeType;
    }

    /**
     * @return int
     */
    public function getFeeType(): ?int
    {
        return $this->feeType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeExternalDiscountCardUseParamDisDetails implements \JsonSerializable
{
    /**
     * 活动层级
     * @var int
     */
    private $discountLevel;

    /**
     * 费类型id
     * @var string
     */
    private $feeId	;

    /**
     * 优惠计算的基础金额， 在当前checkAmount上计算出discountAmount。BigDecimal类型，保留小数点后两位
     * @var string
     */
    private $checkAmount;

    /**
     * 优惠金额
     * @var string
     */
    private $discountAmount;

    /**
     * 资产数量
     * @var string
     */
    private $costAmount;

    /**
     * 折扣类型:1-满减满折;27-跨店满减满折;1-跨境满减满折;2-第X件X折;2-跨境第X件X折;3-销售价优惠券;30-跨店销售价优惠券;4-优惠码;5-市场价优惠券;6-N元N件;7-固定套装;7-商圈固定套装;8-搭配套装;9-满赠;28-跨店满赠;10-订单加价购;11-满减邮;29-满减邮;12-限时折扣;12-跨店限时折扣;1201-跨境限时折扣;13-一口价;1301-cps专享价;14-限量抢购;15-定金膨胀;16-阶梯价;17-单品加价购;18-会员优惠;19-特权价;20-企业内购;22-砍价;21-拼团;23-积分抵扣;24-余额抵扣;25-储值卡抵扣;26-直播价;999-整单开单优惠;32-整单买单优惠;997-抹零;31-裂变内购;41-直播砍价;33-兑换卡抵扣;44-订单改价;50-销售价;34-必购码;34-商圈必购码;35-买M付N;35-商圈买M付N;-1-外部优惠;
     * @var int
     */
    private $discountType;

    /**
     * 折扣id
     * @var string
     */
    private $discountId;

    /**
     * 顺序
     * @var int
     */
    private $order;

    /**
     * 折扣子类型
     * @var int
     */
    private $discountSubType;

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
     * @param string $feeId	
     */
    public function setFeeId	(?string $feeId	): void
    {
        $this->feeId	 = $feeId	;
    }

    /**
     * @return string
     */
    public function getFeeId	(): ?string
    {
        return $this->feeId	;
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

    /**
     * @param int $discountSubType
     */
    public function setDiscountSubType(?int $discountSubType): void
    {
        $this->discountSubType = $discountSubType;
    }

    /**
     * @return int
     */
    public function getDiscountSubType(): ?int
    {
        return $this->discountSubType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeExternalDiscountCardUseParamMutex2 implements \JsonSerializable
{
    /**
     * 自定义折扣类型具体值:可用的折扣类型
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

class WeimobShopTradeExternalDiscountCardUseParamInputUserDiscountList implements \JsonSerializable
{
    /**
     * 抵扣类型：(1:抵扣商品、2抵扣积分商品 、3:抵扣运费 4：抵扣附加费用 5：抵扣服务项费用)
     * @var int
     */
    private $deductionType;

    /**
     * 折扣状态： 1: 使用 2: 不使用;3:默认推荐
     * @var int
     */
    private $discountStatus;

    /**
     * 折扣类型:-1-外部优惠;
     * @var int
     */
    private $discountType;

    /**
     * 卡ID
     * @var string
     */
    private $discountId;

    /**
     * 使用顺序
     * @var int
     */
    private $order;

    /**
     * 子类型：307-卡类
     * @var int
     */
    private $discountSubType;

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

    /**
     * @param int $discountSubType
     */
    public function setDiscountSubType(?int $discountSubType): void
    {
        $this->discountSubType = $discountSubType;
    }

    /**
     * @return int
     */
    public function getDiscountSubType(): ?int
    {
        return $this->discountSubType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeExternalDiscountCardUseParamBizExt implements \JsonSerializable
{
    /**
     * 阶段标识，string类型。示例："105"-后买阶段。后买阶段必填
     * @var string
     */
    private $bizSource;

    /**
     * 外部单号。后买阶段必填
     * @var string
     */
    private $outerOrderNo;

    /**
     * @param string $bizSource
     */
    public function setBizSource(?string $bizSource): void
    {
        $this->bizSource = $bizSource;
    }

    /**
     * @return string
     */
    public function getBizSource(): ?string
    {
        return $this->bizSource;
    }

    /**
     * @param string $outerOrderNo
     */
    public function setOuterOrderNo(?string $outerOrderNo): void
    {
        $this->outerOrderNo = $outerOrderNo;
    }

    /**
     * @return string
     */
    public function getOuterOrderNo(): ?string
    {
        return $this->outerOrderNo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeExternalDiscountCardUseParamExtendInfo implements \JsonSerializable
{
    /**
     * 调用链信息
     * @var string
     */
    private $globalTicket;

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
     * 渠道类型：0-微信h5  ;1-微信小程序 ;2-非微信环境h5   ;5-字节跳动小程序webview-H5 ;6-支付宝小程序webview-H5  ;8-安卓app ;9-苹果app ;10-百度小程序webview-H5  ;11-pad  ;12-自有app(App开店) ;13-微信小程序webview ;14-微信小程序webview-直播  ;15-线下大屏 ;16-企业微信 ;17-字节跳动小程序原生    ;18-芸智免密 ;19-qq小程序原生  ;20-qq小程序webview-H5  ;21-支付宝小程序原生 ;22-微信小商店    ;23-快手小程序原生  ;24-快手小程序webview-H5  ;25-小红书小程序原生 ;26-小红书小程序webview-H5 ;27-直播半屏小程序  ;28-直播h5-微信小程序webview-H5 ;
     * @var int
     */
    private $source;

    /**
     * 当前销售渠道(0线上，1线下)
     * @var int
     */
    private $salesChannel;

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
     * @param int $tradeScene
     */
    public function setTradeScene(?int $tradeScene): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobShopTradeExternalDiscountCardUseResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobShopTradeExternalDiscountCardUseData
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
     * @return WeimobShopTradeExternalDiscountCardUseData
     */
    public function getData(): ?WeimobShopTradeExternalDiscountCardUseData
    {
        return $this->data;
    }

    /**
     * @param WeimobShopTradeExternalDiscountCardUseData $data
     */
    public function setData(?WeimobShopTradeExternalDiscountCardUseData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeExternalDiscountCardUseData implements \JsonSerializable
{
    /**
     * 计算规则的集合（响应的卡信息的数据）
     * @var array
     */
    private $calcRuleList;

    /**
     * 商品信息
     * @var array
     */
    private $goodsTradeMetas;

    /**
     * 调用链路
     * @var string
     */
    private $globalTicket;

    /**
     * 调用链路
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

class WeimobShopTradeExternalDiscountCardUseDataCalcRuleList implements \JsonSerializable
{
    /**
     * 使用信息
     * @var WeimobShopTradeExternalDiscountCardUseDataDiscountUseInfo
     */
    private $discountUseInfo;

    /**
     * 互斥信息
     * @var WeimobShopTradeExternalDiscountCardUseDataMutex
     */
    private $mutex;

    /**
     * 卡号
     * @var string
     */
    private $discountId;

    /**
     * 折扣类型：-1
     * @var int
     */
    private $discountType;

    /**
     * 折扣子类型：307
     * @var int
     */
    private $discountSubType;

    /**
     * 名称
     * @var string
     */
    private $name;

    /**
     * @param WeimobShopTradeExternalDiscountCardUseDataDiscountUseInfo $discountUseInfo
     */
    public function setDiscountUseInfo(?WeimobShopTradeExternalDiscountCardUseDataDiscountUseInfo $discountUseInfo): void
    {
        $this->discountUseInfo = $discountUseInfo;
    }

    /**
     * @return WeimobShopTradeExternalDiscountCardUseDataDiscountUseInfo
     */
    public function getDiscountUseInfo(): ?WeimobShopTradeExternalDiscountCardUseDataDiscountUseInfo
    {
        return $this->discountUseInfo;
    }

    /**
     * @param WeimobShopTradeExternalDiscountCardUseDataMutex $mutex
     */
    public function setMutex(?WeimobShopTradeExternalDiscountCardUseDataMutex $mutex): void
    {
        $this->mutex = $mutex;
    }

    /**
     * @return WeimobShopTradeExternalDiscountCardUseDataMutex
     */
    public function getMutex(): ?WeimobShopTradeExternalDiscountCardUseDataMutex
    {
        return $this->mutex;
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

    /**
     * @param int $discountSubType
     */
    public function setDiscountSubType(?int $discountSubType): void
    {
        $this->discountSubType = $discountSubType;
    }

    /**
     * @return int
     */
    public function getDiscountSubType(): ?int
    {
        return $this->discountSubType;
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

class WeimobShopTradeExternalDiscountCardUseDataDiscountUseInfo implements \JsonSerializable
{
    /**
     * 是否使用
     * @var bool
     */
    private $useStatus;

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

class WeimobShopTradeExternalDiscountCardUseDataMutex implements \JsonSerializable
{
    /**
     * 可用的优惠列表
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

class WeimobShopTradeExternalDiscountCardUseDataGoodsTradeMetas implements \JsonSerializable
{
    /**
     * 商品基础信息
     * @var WeimobShopTradeExternalDiscountCardUseDataBasicGoodsInfo
     */
    private $basicGoodsInfo;

    /**
     * 商品交易信息
     * @var WeimobShopTradeExternalDiscountCardUseDataTradeGoodsInfo
     */
    private $tradeGoodsInfo;

    /**
     * 已使用的优惠信息
     * @var array
     */
    private $discountInfoList;

    /**
     * 费用信息
     * @var array
     */
    private $feeTypeDiscountInfos;

    /**
     * @param WeimobShopTradeExternalDiscountCardUseDataBasicGoodsInfo $basicGoodsInfo
     */
    public function setBasicGoodsInfo(?WeimobShopTradeExternalDiscountCardUseDataBasicGoodsInfo $basicGoodsInfo): void
    {
        $this->basicGoodsInfo = $basicGoodsInfo;
    }

    /**
     * @return WeimobShopTradeExternalDiscountCardUseDataBasicGoodsInfo
     */
    public function getBasicGoodsInfo(): ?WeimobShopTradeExternalDiscountCardUseDataBasicGoodsInfo
    {
        return $this->basicGoodsInfo;
    }

    /**
     * @param WeimobShopTradeExternalDiscountCardUseDataTradeGoodsInfo $tradeGoodsInfo
     */
    public function setTradeGoodsInfo(?WeimobShopTradeExternalDiscountCardUseDataTradeGoodsInfo $tradeGoodsInfo): void
    {
        $this->tradeGoodsInfo = $tradeGoodsInfo;
    }

    /**
     * @return WeimobShopTradeExternalDiscountCardUseDataTradeGoodsInfo
     */
    public function getTradeGoodsInfo(): ?WeimobShopTradeExternalDiscountCardUseDataTradeGoodsInfo
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
     * @param array $feeTypeDiscountInfos
     */
    public function setFeeTypeDiscountInfos(?array $feeTypeDiscountInfos): void
    {
        $this->feeTypeDiscountInfos = $feeTypeDiscountInfos;
    }

    /**
     * @return array
     */
    public function getFeeTypeDiscountInfos(): ?array
    {
        return $this->feeTypeDiscountInfos;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeExternalDiscountCardUseDataBasicGoodsInfo implements \JsonSerializable
{
    /**
     * 预售信息
     * @var WeimobShopTradeExternalDiscountCardUseDataPreSellInfo
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
     * skuid
     * @var int
     */
    private $skuId;

    /**
     * 商品数量
     * @var int
     */
    private $num;

    /**
     * 商品归属节点
     * @var int
     */
    private $vid;

    /**
     * 商品归属节点类型
     * @var int
     */
    private $vidType;

    /**
     * @param WeimobShopTradeExternalDiscountCardUseDataPreSellInfo $preSellInfo
     */
    public function setPreSellInfo(?WeimobShopTradeExternalDiscountCardUseDataPreSellInfo $preSellInfo): void
    {
        $this->preSellInfo = $preSellInfo;
    }

    /**
     * @return WeimobShopTradeExternalDiscountCardUseDataPreSellInfo
     */
    public function getPreSellInfo(): ?WeimobShopTradeExternalDiscountCardUseDataPreSellInfo
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

class WeimobShopTradeExternalDiscountCardUseDataPreSellInfo implements \JsonSerializable
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

class WeimobShopTradeExternalDiscountCardUseDataPriceInfo implements \JsonSerializable
{
    /**
     * 价格详情信息（id级别）
     * @var array
     */
    private $details;

    /**
     * 价格 BigDecimal类型，保留小数点后两位
     * @var string
     */
    private $price;

    /**
     * 价格类型:1-销售价;2-市场价;3-定金价;4-运费;5-服务费
     * @var int
     */
    private $type;

    /**
     * @param array $details
     */
    public function setDetails(?array $details): void
    {
        $this->details = $details;
    }

    /**
     * @return array
     */
    public function getDetails(): ?array
    {
        return $this->details;
    }

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

class WeimobShopTradeExternalDiscountCardUseDataDetails implements \JsonSerializable
{
    /**
     * 价格 BigDecimal类型，保留小数点后两位
     * @var string
     */
    private $amt;

    /**
     * 费用ID
     * @var int
     */
    private $id;

    /**
     * @param string $amt
     */
    public function setAmt(?string $amt): void
    {
        $this->amt = $amt;
    }

    /**
     * @return string
     */
    public function getAmt(): ?string
    {
        return $this->amt;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeExternalDiscountCardUseDataTradeGoodsInfo implements \JsonSerializable
{
    /**
     * 交易商品行id
     * @var int
     */
    private $itemId;

    /**
     * 结算商品类型：1-主商品;2-赠品;3-换购商品
     * @var int
     */
    private $tradeGoodsType;

    /**
     * 结算价格类型：1-市场价，2-销售价
     * @var int
     */
    private $tradePriceType;

    /**
     * 交易基准价。BigDecimal类型，保留小数点后两位
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

class WeimobShopTradeExternalDiscountCardUseDataDiscountInfoList implements \JsonSerializable
{
    /**
     * 折扣计算的基础金额， 在当前checkAmount上计算出discountAmount
     * @var string
     */
    private $checkAmount;

    /**
     * 卡号
     * @var string
     */
    private $discountId;

    /**
     * 折扣类型：外部优惠- -1
     * @var int
     */
    private $discountType;

    /**
     * 折扣子类型 卡类-307
     * @var int
     */
    private $discountSubType;

    /**
     * 优惠金额 BigDecimal类型，保留小数点后两位
     * @var string
     */
    private $discountAmount;

    /**
     * 抵扣类型：(1:抵扣商品、2抵扣积分商品 、3:抵扣运费 4：抵扣附加费用 5：抵扣服务项费用)
     * @var int
     */
    private $deductionType;

    /**
     * 使用的资产值
     * @var string
     */
    private $costAmount;

    /**
     * 使用顺序
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
     * @param int $discountSubType
     */
    public function setDiscountSubType(?int $discountSubType): void
    {
        $this->discountSubType = $discountSubType;
    }

    /**
     * @return int
     */
    public function getDiscountSubType(): ?int
    {
        return $this->discountSubType;
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

class WeimobShopTradeExternalDiscountCardUseDataFeeTypeDiscountInfos implements \JsonSerializable
{
    /**
     * 费用信息
     * @var array
     */
    private $disDetails;

    /**
     * 互斥信息
     * @var WeimobShopTradeExternalDiscountCardUseDataMutex2
     */
    private $mutex;

    /**
     * 费用类型 3-运费 4-附加费 5-服务费
     * @var int
     */
    private $feeType;

    /**
     * @param array $disDetails
     */
    public function setDisDetails(?array $disDetails): void
    {
        $this->disDetails = $disDetails;
    }

    /**
     * @return array
     */
    public function getDisDetails(): ?array
    {
        return $this->disDetails;
    }

    /**
     * @param WeimobShopTradeExternalDiscountCardUseDataMutex2 $mutex
     */
    public function setMutex(?WeimobShopTradeExternalDiscountCardUseDataMutex2 $mutex): void
    {
        $this->mutex = $mutex;
    }

    /**
     * @return WeimobShopTradeExternalDiscountCardUseDataMutex2
     */
    public function getMutex(): ?WeimobShopTradeExternalDiscountCardUseDataMutex2
    {
        return $this->mutex;
    }

    /**
     * @param int $feeType
     */
    public function setFeeType(?int $feeType): void
    {
        $this->feeType = $feeType;
    }

    /**
     * @return int
     */
    public function getFeeType(): ?int
    {
        return $this->feeType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopTradeExternalDiscountCardUseDataDisDetails implements \JsonSerializable
{
    /**
     * 折扣计算的基础金额， 在当前checkAmount上计算出discountAmount
     * @var string
     */
    private $checkAmount;

    /**
     * 优惠金额 BigDecimal类型，保留小数点后两位
     * @var string
     */
    private $discountAmount;

    /**
     * 使用的资产值
     * @var string
     */
    private $costAmount;

    /**
     * 折扣类型：外部优惠- -1
     * @var int
     */
    private $discountType;

    /**
     * 折扣子类型 卡类-307
     * @var int
     */
    private $discountSubType;

    /**
     * 卡号
     * @var string
     */
    private $discountId;

    /**
     * 费用类型id
     * @var string
     */
    private $feeId;

    /**
     * 顺序
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
     * @param int $discountSubType
     */
    public function setDiscountSubType(?int $discountSubType): void
    {
        $this->discountSubType = $discountSubType;
    }

    /**
     * @return int
     */
    public function getDiscountSubType(): ?int
    {
        return $this->discountSubType;
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
     * @param string $feeId
     */
    public function setFeeId(?string $feeId): void
    {
        $this->feeId = $feeId;
    }

    /**
     * @return string
     */
    public function getFeeId(): ?string
    {
        return $this->feeId;
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

class WeimobShopTradeExternalDiscountCardUseDataMutex2 implements \JsonSerializable
{
    /**
     * 可用的优惠列表
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

