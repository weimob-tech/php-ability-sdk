<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 899
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobShopPayPassPaycheckService
{
    const specType = 'wos';

    public function invoke(WeimobShopPayPassPaycheckRequest $request) : WeimobShopPayPassPaycheckResponse;
}

class WeimobShopPayPassPaycheckRequest implements \JsonSerializable
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
     * @var WeimobShopPayPassPaycheckParam
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
     * @param WeimobShopPayPassPaycheckParam $param
     */
    public function setParam(?WeimobShopPayPassPaycheckParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobShopPayPassPaycheckParam
     */
    public function getParam(): ?WeimobShopPayPassPaycheckParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPassPaycheckParam implements \JsonSerializable
{
    /**
     * 子单信息
     * @var array
     */
    private $orders;

    /**
     * 父单号
     * @var int
     */
    private $parentOrderNo;

    /**
     * 商户标识.
     * @var int
     */
    private $merchantId;

    /**
     * 店铺标识.
     * @var int
     */
    private $bosId;

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
     * 被调用方产品ID.
     * @var int
     */
    private $targetProductId;

    /**
     * 被调用方产品实例ID
     * @var int
     */
    private $targetProductInstanceId;

    /**
     * 提供产品的租户
     * @var string
     */
    private $tcode;

    /**
     * @param array $orders
     */
    public function setOrders(?array $orders): void
    {
        $this->orders = $orders;
    }

    /**
     * @return array
     */
    public function getOrders(): ?array
    {
        return $this->orders;
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
     * @param int $targetProductId
     */
    public function setTargetProductId(?int $targetProductId): void
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
    public function setTargetProductInstanceId(?int $targetProductInstanceId): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPassPaycheckParamOrders implements \JsonSerializable
{
    /**
     * 订单信息
     * @var WeimobShopPayPassPaycheckParamOrderBase
     */
    private $orderBase;

    /**
     * 订单项列表
     * @var array
     */
    private $items;

    /**
     * 支付信息
     * @var WeimobShopPayPassPaycheckParamPay
     */
    private $pay;

    /**
     * 商户信息
     * @var WeimobShopPayPassPaycheckParamMerchant
     */
    private $merchant;

    /**
     * 用户信息
     * @var WeimobShopPayPassPaycheckParamBuyer
     */
    private $buyer;

    /**
     * @param WeimobShopPayPassPaycheckParamOrderBase $orderBase
     */
    public function setOrderBase(?WeimobShopPayPassPaycheckParamOrderBase $orderBase): void
    {
        $this->orderBase = $orderBase;
    }

    /**
     * @return WeimobShopPayPassPaycheckParamOrderBase
     */
    public function getOrderBase(): ?WeimobShopPayPassPaycheckParamOrderBase
    {
        return $this->orderBase;
    }

    /**
     * @param array $items
     */
    public function setItems(?array $items): void
    {
        $this->items = $items;
    }

    /**
     * @return array
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param WeimobShopPayPassPaycheckParamPay $pay
     */
    public function setPay(?WeimobShopPayPassPaycheckParamPay $pay): void
    {
        $this->pay = $pay;
    }

    /**
     * @return WeimobShopPayPassPaycheckParamPay
     */
    public function getPay(): ?WeimobShopPayPassPaycheckParamPay
    {
        return $this->pay;
    }

    /**
     * @param WeimobShopPayPassPaycheckParamMerchant $merchant
     */
    public function setMerchant(?WeimobShopPayPassPaycheckParamMerchant $merchant): void
    {
        $this->merchant = $merchant;
    }

    /**
     * @return WeimobShopPayPassPaycheckParamMerchant
     */
    public function getMerchant(): ?WeimobShopPayPassPaycheckParamMerchant
    {
        return $this->merchant;
    }

    /**
     * @param WeimobShopPayPassPaycheckParamBuyer $buyer
     */
    public function setBuyer(?WeimobShopPayPassPaycheckParamBuyer $buyer): void
    {
        $this->buyer = $buyer;
    }

    /**
     * @return WeimobShopPayPassPaycheckParamBuyer
     */
    public function getBuyer(): ?WeimobShopPayPassPaycheckParamBuyer
    {
        return $this->buyer;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPassPaycheckParamOrderBase implements \JsonSerializable
{
    /**
     * 订单号
     * @var int
     */
    private $orderNo;

    /**
     * 支付类型：1-线上支付，2-线下支付，3-无需支付
     * @var int
     */
    private $paymentType;

    /**
     * 订单类型：1-普通订单，96-虚拟订单，97-消费订单，99-充值订单，11-全渠道B2C订单
     * @var int
     */
    private $orderType;

    /**
     * 订单创建时间
     * @var int
     */
    private $createTime;

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
     * @param int $paymentType
     */
    public function setPaymentType(?int $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * @return int
     */
    public function getPaymentType(): ?int
    {
        return $this->paymentType;
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
     * @param int $createTime
     */
    public function setCreateTime(?int $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPassPaycheckParamItems implements \JsonSerializable
{
    /**
     * 商品信息
     * @var WeimobShopPayPassPaycheckParamGoods
     */
    private $goods;

    /**
     * 商品支付信息
     * @var WeimobShopPayPassPaycheckParamPayInfo
     */
    private $payInfo;

    /**
     * 活动信息 
     * @var WeimobShopPayPassPaycheckParamBizInfos
     */
    private $bizInfos;

    /**
     * 订单项拓展信息
     * @var WeimobShopPayPassPaycheckParamItemExt
     */
    private $itemExt;

    /**
     * 订单项id
     * @var int
     */
    private $itemId;

    /**
     * @param WeimobShopPayPassPaycheckParamGoods $goods
     */
    public function setGoods(?WeimobShopPayPassPaycheckParamGoods $goods): void
    {
        $this->goods = $goods;
    }

    /**
     * @return WeimobShopPayPassPaycheckParamGoods
     */
    public function getGoods(): ?WeimobShopPayPassPaycheckParamGoods
    {
        return $this->goods;
    }

    /**
     * @param WeimobShopPayPassPaycheckParamPayInfo $payInfo
     */
    public function setPayInfo(?WeimobShopPayPassPaycheckParamPayInfo $payInfo): void
    {
        $this->payInfo = $payInfo;
    }

    /**
     * @return WeimobShopPayPassPaycheckParamPayInfo
     */
    public function getPayInfo(): ?WeimobShopPayPassPaycheckParamPayInfo
    {
        return $this->payInfo;
    }

    /**
     * @param WeimobShopPayPassPaycheckParamBizInfos $bizInfos
     */
    public function setBizInfos(?WeimobShopPayPassPaycheckParamBizInfos $bizInfos): void
    {
        $this->bizInfos = $bizInfos;
    }

    /**
     * @return WeimobShopPayPassPaycheckParamBizInfos
     */
    public function getBizInfos(): ?WeimobShopPayPassPaycheckParamBizInfos
    {
        return $this->bizInfos;
    }

    /**
     * @param WeimobShopPayPassPaycheckParamItemExt $itemExt
     */
    public function setItemExt(?WeimobShopPayPassPaycheckParamItemExt $itemExt): void
    {
        $this->itemExt = $itemExt;
    }

    /**
     * @return WeimobShopPayPassPaycheckParamItemExt
     */
    public function getItemExt(): ?WeimobShopPayPassPaycheckParamItemExt
    {
        return $this->itemExt;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPassPaycheckParamGoods implements \JsonSerializable
{
    /**
     * 价格列表
     * @var array
     */
    private $priceInfos;

    /**
     * 商品拓展信息(该参数为map)
     * @var WeimobShopPayPassPaycheckParamGoodsExt
     */
    private $goodsExt;

    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * 规格数量
     * @var int
     */
    private $skuNum;

    /**
     * 商品类型：1-普通商品，2-虚拟商品
     * @var int
     */
    private $goodsType;

    /**
     * 子商品类型：101-普通商品，102-海淘商品，103-无需物流，201-虚拟商品，202-付费券
     * @var int
     */
    private $subGoodsType;

    /**
     * 售价
     * @var string
     */
    private $salePrice;

    /**
     * 商品编码
     * @var string
     */
    private $goodsCode;

    /**
     * 库存扣减方式: 1-下单扣减库存，2-支付库检库存
     * @var int
     */
    private $deductStockType;

    /**
     * 规格编码
     * @var string
     */
    private $skuCode;

    /**
     * 规格id
     * @var int
     */
    private $skuId;

    /**
     * sku条码
     * @var string
     */
    private $skuBarCode;

    /**
     * @param array $priceInfos
     */
    public function setPriceInfos(?array $priceInfos): void
    {
        $this->priceInfos = $priceInfos;
    }

    /**
     * @return array
     */
    public function getPriceInfos(): ?array
    {
        return $this->priceInfos;
    }

    /**
     * @param WeimobShopPayPassPaycheckParamGoodsExt $goodsExt
     */
    public function setGoodsExt(?WeimobShopPayPassPaycheckParamGoodsExt $goodsExt): void
    {
        $this->goodsExt = $goodsExt;
    }

    /**
     * @return WeimobShopPayPassPaycheckParamGoodsExt
     */
    public function getGoodsExt(): ?WeimobShopPayPassPaycheckParamGoodsExt
    {
        return $this->goodsExt;
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
     * @param int $skuNum
     */
    public function setSkuNum(?int $skuNum): void
    {
        $this->skuNum = $skuNum;
    }

    /**
     * @return int
     */
    public function getSkuNum(): ?int
    {
        return $this->skuNum;
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
     * @param string $salePrice
     */
    public function setSalePrice(?string $salePrice): void
    {
        $this->salePrice = $salePrice;
    }

    /**
     * @return string
     */
    public function getSalePrice(): ?string
    {
        return $this->salePrice;
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
     * @param int $deductStockType
     */
    public function setDeductStockType(?int $deductStockType): void
    {
        $this->deductStockType = $deductStockType;
    }

    /**
     * @return int
     */
    public function getDeductStockType(): ?int
    {
        return $this->deductStockType;
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
     * @param string $skuBarCode
     */
    public function setSkuBarCode(?string $skuBarCode): void
    {
        $this->skuBarCode = $skuBarCode;
    }

    /**
     * @return string
     */
    public function getSkuBarCode(): ?string
    {
        return $this->skuBarCode;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPassPaycheckParamPriceInfos implements \JsonSerializable
{
    /**
     * 金额类型：2-市场价，3-商品原价，50-成本价，101-定金，201-积分
     * @var int
     */
    private $type;

    /**
     * 金额
     * @var string
     */
    private $amount;

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

    /**
     * @param string $amount
     */
    public function setAmount(?string $amount): void
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

class WeimobShopPayPassPaycheckParamGoodsExt implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPassPaycheckParamPayInfo implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPassPaycheckParamBizInfos implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPassPaycheckParamItemExt implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPassPaycheckParamPay implements \JsonSerializable
{
    /**
     * 金额明细
     * @var array
     */
    private $amountInfos;

    /**
     * 实付金额
     * @var string
     */
    private $payAmount;

    /**
     * 总金额(BigDecimal)
     * @var string
     */
    private $totalAmount;

    /**
     * 总折扣金额(BigDecimal)
     * @var string
     */
    private $totalDiscountAmount;

    /**
     * 应付金额(BigDecimal)
     * @var string
     */
    private $shouldPayAmount;

    /**
     * @param array $amountInfos
     */
    public function setAmountInfos(?array $amountInfos): void
    {
        $this->amountInfos = $amountInfos;
    }

    /**
     * @return array
     */
    public function getAmountInfos(): ?array
    {
        return $this->amountInfos;
    }

    /**
     * @param string $payAmount
     */
    public function setPayAmount(?string $payAmount): void
    {
        $this->payAmount = $payAmount;
    }

    /**
     * @return string
     */
    public function getPayAmount(): ?string
    {
        return $this->payAmount;
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

    /**
     * @param string $shouldPayAmount
     */
    public function setShouldPayAmount(?string $shouldPayAmount): void
    {
        $this->shouldPayAmount = $shouldPayAmount;
    }

    /**
     * @return string
     */
    public function getShouldPayAmount(): ?string
    {
        return $this->shouldPayAmount;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPassPaycheckParamAmountInfos implements \JsonSerializable
{
    /**
     * 金额类型：1-商品金额，100-预售定金，200-总积分，250-运费，271-包装费
     * @var int
     */
    private $type;

    /**
     * 金额(BigDecimal)
     * @var string
     */
    private $amount;

    /**
     * 实付金额(BigDecimal)
     * @var string
     */
    private $payAmount;

    /**
     * 应付金额(BigDecimal)
     * @var string
     */
    private $shouldPayAmount;

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

    /**
     * @param string $amount
     */
    public function setAmount(?string $amount): void
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

    /**
     * @param string $payAmount
     */
    public function setPayAmount(?string $payAmount): void
    {
        $this->payAmount = $payAmount;
    }

    /**
     * @return string
     */
    public function getPayAmount(): ?string
    {
        return $this->payAmount;
    }

    /**
     * @param string $shouldPayAmount
     */
    public function setShouldPayAmount(?string $shouldPayAmount): void
    {
        $this->shouldPayAmount = $shouldPayAmount;
    }

    /**
     * @return string
     */
    public function getShouldPayAmount(): ?string
    {
        return $this->shouldPayAmount;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPassPaycheckParamMerchant implements \JsonSerializable
{
    /**
     * 商户id
     * @var int
     */
    private $bosId;

    /**
     * 销售节点
     * @var int
     */
    private $vid;

    /**
     * 销售节点类型：0-无类型,无业务意义，1-集团，2-品牌，3-区域，5-商场，10-门店，100-自提点
     * @var int
     */
    private $vidType;

    /**
     * 服务节点
     * @var int
     */
    private $processVid;

    /**
     * 服务节点类型：0-无类型,无业务意义，1-集团，2-品牌，3-区域，5-商场，10-门店，100-自提点
     * @var int
     */
    private $processVidType;

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
     * @param int $processVidType
     */
    public function setProcessVidType(?int $processVidType): void
    {
        $this->processVidType = $processVidType;
    }

    /**
     * @return int
     */
    public function getProcessVidType(): ?int
    {
        return $this->processVidType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPassPaycheckParamBuyer implements \JsonSerializable
{
    /**
     * 用户id
     * @var int
     */
    private $wid;

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


class WeimobShopPayPassPaycheckResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobShopPayPassPaycheckData
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
     * @return WeimobShopPayPassPaycheckData
     */
    public function getData(): ?WeimobShopPayPassPaycheckData
    {
        return $this->data;
    }

    /**
     * @param WeimobShopPayPassPaycheckData $data
     */
    public function setData(?WeimobShopPayPassPaycheckData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPassPaycheckData implements \JsonSerializable
{
    /**
     * 订单可支付结果
     * @var array
     */
    private $checkPayOrders;

    /**
     * 整单是否可支付
     * @var bool
     */
    private $enablePay;

    /**
     * 不可支付信息
     * @var array
     */
    private $disableMessages;

    /**
     * @param array $checkPayOrders
     */
    public function setCheckPayOrders(?array $checkPayOrders): void
    {
        $this->checkPayOrders = $checkPayOrders;
    }

    /**
     * @return array
     */
    public function getCheckPayOrders(): ?array
    {
        return $this->checkPayOrders;
    }

    /**
     * @param bool $enablePay
     */
    public function setEnablePay(?bool $enablePay): void
    {
        $this->enablePay = $enablePay;
    }

    /**
     * @return bool
     */
    public function getEnablePay(): ?bool
    {
        return $this->enablePay;
    }

    /**
     * @param array $disableMessages
     */
    public function setDisableMessages(?array $disableMessages): void
    {
        $this->disableMessages = $disableMessages;
    }

    /**
     * @return array
     */
    public function getDisableMessages(): ?array
    {
        return $this->disableMessages;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPassPaycheckDataCheckPayOrders implements \JsonSerializable
{
    /**
     * 订单项级支付校验结果
     * @var array
     */
    private $checkPayItems;

    /**
     * 子单号
     * @var string
     */
    private $orderNo;

    /**
     * 是否可支付
     * @var bool
     */
    private $enablePay;

    /**
     * 不可支付信息
     * @var array
     */
    private $disableMessages;

    /**
     * @param array $checkPayItems
     */
    public function setCheckPayItems(?array $checkPayItems): void
    {
        $this->checkPayItems = $checkPayItems;
    }

    /**
     * @return array
     */
    public function getCheckPayItems(): ?array
    {
        return $this->checkPayItems;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param bool $enablePay
     */
    public function setEnablePay(?bool $enablePay): void
    {
        $this->enablePay = $enablePay;
    }

    /**
     * @return bool
     */
    public function getEnablePay(): ?bool
    {
        return $this->enablePay;
    }

    /**
     * @param array $disableMessages
     */
    public function setDisableMessages(?array $disableMessages): void
    {
        $this->disableMessages = $disableMessages;
    }

    /**
     * @return array
     */
    public function getDisableMessages(): ?array
    {
        return $this->disableMessages;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPassPaycheckDataCheckPayItems implements \JsonSerializable
{
    /**
     * 订单项id
     * @var int
     */
    private $itemId;

    /**
     * 是否可支付
     * @var bool
     */
    private $enablePay;

    /**
     * 不可支付信息String
     * @var array
     */
    private $disableMessages;

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
     * @param bool $enablePay
     */
    public function setEnablePay(?bool $enablePay): void
    {
        $this->enablePay = $enablePay;
    }

    /**
     * @return bool
     */
    public function getEnablePay(): ?bool
    {
        return $this->enablePay;
    }

    /**
     * @param array $disableMessages
     */
    public function setDisableMessages(?array $disableMessages): void
    {
        $this->disableMessages = $disableMessages;
    }

    /**
     * @return array
     */
    public function getDisableMessages(): ?array
    {
        return $this->disableMessages;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

