<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 740
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobGuideGoodsGetService
{
    const specType = 'wos';

    public function invoke(WeimobGuideGoodsGetRequest $request) : WeimobGuideGoodsGetResponse;
}

class WeimobGuideGoodsGetRequest implements \JsonSerializable
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
     * @var WeimobGuideGoodsGetParam
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
     * @param WeimobGuideGoodsGetParam $param
     */
    public function setParam(?WeimobGuideGoodsGetParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobGuideGoodsGetParam
     */
    public function getParam(): ?WeimobGuideGoodsGetParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsGetParam implements \JsonSerializable
{
    /**
     * 商品信息查询开关
     * @var WeimobGuideGoodsGetParamFilterOption
     */
    private $filterOption;

    /**
     * 商品id list
     * @var array
     */
    private $goodsIdList;

    /**
     * 活动ID
     * @var int
     */
    private $activityId;

    /**
     * 活动类型
     * @var int
     */
    private $activityType;

    /**
     * @param WeimobGuideGoodsGetParamFilterOption $filterOption
     */
    public function setFilterOption(?WeimobGuideGoodsGetParamFilterOption $filterOption): void
    {
        $this->filterOption = $filterOption;
    }

    /**
     * @return WeimobGuideGoodsGetParamFilterOption
     */
    public function getFilterOption(): ?WeimobGuideGoodsGetParamFilterOption
    {
        return $this->filterOption;
    }

    /**
     * @param array $goodsIdList
     */
    public function setGoodsIdList(?array $goodsIdList): void
    {
        $this->goodsIdList = $goodsIdList;
    }

    /**
     * @return array
     */
    public function getGoodsIdList(): ?array
    {
        return $this->goodsIdList;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsGetParamFilterOption implements \JsonSerializable
{
    /**
     * 是否查询商品标签
     * @var bool
     */
    private $isQueryTagInfo;

    /**
     * 是否查询商品分组
     * @var bool
     */
    private $isQueryClassifyInfo;

    /**
     * 是否查询商品销量
     * @var bool
     */
    private $isQuerySaleInfo;

    /**
     * 是否查询商品属性
     * @var bool
     */
    private $isQueryPropertyInfo;

    /**
     * 是否查询商品类目
     * @var bool
     */
    private $isQueryCategoryInfo;

    /**
     * 是否查询商品品牌信息
     * @var bool
     */
    private $isQueryBrandInfo;

    /**
     * 是否过滤掉已删除的商品
     * @var bool
     */
    private $isFilterDeleted;

    /**
     * 是否查询库存信息
     * @var bool
     */
    private $isQueryGoodsStockInfo;

    /**
     * 是否查询价格信息B端场景接口不会查询活动价格
     * @var bool
     */
    private $isQueryGoodsPriceInfo;

    /**
     * 是否查询SKU信息
     * @var bool
     */
    private $isQuerySkuInfo;

    /**
     * 是否查询活动信息 会根据B端或者C端接口直接查询对应场景活动信息
     * @var bool
     */
    private $isQueryActivityInfo;

    /**
     * 是否查询商品活动信息
     * @var bool
     */
    private $isQueryActivity;

    /**
     * 是否查询商品活动价
     * @var bool
     */
    private $isQueryActivityPrice;

    /**
     * 是否生成商品链接
     * @var bool
     */
    private $generateLinkFlag;

    /**
     * 是否查询后台sku
     * @var bool
     */
    private $isQueryItemSkuInfo;

    /**
     * 是否查询会员信息 - 标签+会员价
     * @var bool
     */
    private $isQueryMember;

    /**
     * @param bool $isQueryTagInfo
     */
    public function setIsQueryTagInfo(?bool $isQueryTagInfo): void
    {
        $this->isQueryTagInfo = $isQueryTagInfo;
    }

    /**
     * @return bool
     */
    public function getIsQueryTagInfo(): ?bool
    {
        return $this->isQueryTagInfo;
    }

    /**
     * @param bool $isQueryClassifyInfo
     */
    public function setIsQueryClassifyInfo(?bool $isQueryClassifyInfo): void
    {
        $this->isQueryClassifyInfo = $isQueryClassifyInfo;
    }

    /**
     * @return bool
     */
    public function getIsQueryClassifyInfo(): ?bool
    {
        return $this->isQueryClassifyInfo;
    }

    /**
     * @param bool $isQuerySaleInfo
     */
    public function setIsQuerySaleInfo(?bool $isQuerySaleInfo): void
    {
        $this->isQuerySaleInfo = $isQuerySaleInfo;
    }

    /**
     * @return bool
     */
    public function getIsQuerySaleInfo(): ?bool
    {
        return $this->isQuerySaleInfo;
    }

    /**
     * @param bool $isQueryPropertyInfo
     */
    public function setIsQueryPropertyInfo(?bool $isQueryPropertyInfo): void
    {
        $this->isQueryPropertyInfo = $isQueryPropertyInfo;
    }

    /**
     * @return bool
     */
    public function getIsQueryPropertyInfo(): ?bool
    {
        return $this->isQueryPropertyInfo;
    }

    /**
     * @param bool $isQueryCategoryInfo
     */
    public function setIsQueryCategoryInfo(?bool $isQueryCategoryInfo): void
    {
        $this->isQueryCategoryInfo = $isQueryCategoryInfo;
    }

    /**
     * @return bool
     */
    public function getIsQueryCategoryInfo(): ?bool
    {
        return $this->isQueryCategoryInfo;
    }

    /**
     * @param bool $isQueryBrandInfo
     */
    public function setIsQueryBrandInfo(?bool $isQueryBrandInfo): void
    {
        $this->isQueryBrandInfo = $isQueryBrandInfo;
    }

    /**
     * @return bool
     */
    public function getIsQueryBrandInfo(): ?bool
    {
        return $this->isQueryBrandInfo;
    }

    /**
     * @param bool $isFilterDeleted
     */
    public function setIsFilterDeleted(?bool $isFilterDeleted): void
    {
        $this->isFilterDeleted = $isFilterDeleted;
    }

    /**
     * @return bool
     */
    public function getIsFilterDeleted(): ?bool
    {
        return $this->isFilterDeleted;
    }

    /**
     * @param bool $isQueryGoodsStockInfo
     */
    public function setIsQueryGoodsStockInfo(?bool $isQueryGoodsStockInfo): void
    {
        $this->isQueryGoodsStockInfo = $isQueryGoodsStockInfo;
    }

    /**
     * @return bool
     */
    public function getIsQueryGoodsStockInfo(): ?bool
    {
        return $this->isQueryGoodsStockInfo;
    }

    /**
     * @param bool $isQueryGoodsPriceInfo
     */
    public function setIsQueryGoodsPriceInfo(?bool $isQueryGoodsPriceInfo): void
    {
        $this->isQueryGoodsPriceInfo = $isQueryGoodsPriceInfo;
    }

    /**
     * @return bool
     */
    public function getIsQueryGoodsPriceInfo(): ?bool
    {
        return $this->isQueryGoodsPriceInfo;
    }

    /**
     * @param bool $isQuerySkuInfo
     */
    public function setIsQuerySkuInfo(?bool $isQuerySkuInfo): void
    {
        $this->isQuerySkuInfo = $isQuerySkuInfo;
    }

    /**
     * @return bool
     */
    public function getIsQuerySkuInfo(): ?bool
    {
        return $this->isQuerySkuInfo;
    }

    /**
     * @param bool $isQueryActivityInfo
     */
    public function setIsQueryActivityInfo(?bool $isQueryActivityInfo): void
    {
        $this->isQueryActivityInfo = $isQueryActivityInfo;
    }

    /**
     * @return bool
     */
    public function getIsQueryActivityInfo(): ?bool
    {
        return $this->isQueryActivityInfo;
    }

    /**
     * @param bool $isQueryActivity
     */
    public function setIsQueryActivity(?bool $isQueryActivity): void
    {
        $this->isQueryActivity = $isQueryActivity;
    }

    /**
     * @return bool
     */
    public function getIsQueryActivity(): ?bool
    {
        return $this->isQueryActivity;
    }

    /**
     * @param bool $isQueryActivityPrice
     */
    public function setIsQueryActivityPrice(?bool $isQueryActivityPrice): void
    {
        $this->isQueryActivityPrice = $isQueryActivityPrice;
    }

    /**
     * @return bool
     */
    public function getIsQueryActivityPrice(): ?bool
    {
        return $this->isQueryActivityPrice;
    }

    /**
     * @param bool $generateLinkFlag
     */
    public function setGenerateLinkFlag(?bool $generateLinkFlag): void
    {
        $this->generateLinkFlag = $generateLinkFlag;
    }

    /**
     * @return bool
     */
    public function getGenerateLinkFlag(): ?bool
    {
        return $this->generateLinkFlag;
    }

    /**
     * @param bool $isQueryItemSkuInfo
     */
    public function setIsQueryItemSkuInfo(?bool $isQueryItemSkuInfo): void
    {
        $this->isQueryItemSkuInfo = $isQueryItemSkuInfo;
    }

    /**
     * @return bool
     */
    public function getIsQueryItemSkuInfo(): ?bool
    {
        return $this->isQueryItemSkuInfo;
    }

    /**
     * @param bool $isQueryMember
     */
    public function setIsQueryMember(?bool $isQueryMember): void
    {
        $this->isQueryMember = $isQueryMember;
    }

    /**
     * @return bool
     */
    public function getIsQueryMember(): ?bool
    {
        return $this->isQueryMember;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideGoodsGetResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobGuideGoodsGetData
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
     * @return WeimobGuideGoodsGetData
     */
    public function getData(): ?WeimobGuideGoodsGetData
    {
        return $this->data;
    }

    /**
     * @param WeimobGuideGoodsGetData $data
     */
    public function setData(?WeimobGuideGoodsGetData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsGetData implements \JsonSerializable
{
    /**
     * 商品信息
     * @var WeimobGuideGoodsGetDataGoodsStock
     */
    private $goodsStock;

    /**
     * 限购信息
     * @var WeimobGuideGoodsGetDataGoodsLimit
     */
    private $goodsLimit;

    /**
     * 预售信息
     * @var WeimobGuideGoodsGetDataPreSellGoods
     */
    private $preSellGoods;

    /**
     * 商品规格信息
     * @var array
     */
    private $skuSpecList;

    /**
     * 商品标签
     * @var WeimobGuideGoodsGetDataGoodsTag
     */
    private $goodsTag;

    /**
     * sku信息
     * @var array
     */
    private $skuList;

    /**
     * 门店ID
     * @var int
     */
    private $vid;

    /**
     * 创建门店ID
     * @var int
     */
    private $createVid;

    /**
     * 商品子类型
     * @var int
     */
    private $subGoodsType;

    /**
     * SPU编码
     * @var string
     */
    private $outerGoodsCode;

    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * sku名称
     * @var string
     */
    private $title;

    /**
     * 商品副标题
     * @var string
     */
    private $subTitle;

    /**
     * 销售模式：现货:1, 预售: 2, 抽签购 3
     * @var int
     */
    private $soldType;

    /**
     * 真实销量
     * @var int
     */
    private $realSaleNum;

    /**
     * 默认图片，第一张商品图片
     * @var string
     */
    private $defaultImageUrl;

    /**
     * 销售渠道类型：线上: 1, 线下: 2, 线上+线下: 3
     * @var int
     */
    private $saleChannelType;

    /**
     * 是否可售
     * @var bool
     */
    private $isCanSell;

    /**
     * 上下架
     * @var bool
     */
    private $isOnline;

    /**
     * 排序
     * @var int
     */
    private $sort;

    /**
     * 是否删除
     * @var bool
     */
    private $isDeleted;

    /**
     * 来源: 1新云 2分销市场
     * @var int
     */
    private $source;

    /**
     * 商品图片
     * @var array
     */
    private $goodsImageUrl;

    /**
     * 商品视频url
     * @var string
     */
    private $goodsVideoUrl;

    /**
     * 商品视频主图url
     * @var string
     */
    private $goodsVideoImageUrl;

    /**
     * 商品文描
     * @var string
     */
    private $goodsDesc;

    /**
     * 分销商品id
     * @var int
     */
    private $outerGoodsId;

    /**
     * 库存减扣方式：下单减扣: 1, 支付减扣: 2
     * @var int
     */
    private $deductStockType;

    /**
     * 类目ID
     * @var int
     */
    private $categoryId;

    /**
     * 是否限购
     * @var bool
     */
    private $limitSwitch;

    /**
     * 商品是否隐藏 0非隐藏 1隐藏
     * @var int
     */
    private $goodsShowType;

    /**
     * @param WeimobGuideGoodsGetDataGoodsStock $goodsStock
     */
    public function setGoodsStock(?WeimobGuideGoodsGetDataGoodsStock $goodsStock): void
    {
        $this->goodsStock = $goodsStock;
    }

    /**
     * @return WeimobGuideGoodsGetDataGoodsStock
     */
    public function getGoodsStock(): ?WeimobGuideGoodsGetDataGoodsStock
    {
        return $this->goodsStock;
    }

    /**
     * @param WeimobGuideGoodsGetDataGoodsLimit $goodsLimit
     */
    public function setGoodsLimit(?WeimobGuideGoodsGetDataGoodsLimit $goodsLimit): void
    {
        $this->goodsLimit = $goodsLimit;
    }

    /**
     * @return WeimobGuideGoodsGetDataGoodsLimit
     */
    public function getGoodsLimit(): ?WeimobGuideGoodsGetDataGoodsLimit
    {
        return $this->goodsLimit;
    }

    /**
     * @param WeimobGuideGoodsGetDataPreSellGoods $preSellGoods
     */
    public function setPreSellGoods(?WeimobGuideGoodsGetDataPreSellGoods $preSellGoods): void
    {
        $this->preSellGoods = $preSellGoods;
    }

    /**
     * @return WeimobGuideGoodsGetDataPreSellGoods
     */
    public function getPreSellGoods(): ?WeimobGuideGoodsGetDataPreSellGoods
    {
        return $this->preSellGoods;
    }

    /**
     * @param array $skuSpecList
     */
    public function setSkuSpecList(?array $skuSpecList): void
    {
        $this->skuSpecList = $skuSpecList;
    }

    /**
     * @return array
     */
    public function getSkuSpecList(): ?array
    {
        return $this->skuSpecList;
    }

    /**
     * @param WeimobGuideGoodsGetDataGoodsTag $goodsTag
     */
    public function setGoodsTag(?WeimobGuideGoodsGetDataGoodsTag $goodsTag): void
    {
        $this->goodsTag = $goodsTag;
    }

    /**
     * @return WeimobGuideGoodsGetDataGoodsTag
     */
    public function getGoodsTag(): ?WeimobGuideGoodsGetDataGoodsTag
    {
        return $this->goodsTag;
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
     * @param int $createVid
     */
    public function setCreateVid(?int $createVid): void
    {
        $this->createVid = $createVid;
    }

    /**
     * @return int
     */
    public function getCreateVid(): ?int
    {
        return $this->createVid;
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
     * @param string $outerGoodsCode
     */
    public function setOuterGoodsCode(?string $outerGoodsCode): void
    {
        $this->outerGoodsCode = $outerGoodsCode;
    }

    /**
     * @return string
     */
    public function getOuterGoodsCode(): ?string
    {
        return $this->outerGoodsCode;
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
     * @param string $subTitle
     */
    public function setSubTitle(?string $subTitle): void
    {
        $this->subTitle = $subTitle;
    }

    /**
     * @return string
     */
    public function getSubTitle(): ?string
    {
        return $this->subTitle;
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
     * @param int $realSaleNum
     */
    public function setRealSaleNum(?int $realSaleNum): void
    {
        $this->realSaleNum = $realSaleNum;
    }

    /**
     * @return int
     */
    public function getRealSaleNum(): ?int
    {
        return $this->realSaleNum;
    }

    /**
     * @param string $defaultImageUrl
     */
    public function setDefaultImageUrl(?string $defaultImageUrl): void
    {
        $this->defaultImageUrl = $defaultImageUrl;
    }

    /**
     * @return string
     */
    public function getDefaultImageUrl(): ?string
    {
        return $this->defaultImageUrl;
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
     * @param bool $isCanSell
     */
    public function setIsCanSell(?bool $isCanSell): void
    {
        $this->isCanSell = $isCanSell;
    }

    /**
     * @return bool
     */
    public function getIsCanSell(): ?bool
    {
        return $this->isCanSell;
    }

    /**
     * @param bool $isOnline
     */
    public function setIsOnline(?bool $isOnline): void
    {
        $this->isOnline = $isOnline;
    }

    /**
     * @return bool
     */
    public function getIsOnline(): ?bool
    {
        return $this->isOnline;
    }

    /**
     * @param int $sort
     */
    public function setSort(?int $sort): void
    {
        $this->sort = $sort;
    }

    /**
     * @return int
     */
    public function getSort(): ?int
    {
        return $this->sort;
    }

    /**
     * @param bool $isDeleted
     */
    public function setIsDeleted(?bool $isDeleted): void
    {
        $this->isDeleted = $isDeleted;
    }

    /**
     * @return bool
     */
    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
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
     * @param array $goodsImageUrl
     */
    public function setGoodsImageUrl(?array $goodsImageUrl): void
    {
        $this->goodsImageUrl = $goodsImageUrl;
    }

    /**
     * @return array
     */
    public function getGoodsImageUrl(): ?array
    {
        return $this->goodsImageUrl;
    }

    /**
     * @param string $goodsVideoUrl
     */
    public function setGoodsVideoUrl(?string $goodsVideoUrl): void
    {
        $this->goodsVideoUrl = $goodsVideoUrl;
    }

    /**
     * @return string
     */
    public function getGoodsVideoUrl(): ?string
    {
        return $this->goodsVideoUrl;
    }

    /**
     * @param string $goodsVideoImageUrl
     */
    public function setGoodsVideoImageUrl(?string $goodsVideoImageUrl): void
    {
        $this->goodsVideoImageUrl = $goodsVideoImageUrl;
    }

    /**
     * @return string
     */
    public function getGoodsVideoImageUrl(): ?string
    {
        return $this->goodsVideoImageUrl;
    }

    /**
     * @param string $goodsDesc
     */
    public function setGoodsDesc(?string $goodsDesc): void
    {
        $this->goodsDesc = $goodsDesc;
    }

    /**
     * @return string
     */
    public function getGoodsDesc(): ?string
    {
        return $this->goodsDesc;
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
     * @param int $categoryId
     */
    public function setCategoryId(?int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return int
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    /**
     * @param bool $limitSwitch
     */
    public function setLimitSwitch(?bool $limitSwitch): void
    {
        $this->limitSwitch = $limitSwitch;
    }

    /**
     * @return bool
     */
    public function getLimitSwitch(): ?bool
    {
        return $this->limitSwitch;
    }

    /**
     * @param int $goodsShowType
     */
    public function setGoodsShowType(?int $goodsShowType): void
    {
        $this->goodsShowType = $goodsShowType;
    }

    /**
     * @return int
     */
    public function getGoodsShowType(): ?int
    {
        return $this->goodsShowType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsGetDataGoodsStock implements \JsonSerializable
{
    /**
     * 商品信息
     * @var array
     */
    private $stock;

    /**
     * 是否存在空库存
     * @var bool
     */
    private $existNullStock;

    /**
     * 是否全部sku库存为空
     * @var bool
     */
    private $isAllStockEmpty;

    /**
     * 商品可售库存(全部SKU库存之和)
     * @var int
     */
    private $goodsStockNum;

    /**
     * 预售的商品库存数量
     * @var int
     */
    private $preGoodsStockNum;

    /**
     * @param array $stock
     */
    public function setStock(?array $stock): void
    {
        $this->stock = $stock;
    }

    /**
     * @return array
     */
    public function getStock(): ?array
    {
        return $this->stock;
    }

    /**
     * @param bool $existNullStock
     */
    public function setExistNullStock(?bool $existNullStock): void
    {
        $this->existNullStock = $existNullStock;
    }

    /**
     * @return bool
     */
    public function getExistNullStock(): ?bool
    {
        return $this->existNullStock;
    }

    /**
     * @param bool $isAllStockEmpty
     */
    public function setIsAllStockEmpty(?bool $isAllStockEmpty): void
    {
        $this->isAllStockEmpty = $isAllStockEmpty;
    }

    /**
     * @return bool
     */
    public function getIsAllStockEmpty(): ?bool
    {
        return $this->isAllStockEmpty;
    }

    /**
     * @param int $goodsStockNum
     */
    public function setGoodsStockNum(?int $goodsStockNum): void
    {
        $this->goodsStockNum = $goodsStockNum;
    }

    /**
     * @return int
     */
    public function getGoodsStockNum(): ?int
    {
        return $this->goodsStockNum;
    }

    /**
     * @param int $preGoodsStockNum
     */
    public function setPreGoodsStockNum(?int $preGoodsStockNum): void
    {
        $this->preGoodsStockNum = $preGoodsStockNum;
    }

    /**
     * @return int
     */
    public function getPreGoodsStockNum(): ?int
    {
        return $this->preGoodsStockNum;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsGetDataStock implements \JsonSerializable
{
    /**
     * 1
     * @var int
     */
    private $channelType;

    /**
     * 1
     * @var bool
     */
    private $existNullStock;

    /**
     * 1
     * @var bool
     */
    private $isAllStockEmpty;

    /**
     * 1
     * @var int
     */
    private $goodsStockNum;

    /**
     * 1
     * @var int
     */
    private $frozenQuantity;

    /**
     * 1
     * @var int
     */
    private $allowOversoldQuantity;

    /**
     * 1
     * @var int
     */
    private $alreadySellQuantity;

    /**
     * 1
     * @var int
     */
    private $preGoodsStockNum;

    /**
     * 1
     * @var int
     */
    private $preFrozenQuantity;

    /**
     * 1
     * @var int
     */
    private $preAlreadySellQuantity;

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
     * @param bool $existNullStock
     */
    public function setExistNullStock(?bool $existNullStock): void
    {
        $this->existNullStock = $existNullStock;
    }

    /**
     * @return bool
     */
    public function getExistNullStock(): ?bool
    {
        return $this->existNullStock;
    }

    /**
     * @param bool $isAllStockEmpty
     */
    public function setIsAllStockEmpty(?bool $isAllStockEmpty): void
    {
        $this->isAllStockEmpty = $isAllStockEmpty;
    }

    /**
     * @return bool
     */
    public function getIsAllStockEmpty(): ?bool
    {
        return $this->isAllStockEmpty;
    }

    /**
     * @param int $goodsStockNum
     */
    public function setGoodsStockNum(?int $goodsStockNum): void
    {
        $this->goodsStockNum = $goodsStockNum;
    }

    /**
     * @return int
     */
    public function getGoodsStockNum(): ?int
    {
        return $this->goodsStockNum;
    }

    /**
     * @param int $frozenQuantity
     */
    public function setFrozenQuantity(?int $frozenQuantity): void
    {
        $this->frozenQuantity = $frozenQuantity;
    }

    /**
     * @return int
     */
    public function getFrozenQuantity(): ?int
    {
        return $this->frozenQuantity;
    }

    /**
     * @param int $allowOversoldQuantity
     */
    public function setAllowOversoldQuantity(?int $allowOversoldQuantity): void
    {
        $this->allowOversoldQuantity = $allowOversoldQuantity;
    }

    /**
     * @return int
     */
    public function getAllowOversoldQuantity(): ?int
    {
        return $this->allowOversoldQuantity;
    }

    /**
     * @param int $alreadySellQuantity
     */
    public function setAlreadySellQuantity(?int $alreadySellQuantity): void
    {
        $this->alreadySellQuantity = $alreadySellQuantity;
    }

    /**
     * @return int
     */
    public function getAlreadySellQuantity(): ?int
    {
        return $this->alreadySellQuantity;
    }

    /**
     * @param int $preGoodsStockNum
     */
    public function setPreGoodsStockNum(?int $preGoodsStockNum): void
    {
        $this->preGoodsStockNum = $preGoodsStockNum;
    }

    /**
     * @return int
     */
    public function getPreGoodsStockNum(): ?int
    {
        return $this->preGoodsStockNum;
    }

    /**
     * @param int $preFrozenQuantity
     */
    public function setPreFrozenQuantity(?int $preFrozenQuantity): void
    {
        $this->preFrozenQuantity = $preFrozenQuantity;
    }

    /**
     * @return int
     */
    public function getPreFrozenQuantity(): ?int
    {
        return $this->preFrozenQuantity;
    }

    /**
     * @param int $preAlreadySellQuantity
     */
    public function setPreAlreadySellQuantity(?int $preAlreadySellQuantity): void
    {
        $this->preAlreadySellQuantity = $preAlreadySellQuantity;
    }

    /**
     * @return int
     */
    public function getPreAlreadySellQuantity(): ?int
    {
        return $this->preAlreadySellQuantity;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsGetDataGoodsLimit implements \JsonSerializable
{
    /**
     * 商品限购件数
     * @var int
     */
    private $goodsLimitNum;

    /**
     * 限购周期 0～4 终身/每天/每周/每月/每年
     * @var int
     */
    private $goodsLimitCycle;

    /**
     * @param int $goodsLimitNum
     */
    public function setGoodsLimitNum(?int $goodsLimitNum): void
    {
        $this->goodsLimitNum = $goodsLimitNum;
    }

    /**
     * @return int
     */
    public function getGoodsLimitNum(): ?int
    {
        return $this->goodsLimitNum;
    }

    /**
     * @param int $goodsLimitCycle
     */
    public function setGoodsLimitCycle(?int $goodsLimitCycle): void
    {
        $this->goodsLimitCycle = $goodsLimitCycle;
    }

    /**
     * @return int
     */
    public function getGoodsLimitCycle(): ?int
    {
        return $this->goodsLimitCycle;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsGetDataPreSellGoods implements \JsonSerializable
{
    /**
     * 尾款支付信息，记录尾款支付时间
     * @var WeimobGuideGoodsGetDataFinalPaymentInfo
     */
    private $finalPaymentInfo;

    /**
     * 预售配送信息
     * @var WeimobGuideGoodsGetDataDeliveryInfo
     */
    private $deliveryInfo;

    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * 预售方式 1:全款预售，2:固定比列，3:指定价格
     * @var int
     */
    private $depositPayType;

    /**
     * 定金 定比例记录为比例，固定价格为指定价格
     * @var int
     */
    private $deposit;

    /**
     * 定金去零钱类型 0:不去分和角 1:去除分 2:去除分和角
     * @var int
     */
    private $ignoreChangeType;

    /**
     * 预售时间类型 1：长期有效，2：指定时间段
     * @var int
     */
    private $presellTimeType;

    /**
     * 预售开始时间
     * @var int
     */
    private $startPresellTime;

    /**
     * 预售结束时间
     * @var int
     */
    private $endPresellTime;

    /**
     * 预售结束时间节点后处理方式 1：现货销售 2：下架
     * @var int
     */
    private $expireProcessType;

    /**
     * 预售商品绑定仓库类型 0：按门店关联仓库优先级，1：商家总仓，2：门店独立仓，3：外部仓
     * @var int
     */
    private $selectWarehouseType;

    /**
     * 预售商品绑定仓库id
     * @var int
     */
    private $warehouseId;

    /**
     * 预售商品绑定仓库name
     * @var string
     */
    private $warehouseName;

    /**
     * 预售数量设置 0-门店自定义  1-商家统一
     * @var int
     */
    private $goodsLimitRule;

    /**
     * @param WeimobGuideGoodsGetDataFinalPaymentInfo $finalPaymentInfo
     */
    public function setFinalPaymentInfo(?WeimobGuideGoodsGetDataFinalPaymentInfo $finalPaymentInfo): void
    {
        $this->finalPaymentInfo = $finalPaymentInfo;
    }

    /**
     * @return WeimobGuideGoodsGetDataFinalPaymentInfo
     */
    public function getFinalPaymentInfo(): ?WeimobGuideGoodsGetDataFinalPaymentInfo
    {
        return $this->finalPaymentInfo;
    }

    /**
     * @param WeimobGuideGoodsGetDataDeliveryInfo $deliveryInfo
     */
    public function setDeliveryInfo(?WeimobGuideGoodsGetDataDeliveryInfo $deliveryInfo): void
    {
        $this->deliveryInfo = $deliveryInfo;
    }

    /**
     * @return WeimobGuideGoodsGetDataDeliveryInfo
     */
    public function getDeliveryInfo(): ?WeimobGuideGoodsGetDataDeliveryInfo
    {
        return $this->deliveryInfo;
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
     * @param int $depositPayType
     */
    public function setDepositPayType(?int $depositPayType): void
    {
        $this->depositPayType = $depositPayType;
    }

    /**
     * @return int
     */
    public function getDepositPayType(): ?int
    {
        return $this->depositPayType;
    }

    /**
     * @param int $deposit
     */
    public function setDeposit(?int $deposit): void
    {
        $this->deposit = $deposit;
    }

    /**
     * @return int
     */
    public function getDeposit(): ?int
    {
        return $this->deposit;
    }

    /**
     * @param int $ignoreChangeType
     */
    public function setIgnoreChangeType(?int $ignoreChangeType): void
    {
        $this->ignoreChangeType = $ignoreChangeType;
    }

    /**
     * @return int
     */
    public function getIgnoreChangeType(): ?int
    {
        return $this->ignoreChangeType;
    }

    /**
     * @param int $presellTimeType
     */
    public function setPresellTimeType(?int $presellTimeType): void
    {
        $this->presellTimeType = $presellTimeType;
    }

    /**
     * @return int
     */
    public function getPresellTimeType(): ?int
    {
        return $this->presellTimeType;
    }

    /**
     * @param int $startPresellTime
     */
    public function setStartPresellTime(?int $startPresellTime): void
    {
        $this->startPresellTime = $startPresellTime;
    }

    /**
     * @return int
     */
    public function getStartPresellTime(): ?int
    {
        return $this->startPresellTime;
    }

    /**
     * @param int $endPresellTime
     */
    public function setEndPresellTime(?int $endPresellTime): void
    {
        $this->endPresellTime = $endPresellTime;
    }

    /**
     * @return int
     */
    public function getEndPresellTime(): ?int
    {
        return $this->endPresellTime;
    }

    /**
     * @param int $expireProcessType
     */
    public function setExpireProcessType(?int $expireProcessType): void
    {
        $this->expireProcessType = $expireProcessType;
    }

    /**
     * @return int
     */
    public function getExpireProcessType(): ?int
    {
        return $this->expireProcessType;
    }

    /**
     * @param int $selectWarehouseType
     */
    public function setSelectWarehouseType(?int $selectWarehouseType): void
    {
        $this->selectWarehouseType = $selectWarehouseType;
    }

    /**
     * @return int
     */
    public function getSelectWarehouseType(): ?int
    {
        return $this->selectWarehouseType;
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

    /**
     * @param int $goodsLimitRule
     */
    public function setGoodsLimitRule(?int $goodsLimitRule): void
    {
        $this->goodsLimitRule = $goodsLimitRule;
    }

    /**
     * @return int
     */
    public function getGoodsLimitRule(): ?int
    {
        return $this->goodsLimitRule;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsGetDataFinalPaymentInfo implements \JsonSerializable
{
    /**
     * 尾款支付类型:1.支付定金后多少小时2.指定时间
     * @var int
     */
    private $finalPaymentType;

    /**
     * 尾款支付开始时间,finalPaymentType=2生效
     * @var int
     */
    private $startFinalPayTime;

    /**
     * 尾款支付截止时间,finalPaymentType=2生效
     * @var int
     */
    private $endFinalPayTime;

    /**
     * 支付定金后多少天开始支付,finalPaymentType=1时生效
     * @var int
     */
    private $afterDepositStartFinalDay;

    /**
     * 支付定金后多少天截止支付,finalPaymentType=1时生效
     * @var int
     */
    private $afterDepositEndFinalDay;

    /**
     * 支付定金后多少小时截止支付,finalPaymentType=1时生效
     * @var int
     */
    private $afterDepositEndFinalHour;

    /**
     * @param int $finalPaymentType
     */
    public function setFinalPaymentType(?int $finalPaymentType): void
    {
        $this->finalPaymentType = $finalPaymentType;
    }

    /**
     * @return int
     */
    public function getFinalPaymentType(): ?int
    {
        return $this->finalPaymentType;
    }

    /**
     * @param int $startFinalPayTime
     */
    public function setStartFinalPayTime(?int $startFinalPayTime): void
    {
        $this->startFinalPayTime = $startFinalPayTime;
    }

    /**
     * @return int
     */
    public function getStartFinalPayTime(): ?int
    {
        return $this->startFinalPayTime;
    }

    /**
     * @param int $endFinalPayTime
     */
    public function setEndFinalPayTime(?int $endFinalPayTime): void
    {
        $this->endFinalPayTime = $endFinalPayTime;
    }

    /**
     * @return int
     */
    public function getEndFinalPayTime(): ?int
    {
        return $this->endFinalPayTime;
    }

    /**
     * @param int $afterDepositStartFinalDay
     */
    public function setAfterDepositStartFinalDay(?int $afterDepositStartFinalDay): void
    {
        $this->afterDepositStartFinalDay = $afterDepositStartFinalDay;
    }

    /**
     * @return int
     */
    public function getAfterDepositStartFinalDay(): ?int
    {
        return $this->afterDepositStartFinalDay;
    }

    /**
     * @param int $afterDepositEndFinalDay
     */
    public function setAfterDepositEndFinalDay(?int $afterDepositEndFinalDay): void
    {
        $this->afterDepositEndFinalDay = $afterDepositEndFinalDay;
    }

    /**
     * @return int
     */
    public function getAfterDepositEndFinalDay(): ?int
    {
        return $this->afterDepositEndFinalDay;
    }

    /**
     * @param int $afterDepositEndFinalHour
     */
    public function setAfterDepositEndFinalHour(?int $afterDepositEndFinalHour): void
    {
        $this->afterDepositEndFinalHour = $afterDepositEndFinalHour;
    }

    /**
     * @return int
     */
    public function getAfterDepositEndFinalHour(): ?int
    {
        return $this->afterDepositEndFinalHour;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsGetDataDeliveryInfo implements \JsonSerializable
{
    /**
     * 发货时间类型 1，支付全款后N小时; 2.指定时间
     * @var int
     */
    private $deliveryType;

    /**
     * 支付全款后多少天后发货,当deliveryType=1时生效
     * @var int
     */
    private $afterFinalPayDeliveryDay;

    /**
     * 支付全款后多少小时后发货,当deliveryType=1时生效
     * @var int
     */
    private $afterFinalPayDeliveryHour;

    /**
     * 指定发货日期后开始发货,当deliveryType = 2时生效
     * @var int
     */
    private $scheduleDeliveryTime;

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
     * @param int $afterFinalPayDeliveryDay
     */
    public function setAfterFinalPayDeliveryDay(?int $afterFinalPayDeliveryDay): void
    {
        $this->afterFinalPayDeliveryDay = $afterFinalPayDeliveryDay;
    }

    /**
     * @return int
     */
    public function getAfterFinalPayDeliveryDay(): ?int
    {
        return $this->afterFinalPayDeliveryDay;
    }

    /**
     * @param int $afterFinalPayDeliveryHour
     */
    public function setAfterFinalPayDeliveryHour(?int $afterFinalPayDeliveryHour): void
    {
        $this->afterFinalPayDeliveryHour = $afterFinalPayDeliveryHour;
    }

    /**
     * @return int
     */
    public function getAfterFinalPayDeliveryHour(): ?int
    {
        return $this->afterFinalPayDeliveryHour;
    }

    /**
     * @param int $scheduleDeliveryTime
     */
    public function setScheduleDeliveryTime(?int $scheduleDeliveryTime): void
    {
        $this->scheduleDeliveryTime = $scheduleDeliveryTime;
    }

    /**
     * @return int
     */
    public function getScheduleDeliveryTime(): ?int
    {
        return $this->scheduleDeliveryTime;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsGetDataSkuSpecList implements \JsonSerializable
{
    /**
     * 规格ID
     * @var int
     */
    private $specId;

    /**
     * 规格名称
     * @var string
     */
    private $specName;

    /**
     * 1
     * @var bool
     */
    private $specImgEnable;

    /**
     * @param int $specId
     */
    public function setSpecId(?int $specId): void
    {
        $this->specId = $specId;
    }

    /**
     * @return int
     */
    public function getSpecId(): ?int
    {
        return $this->specId;
    }

    /**
     * @param string $specName
     */
    public function setSpecName(?string $specName): void
    {
        $this->specName = $specName;
    }

    /**
     * @return string
     */
    public function getSpecName(): ?string
    {
        return $this->specName;
    }

    /**
     * @param bool $specImgEnable
     */
    public function setSpecImgEnable(?bool $specImgEnable): void
    {
        $this->specImgEnable = $specImgEnable;
    }

    /**
     * @return bool
     */
    public function getSpecImgEnable(): ?bool
    {
        return $this->specImgEnable;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsGetDataGoodsTag implements \JsonSerializable
{
    /**
     * 标签id
     * @var int
     */
    private $tagId;

    /**
     * 标签名称
     * @var string
     */
    private $name;

    /**
     * @param int $tagId
     */
    public function setTagId(?int $tagId): void
    {
        $this->tagId = $tagId;
    }

    /**
     * @return int
     */
    public function getTagId(): ?int
    {
        return $this->tagId;
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

class WeimobGuideGoodsGetDataSkuList implements \JsonSerializable
{
    /**
     * sku 规格值，规格值组合
     * @var array
     */
    private $skuSpecValueList;

    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * sku ID
     * @var int
     */
    private $skuId;

    /**
     * 成本价格
     * @var int
     */
    private $costPrice;

    /**
     * 售价
     * @var int
     */
    private $salePrice;

    /**
     * @param array $skuSpecValueList
     */
    public function setSkuSpecValueList(?array $skuSpecValueList): void
    {
        $this->skuSpecValueList = $skuSpecValueList;
    }

    /**
     * @return array
     */
    public function getSkuSpecValueList(): ?array
    {
        return $this->skuSpecValueList;
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
     * @param int $salePrice
     */
    public function setSalePrice(?int $salePrice): void
    {
        $this->salePrice = $salePrice;
    }

    /**
     * @return int
     */
    public function getSalePrice(): ?int
    {
        return $this->salePrice;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsGetDataSkuSpecValueList implements \JsonSerializable
{
    /**
     * 规格 ID
     * @var int
     */
    private $specId;

    /**
     * 规格值名称
     * @var string
     */
    private $specValueName;

    /**
     * 规格名称
     * @var string
     */
    private $specName;

    /**
     * 规格值 ID
     * @var int
     */
    private $specValueId;

    /**
     * @param int $specId
     */
    public function setSpecId(?int $specId): void
    {
        $this->specId = $specId;
    }

    /**
     * @return int
     */
    public function getSpecId(): ?int
    {
        return $this->specId;
    }

    /**
     * @param string $specValueName
     */
    public function setSpecValueName(?string $specValueName): void
    {
        $this->specValueName = $specValueName;
    }

    /**
     * @return string
     */
    public function getSpecValueName(): ?string
    {
        return $this->specValueName;
    }

    /**
     * @param string $specName
     */
    public function setSpecName(?string $specName): void
    {
        $this->specName = $specName;
    }

    /**
     * @return string
     */
    public function getSpecName(): ?string
    {
        return $this->specName;
    }

    /**
     * @param int $specValueId
     */
    public function setSpecValueId(?int $specValueId): void
    {
        $this->specValueId = $specValueId;
    }

    /**
     * @return int
     */
    public function getSpecValueId(): ?int
    {
        return $this->specValueId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

