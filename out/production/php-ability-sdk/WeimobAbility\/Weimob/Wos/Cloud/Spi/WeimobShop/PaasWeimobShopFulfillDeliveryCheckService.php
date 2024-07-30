<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,667
 * @author weimobcloud
 * @create 2024-7-29
 */
interface PaasWeimobShopFulfillDeliveryCheckService
{
    const specType = 'wos';

    public function invoke(WeimobShopFulfillDeliveryCheckRequest $request) : WeimobShopFulfillDeliveryCheckResponse;
}

class WeimobShopFulfillDeliveryCheckRequest implements \JsonSerializable
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
     * @var WeimobShopFulfillDeliveryCheckParam
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
     * @param WeimobShopFulfillDeliveryCheckParam $param
     */
    public function setParams(?WeimobShopFulfillDeliveryCheckParam $param): void
    {
        $this->params = $param;
    }

    /**
     * @return WeimobShopFulfillDeliveryCheckParam
     */
    public function getParams(): ?WeimobShopFulfillDeliveryCheckParam
    {
        return $this->params;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryCheckParam implements \JsonSerializable
{
    /**
     * 买家信息
     * @var WeimobShopFulfillDeliveryCheckParamBuyerInfo
     */
    private $buyerInfo;

    /**
     * 履约明细信息
     * @var array
     */
    private $fulfillItemList;

    /**
     * 订单信息
     * @var WeimobShopFulfillDeliveryCheckParamOrderInfo
     */
    private $orderInfo;

    /**
     * 收货信息
     * @var WeimobShopFulfillDeliveryCheckParamReceiveInfo
     */
    private $receiveInfo;

    /**
     * 履约信息
     * @var WeimobShopFulfillDeliveryCheckParamFulfillInfo
     */
    private $fulfillInfo;

    /**
     * 商家信息
     * @var WeimobShopFulfillDeliveryCheckParamMerchantInfo
     */
    private $merchantInfo;

    /**
     * 支付信息
     * @var WeimobShopFulfillDeliveryCheckParamPayInfo
     */
    private $payInfo;

    /**
     * 扩展信息
     * @var WeimobShopFulfillDeliveryCheckParamExtInfo2
     */
    private $extInfo;

    /**
     * @param WeimobShopFulfillDeliveryCheckParamBuyerInfo $buyerInfo
     */
    public function setBuyerInfo(?WeimobShopFulfillDeliveryCheckParamBuyerInfo $buyerInfo): void
    {
        $this->buyerInfo = $buyerInfo;
    }

    /**
     * @return WeimobShopFulfillDeliveryCheckParamBuyerInfo
     */
    public function getBuyerInfo(): ?WeimobShopFulfillDeliveryCheckParamBuyerInfo
    {
        return $this->buyerInfo;
    }

    /**
     * @param array $fulfillItemList
     */
    public function setFulfillItemList(?array $fulfillItemList): void
    {
        $this->fulfillItemList = $fulfillItemList;
    }

    /**
     * @return array
     */
    public function getFulfillItemList(): ?array
    {
        return $this->fulfillItemList;
    }

    /**
     * @param WeimobShopFulfillDeliveryCheckParamOrderInfo $orderInfo
     */
    public function setOrderInfo(?WeimobShopFulfillDeliveryCheckParamOrderInfo $orderInfo): void
    {
        $this->orderInfo = $orderInfo;
    }

    /**
     * @return WeimobShopFulfillDeliveryCheckParamOrderInfo
     */
    public function getOrderInfo(): ?WeimobShopFulfillDeliveryCheckParamOrderInfo
    {
        return $this->orderInfo;
    }

    /**
     * @param WeimobShopFulfillDeliveryCheckParamReceiveInfo $receiveInfo
     */
    public function setReceiveInfo(?WeimobShopFulfillDeliveryCheckParamReceiveInfo $receiveInfo): void
    {
        $this->receiveInfo = $receiveInfo;
    }

    /**
     * @return WeimobShopFulfillDeliveryCheckParamReceiveInfo
     */
    public function getReceiveInfo(): ?WeimobShopFulfillDeliveryCheckParamReceiveInfo
    {
        return $this->receiveInfo;
    }

    /**
     * @param WeimobShopFulfillDeliveryCheckParamFulfillInfo $fulfillInfo
     */
    public function setFulfillInfo(?WeimobShopFulfillDeliveryCheckParamFulfillInfo $fulfillInfo): void
    {
        $this->fulfillInfo = $fulfillInfo;
    }

    /**
     * @return WeimobShopFulfillDeliveryCheckParamFulfillInfo
     */
    public function getFulfillInfo(): ?WeimobShopFulfillDeliveryCheckParamFulfillInfo
    {
        return $this->fulfillInfo;
    }

    /**
     * @param WeimobShopFulfillDeliveryCheckParamMerchantInfo $merchantInfo
     */
    public function setMerchantInfo(?WeimobShopFulfillDeliveryCheckParamMerchantInfo $merchantInfo): void
    {
        $this->merchantInfo = $merchantInfo;
    }

    /**
     * @return WeimobShopFulfillDeliveryCheckParamMerchantInfo
     */
    public function getMerchantInfo(): ?WeimobShopFulfillDeliveryCheckParamMerchantInfo
    {
        return $this->merchantInfo;
    }

    /**
     * @param WeimobShopFulfillDeliveryCheckParamPayInfo $payInfo
     */
    public function setPayInfo(?WeimobShopFulfillDeliveryCheckParamPayInfo $payInfo): void
    {
        $this->payInfo = $payInfo;
    }

    /**
     * @return WeimobShopFulfillDeliveryCheckParamPayInfo
     */
    public function getPayInfo(): ?WeimobShopFulfillDeliveryCheckParamPayInfo
    {
        return $this->payInfo;
    }

    /**
     * @param WeimobShopFulfillDeliveryCheckParamExtInfo2 $extInfo
     */
    public function setExtInfo(?WeimobShopFulfillDeliveryCheckParamExtInfo2 $extInfo): void
    {
        $this->extInfo = $extInfo;
    }

    /**
     * @return WeimobShopFulfillDeliveryCheckParamExtInfo2
     */
    public function getExtInfo(): ?WeimobShopFulfillDeliveryCheckParamExtInfo2
    {
        return $this->extInfo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryCheckParamBuyerInfo implements \JsonSerializable
{
    /**
     * 买家id
     * @var int
     */
    private $wid;

    /**
     * 买家昵称
     * @var string
     */
    private $userNickName;

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
     * @param string $userNickName
     */
    public function setUserNickName(?string $userNickName): void
    {
        $this->userNickName = $userNickName;
    }

    /**
     * @return string
     */
    public function getUserNickName(): ?string
    {
        return $this->userNickName;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryCheckParamFulfillItemList implements \JsonSerializable
{
    /**
     * 商品信息
     * @var WeimobShopFulfillDeliveryCheckParamGoodsInfo
     */
    private $goodsInfo;

    /**
     * 扩展信息
     * @var WeimobShopFulfillDeliveryCheckParamExtInfo
     */
    private $extInfo;

    /**
     * 发货数量
     * @var int
     */
    private $deliveryNum;

    /**
     * 订单项id
     * @var int
     */
    private $orderItemId;

    /**
     * 订单 item 数量
     * @var int
     */
    private $num;

    /**
     * @param WeimobShopFulfillDeliveryCheckParamGoodsInfo $goodsInfo
     */
    public function setGoodsInfo(?WeimobShopFulfillDeliveryCheckParamGoodsInfo $goodsInfo): void
    {
        $this->goodsInfo = $goodsInfo;
    }

    /**
     * @return WeimobShopFulfillDeliveryCheckParamGoodsInfo
     */
    public function getGoodsInfo(): ?WeimobShopFulfillDeliveryCheckParamGoodsInfo
    {
        return $this->goodsInfo;
    }

    /**
     * @param WeimobShopFulfillDeliveryCheckParamExtInfo $extInfo
     */
    public function setExtInfo(?WeimobShopFulfillDeliveryCheckParamExtInfo $extInfo): void
    {
        $this->extInfo = $extInfo;
    }

    /**
     * @return WeimobShopFulfillDeliveryCheckParamExtInfo
     */
    public function getExtInfo(): ?WeimobShopFulfillDeliveryCheckParamExtInfo
    {
        return $this->extInfo;
    }

    /**
     * @param int $deliveryNum
     */
    public function setDeliveryNum(?int $deliveryNum): void
    {
        $this->deliveryNum = $deliveryNum;
    }

    /**
     * @return int
     */
    public function getDeliveryNum(): ?int
    {
        return $this->deliveryNum;
    }

    /**
     * @param int $orderItemId
     */
    public function setOrderItemId(?int $orderItemId): void
    {
        $this->orderItemId = $orderItemId;
    }

    /**
     * @return int
     */
    public function getOrderItemId(): ?int
    {
        return $this->orderItemId;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryCheckParamGoodsInfo implements \JsonSerializable
{
    /**
     * 单品信息
     * @var WeimobShopFulfillDeliveryCheckParamProductInfo
     */
    private $productInfo;

    /**
     * 商品子类型；101-普通商品；102-海淘商品；103-无需物流；201-虚拟商品；202-付费券
     * @var int
     */
    private $subGoodsType;

    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * 商品图片 URL
     * @var string
     */
    private $imageUrl;

    /**
     * 商品名称
     * @var string
     */
    private $goodsTitle;

    /**
     * sku 条码
     * @var string
     */
    private $skuBarCode;

    /**
     * 规格属性
     * @var string
     */
    private $skuAttrInfo;

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
     * 商品类型; 1-普通商品；2-虚拟商品
     * @var int
     */
    private $goodsType;

    /**
     * @param WeimobShopFulfillDeliveryCheckParamProductInfo $productInfo
     */
    public function setProductInfo(?WeimobShopFulfillDeliveryCheckParamProductInfo $productInfo): void
    {
        $this->productInfo = $productInfo;
    }

    /**
     * @return WeimobShopFulfillDeliveryCheckParamProductInfo
     */
    public function getProductInfo(): ?WeimobShopFulfillDeliveryCheckParamProductInfo
    {
        return $this->productInfo;
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
     * @param string $imageUrl
     */
    public function setImageUrl(?string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return string
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
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

    /**
     * @param string $skuAttrInfo
     */
    public function setSkuAttrInfo(?string $skuAttrInfo): void
    {
        $this->skuAttrInfo = $skuAttrInfo;
    }

    /**
     * @return string
     */
    public function getSkuAttrInfo(): ?string
    {
        return $this->skuAttrInfo;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryCheckParamProductInfo implements \JsonSerializable
{
    /**
     * 组合品详情列表
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

class WeimobShopFulfillDeliveryCheckParamProductDetailList implements \JsonSerializable
{
    /**
     * 仓库列表
     * @var array
     */
    private $warehouseList;

    /**
     * 前后台商品关联关系数量
     * @var int
     */
    private $itemSkuNum;

    /**
     * 后台商品id
     * @var int
     */
    private $itemId;

    /**
     * 后台sku冻结数量
     * @var int
     */
    private $itemSkuQuantity;

    /**
     * 后台skuId
     * @var int
     */
    private $itemSkuId;

    /**
     * 组合商品SkuId
     * @var int
     */
    private $combSkuId;

    /**
     * 组合商品标题
     * @var string
     */
    private $combTitle;

    /**
     * 商品名称
     * @var string
     */
    private $title;

    /**
     * 单品类型；1-单品，2-组合品
     * @var int
     */
    private $productType;

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

    /**
     * @param int $itemSkuNum
     */
    public function setItemSkuNum(?int $itemSkuNum): void
    {
        $this->itemSkuNum = $itemSkuNum;
    }

    /**
     * @return int
     */
    public function getItemSkuNum(): ?int
    {
        return $this->itemSkuNum;
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
     * @param int $itemSkuQuantity
     */
    public function setItemSkuQuantity(?int $itemSkuQuantity): void
    {
        $this->itemSkuQuantity = $itemSkuQuantity;
    }

    /**
     * @return int
     */
    public function getItemSkuQuantity(): ?int
    {
        return $this->itemSkuQuantity;
    }

    /**
     * @param int $itemSkuId
     */
    public function setItemSkuId(?int $itemSkuId): void
    {
        $this->itemSkuId = $itemSkuId;
    }

    /**
     * @return int
     */
    public function getItemSkuId(): ?int
    {
        return $this->itemSkuId;
    }

    /**
     * @param int $combSkuId
     */
    public function setCombSkuId(?int $combSkuId): void
    {
        $this->combSkuId = $combSkuId;
    }

    /**
     * @return int
     */
    public function getCombSkuId(): ?int
    {
        return $this->combSkuId;
    }

    /**
     * @param string $combTitle
     */
    public function setCombTitle(?string $combTitle): void
    {
        $this->combTitle = $combTitle;
    }

    /**
     * @return string
     */
    public function getCombTitle(): ?string
    {
        return $this->combTitle;
    }

    /**
     * @param string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param int $productType
     */
    public function setProductType(?int $productType): void
    {
        $this->productType = $productType;
    }

    /**
     * @return int
     */
    public function getProductType(): ?int
    {
        return $this->productType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryCheckParamWarehouseList implements \JsonSerializable
{
    /**
     * 后台商品数量
     * @var int
     */
    private $quantity;

    /**
     * 仓库ID
     * @var int
     */
    private $warehouseId;

    /**
     * 仓库类型
     * @var string
     */
    private $warehouseType;

    /**
     * 仓库名称
     * @var string
     */
    private $warehouseName;

    /**
     * @param int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryCheckParamExtInfo implements \JsonSerializable
{
    /**
     * 发货凭证信息；type-凭证类型：1-凭证信息
     * @var string
     */
    private $deliveryProof;

    /**
     * @param string $deliveryProof
     */
    public function setDeliveryProof(?string $deliveryProof): void
    {
        $this->deliveryProof = $deliveryProof;
    }

    /**
     * @return string
     */
    public function getDeliveryProof(): ?string
    {
        return $this->deliveryProof;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryCheckParamOrderInfo implements \JsonSerializable
{
    /**
     * 订单类型；1-普通订单；96-虚拟订单；97-消费订单；99-充值订单
     * @var int
     */
    private $orderType;

    /**
     * 订单来源；0-系统内部订单；100-历史导入订单（即新云迁移至 wos 的订单）；101-友朋；102-芸智；103-芸智；104-博申；201-分销市场供货商；401-外部订单（调用外部订单导入接口导入微盟系统内的订单）
     * @var int
     */
    private $orderSource;

    /**
     * 订单号
     * @var int
     */
    private $orderNo;

    /**
     * 订单状态；0-创建；1-部分支付；2-已支付；3-待发货；4-部分发货；5-已发货；7-确认收货；8-完成（即订单已确认收货，且过了售后期）；9-取消
     * @var int
     */
    private $orderStatus;

    /**
     * 渠道类型；0-公众号；1-小程序；2-H5；3-QQ；4-微博；5-字节跳动小程序；6-支付宝小程序；7-PC后台；8-安卓app；9-苹果app；10-百度智能小程序；11-PAD；12-自有APP；13-微信小程序webview；14-微信小程序webview-直播；15-大屏扫码；16-企业微信；18-芸智免密；19-QQ原生小程序；20-QQ小程序H5页面；21-支付宝原生小程序；22-微信小商店；23-快手原生小程序；24-快手小程序H5页面；31-抖音小程序 ；32-抖音小程序 webview；101-分销商；201-淘宝；202-天猫；203-京东；204-拼多多；205-苏宁易购；206-有赞；207-抖音；208-快手；209-美团；210-惠聚；251-POS；252-OMS；253-ERP；260-有搭；261-BOX；262-直播；263-积分商城；264-微商城；265-商家自有渠道；280-CPS导入订单；281-视频号小店
     * @var int
     */
    private $channelType;

    /**
     * 父单号
     * @var int
     */
    private $parentOrderNo;

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
     * @param int $orderStatus
     */
    public function setOrderStatus(?int $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return int
     */
    public function getOrderStatus(): ?int
    {
        return $this->orderStatus;
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

class WeimobShopFulfillDeliveryCheckParamReceiveInfo implements \JsonSerializable
{
    /**
     * 收货人地址
     * @var WeimobShopFulfillDeliveryCheckParamReceiverAddress
     */
    private $receiverAddress;

    /**
     * 收货人手机号
     * @var string
     */
    private $receiverPhone;

    /**
     * 收货人姓名
     * @var string
     */
    private $receiverName;

    /**
     * @param WeimobShopFulfillDeliveryCheckParamReceiverAddress $receiverAddress
     */
    public function setReceiverAddress(?WeimobShopFulfillDeliveryCheckParamReceiverAddress $receiverAddress): void
    {
        $this->receiverAddress = $receiverAddress;
    }

    /**
     * @return WeimobShopFulfillDeliveryCheckParamReceiverAddress
     */
    public function getReceiverAddress(): ?WeimobShopFulfillDeliveryCheckParamReceiverAddress
    {
        return $this->receiverAddress;
    }

    /**
     * @param string $receiverPhone
     */
    public function setReceiverPhone(?string $receiverPhone): void
    {
        $this->receiverPhone = $receiverPhone;
    }

    /**
     * @return string
     */
    public function getReceiverPhone(): ?string
    {
        return $this->receiverPhone;
    }

    /**
     * @param string $receiverName
     */
    public function setReceiverName(?string $receiverName): void
    {
        $this->receiverName = $receiverName;
    }

    /**
     * @return string
     */
    public function getReceiverName(): ?string
    {
        return $this->receiverName;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryCheckParamReceiverAddress implements \JsonSerializable
{
    /**
     * 乡镇/街道
     * @var string
     */
    private $area;

    /**
     * 邮编
     * @var string
     */
    private $zip;

    /**
     * 区县编码
     * @var string
     */
    private $countyCode;

    /**
     * 乡镇/街道编码
     * @var string
     */
    private $areaCode;

    /**
     * 详细地址
     * @var string
     */
    private $address;

    /**
     * 省份
     * @var string
     */
    private $province;

    /**
     * 城市
     * @var string
     */
    private $city;

    /**
     * 省份编码
     * @var string
     */
    private $provinceCode;

    /**
     * 城市编码
     * @var string
     */
    private $cityCode;

    /**
     * 纬度
     * @var string
     */
    private $latitude;

    /**
     * 区县
     * @var string
     */
    private $county;

    /**
     * 经度
     * @var string
     */
    private $longitude;

    /**
     * @param string $area
     */
    public function setArea(?string $area): void
    {
        $this->area = $area;
    }

    /**
     * @return string
     */
    public function getArea(): ?string
    {
        return $this->area;
    }

    /**
     * @param string $zip
     */
    public function setZip(?string $zip): void
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * @param string $countyCode
     */
    public function setCountyCode(?string $countyCode): void
    {
        $this->countyCode = $countyCode;
    }

    /**
     * @return string
     */
    public function getCountyCode(): ?string
    {
        return $this->countyCode;
    }

    /**
     * @param string $areaCode
     */
    public function setAreaCode(?string $areaCode): void
    {
        $this->areaCode = $areaCode;
    }

    /**
     * @return string
     */
    public function getAreaCode(): ?string
    {
        return $this->areaCode;
    }

    /**
     * @param string $address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string $province
     */
    public function setProvince(?string $province): void
    {
        $this->province = $province;
    }

    /**
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * @param string $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $provinceCode
     */
    public function setProvinceCode(?string $provinceCode): void
    {
        $this->provinceCode = $provinceCode;
    }

    /**
     * @return string
     */
    public function getProvinceCode(): ?string
    {
        return $this->provinceCode;
    }

    /**
     * @param string $cityCode
     */
    public function setCityCode(?string $cityCode): void
    {
        $this->cityCode = $cityCode;
    }

    /**
     * @return string
     */
    public function getCityCode(): ?string
    {
        return $this->cityCode;
    }

    /**
     * @param string $latitude
     */
    public function setLatitude(?string $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return string
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * @param string $county
     */
    public function setCounty(?string $county): void
    {
        $this->county = $county;
    }

    /**
     * @return string
     */
    public function getCounty(): ?string
    {
        return $this->county;
    }

    /**
     * @param string $longitude
     */
    public function setLongitude(?string $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return string
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryCheckParamFulfillInfo implements \JsonSerializable
{
    /**
     * 物流信息；当前仅商家配送存在
     * @var WeimobShopFulfillDeliveryCheckParamDeliveryInfo
     */
    private $deliveryInfo;

    /**
     * 履约类型；1-商家配送；2-同城限时达；3-到店交易；4-门店交易（仅存在于 APP 开店场景）；5-无需物流
     * @var int
     */
    private $deliveryType;

    /**
     * 履约方式；1-快递物流,；2-物流配送；3-同城配送；4-商家配送；5-到店自提；6-虚拟商品；7-门店交易（仅存在于 APP 开店场景）
     * @var int
     */
    private $fulfillMethod;

    /**
     * @param WeimobShopFulfillDeliveryCheckParamDeliveryInfo $deliveryInfo
     */
    public function setDeliveryInfo(?WeimobShopFulfillDeliveryCheckParamDeliveryInfo $deliveryInfo): void
    {
        $this->deliveryInfo = $deliveryInfo;
    }

    /**
     * @return WeimobShopFulfillDeliveryCheckParamDeliveryInfo
     */
    public function getDeliveryInfo(): ?WeimobShopFulfillDeliveryCheckParamDeliveryInfo
    {
        return $this->deliveryInfo;
    }

    /**
     * @param int $deliveryType
     */
    public function setDeliveryType(?int $deliveryType): void
    {
        $this->deliveryType = $deliveryType;
    }

    /**
     * @return int
     */
    public function getDeliveryType(): ?int
    {
        return $this->deliveryType;
    }

    /**
     * @param int $fulfillMethod
     */
    public function setFulfillMethod(?int $fulfillMethod): void
    {
        $this->fulfillMethod = $fulfillMethod;
    }

    /**
     * @return int
     */
    public function getFulfillMethod(): ?int
    {
        return $this->fulfillMethod;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryCheckParamDeliveryInfo implements \JsonSerializable
{
    /**
     * 物流公司代码
     * @var string
     */
    private $companyCode;

    /**
     * 快递单号
     * @var string
     */
    private $number;

    /**
     * 物流公司名称
     * @var string
     */
    private $companyName;

    /**
     * @param string $companyCode
     */
    public function setCompanyCode(?string $companyCode): void
    {
        $this->companyCode = $companyCode;
    }

    /**
     * @return string
     */
    public function getCompanyCode(): ?string
    {
        return $this->companyCode;
    }

    /**
     * @param string $number
     */
    public function setNumber(?string $number): void
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @param string $companyName
     */
    public function setCompanyName(?string $companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryCheckParamMerchantInfo implements \JsonSerializable
{
    /**
     * 商家扩展信息
     * @var WeimobShopFulfillDeliveryCheckParamMerchantExt
     */
    private $merchantExt;

    /**
     * 销售门店 vid
     * @var string
     */
    private $vid;

    /**
     * 商家id
     * @var string
     */
    private $bosId;

    /**
     * 服务门店 vid
     * @var string
     */
    private $processVid;

    /**
     * 商家名称
     * @var string
     */
    private $bosName;

    /**
     * @param WeimobShopFulfillDeliveryCheckParamMerchantExt $merchantExt
     */
    public function setMerchantExt(?WeimobShopFulfillDeliveryCheckParamMerchantExt $merchantExt): void
    {
        $this->merchantExt = $merchantExt;
    }

    /**
     * @return WeimobShopFulfillDeliveryCheckParamMerchantExt
     */
    public function getMerchantExt(): ?WeimobShopFulfillDeliveryCheckParamMerchantExt
    {
        return $this->merchantExt;
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
     * @param string $bosId
     */
    public function setBosId(?string $bosId): void
    {
        $this->bosId = $bosId;
    }

    /**
     * @return string
     */
    public function getBosId(): ?string
    {
        return $this->bosId;
    }

    /**
     * @param string $processVid
     */
    public function setProcessVid(?string $processVid): void
    {
        $this->processVid = $processVid;
    }

    /**
     * @return string
     */
    public function getProcessVid(): ?string
    {
        return $this->processVid;
    }

    /**
     * @param string $bosName
     */
    public function setBosName(?string $bosName): void
    {
        $this->bosName = $bosName;
    }

    /**
     * @return string
     */
    public function getBosName(): ?string
    {
        return $this->bosName;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryCheckParamMerchantExt implements \JsonSerializable
{
    /**
     * 操作发货节点 vid
     * @var string
     */
    private $fulfillVid;

    /**
     * @param string $fulfillVid
     */
    public function setFulfillVid(?string $fulfillVid): void
    {
        $this->fulfillVid = $fulfillVid;
    }

    /**
     * @return string
     */
    public function getFulfillVid(): ?string
    {
        return $this->fulfillVid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryCheckParamPayInfo implements \JsonSerializable
{
    /**
     * 支付类型；1-线上支付；2-线下支付
     * @var int
     */
    private $payType;

    /**
     * 支付时间；格式为时间戳，单位是毫秒
     * @var int
     */
    private $payTime;

    /**
     * 支付状态；0-未支付；1-部分支付；2-已支付
     * @var int
     */
    private $payStatus;

    /**
     * @param int $payType
     */
    public function setPayType(?int $payType): void
    {
        $this->payType = $payType;
    }

    /**
     * @return int
     */
    public function getPayType(): ?int
    {
        return $this->payType;
    }

    /**
     * @param int $payTime
     */
    public function setPayTime(?int $payTime): void
    {
        $this->payTime = $payTime;
    }

    /**
     * @return int
     */
    public function getPayTime(): ?int
    {
        return $this->payTime;
    }

    /**
     * @param int $payStatus
     */
    public function setPayStatus(?int $payStatus): void
    {
        $this->payStatus = $payStatus;
    }

    /**
     * @return int
     */
    public function getPayStatus(): ?int
    {
        return $this->payStatus;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryCheckParamExtInfo2 implements \JsonSerializable
{
    /**
     * 凭证信息；type-凭证类型：2-凭证图片 3-发货备注
     * @var string
     */
    private $deliveryProof;

    /**
     * @param string $deliveryProof
     */
    public function setDeliveryProof(?string $deliveryProof): void
    {
        $this->deliveryProof = $deliveryProof;
    }

    /**
     * @return string
     */
    public function getDeliveryProof(): ?string
    {
        return $this->deliveryProof;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobShopFulfillDeliveryCheckResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobShopFulfillDeliveryCheckData
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
     * @return WeimobShopFulfillDeliveryCheckData
     */
    public function getData(): ?WeimobShopFulfillDeliveryCheckData
    {
        return $this->data;
    }

    /**
     * @param WeimobShopFulfillDeliveryCheckData $data
     */
    public function setData(?WeimobShopFulfillDeliveryCheckData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryCheckData implements \JsonSerializable
{
    /**
     * 是否通过校验
     * @var bool
     */
    private $success;

    /**
     * 校验不通过时的错误信息
     * @var string
     */
    private $resultMsg;

    /**
     * @param bool $success
     */
    public function setSuccess(?bool $success): void
    {
        $this->success = $success;
    }

    /**
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * @param string $resultMsg
     */
    public function setResultMsg(?string $resultMsg): void
    {
        $this->resultMsg = $resultMsg;
    }

    /**
     * @return string
     */
    public function getResultMsg(): ?string
    {
        return $this->resultMsg;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

