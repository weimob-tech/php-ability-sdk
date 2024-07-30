<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,688
 * @author weimobcloud
 * @create 2024-7-29
 */
interface PaasWeimobShopWholesaleRecommendPromotionGetListService
{
    const specType = 'wos';

    public function invoke(WeimobShopWholesaleRecommendPromotionGetListRequest $request) : WeimobShopWholesaleRecommendPromotionGetListResponse;
}

class WeimobShopWholesaleRecommendPromotionGetListRequest implements \JsonSerializable
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
     * @var WeimobShopWholesaleRecommendPromotionGetListParam
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
     * @param WeimobShopWholesaleRecommendPromotionGetListParam $param
     */
    public function setParams(?WeimobShopWholesaleRecommendPromotionGetListParam $param): void
    {
        $this->params = $param;
    }

    /**
     * @return WeimobShopWholesaleRecommendPromotionGetListParam
     */
    public function getParams(): ?WeimobShopWholesaleRecommendPromotionGetListParam
    {
        return $this->params;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopWholesaleRecommendPromotionGetListParam implements \JsonSerializable
{
    /**
     * 查询商品活动信息列表
     * @var array
     */
    private $goodsQueryList;

    /**
     * 适用交易场景
1-线上  2-线下
     * @var int
     */
    private $tradeScene;

    /**
     * 适用业务场景 0-其他  1-商详  2-商品列表 3-商品投放 4-购物车 5-结算
     * @var int
     */
    private $bizScene;

    /**
     * 页面渠道
     * @var string
     */
    private $channelSource;

    /**
     * 是否计算入参门槛
     * @var bool
     */
    private $calcThreshold;

    /**
     * 是否平铺补齐sku信息
     * @var bool
     */
    private $tileSkuInfo;

    /**
     * 是否查询活动价
     * @var bool
     */
    private $queryPriceInfo;

    /**
     * 是否推荐活动
     * @var bool
     */
    private $recommendActivity;

    /**
     * wid
     * @var int
     */
    private $wid;

    /**
     * @param array $goodsQueryList
     */
    public function setGoodsQueryList(?array $goodsQueryList): void
    {
        $this->goodsQueryList = $goodsQueryList;
    }

    /**
     * @return array
     */
    public function getGoodsQueryList(): ?array
    {
        return $this->goodsQueryList;
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
     * @param int $bizScene
     */
    public function setBizScene(?int $bizScene): void
    {
        $this->bizScene = $bizScene;
    }

    /**
     * @return int
     */
    public function getBizScene(): ?int
    {
        return $this->bizScene;
    }

    /**
     * @param string $channelSource
     */
    public function setChannelSource(?string $channelSource): void
    {
        $this->channelSource = $channelSource;
    }

    /**
     * @return string
     */
    public function getChannelSource(): ?string
    {
        return $this->channelSource;
    }

    /**
     * @param bool $calcThreshold
     */
    public function setCalcThreshold(?bool $calcThreshold): void
    {
        $this->calcThreshold = $calcThreshold;
    }

    /**
     * @return bool
     */
    public function getCalcThreshold(): ?bool
    {
        return $this->calcThreshold;
    }

    /**
     * @param bool $tileSkuInfo
     */
    public function setTileSkuInfo(?bool $tileSkuInfo): void
    {
        $this->tileSkuInfo = $tileSkuInfo;
    }

    /**
     * @return bool
     */
    public function getTileSkuInfo(): ?bool
    {
        return $this->tileSkuInfo;
    }

    /**
     * @param bool $queryPriceInfo
     */
    public function setQueryPriceInfo(?bool $queryPriceInfo): void
    {
        $this->queryPriceInfo = $queryPriceInfo;
    }

    /**
     * @return bool
     */
    public function getQueryPriceInfo(): ?bool
    {
        return $this->queryPriceInfo;
    }

    /**
     * @param bool $recommendActivity
     */
    public function setRecommendActivity(?bool $recommendActivity): void
    {
        $this->recommendActivity = $recommendActivity;
    }

    /**
     * @return bool
     */
    public function getRecommendActivity(): ?bool
    {
        return $this->recommendActivity;
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

class WeimobShopWholesaleRecommendPromotionGetListParamGoodsQueryList implements \JsonSerializable
{
    /**
     * sku列表
     * @var array
     */
    private $skuList;

    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * 商品vid
     * @var int
     */
    private $vid;

    /**
     * 活动id
     * @var int
     */
    private $activityId;

    /**
     * @param array $skuList
     */
    public function setSkuList(?array $skuList): void
    {
        $this->skuList = $skuList;
    }

    /**
     * @return array
     */
    public function getSkuList(): ?array
    {
        return $this->skuList;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopWholesaleRecommendPromotionGetListParamSkuList implements \JsonSerializable
{
    /**
     * sku信息
     * @var int
     */
    private $skuId;

    /**
     * 购买件数
     * @var int
     */
    private $num;

    /**
     * 分组信息
     * @var string
     */
    private $groupId;

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
     * @param string $groupId
     */
    public function setGroupId(?string $groupId): void
    {
        $this->groupId = $groupId;
    }

    /**
     * @return string
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobShopWholesaleRecommendPromotionGetListResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobShopWholesaleRecommendPromotionGetListData
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
     * @return WeimobShopWholesaleRecommendPromotionGetListData
     */
    public function getData(): ?WeimobShopWholesaleRecommendPromotionGetListData
    {
        return $this->data;
    }

    /**
     * @param WeimobShopWholesaleRecommendPromotionGetListData $data
     */
    public function setData(?WeimobShopWholesaleRecommendPromotionGetListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopWholesaleRecommendPromotionGetListData implements \JsonSerializable
{
    /**
     * 活动列表
     * @var array
     */
    private $promotionInfoList;

    /**
     * 活动商品信息列表
     * @var array
     */
    private $goodsPromotionInfoList;

    /**
     * 业务参数配置列表
     * @var array
     */
    private $businessConfigList;

    /**
     * @param array $promotionInfoList
     */
    public function setPromotionInfoList(?array $promotionInfoList): void
    {
        $this->promotionInfoList = $promotionInfoList;
    }

    /**
     * @return array
     */
    public function getPromotionInfoList(): ?array
    {
        return $this->promotionInfoList;
    }

    /**
     * @param array $goodsPromotionInfoList
     */
    public function setGoodsPromotionInfoList(?array $goodsPromotionInfoList): void
    {
        $this->goodsPromotionInfoList = $goodsPromotionInfoList;
    }

    /**
     * @return array
     */
    public function getGoodsPromotionInfoList(): ?array
    {
        return $this->goodsPromotionInfoList;
    }

    /**
     * @param array $businessConfigList
     */
    public function setBusinessConfigList(?array $businessConfigList): void
    {
        $this->businessConfigList = $businessConfigList;
    }

    /**
     * @return array
     */
    public function getBusinessConfigList(): ?array
    {
        return $this->businessConfigList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopWholesaleRecommendPromotionGetListDataPromotionInfoList implements \JsonSerializable
{
    /**
     * 活动id
     * @var int
     */
    private $activityId;

    /**
     * 活动标题
     * @var string
     */
    private $activityTitle;

    /**
     * 活动状态  2-结束 3-删除 4-预热 5-进行中 6-未开始
     * @var int
     */
    private $status;

    /**
     * 活动开始时间
     * @var int
     */
    private $startTime;

    /**
     * 活动结束时间
     * @var int
     */
    private $endTime;

    /**
     * 活动时间类型 1-固定时间 2-周期时间 3-长期有效
     * @var int
     */
    private $timeType;

    /**
     * 活动标签
     * @var string
     */
    private $tagName;

    /**
     *  可用叠加
     * @var array
     */
    private $availablePromotion;

    /**
     * 可用抵扣 23-积分 24-余额 
     * @var array
     */
    private $availableDiscount;

    /**
     * 限购数量
     * @var int
     */
    private $limitNum;

    /**
     * 限购是否可原价购买
     * @var bool
     */
    private $canPurchaseOverCount;

    /**
     * 支付类型  1-线上 2-线下
     * @var array
     */
    private $payType;

    /**
     * 配送方式 1-商家配送 2-同城配送 3-到店自提 4-门店交易 5-无需物流  6-门店自助
     * @var array
     */
    private $deliveryType;

    /**
     * 是否限购
     * @var bool
     */
    private $limitStatus;

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
     * @param string $activityTitle
     */
    public function setActivityTitle(?string $activityTitle): void
    {
        $this->activityTitle = $activityTitle;
    }

    /**
     * @return string
     */
    public function getActivityTitle(): ?string
    {
        return $this->activityTitle;
    }

    /**
     * @param int $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $startTime
     */
    public function setStartTime(?int $startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * @return int
     */
    public function getStartTime(): ?int
    {
        return $this->startTime;
    }

    /**
     * @param int $endTime
     */
    public function setEndTime(?int $endTime): void
    {
        $this->endTime = $endTime;
    }

    /**
     * @return int
     */
    public function getEndTime(): ?int
    {
        return $this->endTime;
    }

    /**
     * @param int $timeType
     */
    public function setTimeType(?int $timeType): void
    {
        $this->timeType = $timeType;
    }

    /**
     * @return int
     */
    public function getTimeType(): ?int
    {
        return $this->timeType;
    }

    /**
     * @param string $tagName
     */
    public function setTagName(?string $tagName): void
    {
        $this->tagName = $tagName;
    }

    /**
     * @return string
     */
    public function getTagName(): ?string
    {
        return $this->tagName;
    }

    /**
     * @param array $availablePromotion
     */
    public function setAvailablePromotion(?array $availablePromotion): void
    {
        $this->availablePromotion = $availablePromotion;
    }

    /**
     * @return array
     */
    public function getAvailablePromotion(): ?array
    {
        return $this->availablePromotion;
    }

    /**
     * @param array $availableDiscount
     */
    public function setAvailableDiscount(?array $availableDiscount): void
    {
        $this->availableDiscount = $availableDiscount;
    }

    /**
     * @return array
     */
    public function getAvailableDiscount(): ?array
    {
        return $this->availableDiscount;
    }

    /**
     * @param int $limitNum
     */
    public function setLimitNum(?int $limitNum): void
    {
        $this->limitNum = $limitNum;
    }

    /**
     * @return int
     */
    public function getLimitNum(): ?int
    {
        return $this->limitNum;
    }

    /**
     * @param bool $canPurchaseOverCount
     */
    public function setCanPurchaseOverCount(?bool $canPurchaseOverCount): void
    {
        $this->canPurchaseOverCount = $canPurchaseOverCount;
    }

    /**
     * @return bool
     */
    public function getCanPurchaseOverCount(): ?bool
    {
        return $this->canPurchaseOverCount;
    }

    /**
     * @param array $payType
     */
    public function setPayType(?array $payType): void
    {
        $this->payType = $payType;
    }

    /**
     * @return array
     */
    public function getPayType(): ?array
    {
        return $this->payType;
    }

    /**
     * @param array $deliveryType
     */
    public function setDeliveryType(?array $deliveryType): void
    {
        $this->deliveryType = $deliveryType;
    }

    /**
     * @return array
     */
    public function getDeliveryType(): ?array
    {
        return $this->deliveryType;
    }

    /**
     * @param bool $limitStatus
     */
    public function setLimitStatus(?bool $limitStatus): void
    {
        $this->limitStatus = $limitStatus;
    }

    /**
     * @return bool
     */
    public function getLimitStatus(): ?bool
    {
        return $this->limitStatus;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopWholesaleRecommendPromotionGetListDataGoodsPromotionInfoList implements \JsonSerializable
{
    /**
     * 校验对象
     * @var WeimobShopWholesaleRecommendPromotionGetListDataCheckMarkDTO
     */
    private $checkMarkDTO;

    /**
     * sku列表
     * @var array
     */
    private $skuList;

    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * 活动id
     * @var int
     */
    private $activityId;

    /**
     * 商品vid
     * @var int
     */
    private $vid;

    /**
     * 最大活动价
     * @var string
     */
    private $maxActivityPrice;

    /**
     * 最小活动价
     * @var string
     */
    private $minActivityPrice;

    /**
     * 是否限购
     * @var bool
     */
    private $limitStatus;

    /**
     * 商品可购买数量
     * @var int
     */
    private $goodsCanBuyNum;

    /**
     * @param WeimobShopWholesaleRecommendPromotionGetListDataCheckMarkDTO $checkMarkDTO
     */
    public function setCheckMarkDTO(?WeimobShopWholesaleRecommendPromotionGetListDataCheckMarkDTO $checkMarkDTO): void
    {
        $this->checkMarkDTO = $checkMarkDTO;
    }

    /**
     * @return WeimobShopWholesaleRecommendPromotionGetListDataCheckMarkDTO
     */
    public function getCheckMarkDTO(): ?WeimobShopWholesaleRecommendPromotionGetListDataCheckMarkDTO
    {
        return $this->checkMarkDTO;
    }

    /**
     * @param array $skuList
     */
    public function setSkuList(?array $skuList): void
    {
        $this->skuList = $skuList;
    }

    /**
     * @return array
     */
    public function getSkuList(): ?array
    {
        return $this->skuList;
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
     * @param string $maxActivityPrice
     */
    public function setMaxActivityPrice(?string $maxActivityPrice): void
    {
        $this->maxActivityPrice = $maxActivityPrice;
    }

    /**
     * @return string
     */
    public function getMaxActivityPrice(): ?string
    {
        return $this->maxActivityPrice;
    }

    /**
     * @param string $minActivityPrice
     */
    public function setMinActivityPrice(?string $minActivityPrice): void
    {
        $this->minActivityPrice = $minActivityPrice;
    }

    /**
     * @return string
     */
    public function getMinActivityPrice(): ?string
    {
        return $this->minActivityPrice;
    }

    /**
     * @param bool $limitStatus
     */
    public function setLimitStatus(?bool $limitStatus): void
    {
        $this->limitStatus = $limitStatus;
    }

    /**
     * @return bool
     */
    public function getLimitStatus(): ?bool
    {
        return $this->limitStatus;
    }

    /**
     * @param int $goodsCanBuyNum
     */
    public function setGoodsCanBuyNum(?int $goodsCanBuyNum): void
    {
        $this->goodsCanBuyNum = $goodsCanBuyNum;
    }

    /**
     * @return int
     */
    public function getGoodsCanBuyNum(): ?int
    {
        return $this->goodsCanBuyNum;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopWholesaleRecommendPromotionGetListDataCheckMarkDTO implements \JsonSerializable
{
    /**
     * 校验标识
     * @var bool
     */
    private $isEffective;

    /**
     * 校验结果描述
     * @var string
     */
    private $effectiveDesc;

    /**
     * @param bool $isEffective
     */
    public function setIsEffective(?bool $isEffective): void
    {
        $this->isEffective = $isEffective;
    }

    /**
     * @return bool
     */
    public function getIsEffective(): ?bool
    {
        return $this->isEffective;
    }

    /**
     * @param string $effectiveDesc
     */
    public function setEffectiveDesc(?string $effectiveDesc): void
    {
        $this->effectiveDesc = $effectiveDesc;
    }

    /**
     * @return string
     */
    public function getEffectiveDesc(): ?string
    {
        return $this->effectiveDesc;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopWholesaleRecommendPromotionGetListDataSkuList implements \JsonSerializable
{
    /**
     * 规则信息
     * @var WeimobShopWholesaleRecommendPromotionGetListDataRuleInfo
     */
    private $ruleInfo;

    /**
     * 校验对象
     * @var WeimobShopWholesaleRecommendPromotionGetListDataCheckMarkDTO2
     */
    private $checkMarkDTO;

    /**
     * skuid
     * @var int
     */
    private $skuId;

    /**
     * 限购标识
     * @var bool
     */
    private $limitStatus;

    /**
     * sku可购买数
     * @var int
     */
    private $canBuyNum;

    /**
     * 分组标识
     * @var string
     */
    private $groupId;

    /**
     * @param WeimobShopWholesaleRecommendPromotionGetListDataRuleInfo $ruleInfo
     */
    public function setRuleInfo(?WeimobShopWholesaleRecommendPromotionGetListDataRuleInfo $ruleInfo): void
    {
        $this->ruleInfo = $ruleInfo;
    }

    /**
     * @return WeimobShopWholesaleRecommendPromotionGetListDataRuleInfo
     */
    public function getRuleInfo(): ?WeimobShopWholesaleRecommendPromotionGetListDataRuleInfo
    {
        return $this->ruleInfo;
    }

    /**
     * @param WeimobShopWholesaleRecommendPromotionGetListDataCheckMarkDTO2 $checkMarkDTO
     */
    public function setCheckMarkDTO(?WeimobShopWholesaleRecommendPromotionGetListDataCheckMarkDTO2 $checkMarkDTO): void
    {
        $this->checkMarkDTO = $checkMarkDTO;
    }

    /**
     * @return WeimobShopWholesaleRecommendPromotionGetListDataCheckMarkDTO2
     */
    public function getCheckMarkDTO(): ?WeimobShopWholesaleRecommendPromotionGetListDataCheckMarkDTO2
    {
        return $this->checkMarkDTO;
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
     * @param bool $limitStatus
     */
    public function setLimitStatus(?bool $limitStatus): void
    {
        $this->limitStatus = $limitStatus;
    }

    /**
     * @return bool
     */
    public function getLimitStatus(): ?bool
    {
        return $this->limitStatus;
    }

    /**
     * @param int $canBuyNum
     */
    public function setCanBuyNum(?int $canBuyNum): void
    {
        $this->canBuyNum = $canBuyNum;
    }

    /**
     * @return int
     */
    public function getCanBuyNum(): ?int
    {
        return $this->canBuyNum;
    }

    /**
     * @param string $groupId
     */
    public function setGroupId(?string $groupId): void
    {
        $this->groupId = $groupId;
    }

    /**
     * @return string
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopWholesaleRecommendPromotionGetListDataRuleInfo implements \JsonSerializable
{
    /**
     * sku活动价
     * @var string
     */
    private $activityPrice;

    /**
     * @param string $activityPrice
     */
    public function setActivityPrice(?string $activityPrice): void
    {
        $this->activityPrice = $activityPrice;
    }

    /**
     * @return string
     */
    public function getActivityPrice(): ?string
    {
        return $this->activityPrice;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopWholesaleRecommendPromotionGetListDataCheckMarkDTO2 implements \JsonSerializable
{
    /**
     * 校验标识
     * @var bool
     */
    private $isEffective;

    /**
     * 校验结果描述
     * @var string
     */
    private $effectiveDesc;

    /**
     * @param bool $isEffective
     */
    public function setIsEffective(?bool $isEffective): void
    {
        $this->isEffective = $isEffective;
    }

    /**
     * @return bool
     */
    public function getIsEffective(): ?bool
    {
        return $this->isEffective;
    }

    /**
     * @param string $effectiveDesc
     */
    public function setEffectiveDesc(?string $effectiveDesc): void
    {
        $this->effectiveDesc = $effectiveDesc;
    }

    /**
     * @return string
     */
    public function getEffectiveDesc(): ?string
    {
        return $this->effectiveDesc;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopWholesaleRecommendPromotionGetListDataBusinessConfigList implements \JsonSerializable
{
    /**
     * 是否可推荐
 0-不可推荐 1-可推荐
     * @var int
     */
    private $allowRecommend;

    /**
     * 是否可替换
0-不可替换 1-可替换
     * @var int
     */
    private $allowReplace;

    /**
     * @param int $allowRecommend
     */
    public function setAllowRecommend(?int $allowRecommend): void
    {
        $this->allowRecommend = $allowRecommend;
    }

    /**
     * @return int
     */
    public function getAllowRecommend(): ?int
    {
        return $this->allowRecommend;
    }

    /**
     * @param int $allowReplace
     */
    public function setAllowReplace(?int $allowReplace): void
    {
        $this->allowReplace = $allowReplace;
    }

    /**
     * @return int
     */
    public function getAllowReplace(): ?int
    {
        return $this->allowReplace;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

