<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,681
 * @author weimobcloud
 * @create 2024-7-29
 */
interface PaasWeimobShopNodeConfirmorderCheckService
{
    const specType = 'wos';

    public function invoke(WeimobShopNodeConfirmorderCheckRequest $request) : WeimobShopNodeConfirmorderCheckResponse;
}

class WeimobShopNodeConfirmorderCheckRequest implements \JsonSerializable
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
     * @var WeimobShopNodeConfirmorderCheckParam
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
     * @param WeimobShopNodeConfirmorderCheckParam $param
     */
    public function setParams(?WeimobShopNodeConfirmorderCheckParam $param): void
    {
        $this->params = $param;
    }

    /**
     * @return WeimobShopNodeConfirmorderCheckParam
     */
    public function getParams(): ?WeimobShopNodeConfirmorderCheckParam
    {
        return $this->params;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopNodeConfirmorderCheckParam implements \JsonSerializable
{
    /**
     * 节点列表
     * @var array
     */
    private $vidList;

    /**
     * 确认订单拆分响应结果
     * @var WeimobShopNodeConfirmorderCheckParamConfirmOrderVO
     */
    private $confirmOrderVO;

    /**
     * 下单用户wid
     * @var int
     */
    private $confirmOrderWid;

    /**
     * 期望返回vid个数
     * @var int
     */
    private $limit;

    /**
     * 结算下单ID
     * @var string
     */
    private $confirmOrderKey;

    /**
     * @param array $vidList
     */
    public function setVidList(?array $vidList): void
    {
        $this->vidList = $vidList;
    }

    /**
     * @return array
     */
    public function getVidList(): ?array
    {
        return $this->vidList;
    }

    /**
     * @param WeimobShopNodeConfirmorderCheckParamConfirmOrderVO $confirmOrderVO
     */
    public function setConfirmOrderVO(?WeimobShopNodeConfirmorderCheckParamConfirmOrderVO $confirmOrderVO): void
    {
        $this->confirmOrderVO = $confirmOrderVO;
    }

    /**
     * @return WeimobShopNodeConfirmorderCheckParamConfirmOrderVO
     */
    public function getConfirmOrderVO(): ?WeimobShopNodeConfirmorderCheckParamConfirmOrderVO
    {
        return $this->confirmOrderVO;
    }

    /**
     * @param int $confirmOrderWid
     */
    public function setConfirmOrderWid(?int $confirmOrderWid): void
    {
        $this->confirmOrderWid = $confirmOrderWid;
    }

    /**
     * @return int
     */
    public function getConfirmOrderWid(): ?int
    {
        return $this->confirmOrderWid;
    }

    /**
     * @param int $limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @return int
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * @param string $confirmOrderKey
     */
    public function setConfirmOrderKey(?string $confirmOrderKey): void
    {
        $this->confirmOrderKey = $confirmOrderKey;
    }

    /**
     * @return string
     */
    public function getConfirmOrderKey(): ?string
    {
        return $this->confirmOrderKey;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopNodeConfirmorderCheckParamVidList implements \JsonSerializable
{
    /**
     * 节点vid
     * @var int
     */
    private $vid;

    /**
     * 距离(km)
     * @var int
     */
    private $distance;

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
     * @param int $distance
     */
    public function setDistance(?int $distance): void
    {
        $this->distance = $distance;
    }

    /**
     * @return int
     */
    public function getDistance(): ?int
    {
        return $this->distance;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopNodeConfirmorderCheckParamConfirmOrderVO implements \JsonSerializable
{
    /**
     * 确认订单分组拆分
     * @var array
     */
    private $confirmOrderGroupList;

    /**
     * 来源
     * @var WeimobShopNodeConfirmorderCheckParamSource
     */
    private $source;

    /**
     * @param array $confirmOrderGroupList
     */
    public function setConfirmOrderGroupList(?array $confirmOrderGroupList): void
    {
        $this->confirmOrderGroupList = $confirmOrderGroupList;
    }

    /**
     * @return array
     */
    public function getConfirmOrderGroupList(): ?array
    {
        return $this->confirmOrderGroupList;
    }

    /**
     * @param WeimobShopNodeConfirmorderCheckParamSource $source
     */
    public function setSource(?WeimobShopNodeConfirmorderCheckParamSource $source): void
    {
        $this->source = $source;
    }

    /**
     * @return WeimobShopNodeConfirmorderCheckParamSource
     */
    public function getSource(): ?WeimobShopNodeConfirmorderCheckParamSource
    {
        return $this->source;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopNodeConfirmorderCheckParamConfirmOrderGroupList implements \JsonSerializable
{
    /**
     * 商品列表
     * @var array
     */
    private $goodsList;

    /**
     * 订单拆分ID
     * @var int
     */
    private $orderIndex;

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
     * @param int $orderIndex
     */
    public function setOrderIndex(?int $orderIndex): void
    {
        $this->orderIndex = $orderIndex;
    }

    /**
     * @return int
     */
    public function getOrderIndex(): ?int
    {
        return $this->orderIndex;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopNodeConfirmorderCheckParamGoodsList implements \JsonSerializable
{
    /**
     * 商品级优惠列表
     * @var array
     */
    private $discountList;

    /**
     * 商品基础信息
     * @var WeimobShopNodeConfirmorderCheckParamGoodsSku
     */
    private $goodsSku;

    /**
     * 库存数量
     * @var WeimobShopNodeConfirmorderCheckParamSkuStock
     */
    private $skuStock;

    /**
     * 购买数量
     * @var int
     */
    private $buyNum;

    /**
     * 购物车来的id
     * @var int
     */
    private $cartItemId;

    /**
     * 结算商品类型1、普通商品2、赠品3、加价购换购商品
     * @var int
     */
    private $itemTag;

    /**
     * 是否需要支付
     * @var bool
     */
    private $noNeedPayment;

    /**
     * 商品级拆分ID,一次交易过程中唯一
     * @var int
     */
    private $splitId;

    /**
     * 可用折扣单。这个只有再提交订单 切存在切换促销场景下设置 转化不使用折扣类型时候用
     * @var array
     */
    private $usableDiscountList;

    /**
     * 商品的vid
     * @var int
     */
    private $vid;

    /**
     * @param array $discountList
     */
    public function setDiscountList(?array $discountList): void
    {
        $this->discountList = $discountList;
    }

    /**
     * @return array
     */
    public function getDiscountList(): ?array
    {
        return $this->discountList;
    }

    /**
     * @param WeimobShopNodeConfirmorderCheckParamGoodsSku $goodsSku
     */
    public function setGoodsSku(?WeimobShopNodeConfirmorderCheckParamGoodsSku $goodsSku): void
    {
        $this->goodsSku = $goodsSku;
    }

    /**
     * @return WeimobShopNodeConfirmorderCheckParamGoodsSku
     */
    public function getGoodsSku(): ?WeimobShopNodeConfirmorderCheckParamGoodsSku
    {
        return $this->goodsSku;
    }

    /**
     * @param WeimobShopNodeConfirmorderCheckParamSkuStock $skuStock
     */
    public function setSkuStock(?WeimobShopNodeConfirmorderCheckParamSkuStock $skuStock): void
    {
        $this->skuStock = $skuStock;
    }

    /**
     * @return WeimobShopNodeConfirmorderCheckParamSkuStock
     */
    public function getSkuStock(): ?WeimobShopNodeConfirmorderCheckParamSkuStock
    {
        return $this->skuStock;
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
     * @param int $cartItemId
     */
    public function setCartItemId(?int $cartItemId): void
    {
        $this->cartItemId = $cartItemId;
    }

    /**
     * @return int
     */
    public function getCartItemId(): ?int
    {
        return $this->cartItemId;
    }

    /**
     * @param int $itemTag
     */
    public function setItemTag(?int $itemTag): void
    {
        $this->itemTag = $itemTag;
    }

    /**
     * @return int
     */
    public function getItemTag(): ?int
    {
        return $this->itemTag;
    }

    /**
     * @param bool $noNeedPayment
     */
    public function setNoNeedPayment(?bool $noNeedPayment): void
    {
        $this->noNeedPayment = $noNeedPayment;
    }

    /**
     * @return bool
     */
    public function getNoNeedPayment(): ?bool
    {
        return $this->noNeedPayment;
    }

    /**
     * @param int $splitId
     */
    public function setSplitId(?int $splitId): void
    {
        $this->splitId = $splitId;
    }

    /**
     * @return int
     */
    public function getSplitId(): ?int
    {
        return $this->splitId;
    }

    /**
     * @param array $usableDiscountList
     */
    public function setUsableDiscountList(?array $usableDiscountList): void
    {
        $this->usableDiscountList = $usableDiscountList;
    }

    /**
     * @return array
     */
    public function getUsableDiscountList(): ?array
    {
        return $this->usableDiscountList;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopNodeConfirmorderCheckParamDiscountList implements \JsonSerializable
{
    /**
     * 折扣优惠类型金额
     * @var string
     */
    private $discountAmount;

    /**
     * 折扣优惠名称编码
     * @var string
     */
    private $discountCode;

    /**
     * 折扣优惠名称
     * @var string
     */
    private $discountName;

    /**
     * 折扣优惠类型
     * @var int
     */
    private $discountType;

    /**
     * 优惠是否可以参与全局最优替换,true: 可以,false: 不可以
     * @var bool
     */
    private $globalOptimal;

    /**
     * 优惠抵扣顺序
     * @var int
     */
    private $order;

    /**
     * 优惠抵扣资金类型
     * @var int
     */
    private $promotionUsage;

    /**
     * 活动模版ID
     * @var int
     */
    private $templateId;

    /**
     * 1 使用最优推荐，2 使用用户自定义 0 不使用
     * @var int
     */
    private $useType;

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
     * @param string $discountCode
     */
    public function setDiscountCode(?string $discountCode): void
    {
        $this->discountCode = $discountCode;
    }

    /**
     * @return string
     */
    public function getDiscountCode(): ?string
    {
        return $this->discountCode;
    }

    /**
     * @param string $discountName
     */
    public function setDiscountName(?string $discountName): void
    {
        $this->discountName = $discountName;
    }

    /**
     * @return string
     */
    public function getDiscountName(): ?string
    {
        return $this->discountName;
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
     * @param bool $globalOptimal
     */
    public function setGlobalOptimal(?bool $globalOptimal): void
    {
        $this->globalOptimal = $globalOptimal;
    }

    /**
     * @return bool
     */
    public function getGlobalOptimal(): ?bool
    {
        return $this->globalOptimal;
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
     * @param int $promotionUsage
     */
    public function setPromotionUsage(?int $promotionUsage): void
    {
        $this->promotionUsage = $promotionUsage;
    }

    /**
     * @return int
     */
    public function getPromotionUsage(): ?int
    {
        return $this->promotionUsage;
    }

    /**
     * @param int $templateId
     */
    public function setTemplateId(?int $templateId): void
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

    /**
     * @param int $useType
     */
    public function setUseType(?int $useType): void
    {
        $this->useType = $useType;
    }

    /**
     * @return int
     */
    public function getUseType(): ?int
    {
        return $this->useType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopNodeConfirmorderCheckParamGoodsSku implements \JsonSerializable
{
    /**
     * 商品ID
     * @var int
     */
    private $goodsId;

    /**
     * 商品名称
     * @var string
     */
    private $goodsTitle;

    /**
     * 商品类型
     * @var int
     */
    private $goodsType;

    /**
     * SKU属性列表(规格)
     * @var array
     */
    private $skuAttributeList;

    /**
     * SKU_ID
     * @var int
     */
    private $skuId;

    /**
     * 商品图片url
     * @var string
     */
    private $skuImageUrl;

    /**
     * 商品销售价
     * @var string
     */
    private $skuSalePrice;

    /**
     * 商品销售模式
     * @var int
     */
    private $soldType;

    /**
     * 商品子类型
     * @var int
     */
    private $subGoodsType;

    /**
     * 计量单位名称
     * @var string
     */
    private $unitName;

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
     * @param string $goodsTitle
     */
    public function setGoodsTitle(?string $goodsTitle): void
    {
        $this->goodsTitle = $goodsTitle;
    }

    /**
     * @return string
     */
    public function getGoodsTitle(): ?string
    {
        return $this->goodsTitle;
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
     * @param array $skuAttributeList
     */
    public function setSkuAttributeList(?array $skuAttributeList): void
    {
        $this->skuAttributeList = $skuAttributeList;
    }

    /**
     * @return array
     */
    public function getSkuAttributeList(): ?array
    {
        return $this->skuAttributeList;
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
     * @param string $skuImageUrl
     */
    public function setSkuImageUrl(?string $skuImageUrl): void
    {
        $this->skuImageUrl = $skuImageUrl;
    }

    /**
     * @return string
     */
    public function getSkuImageUrl(): ?string
    {
        return $this->skuImageUrl;
    }

    /**
     * @param string $skuSalePrice
     */
    public function setSkuSalePrice(?string $skuSalePrice): void
    {
        $this->skuSalePrice = $skuSalePrice;
    }

    /**
     * @return string
     */
    public function getSkuSalePrice(): ?string
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
     * @param string $unitName
     */
    public function setUnitName(?string $unitName): void
    {
        $this->unitName = $unitName;
    }

    /**
     * @return string
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopNodeConfirmorderCheckParamSkuStock implements \JsonSerializable
{
    /**
     * 库存数量
     * @var int
     */
    private $skuStockNum;

    /**
     * @param int $skuStockNum
     */
    public function setSkuStockNum(?int $skuStockNum): void
    {
        $this->skuStockNum = $skuStockNum;
    }

    /**
     * @return int
     */
    public function getSkuStockNum(): ?int
    {
        return $this->skuStockNum;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopNodeConfirmorderCheckParamSource implements \JsonSerializable
{
    /**
     * 视频号场景
     * @var WeimobShopNodeConfirmorderCheckParamChannelScene
     */
    private $channelScene;

    /**
     * 交易场
     * @var WeimobShopNodeConfirmorderCheckParamTradePlace
     */
    private $tradePlace;

    /**
     * 进入确认页的来源:1:商祥2:购物车
     * @var int
     */
    private $orderPageSource;

    /**
     * 确认订单来源。SETTLEMENT：结算页，ADDL_BASKET：凑单篮
     * @var string
     */
    private $orderSourceEnum;

    /**
     * 场景ID,目前用来区分普通商城和积分商城
     * @var string
     */
    private $sceneId;

    /**
     * @param WeimobShopNodeConfirmorderCheckParamChannelScene $channelScene
     */
    public function setChannelScene(?WeimobShopNodeConfirmorderCheckParamChannelScene $channelScene): void
    {
        $this->channelScene = $channelScene;
    }

    /**
     * @return WeimobShopNodeConfirmorderCheckParamChannelScene
     */
    public function getChannelScene(): ?WeimobShopNodeConfirmorderCheckParamChannelScene
    {
        return $this->channelScene;
    }

    /**
     * @param WeimobShopNodeConfirmorderCheckParamTradePlace $tradePlace
     */
    public function setTradePlace(?WeimobShopNodeConfirmorderCheckParamTradePlace $tradePlace): void
    {
        $this->tradePlace = $tradePlace;
    }

    /**
     * @return WeimobShopNodeConfirmorderCheckParamTradePlace
     */
    public function getTradePlace(): ?WeimobShopNodeConfirmorderCheckParamTradePlace
    {
        return $this->tradePlace;
    }

    /**
     * @param int $orderPageSource
     */
    public function setOrderPageSource(?int $orderPageSource): void
    {
        $this->orderPageSource = $orderPageSource;
    }

    /**
     * @return int
     */
    public function getOrderPageSource(): ?int
    {
        return $this->orderPageSource;
    }

    /**
     * @param string $orderSourceEnum
     */
    public function setOrderSourceEnum(?string $orderSourceEnum): void
    {
        $this->orderSourceEnum = $orderSourceEnum;
    }

    /**
     * @return string
     */
    public function getOrderSourceEnum(): ?string
    {
        return $this->orderSourceEnum;
    }

    /**
     * @param string $sceneId
     */
    public function setSceneId(?string $sceneId): void
    {
        $this->sceneId = $sceneId;
    }

    /**
     * @return string
     */
    public function getSceneId(): ?string
    {
        return $this->sceneId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopNodeConfirmorderCheckParamChannelScene implements \JsonSerializable
{
    /**
     * 渠道场景id
     * @var int
     */
    private $channelScene;

    /**
     * @param int $channelScene
     */
    public function setChannelScene(?int $channelScene): void
    {
        $this->channelScene = $channelScene;
    }

    /**
     * @return int
     */
    public function getChannelScene(): ?int
    {
        return $this->channelScene;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopNodeConfirmorderCheckParamTradePlace implements \JsonSerializable
{
    /**
     * 交易类型
     * @var int
     */
    private $channelId;

    /**
     * 交易渠道
     * @var string
     */
    private $source;

    /**
     * @param int $channelId
     */
    public function setChannelId(?int $channelId): void
    {
        $this->channelId = $channelId;
    }

    /**
     * @return int
     */
    public function getChannelId(): ?int
    {
        return $this->channelId;
    }

    /**
     * @param string $source
     */
    public function setSource(?string $source): void
    {
        $this->source = $source;
    }

    /**
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobShopNodeConfirmorderCheckResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobShopNodeConfirmorderCheckData
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
     * @return WeimobShopNodeConfirmorderCheckData
     */
    public function getData(): ?WeimobShopNodeConfirmorderCheckData
    {
        return $this->data;
    }

    /**
     * @param WeimobShopNodeConfirmorderCheckData $data
     */
    public function setData(?WeimobShopNodeConfirmorderCheckData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopNodeConfirmorderCheckData implements \JsonSerializable
{
    /**
     * vid列表
     * @var array
     */
    private $vidList;

    /**
     * @param array $vidList
     */
    public function setVidList(?array $vidList): void
    {
        $this->vidList = $vidList;
    }

    /**
     * @return array
     */
    public function getVidList(): ?array
    {
        return $this->vidList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopNodeConfirmorderCheckDataVidList implements \JsonSerializable
{
    /**
     * 组织结构节点vid
     * @var int
     */
    private $vid;

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

