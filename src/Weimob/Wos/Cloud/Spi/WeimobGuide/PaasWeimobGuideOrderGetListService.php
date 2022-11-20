<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 735
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobGuideOrderGetListService
{
    const specType = 'wos';

    public function invoke(WeimobGuideOrderGetListRequest $request) : WeimobGuideOrderGetListResponse;
}

class WeimobGuideOrderGetListRequest implements \JsonSerializable
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
     * @var WeimobGuideOrderGetListParam
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
     * @param WeimobGuideOrderGetListParam $param
     */
    public function setParam(?WeimobGuideOrderGetListParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobGuideOrderGetListParam
     */
    public function getParam(): ?WeimobGuideOrderGetListParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideOrderGetListParam implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideOrderGetListResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobGuideOrderGetListData
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
     * @return WeimobGuideOrderGetListData
     */
    public function getData(): ?WeimobGuideOrderGetListData
    {
        return $this->data;
    }

    /**
     * @param WeimobGuideOrderGetListData $data
     */
    public function setData(?WeimobGuideOrderGetListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideOrderGetListData implements \JsonSerializable
{
    /**
     * 用户拓展信息
     * @var WeimobGuideOrderGetListDataBuyerExpandInfoVo
     */
    private $buyerExpandInfoVo;

    /**
     * 用户信息
     * @var WeimobGuideOrderGetListDataBuyerInfo
     */
    private $buyerInfo;

    /**
     * 下单时间
     * @var WeimobGuideOrderGetListDataCreateTime
     */
    private $createTime;

    /**
     * 完成时间
     * @var WeimobGuideOrderGetListDataFinishTime
     */
    private $finishTime;

    /**
     * 订单商品列表
     * @var array
     */
    private $itemList;

    /**
     * 支付信息
     * @var WeimobGuideOrderGetListDataPaymentInfo
     */
    private $paymentInfo;

    /**
     * 更新时间
     * @var WeimobGuideOrderGetListDataUpdateTime
     */
    private $updateTime;

    /**
     * 【业务来源类型】1、正常线上订单，2，线下导购开单 枚举BizSourceType
     * @var int
     */
    private $bizSourceType;

    /**
     * 用户备注
     * @var string
     */
    private $buyerRemark;

    /**
     * 渠道类型：1，公众号；2，小程序；3，QQ；4，微博；5，头条；6，支付宝
     * @var int
     */
    private $channelType;

    /**
     * 商品总金额
     * @var int
     */
    private $goodsAmount;

    /**
     * 导购业绩订单  1、普通商品订单 2、导购业绩订单
     * @var int
     */
    private $goodsGuideType;

    /**
     * 商品来源类型 GoodsSourceTypeEnum枚举
     * @var int
     */
    private $goodsSourceType;

    /**
     * 是否删除
     * @var int
     */
    private $isDeleted;

    /**
     * 订单入口类型 OrderEntranceEnum枚举
     * @var int
     */
    private $orderEntrance;

    /**
     * 订单号
     * @var int
     */
    private $orderNo;

    /**
     * 订单状态
     * @var int
     */
    private $orderStatus;

    /**
     * 订单类型
     * @var int
     */
    private $orderType;

    /**
     * 外部订单号
     * @var int
     */
    private $outOrderNo;

    /**
     * 订单实付金额
     * @var int
     */
    private $paymentAmount;

    /**
     * 【基础信息】销售渠道类型：1,线上网店;2,线下门店 见枚举SaleChannelTypeEnum
     * @var int
     */
    private $saleChannelType;

    /**
     * 订单应付金额
     * @var int
     */
    private $shouldPayAmount;

    /**
     * 订单总的折扣金额
     * @var int
     */
    private $totalDiscountAmount;

    /**
     * @param WeimobGuideOrderGetListDataBuyerExpandInfoVo $buyerExpandInfoVo
     */
    public function setBuyerExpandInfoVo(?WeimobGuideOrderGetListDataBuyerExpandInfoVo $buyerExpandInfoVo): void
    {
        $this->buyerExpandInfoVo = $buyerExpandInfoVo;
    }

    /**
     * @return WeimobGuideOrderGetListDataBuyerExpandInfoVo
     */
    public function getBuyerExpandInfoVo(): ?WeimobGuideOrderGetListDataBuyerExpandInfoVo
    {
        return $this->buyerExpandInfoVo;
    }

    /**
     * @param WeimobGuideOrderGetListDataBuyerInfo $buyerInfo
     */
    public function setBuyerInfo(?WeimobGuideOrderGetListDataBuyerInfo $buyerInfo): void
    {
        $this->buyerInfo = $buyerInfo;
    }

    /**
     * @return WeimobGuideOrderGetListDataBuyerInfo
     */
    public function getBuyerInfo(): ?WeimobGuideOrderGetListDataBuyerInfo
    {
        return $this->buyerInfo;
    }

    /**
     * @param WeimobGuideOrderGetListDataCreateTime $createTime
     */
    public function setCreateTime(?WeimobGuideOrderGetListDataCreateTime $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return WeimobGuideOrderGetListDataCreateTime
     */
    public function getCreateTime(): ?WeimobGuideOrderGetListDataCreateTime
    {
        return $this->createTime;
    }

    /**
     * @param WeimobGuideOrderGetListDataFinishTime $finishTime
     */
    public function setFinishTime(?WeimobGuideOrderGetListDataFinishTime $finishTime): void
    {
        $this->finishTime = $finishTime;
    }

    /**
     * @return WeimobGuideOrderGetListDataFinishTime
     */
    public function getFinishTime(): ?WeimobGuideOrderGetListDataFinishTime
    {
        return $this->finishTime;
    }

    /**
     * @param array $itemList
     */
    public function setItemList(?array $itemList): void
    {
        $this->itemList = $itemList;
    }

    /**
     * @return array
     */
    public function getItemList(): ?array
    {
        return $this->itemList;
    }

    /**
     * @param WeimobGuideOrderGetListDataPaymentInfo $paymentInfo
     */
    public function setPaymentInfo(?WeimobGuideOrderGetListDataPaymentInfo $paymentInfo): void
    {
        $this->paymentInfo = $paymentInfo;
    }

    /**
     * @return WeimobGuideOrderGetListDataPaymentInfo
     */
    public function getPaymentInfo(): ?WeimobGuideOrderGetListDataPaymentInfo
    {
        return $this->paymentInfo;
    }

    /**
     * @param WeimobGuideOrderGetListDataUpdateTime $updateTime
     */
    public function setUpdateTime(?WeimobGuideOrderGetListDataUpdateTime $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    /**
     * @return WeimobGuideOrderGetListDataUpdateTime
     */
    public function getUpdateTime(): ?WeimobGuideOrderGetListDataUpdateTime
    {
        return $this->updateTime;
    }

    /**
     * @param int $bizSourceType
     */
    public function setBizSourceType(?int $bizSourceType): void
    {
        $this->bizSourceType = $bizSourceType;
    }

    /**
     * @return int
     */
    public function getBizSourceType(): ?int
    {
        return $this->bizSourceType;
    }

    /**
     * @param string $buyerRemark
     */
    public function setBuyerRemark(?string $buyerRemark): void
    {
        $this->buyerRemark = $buyerRemark;
    }

    /**
     * @return string
     */
    public function getBuyerRemark(): ?string
    {
        return $this->buyerRemark;
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
     * @param int $goodsAmount
     */
    public function setGoodsAmount(?int $goodsAmount): void
    {
        $this->goodsAmount = $goodsAmount;
    }

    /**
     * @return int
     */
    public function getGoodsAmount(): ?int
    {
        return $this->goodsAmount;
    }

    /**
     * @param int $goodsGuideType
     */
    public function setGoodsGuideType(?int $goodsGuideType): void
    {
        $this->goodsGuideType = $goodsGuideType;
    }

    /**
     * @return int
     */
    public function getGoodsGuideType(): ?int
    {
        return $this->goodsGuideType;
    }

    /**
     * @param int $goodsSourceType
     */
    public function setGoodsSourceType(?int $goodsSourceType): void
    {
        $this->goodsSourceType = $goodsSourceType;
    }

    /**
     * @return int
     */
    public function getGoodsSourceType(): ?int
    {
        return $this->goodsSourceType;
    }

    /**
     * @param int $isDeleted
     */
    public function setIsDeleted(?int $isDeleted): void
    {
        $this->isDeleted = $isDeleted;
    }

    /**
     * @return int
     */
    public function getIsDeleted(): ?int
    {
        return $this->isDeleted;
    }

    /**
     * @param int $orderEntrance
     */
    public function setOrderEntrance(?int $orderEntrance): void
    {
        $this->orderEntrance = $orderEntrance;
    }

    /**
     * @return int
     */
    public function getOrderEntrance(): ?int
    {
        return $this->orderEntrance;
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
     * @param int $outOrderNo
     */
    public function setOutOrderNo(?int $outOrderNo): void
    {
        $this->outOrderNo = $outOrderNo;
    }

    /**
     * @return int
     */
    public function getOutOrderNo(): ?int
    {
        return $this->outOrderNo;
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
     * @param int $saleChannelType
     */
    public function setSaleChannelType(?int $saleChannelType): void
    {
        $this->saleChannelType = $saleChannelType;
    }

    /**
     * @return int
     */
    public function getSaleChannelType(): ?int
    {
        return $this->saleChannelType;
    }

    /**
     * @param int $shouldPayAmount
     */
    public function setShouldPayAmount(?int $shouldPayAmount): void
    {
        $this->shouldPayAmount = $shouldPayAmount;
    }

    /**
     * @return int
     */
    public function getShouldPayAmount(): ?int
    {
        return $this->shouldPayAmount;
    }

    /**
     * @param int $totalDiscountAmount
     */
    public function setTotalDiscountAmount(?int $totalDiscountAmount): void
    {
        $this->totalDiscountAmount = $totalDiscountAmount;
    }

    /**
     * @return int
     */
    public function getTotalDiscountAmount(): ?int
    {
        return $this->totalDiscountAmount;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideOrderGetListDataBuyerExpandInfoVo implements \JsonSerializable
{
    /**
     * 归属门店id（结算页查询携带）
     * @var int
     */
    private $attributionStoreId;

    /**
     * 归属门店名称
     * @var string
     */
    private $attributionStoreName;

    /**
     * 私人导购员名称
     * @var string
     */
    private $personalGuiderName;

    /**
     * 私人导购归属门店ID（绑定首单专属导购时实时返回，与结算页归属门店可能不一致）
     * @var int
     */
    private $personalGuiderStoreId;

    /**
     * 私人导购员id
     * @var int
     */
    private $personalGuiderWid;

    /**
     * @param int $attributionStoreId
     */
    public function setAttributionStoreId(?int $attributionStoreId): void
    {
        $this->attributionStoreId = $attributionStoreId;
    }

    /**
     * @return int
     */
    public function getAttributionStoreId(): ?int
    {
        return $this->attributionStoreId;
    }

    /**
     * @param string $attributionStoreName
     */
    public function setAttributionStoreName(?string $attributionStoreName): void
    {
        $this->attributionStoreName = $attributionStoreName;
    }

    /**
     * @return string
     */
    public function getAttributionStoreName(): ?string
    {
        return $this->attributionStoreName;
    }

    /**
     * @param string $personalGuiderName
     */
    public function setPersonalGuiderName(?string $personalGuiderName): void
    {
        $this->personalGuiderName = $personalGuiderName;
    }

    /**
     * @return string
     */
    public function getPersonalGuiderName(): ?string
    {
        return $this->personalGuiderName;
    }

    /**
     * @param int $personalGuiderStoreId
     */
    public function setPersonalGuiderStoreId(?int $personalGuiderStoreId): void
    {
        $this->personalGuiderStoreId = $personalGuiderStoreId;
    }

    /**
     * @return int
     */
    public function getPersonalGuiderStoreId(): ?int
    {
        return $this->personalGuiderStoreId;
    }

    /**
     * @param int $personalGuiderWid
     */
    public function setPersonalGuiderWid(?int $personalGuiderWid): void
    {
        $this->personalGuiderWid = $personalGuiderWid;
    }

    /**
     * @return int
     */
    public function getPersonalGuiderWid(): ?int
    {
        return $this->personalGuiderWid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideOrderGetListDataBuyerInfo implements \JsonSerializable
{
    /**
     * 用户昵称
     * @var string
     */
    private $userNickname;

    /**
     * 用户wid
     * @var int
     */
    private $wid;

    /**
     * @param string $userNickname
     */
    public function setUserNickname(?string $userNickname): void
    {
        $this->userNickname = $userNickname;
    }

    /**
     * @return string
     */
    public function getUserNickname(): ?string
    {
        return $this->userNickname;
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

class WeimobGuideOrderGetListDataCreateTime implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideOrderGetListDataFinishTime implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideOrderGetListDataItemList implements \JsonSerializable
{
    /**
     * 折扣信息
     * @var WeimobGuideOrderGetListDataBaseDiscountInfo
     */
    private $baseDiscountInfo;

    /**
     * 商品折扣信息
     * @var WeimobGuideOrderGetListDataGoodsDiscountInfo
     */
    private $goodsDiscountInfo;

    /**
     * 可售数量扣减门店id
     * @var int
     */
    private $availableStoreId;

    /**
     * 微盟云扩展点信息，用于商品PAAS定制
     * @var string
     */
    private $cloudCustom;

    /**
     * 【商品信息】成本价
     * @var int
     */
    private $costPrice;

    /**
     * 商品创建门店
     * @var int
     */
    private $createStoreId;

    /**
     * 【预售信息】定金
     * @var int
     */
    private $depositAmount;

    /**
     * 商品归属类型：1商家，2门店
     * @var int
     */
    private $goodsBelongToType;

    /**
     * 商品类目id
     * @var int
     */
    private $goodsCategoryId;

    /**
     * 商品编码
     * @var int
     */
    private $goodsCode;

    /**
     * 分销类型 1-普通,2-分销
     * @var int
     */
    private $goodsDistributionType;

    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * 商品销售模式：1普通  2预售
     * @var int
     */
    private $goodsSellMode;

    /**
     * 商品来源类型 GoodsSourceTypeEnum枚举
     * @var int
     */
    private $goodsSourceType;

    /**
     * 商品标题
     * @var string
     */
    private $goodsTitle;

    /**
     * 商品类型
     * @var int
     */
    private $goodsType;

    /**
     * false
     * @var bool
     */
    private $hasDelivered;

    /**
     * 订单项id
     * @var int
     */
    private $id;

    /**
     * 规格图片
     * @var string
     */
    private $imageUrl;

    /**
     * 发票商品名称
     * @var string
     */
    private $invoiceGoodsName;

    /**
     * itemRemark名称
     * @var string
     */
    private $itemRemarkName;

    /**
     * 商品市场价
     * @var int
     */
    private $marketPrice;

    /**
     * 商品销售原价
     * @var int
     */
    private $originalPrice;

    /**
     * 外部订单项id
     * @var int
     */
    private $outItemId;

    /**
     * 【商品信息】外部商品ID
     * @var int
     */
    private $outerGoodsId;

    /**
     * 【商品信息】外部商家id
     * @var int
     */
    private $outerMerchantId;

    /**
     * 【商品信息】外部SKUID
     * @var int
     */
    private $outerSkuId;

    /**
     * 实付金额
     * @var int
     */
    private $paymentAmount;

    /**
     * 积分
     * @var int
     */
    private $point;

    /**
     * 积分抵扣比率: 0-100 0：在商品级积分抵扣场景下代表不抵扣积分
     * @var int
     */
    private $pointDeductRatio;

    /**
     * 商品售价 单个sku价格
     * @var int
     */
    private $price;

    /**
     * 【商品信息】一级类目
     * @var int
     */
    private $primaryCategory;

    /**
     * 单品详情列表，包含虚拟商品，比如付费券的模板信息。对应商品的模型如下
     * @var string
     */
    private $productDetails;

    /**
     * 单品类型 0，无单品（新零售之前）；1，单品；2，组合品
     * @var int
     */
    private $productType;

    /**
     * 【商品信息】二级类目
     * @var int
     */
    private $secondaryCategory;

    /**
     * 单种商品应付金额
     * @var int
     */
    private $shouldPaymentAmount;

    /**
     * sku金额
     * @var int
     */
    private $skuAmount;

    /**
     * sku条码
     * @var int
     */
    private $skuBarCode;

    /**
     * 规格编码
     * @var int
     */
    private $skuCode;

    /**
     * 规格id
     * @var int
     */
    private $skuId;

    /**
     * 规格名称
     * @var string
     */
    private $skuName;

    /**
     * 购买数量
     * @var int
     */
    private $skuNum;

    /**
     * 发票税收编码
     * @var int
     */
    private $taxClassificationCode;

    /**
     * 发票税率
     * @var int
     */
    private $taxRate;

    /**
     * sku总金额
     * @var int
     */
    private $totalAmount;

    /**
     * 单种商品总抵扣金额
     * @var int
     */
    private $totalDiscountAmount;

    /**
     * sku总积分
     * @var int
     */
    private $totalPoint;

    /**
     * 商品单位
     * @var string
     */
    private $unit;

    /**
     * 商品体积
     * @var int
     */
    private $volume;

    /**
     * 【商品信息】商品重量，单个sku重量，单位kg
     * @var int
     */
    private $weight;

    /**
     * @param WeimobGuideOrderGetListDataBaseDiscountInfo $baseDiscountInfo
     */
    public function setBaseDiscountInfo(?WeimobGuideOrderGetListDataBaseDiscountInfo $baseDiscountInfo): void
    {
        $this->baseDiscountInfo = $baseDiscountInfo;
    }

    /**
     * @return WeimobGuideOrderGetListDataBaseDiscountInfo
     */
    public function getBaseDiscountInfo(): ?WeimobGuideOrderGetListDataBaseDiscountInfo
    {
        return $this->baseDiscountInfo;
    }

    /**
     * @param WeimobGuideOrderGetListDataGoodsDiscountInfo $goodsDiscountInfo
     */
    public function setGoodsDiscountInfo(?WeimobGuideOrderGetListDataGoodsDiscountInfo $goodsDiscountInfo): void
    {
        $this->goodsDiscountInfo = $goodsDiscountInfo;
    }

    /**
     * @return WeimobGuideOrderGetListDataGoodsDiscountInfo
     */
    public function getGoodsDiscountInfo(): ?WeimobGuideOrderGetListDataGoodsDiscountInfo
    {
        return $this->goodsDiscountInfo;
    }

    /**
     * @param int $availableStoreId
     */
    public function setAvailableStoreId(?int $availableStoreId): void
    {
        $this->availableStoreId = $availableStoreId;
    }

    /**
     * @return int
     */
    public function getAvailableStoreId(): ?int
    {
        return $this->availableStoreId;
    }

    /**
     * @param string $cloudCustom
     */
    public function setCloudCustom(?string $cloudCustom): void
    {
        $this->cloudCustom = $cloudCustom;
    }

    /**
     * @return string
     */
    public function getCloudCustom(): ?string
    {
        return $this->cloudCustom;
    }

    /**
     * @param int $costPrice
     */
    public function setCostPrice(?int $costPrice): void
    {
        $this->costPrice = $costPrice;
    }

    /**
     * @return int
     */
    public function getCostPrice(): ?int
    {
        return $this->costPrice;
    }

    /**
     * @param int $createStoreId
     */
    public function setCreateStoreId(?int $createStoreId): void
    {
        $this->createStoreId = $createStoreId;
    }

    /**
     * @return int
     */
    public function getCreateStoreId(): ?int
    {
        return $this->createStoreId;
    }

    /**
     * @param int $depositAmount
     */
    public function setDepositAmount(?int $depositAmount): void
    {
        $this->depositAmount = $depositAmount;
    }

    /**
     * @return int
     */
    public function getDepositAmount(): ?int
    {
        return $this->depositAmount;
    }

    /**
     * @param int $goodsBelongToType
     */
    public function setGoodsBelongToType(?int $goodsBelongToType): void
    {
        $this->goodsBelongToType = $goodsBelongToType;
    }

    /**
     * @return int
     */
    public function getGoodsBelongToType(): ?int
    {
        return $this->goodsBelongToType;
    }

    /**
     * @param int $goodsCategoryId
     */
    public function setGoodsCategoryId(?int $goodsCategoryId): void
    {
        $this->goodsCategoryId = $goodsCategoryId;
    }

    /**
     * @return int
     */
    public function getGoodsCategoryId(): ?int
    {
        return $this->goodsCategoryId;
    }

    /**
     * @param int $goodsCode
     */
    public function setGoodsCode(?int $goodsCode): void
    {
        $this->goodsCode = $goodsCode;
    }

    /**
     * @return int
     */
    public function getGoodsCode(): ?int
    {
        return $this->goodsCode;
    }

    /**
     * @param int $goodsDistributionType
     */
    public function setGoodsDistributionType(?int $goodsDistributionType): void
    {
        $this->goodsDistributionType = $goodsDistributionType;
    }

    /**
     * @return int
     */
    public function getGoodsDistributionType(): ?int
    {
        return $this->goodsDistributionType;
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
     * @param int $goodsSellMode
     */
    public function setGoodsSellMode(?int $goodsSellMode): void
    {
        $this->goodsSellMode = $goodsSellMode;
    }

    /**
     * @return int
     */
    public function getGoodsSellMode(): ?int
    {
        return $this->goodsSellMode;
    }

    /**
     * @param int $goodsSourceType
     */
    public function setGoodsSourceType(?int $goodsSourceType): void
    {
        $this->goodsSourceType = $goodsSourceType;
    }

    /**
     * @return int
     */
    public function getGoodsSourceType(): ?int
    {
        return $this->goodsSourceType;
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
     * @param bool $hasDelivered
     */
    public function setHasDelivered(?bool $hasDelivered): void
    {
        $this->hasDelivered = $hasDelivered;
    }

    /**
     * @return bool
     */
    public function getHasDelivered(): ?bool
    {
        return $this->hasDelivered;
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
     * @param string $invoiceGoodsName
     */
    public function setInvoiceGoodsName(?string $invoiceGoodsName): void
    {
        $this->invoiceGoodsName = $invoiceGoodsName;
    }

    /**
     * @return string
     */
    public function getInvoiceGoodsName(): ?string
    {
        return $this->invoiceGoodsName;
    }

    /**
     * @param string $itemRemarkName
     */
    public function setItemRemarkName(?string $itemRemarkName): void
    {
        $this->itemRemarkName = $itemRemarkName;
    }

    /**
     * @return string
     */
    public function getItemRemarkName(): ?string
    {
        return $this->itemRemarkName;
    }

    /**
     * @param int $marketPrice
     */
    public function setMarketPrice(?int $marketPrice): void
    {
        $this->marketPrice = $marketPrice;
    }

    /**
     * @return int
     */
    public function getMarketPrice(): ?int
    {
        return $this->marketPrice;
    }

    /**
     * @param int $originalPrice
     */
    public function setOriginalPrice(?int $originalPrice): void
    {
        $this->originalPrice = $originalPrice;
    }

    /**
     * @return int
     */
    public function getOriginalPrice(): ?int
    {
        return $this->originalPrice;
    }

    /**
     * @param int $outItemId
     */
    public function setOutItemId(?int $outItemId): void
    {
        $this->outItemId = $outItemId;
    }

    /**
     * @return int
     */
    public function getOutItemId(): ?int
    {
        return $this->outItemId;
    }

    /**
     * @param int $outerGoodsId
     */
    public function setOuterGoodsId(?int $outerGoodsId): void
    {
        $this->outerGoodsId = $outerGoodsId;
    }

    /**
     * @return int
     */
    public function getOuterGoodsId(): ?int
    {
        return $this->outerGoodsId;
    }

    /**
     * @param int $outerMerchantId
     */
    public function setOuterMerchantId(?int $outerMerchantId): void
    {
        $this->outerMerchantId = $outerMerchantId;
    }

    /**
     * @return int
     */
    public function getOuterMerchantId(): ?int
    {
        return $this->outerMerchantId;
    }

    /**
     * @param int $outerSkuId
     */
    public function setOuterSkuId(?int $outerSkuId): void
    {
        $this->outerSkuId = $outerSkuId;
    }

    /**
     * @return int
     */
    public function getOuterSkuId(): ?int
    {
        return $this->outerSkuId;
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
     * @param int $point
     */
    public function setPoint(?int $point): void
    {
        $this->point = $point;
    }

    /**
     * @return int
     */
    public function getPoint(): ?int
    {
        return $this->point;
    }

    /**
     * @param int $pointDeductRatio
     */
    public function setPointDeductRatio(?int $pointDeductRatio): void
    {
        $this->pointDeductRatio = $pointDeductRatio;
    }

    /**
     * @return int
     */
    public function getPointDeductRatio(): ?int
    {
        return $this->pointDeductRatio;
    }

    /**
     * @param int $price
     */
    public function setPrice(?int $price): void
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
     * @param int $primaryCategory
     */
    public function setPrimaryCategory(?int $primaryCategory): void
    {
        $this->primaryCategory = $primaryCategory;
    }

    /**
     * @return int
     */
    public function getPrimaryCategory(): ?int
    {
        return $this->primaryCategory;
    }

    /**
     * @param string $productDetails
     */
    public function setProductDetails(?string $productDetails): void
    {
        $this->productDetails = $productDetails;
    }

    /**
     * @return string
     */
    public function getProductDetails(): ?string
    {
        return $this->productDetails;
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

    /**
     * @param int $secondaryCategory
     */
    public function setSecondaryCategory(?int $secondaryCategory): void
    {
        $this->secondaryCategory = $secondaryCategory;
    }

    /**
     * @return int
     */
    public function getSecondaryCategory(): ?int
    {
        return $this->secondaryCategory;
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
     * @param int $skuAmount
     */
    public function setSkuAmount(?int $skuAmount): void
    {
        $this->skuAmount = $skuAmount;
    }

    /**
     * @return int
     */
    public function getSkuAmount(): ?int
    {
        return $this->skuAmount;
    }

    /**
     * @param int $skuBarCode
     */
    public function setSkuBarCode(?int $skuBarCode): void
    {
        $this->skuBarCode = $skuBarCode;
    }

    /**
     * @return int
     */
    public function getSkuBarCode(): ?int
    {
        return $this->skuBarCode;
    }

    /**
     * @param int $skuCode
     */
    public function setSkuCode(?int $skuCode): void
    {
        $this->skuCode = $skuCode;
    }

    /**
     * @return int
     */
    public function getSkuCode(): ?int
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
     * @param string $skuName
     */
    public function setSkuName(?string $skuName): void
    {
        $this->skuName = $skuName;
    }

    /**
     * @return string
     */
    public function getSkuName(): ?string
    {
        return $this->skuName;
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
     * @param int $taxClassificationCode
     */
    public function setTaxClassificationCode(?int $taxClassificationCode): void
    {
        $this->taxClassificationCode = $taxClassificationCode;
    }

    /**
     * @return int
     */
    public function getTaxClassificationCode(): ?int
    {
        return $this->taxClassificationCode;
    }

    /**
     * @param int $taxRate
     */
    public function setTaxRate(?int $taxRate): void
    {
        $this->taxRate = $taxRate;
    }

    /**
     * @return int
     */
    public function getTaxRate(): ?int
    {
        return $this->taxRate;
    }

    /**
     * @param int $totalAmount
     */
    public function setTotalAmount(?int $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * @return int
     */
    public function getTotalAmount(): ?int
    {
        return $this->totalAmount;
    }

    /**
     * @param int $totalDiscountAmount
     */
    public function setTotalDiscountAmount(?int $totalDiscountAmount): void
    {
        $this->totalDiscountAmount = $totalDiscountAmount;
    }

    /**
     * @return int
     */
    public function getTotalDiscountAmount(): ?int
    {
        return $this->totalDiscountAmount;
    }

    /**
     * @param int $totalPoint
     */
    public function setTotalPoint(?int $totalPoint): void
    {
        $this->totalPoint = $totalPoint;
    }

    /**
     * @return int
     */
    public function getTotalPoint(): ?int
    {
        return $this->totalPoint;
    }

    /**
     * @param string $unit
     */
    public function setUnit(?string $unit): void
    {
        $this->unit = $unit;
    }

    /**
     * @return string
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * @param int $volume
     */
    public function setVolume(?int $volume): void
    {
        $this->volume = $volume;
    }

    /**
     * @return int
     */
    public function getVolume(): ?int
    {
        return $this->volume;
    }

    /**
     * @param int $weight
     */
    public function setWeight(?int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideOrderGetListDataBaseDiscountInfo implements \JsonSerializable
{
    /**
     * 余额抵扣金额
     * @var int
     */
    private $balanceDiscountAmount;

    /**
     * 储值卡抵扣金额
     * @var int
     */
    private $cardDiscountAmount;

    /**
     * 码券优惠金额
     * @var int
     */
    private $couponCodeDiscountAmount;

    /**
     * 优惠券优惠金额
     * @var int
     */
    private $couponDiscountAmount;

    /**
     * 定金膨胀优惠金额
     * @var int
     */
    private $depositExpansionDiscountAmount;

    /**
     * 礼品卡优惠金额
     * @var int
     */
    private $giftCardDiscountAmount;

    /**
     * 积分抵扣金额
     * @var int
     */
    private $memberPointsDiscountAmount;

    /**
     * 会员折扣金额
     * @var int
     */
    private $membershipDiscountAmount;

    /**
     * 商家减免金额
     * @var int
     */
    private $merchantDiscountAmount;

    /**
     * N元N件折扣金额
     * @var int
     */
    private $nynjDiscountAmount;

    /**
     * 支付优惠金额
     * @var int
     */
    private $payDiscountAmount;

    /**
     * 促销折扣金额
     * @var int
     */
    private $promotionDiscountAmount;

    /**
     * 阶梯价优惠金额
     * @var int
     */
    private $tieredPriceDiscountAmount;

    /**
     * 使用的积分
     * @var int
     */
    private $usedMemberPoints;

    /**
     * @param int $balanceDiscountAmount
     */
    public function setBalanceDiscountAmount(?int $balanceDiscountAmount): void
    {
        $this->balanceDiscountAmount = $balanceDiscountAmount;
    }

    /**
     * @return int
     */
    public function getBalanceDiscountAmount(): ?int
    {
        return $this->balanceDiscountAmount;
    }

    /**
     * @param int $cardDiscountAmount
     */
    public function setCardDiscountAmount(?int $cardDiscountAmount): void
    {
        $this->cardDiscountAmount = $cardDiscountAmount;
    }

    /**
     * @return int
     */
    public function getCardDiscountAmount(): ?int
    {
        return $this->cardDiscountAmount;
    }

    /**
     * @param int $couponCodeDiscountAmount
     */
    public function setCouponCodeDiscountAmount(?int $couponCodeDiscountAmount): void
    {
        $this->couponCodeDiscountAmount = $couponCodeDiscountAmount;
    }

    /**
     * @return int
     */
    public function getCouponCodeDiscountAmount(): ?int
    {
        return $this->couponCodeDiscountAmount;
    }

    /**
     * @param int $couponDiscountAmount
     */
    public function setCouponDiscountAmount(?int $couponDiscountAmount): void
    {
        $this->couponDiscountAmount = $couponDiscountAmount;
    }

    /**
     * @return int
     */
    public function getCouponDiscountAmount(): ?int
    {
        return $this->couponDiscountAmount;
    }

    /**
     * @param int $depositExpansionDiscountAmount
     */
    public function setDepositExpansionDiscountAmount(?int $depositExpansionDiscountAmount): void
    {
        $this->depositExpansionDiscountAmount = $depositExpansionDiscountAmount;
    }

    /**
     * @return int
     */
    public function getDepositExpansionDiscountAmount(): ?int
    {
        return $this->depositExpansionDiscountAmount;
    }

    /**
     * @param int $giftCardDiscountAmount
     */
    public function setGiftCardDiscountAmount(?int $giftCardDiscountAmount): void
    {
        $this->giftCardDiscountAmount = $giftCardDiscountAmount;
    }

    /**
     * @return int
     */
    public function getGiftCardDiscountAmount(): ?int
    {
        return $this->giftCardDiscountAmount;
    }

    /**
     * @param int $memberPointsDiscountAmount
     */
    public function setMemberPointsDiscountAmount(?int $memberPointsDiscountAmount): void
    {
        $this->memberPointsDiscountAmount = $memberPointsDiscountAmount;
    }

    /**
     * @return int
     */
    public function getMemberPointsDiscountAmount(): ?int
    {
        return $this->memberPointsDiscountAmount;
    }

    /**
     * @param int $membershipDiscountAmount
     */
    public function setMembershipDiscountAmount(?int $membershipDiscountAmount): void
    {
        $this->membershipDiscountAmount = $membershipDiscountAmount;
    }

    /**
     * @return int
     */
    public function getMembershipDiscountAmount(): ?int
    {
        return $this->membershipDiscountAmount;
    }

    /**
     * @param int $merchantDiscountAmount
     */
    public function setMerchantDiscountAmount(?int $merchantDiscountAmount): void
    {
        $this->merchantDiscountAmount = $merchantDiscountAmount;
    }

    /**
     * @return int
     */
    public function getMerchantDiscountAmount(): ?int
    {
        return $this->merchantDiscountAmount;
    }

    /**
     * @param int $nynjDiscountAmount
     */
    public function setNynjDiscountAmount(?int $nynjDiscountAmount): void
    {
        $this->nynjDiscountAmount = $nynjDiscountAmount;
    }

    /**
     * @return int
     */
    public function getNynjDiscountAmount(): ?int
    {
        return $this->nynjDiscountAmount;
    }

    /**
     * @param int $payDiscountAmount
     */
    public function setPayDiscountAmount(?int $payDiscountAmount): void
    {
        $this->payDiscountAmount = $payDiscountAmount;
    }

    /**
     * @return int
     */
    public function getPayDiscountAmount(): ?int
    {
        return $this->payDiscountAmount;
    }

    /**
     * @param int $promotionDiscountAmount
     */
    public function setPromotionDiscountAmount(?int $promotionDiscountAmount): void
    {
        $this->promotionDiscountAmount = $promotionDiscountAmount;
    }

    /**
     * @return int
     */
    public function getPromotionDiscountAmount(): ?int
    {
        return $this->promotionDiscountAmount;
    }

    /**
     * @param int $tieredPriceDiscountAmount
     */
    public function setTieredPriceDiscountAmount(?int $tieredPriceDiscountAmount): void
    {
        $this->tieredPriceDiscountAmount = $tieredPriceDiscountAmount;
    }

    /**
     * @return int
     */
    public function getTieredPriceDiscountAmount(): ?int
    {
        return $this->tieredPriceDiscountAmount;
    }

    /**
     * @param int $usedMemberPoints
     */
    public function setUsedMemberPoints(?int $usedMemberPoints): void
    {
        $this->usedMemberPoints = $usedMemberPoints;
    }

    /**
     * @return int
     */
    public function getUsedMemberPoints(): ?int
    {
        return $this->usedMemberPoints;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideOrderGetListDataGoodsDiscountInfo implements \JsonSerializable
{
    /**
     * 通用折扣信息,商品项的通用优惠的商品维度折扣金额是没有包含运费维度的折扣金额
     * @var array
     */
    private $commonDiscountInfo;

    /**
     * 余额抵扣金额
     * @var int
     */
    private $balanceDiscountAmount;

    /**
     * 礼品卡优惠金额
     * @var int
     */
    private $cardDiscountAmount;

    /**
     * 码券优惠金额
     * @var int
     */
    private $couponCodeDiscountAmount;

    /**
     * 优惠券优惠金额
     * @var int
     */
    private $couponDiscountAmount;

    /**
     * 定金膨胀优惠金额
     * @var int
     */
    private $depositExpansionDiscountAmount;

    /**
     * 礼品卡优惠金额
     * @var int
     */
    private $giftCardDiscountAmount;

    /**
     * 积分抵扣金额
     * @var int
     */
    private $memberPointsDiscountAmount;

    /**
     * 会员折扣金额
     * @var int
     */
    private $membershipDiscountAmount;

    /**
     * 商家减免金额
     * @var int
     */
    private $merchantDiscountAmount;

    /**
     * N元N件折扣金额
     * @var int
     */
    private $nynjDiscountAmount;

    /**
     * 支付优惠金额
     * @var int
     */
    private $payDiscountAmount;

    /**
     * 促销折扣金额
     * @var int
     */
    private $promotionDiscountAmount;

    /**
     * 阶梯价优惠金额
     * @var int
     */
    private $tieredPriceDiscountAmount;

    /**
     * 使用的积分
     * @var int
     */
    private $usedMemberPoints;

    /**
     * @param array $commonDiscountInfo
     */
    public function setCommonDiscountInfo(?array $commonDiscountInfo): void
    {
        $this->commonDiscountInfo = $commonDiscountInfo;
    }

    /**
     * @return array
     */
    public function getCommonDiscountInfo(): ?array
    {
        return $this->commonDiscountInfo;
    }

    /**
     * @param int $balanceDiscountAmount
     */
    public function setBalanceDiscountAmount(?int $balanceDiscountAmount): void
    {
        $this->balanceDiscountAmount = $balanceDiscountAmount;
    }

    /**
     * @return int
     */
    public function getBalanceDiscountAmount(): ?int
    {
        return $this->balanceDiscountAmount;
    }

    /**
     * @param int $cardDiscountAmount
     */
    public function setCardDiscountAmount(?int $cardDiscountAmount): void
    {
        $this->cardDiscountAmount = $cardDiscountAmount;
    }

    /**
     * @return int
     */
    public function getCardDiscountAmount(): ?int
    {
        return $this->cardDiscountAmount;
    }

    /**
     * @param int $couponCodeDiscountAmount
     */
    public function setCouponCodeDiscountAmount(?int $couponCodeDiscountAmount): void
    {
        $this->couponCodeDiscountAmount = $couponCodeDiscountAmount;
    }

    /**
     * @return int
     */
    public function getCouponCodeDiscountAmount(): ?int
    {
        return $this->couponCodeDiscountAmount;
    }

    /**
     * @param int $couponDiscountAmount
     */
    public function setCouponDiscountAmount(?int $couponDiscountAmount): void
    {
        $this->couponDiscountAmount = $couponDiscountAmount;
    }

    /**
     * @return int
     */
    public function getCouponDiscountAmount(): ?int
    {
        return $this->couponDiscountAmount;
    }

    /**
     * @param int $depositExpansionDiscountAmount
     */
    public function setDepositExpansionDiscountAmount(?int $depositExpansionDiscountAmount): void
    {
        $this->depositExpansionDiscountAmount = $depositExpansionDiscountAmount;
    }

    /**
     * @return int
     */
    public function getDepositExpansionDiscountAmount(): ?int
    {
        return $this->depositExpansionDiscountAmount;
    }

    /**
     * @param int $giftCardDiscountAmount
     */
    public function setGiftCardDiscountAmount(?int $giftCardDiscountAmount): void
    {
        $this->giftCardDiscountAmount = $giftCardDiscountAmount;
    }

    /**
     * @return int
     */
    public function getGiftCardDiscountAmount(): ?int
    {
        return $this->giftCardDiscountAmount;
    }

    /**
     * @param int $memberPointsDiscountAmount
     */
    public function setMemberPointsDiscountAmount(?int $memberPointsDiscountAmount): void
    {
        $this->memberPointsDiscountAmount = $memberPointsDiscountAmount;
    }

    /**
     * @return int
     */
    public function getMemberPointsDiscountAmount(): ?int
    {
        return $this->memberPointsDiscountAmount;
    }

    /**
     * @param int $membershipDiscountAmount
     */
    public function setMembershipDiscountAmount(?int $membershipDiscountAmount): void
    {
        $this->membershipDiscountAmount = $membershipDiscountAmount;
    }

    /**
     * @return int
     */
    public function getMembershipDiscountAmount(): ?int
    {
        return $this->membershipDiscountAmount;
    }

    /**
     * @param int $merchantDiscountAmount
     */
    public function setMerchantDiscountAmount(?int $merchantDiscountAmount): void
    {
        $this->merchantDiscountAmount = $merchantDiscountAmount;
    }

    /**
     * @return int
     */
    public function getMerchantDiscountAmount(): ?int
    {
        return $this->merchantDiscountAmount;
    }

    /**
     * @param int $nynjDiscountAmount
     */
    public function setNynjDiscountAmount(?int $nynjDiscountAmount): void
    {
        $this->nynjDiscountAmount = $nynjDiscountAmount;
    }

    /**
     * @return int
     */
    public function getNynjDiscountAmount(): ?int
    {
        return $this->nynjDiscountAmount;
    }

    /**
     * @param int $payDiscountAmount
     */
    public function setPayDiscountAmount(?int $payDiscountAmount): void
    {
        $this->payDiscountAmount = $payDiscountAmount;
    }

    /**
     * @return int
     */
    public function getPayDiscountAmount(): ?int
    {
        return $this->payDiscountAmount;
    }

    /**
     * @param int $promotionDiscountAmount
     */
    public function setPromotionDiscountAmount(?int $promotionDiscountAmount): void
    {
        $this->promotionDiscountAmount = $promotionDiscountAmount;
    }

    /**
     * @return int
     */
    public function getPromotionDiscountAmount(): ?int
    {
        return $this->promotionDiscountAmount;
    }

    /**
     * @param int $tieredPriceDiscountAmount
     */
    public function setTieredPriceDiscountAmount(?int $tieredPriceDiscountAmount): void
    {
        $this->tieredPriceDiscountAmount = $tieredPriceDiscountAmount;
    }

    /**
     * @return int
     */
    public function getTieredPriceDiscountAmount(): ?int
    {
        return $this->tieredPriceDiscountAmount;
    }

    /**
     * @param int $usedMemberPoints
     */
    public function setUsedMemberPoints(?int $usedMemberPoints): void
    {
        $this->usedMemberPoints = $usedMemberPoints;
    }

    /**
     * @return int
     */
    public function getUsedMemberPoints(): ?int
    {
        return $this->usedMemberPoints;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideOrderGetListDataCommonDiscountInfo implements \JsonSerializable
{
    /**
     * 活动id
     * @var int
     */
    private $activityId;

    /**
     * 优惠类型 (不再使用)
     * @var int
     */
    private $activityType;

    /**
     * 归属类型：1、优惠减免，2、优惠抵扣
     * @var int
     */
    private $attributionType;

    /**
     * 折扣金额
     * @var int
     */
    private $discountAmount;

    /**
     * 折扣类型：0商品，1运费，2订单 枚举  DiscountObjectType
     * @var int
     */
    private $discountObjectType;

    /**
     * 折扣类型
     * @var int
     */
    private $discountType;

    /**
     * 扩展信息 例如 优惠券额外信息、优惠码额外信息
     * @var string
     */
    private $extInfo;

    /**
     * 订单项id
     * @var int
     */
    private $itemId;

    /**
     * 名称（优惠券名称或者活动名称）
     * @var string
     */
    private $name;

    /**
     * 订单编号
     * @var int
     */
    private $orderNo;

    /**
     * 折扣外部编码
     * @var int
     */
    private $outCode;

    /**
     * 是否参与金额计算：默认参与金额计算：0，不参与金额计算，1，参与金额计算
     * @var int
     */
    private $participate;

    /**
     * 使用积分数
     * @var int
     */
    private $points;

    /**
     * @param int $activityId
     */
    public function setActivityId(?int $activityId): void
    {
        $this->activityId = $activityId;
    }

    /**
     * @return int
     */
    public function getActivityId(): ?int
    {
        return $this->activityId;
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
     * @param int $attributionType
     */
    public function setAttributionType(?int $attributionType): void
    {
        $this->attributionType = $attributionType;
    }

    /**
     * @return int
     */
    public function getAttributionType(): ?int
    {
        return $this->attributionType;
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
     * @param int $discountObjectType
     */
    public function setDiscountObjectType(?int $discountObjectType): void
    {
        $this->discountObjectType = $discountObjectType;
    }

    /**
     * @return int
     */
    public function getDiscountObjectType(): ?int
    {
        return $this->discountObjectType;
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
     * @param string $extInfo
     */
    public function setExtInfo(?string $extInfo): void
    {
        $this->extInfo = $extInfo;
    }

    /**
     * @return string
     */
    public function getExtInfo(): ?string
    {
        return $this->extInfo;
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
     * @param int $outCode
     */
    public function setOutCode(?int $outCode): void
    {
        $this->outCode = $outCode;
    }

    /**
     * @return int
     */
    public function getOutCode(): ?int
    {
        return $this->outCode;
    }

    /**
     * @param int $participate
     */
    public function setParticipate(?int $participate): void
    {
        $this->participate = $participate;
    }

    /**
     * @return int
     */
    public function getParticipate(): ?int
    {
        return $this->participate;
    }

    /**
     * @param int $points
     */
    public function setPoints(?int $points): void
    {
        $this->points = $points;
    }

    /**
     * @return int
     */
    public function getPoints(): ?int
    {
        return $this->points;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideOrderGetListDataPaymentInfo implements \JsonSerializable
{
    /**
     * 支付信息List
     * @var array
     */
    private $paymentItemVoList;

    /**
     * 支付时间
     * @var WeimobGuideOrderGetListDataPaymentTime2
     */
    private $paymentTime;

    /**
     * 商户订单号
     * @var int
     */
    private $channelTrxNo;

    /**
     * 支付单ID
     * @var int
     */
    private $paymentId;

    /**
     * 支付父单ID
     * @var int
     */
    private $paymentInfoId;

    /**
     * 支付方式
     * @var string
     */
    private $paymentMethodId;

    /**
     * 支付方式名称
     * @var string
     */
    private $paymentMethodName;

    /**
     * 支付状态
     * @var int
     */
    private $paymentStatus;

    /**
     * 支付类型
     * @var int
     */
    private $paymentType;

    /**
     * 支付类型名称
     * @var string
     */
    private $paymentTypeName;

    /**
     * 支付单号
     * @var int
     */
    private $tradeId;

    /**
     * @param array $paymentItemVoList
     */
    public function setPaymentItemVoList(?array $paymentItemVoList): void
    {
        $this->paymentItemVoList = $paymentItemVoList;
    }

    /**
     * @return array
     */
    public function getPaymentItemVoList(): ?array
    {
        return $this->paymentItemVoList;
    }

    /**
     * @param WeimobGuideOrderGetListDataPaymentTime2 $paymentTime
     */
    public function setPaymentTime(?WeimobGuideOrderGetListDataPaymentTime2 $paymentTime): void
    {
        $this->paymentTime = $paymentTime;
    }

    /**
     * @return WeimobGuideOrderGetListDataPaymentTime2
     */
    public function getPaymentTime(): ?WeimobGuideOrderGetListDataPaymentTime2
    {
        return $this->paymentTime;
    }

    /**
     * @param int $channelTrxNo
     */
    public function setChannelTrxNo(?int $channelTrxNo): void
    {
        $this->channelTrxNo = $channelTrxNo;
    }

    /**
     * @return int
     */
    public function getChannelTrxNo(): ?int
    {
        return $this->channelTrxNo;
    }

    /**
     * @param int $paymentId
     */
    public function setPaymentId(?int $paymentId): void
    {
        $this->paymentId = $paymentId;
    }

    /**
     * @return int
     */
    public function getPaymentId(): ?int
    {
        return $this->paymentId;
    }

    /**
     * @param int $paymentInfoId
     */
    public function setPaymentInfoId(?int $paymentInfoId): void
    {
        $this->paymentInfoId = $paymentInfoId;
    }

    /**
     * @return int
     */
    public function getPaymentInfoId(): ?int
    {
        return $this->paymentInfoId;
    }

    /**
     * @param string $paymentMethodId
     */
    public function setPaymentMethodId(?string $paymentMethodId): void
    {
        $this->paymentMethodId = $paymentMethodId;
    }

    /**
     * @return string
     */
    public function getPaymentMethodId(): ?string
    {
        return $this->paymentMethodId;
    }

    /**
     * @param string $paymentMethodName
     */
    public function setPaymentMethodName(?string $paymentMethodName): void
    {
        $this->paymentMethodName = $paymentMethodName;
    }

    /**
     * @return string
     */
    public function getPaymentMethodName(): ?string
    {
        return $this->paymentMethodName;
    }

    /**
     * @param int $paymentStatus
     */
    public function setPaymentStatus(?int $paymentStatus): void
    {
        $this->paymentStatus = $paymentStatus;
    }

    /**
     * @return int
     */
    public function getPaymentStatus(): ?int
    {
        return $this->paymentStatus;
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
     * @param string $paymentTypeName
     */
    public function setPaymentTypeName(?string $paymentTypeName): void
    {
        $this->paymentTypeName = $paymentTypeName;
    }

    /**
     * @return string
     */
    public function getPaymentTypeName(): ?string
    {
        return $this->paymentTypeName;
    }

    /**
     * @param int $tradeId
     */
    public function setTradeId(?int $tradeId): void
    {
        $this->tradeId = $tradeId;
    }

    /**
     * @return int
     */
    public function getTradeId(): ?int
    {
        return $this->tradeId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideOrderGetListDataPaymentItemVoList implements \JsonSerializable
{
    /**
     * 支付时间
     * @var WeimobGuideOrderGetListDataPaymentTime
     */
    private $paymentTime;

    /**
     * 找零
     * @var int
     */
    private $changeAmount;

    /**
     * 第三方支付单号
     * @var int
     */
    private $channelTrxNo;

    /**
     * 支付渠道 （支付项创建渠道）
     * @var int
     */
    private $channelType;

    /**
     * 自定义支付方式ID
     * @var int
     */
    private $customPayMethodId;

    /**
     * 自定义支付方式，名称
     * @var string
     */
    private $customPayMethodName;

    /**
     * 通道id
     * @var int
     */
    private $interactId;

    /**
     * 境外扩展信息
     * @var string
     */
    private $overseaInfo;

    /**
     * 支付模式
     * @var int
     */
    private $partnerMode;

    /**
     * 支付金额
     * @var int
     */
    private $paymentAmount;

    /**
     * 支付项ID
     * @var int
     */
    private $paymentId;

    /**
     * 支付方式
     * @var int
     */
    private $paymentMethodId;

    /**
     * 支付类型
     * @var int
     */
    private $paymentType;

    /**
     * 应结金额
     * @var int
     */
    private $settlementAmount;

    /**
     * 支付单号
     * @var int
     */
    private $tradeId;

    /**
     * @param WeimobGuideOrderGetListDataPaymentTime $paymentTime
     */
    public function setPaymentTime(?WeimobGuideOrderGetListDataPaymentTime $paymentTime): void
    {
        $this->paymentTime = $paymentTime;
    }

    /**
     * @return WeimobGuideOrderGetListDataPaymentTime
     */
    public function getPaymentTime(): ?WeimobGuideOrderGetListDataPaymentTime
    {
        return $this->paymentTime;
    }

    /**
     * @param int $changeAmount
     */
    public function setChangeAmount(?int $changeAmount): void
    {
        $this->changeAmount = $changeAmount;
    }

    /**
     * @return int
     */
    public function getChangeAmount(): ?int
    {
        return $this->changeAmount;
    }

    /**
     * @param int $channelTrxNo
     */
    public function setChannelTrxNo(?int $channelTrxNo): void
    {
        $this->channelTrxNo = $channelTrxNo;
    }

    /**
     * @return int
     */
    public function getChannelTrxNo(): ?int
    {
        return $this->channelTrxNo;
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
     * @param int $customPayMethodId
     */
    public function setCustomPayMethodId(?int $customPayMethodId): void
    {
        $this->customPayMethodId = $customPayMethodId;
    }

    /**
     * @return int
     */
    public function getCustomPayMethodId(): ?int
    {
        return $this->customPayMethodId;
    }

    /**
     * @param string $customPayMethodName
     */
    public function setCustomPayMethodName(?string $customPayMethodName): void
    {
        $this->customPayMethodName = $customPayMethodName;
    }

    /**
     * @return string
     */
    public function getCustomPayMethodName(): ?string
    {
        return $this->customPayMethodName;
    }

    /**
     * @param int $interactId
     */
    public function setInteractId(?int $interactId): void
    {
        $this->interactId = $interactId;
    }

    /**
     * @return int
     */
    public function getInteractId(): ?int
    {
        return $this->interactId;
    }

    /**
     * @param string $overseaInfo
     */
    public function setOverseaInfo(?string $overseaInfo): void
    {
        $this->overseaInfo = $overseaInfo;
    }

    /**
     * @return string
     */
    public function getOverseaInfo(): ?string
    {
        return $this->overseaInfo;
    }

    /**
     * @param int $partnerMode
     */
    public function setPartnerMode(?int $partnerMode): void
    {
        $this->partnerMode = $partnerMode;
    }

    /**
     * @return int
     */
    public function getPartnerMode(): ?int
    {
        return $this->partnerMode;
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
     * @param int $paymentId
     */
    public function setPaymentId(?int $paymentId): void
    {
        $this->paymentId = $paymentId;
    }

    /**
     * @return int
     */
    public function getPaymentId(): ?int
    {
        return $this->paymentId;
    }

    /**
     * @param int $paymentMethodId
     */
    public function setPaymentMethodId(?int $paymentMethodId): void
    {
        $this->paymentMethodId = $paymentMethodId;
    }

    /**
     * @return int
     */
    public function getPaymentMethodId(): ?int
    {
        return $this->paymentMethodId;
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
     * @param int $settlementAmount
     */
    public function setSettlementAmount(?int $settlementAmount): void
    {
        $this->settlementAmount = $settlementAmount;
    }

    /**
     * @return int
     */
    public function getSettlementAmount(): ?int
    {
        return $this->settlementAmount;
    }

    /**
     * @param int $tradeId
     */
    public function setTradeId(?int $tradeId): void
    {
        $this->tradeId = $tradeId;
    }

    /**
     * @return int
     */
    public function getTradeId(): ?int
    {
        return $this->tradeId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideOrderGetListDataPaymentTime implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideOrderGetListDataPaymentTime2 implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideOrderGetListDataUpdateTime implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

