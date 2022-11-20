<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 738
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobGuideGoodsExtendGetListService
{
    const specType = 'wos';

    public function invoke(WeimobGuideGoodsExtendGetListRequest $request) : WeimobGuideGoodsExtendGetListResponse;
}

class WeimobGuideGoodsExtendGetListRequest implements \JsonSerializable
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
    * @var WeimobGuideGoodsExtendGetListParam
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
    * @param WeimobGuideGoodsExtendGetListParam $param
    */
    public function setParam(?WeimobGuideGoodsExtendGetListParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobGuideGoodsExtendGetListParam
    */
    public function getParam(): ?WeimobGuideGoodsExtendGetListParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsExtendGetListParam implements \JsonSerializable
{
    /**
    * 查询参数
    * @var WeimobGuideGoodsExtendGetListParamQueryParameter
    */
    private $queryParameter;

    /**
    * 页码
    * @var int
    */
    private $pageNum;

    /**
    * 页数
    * @var int
    */
    private $pageSize;

    /**
    * @param WeimobGuideGoodsExtendGetListParamQueryParameter $queryParameter
    */
    public function setQueryParameter(?WeimobGuideGoodsExtendGetListParamQueryParameter $queryParameter)
    {
        $this->queryParameter = $queryParameter;
    }

    /**
    * @return WeimobGuideGoodsExtendGetListParamQueryParameter
    */
    public function getQueryParameter(): ?WeimobGuideGoodsExtendGetListParamQueryParameter
    {
        return $this->queryParameter;
    }

    /**
    * @param int $pageNum
    */
    public function setPageNum(?int $pageNum)
    {
        $this->pageNum = $pageNum;
    }

    /**
    * @return int
    */
    public function getPageNum(): ?int
    {
        return $this->pageNum;
    }

    /**
    * @param int $pageSize
    */
    public function setPageSize(?int $pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
    * @return int
    */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsExtendGetListParamQueryParameter implements \JsonSerializable
{
    /**
    * 商品分组id
    * @var int
    */
    private $classifyId;

    /**
    * 商品类目id
    * @var int
    */
    private $categoryId;

    /**
    * 商品内部属性id
    * @var int
    */
    private $innerPropertyValueId;

    /**
    * 属性ID
    * @var int
    */
    private $propertyValueId;

    /**
    * 是否可售 0-不可售 1可售
    * @var int
    */
    private $isCanSell;

    /**
    * 是否组合品 0-非组合 1-组合
    * @var int
    */
    private $isCombine;

    /**
    * 商品状态 0-上架 1-下架 2-已售罄
    * @var int
    */
    private $goodsStatus;

    /**
    * 销售渠道类型 1线上，2，线下，3，线上+线下
    * @var array
    */
    private $saleChannelType;

    /**
    * 商品来源 1-新云 2-分销
    * @var int
    */
    private $source;

    /**
    * 商品归属: 1 商家商品，2 门店商品
    * @var int
    */
    private $goodsBelongToType;

    /**
    * 搜索框-搜索内容
    * @var string
    */
    private $search;

    /**
    * 搜索框-搜索类型 1.title 2.spu code 3.sku barcode 4.outer sku code
    * @var int
    */
    private $searchType;

    /**
    * 1
    * @var array
    */
    private $goodsIdList;

    /**
    * 商品标签ID列表
    * @var int
    */
    private $goodsTagId;

    /**
    * 商品服务id
    * @var int
    */
    private $rightsValueId;

    /**
    * 一级商品类型
    * @var array
    */
    private $goodsTypes;

    /**
    * 二级商品类型
    * @var array
    */
    private $subGoodsTypes;

    /**
    * 销售模式1-现货 2-预售 3-抽签
    * @var array
    */
    private $soldType;

    /**
    * 排序 :1-销量 2-上下架时间 3-价格 4-sort值
    * @var int
    */
    private $sort;

    /**
    * 排序类型：0 顺序 1 倒序
    * @var int
    */
    private $sortType;

    /**
    * 最小销售价
    * @var int
    */
    private $minSalePrice;

    /**
    * 最大销售价
    * @var int
    */
    private $maxSalePrice;

    /**
    * @param int $classifyId
    */
    public function setClassifyId(?int $classifyId)
    {
        $this->classifyId = $classifyId;
    }

    /**
    * @return int
    */
    public function getClassifyId(): ?int
    {
        return $this->classifyId;
    }

    /**
    * @param int $categoryId
    */
    public function setCategoryId(?int $categoryId)
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
    * @param int $innerPropertyValueId
    */
    public function setInnerPropertyValueId(?int $innerPropertyValueId)
    {
        $this->innerPropertyValueId = $innerPropertyValueId;
    }

    /**
    * @return int
    */
    public function getInnerPropertyValueId(): ?int
    {
        return $this->innerPropertyValueId;
    }

    /**
    * @param int $propertyValueId
    */
    public function setPropertyValueId(?int $propertyValueId)
    {
        $this->propertyValueId = $propertyValueId;
    }

    /**
    * @return int
    */
    public function getPropertyValueId(): ?int
    {
        return $this->propertyValueId;
    }

    /**
    * @param int $isCanSell
    */
    public function setIsCanSell(?int $isCanSell)
    {
        $this->isCanSell = $isCanSell;
    }

    /**
    * @return int
    */
    public function getIsCanSell(): ?int
    {
        return $this->isCanSell;
    }

    /**
    * @param int $isCombine
    */
    public function setIsCombine(?int $isCombine)
    {
        $this->isCombine = $isCombine;
    }

    /**
    * @return int
    */
    public function getIsCombine(): ?int
    {
        return $this->isCombine;
    }

    /**
    * @param int $goodsStatus
    */
    public function setGoodsStatus(?int $goodsStatus)
    {
        $this->goodsStatus = $goodsStatus;
    }

    /**
    * @return int
    */
    public function getGoodsStatus(): ?int
    {
        return $this->goodsStatus;
    }

    /**
    * @param array $saleChannelType
    */
    public function setSaleChannelType(?array $saleChannelType)
    {
        $this->saleChannelType = $saleChannelType;
    }

    /**
    * @return array
    */
    public function getSaleChannelType(): ?array
    {
        return $this->saleChannelType;
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
    * @param int $goodsBelongToType
    */
    public function setGoodsBelongToType(?int $goodsBelongToType)
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
    * @param string $search
    */
    public function setSearch(?string $search)
    {
        $this->search = $search;
    }

    /**
    * @return string
    */
    public function getSearch(): ?string
    {
        return $this->search;
    }

    /**
    * @param int $searchType
    */
    public function setSearchType(?int $searchType)
    {
        $this->searchType = $searchType;
    }

    /**
    * @return int
    */
    public function getSearchType(): ?int
    {
        return $this->searchType;
    }

    /**
    * @param array $goodsIdList
    */
    public function setGoodsIdList(?array $goodsIdList)
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
    * @param int $goodsTagId
    */
    public function setGoodsTagId(?int $goodsTagId)
    {
        $this->goodsTagId = $goodsTagId;
    }

    /**
    * @return int
    */
    public function getGoodsTagId(): ?int
    {
        return $this->goodsTagId;
    }

    /**
    * @param int $rightsValueId
    */
    public function setRightsValueId(?int $rightsValueId)
    {
        $this->rightsValueId = $rightsValueId;
    }

    /**
    * @return int
    */
    public function getRightsValueId(): ?int
    {
        return $this->rightsValueId;
    }

    /**
    * @param array $goodsTypes
    */
    public function setGoodsTypes(?array $goodsTypes)
    {
        $this->goodsTypes = $goodsTypes;
    }

    /**
    * @return array
    */
    public function getGoodsTypes(): ?array
    {
        return $this->goodsTypes;
    }

    /**
    * @param array $subGoodsTypes
    */
    public function setSubGoodsTypes(?array $subGoodsTypes)
    {
        $this->subGoodsTypes = $subGoodsTypes;
    }

    /**
    * @return array
    */
    public function getSubGoodsTypes(): ?array
    {
        return $this->subGoodsTypes;
    }

    /**
    * @param array $soldType
    */
    public function setSoldType(?array $soldType)
    {
        $this->soldType = $soldType;
    }

    /**
    * @return array
    */
    public function getSoldType(): ?array
    {
        return $this->soldType;
    }

    /**
    * @param int $sort
    */
    public function setSort(?int $sort)
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
    * @param int $sortType
    */
    public function setSortType(?int $sortType)
    {
        $this->sortType = $sortType;
    }

    /**
    * @return int
    */
    public function getSortType(): ?int
    {
        return $this->sortType;
    }

    /**
    * @param int $minSalePrice
    */
    public function setMinSalePrice(?int $minSalePrice)
    {
        $this->minSalePrice = $minSalePrice;
    }

    /**
    * @return int
    */
    public function getMinSalePrice(): ?int
    {
        return $this->minSalePrice;
    }

    /**
    * @param int $maxSalePrice
    */
    public function setMaxSalePrice(?int $maxSalePrice)
    {
        $this->maxSalePrice = $maxSalePrice;
    }

    /**
    * @return int
    */
    public function getMaxSalePrice(): ?int
    {
        return $this->maxSalePrice;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideGoodsExtendGetListResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobGuideGoodsExtendGetListData
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
    * @return WeimobGuideGoodsExtendGetListData
    */
    public function getData(): ?WeimobGuideGoodsExtendGetListData
    {
        return $this->data;
    }

    /**
    * @param WeimobGuideGoodsExtendGetListData $data
    */
    public function setData(?WeimobGuideGoodsExtendGetListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsExtendGetListData implements \JsonSerializable
{
    /**
    * 数据
    * @var array
    */
    private $pageList;

    /**
    * 页码
    * @var int
    */
    private $pageNum;

    /**
    * 页数
    * @var int
    */
    private $pageSize;

    /**
    * 总数
    * @var int
    */
    private $totalCount;

    /**
    * @param array $pageList
    */
    public function setPageList(?array $pageList)
    {
        $this->pageList = $pageList;
    }

    /**
    * @return array
    */
    public function getPageList(): ?array
    {
        return $this->pageList;
    }

    /**
    * @param int $pageNum
    */
    public function setPageNum(?int $pageNum)
    {
        $this->pageNum = $pageNum;
    }

    /**
    * @return int
    */
    public function getPageNum(): ?int
    {
        return $this->pageNum;
    }

    /**
    * @param int $pageSize
    */
    public function setPageSize(?int $pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
    * @return int
    */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
    * @param int $totalCount
    */
    public function setTotalCount(?int $totalCount)
    {
        $this->totalCount = $totalCount;
    }

    /**
    * @return int
    */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsExtendGetListDataPageList implements \JsonSerializable
{
    /**
    * 商品价格
    * @var WeimobGuideGoodsExtendGetListDataGoodsPrice
    */
    private $goodsPrice;

    /**
    * 商品库存
    * @var WeimobGuideGoodsExtendGetListDataGoodsStock
    */
    private $goodsStock;

    /**
    * vid 当前门店
    * @var int
    */
    private $vid;

    /**
    * 商品创建门店
    * @var int
    */
    private $createVid;

    /**
    * 一级商品类型：1-普通商品、2-虚拟商品
    * @var int
    */
    private $goodsType;

    /**
    * 二级商品类型 101 实物物流 102海淘 201 虚拟通用 202 付费卷
    * @var int
    */
    private $subGoodsType;

    /**
    * 商品ID
    * @var int
    */
    private $goodsId;

    /**
    * 商品名称
    * @var string
    */
    private $title;

    /**
    * 销售类型：1.现货 2.预售 3.抽签
    * @var int
    */
    private $soldType;

    /**
    * 商品销量
    * @var int
    */
    private $realSaleNum;

    /**
    * 商品默认图片
    * @var string
    */
    private $defaultImageUrl;

    /**
    * 销售渠道类型 1线上，2，线下，3，线上+线下
    * @var int
    */
    private $saleChannelType;

    /**
    * 是否可售
    * @var bool
    */
    private $isCanSell;

    /**
    * 是否上架
    * @var bool
    */
    private $isOnline;

    /**
    * 是否多规格
    * @var bool
    */
    private $isMultiSku;

    /**
    * 是否分配
    * @var bool
    */
    private $isAssigned;

    /**
    * 商品排序值
    * @var int
    */
    private $sort;

    /**
    * 商品来源 1-新云 2-分销
    * @var int
    */
    private $source;

    /**
    * 产品ID
    * @var int
    */
    private $productId;

    /**
    * 产品实例ID
    * @var int
    */
    private $productInstanceId;

    /**
    * @param WeimobGuideGoodsExtendGetListDataGoodsPrice $goodsPrice
    */
    public function setGoodsPrice(?WeimobGuideGoodsExtendGetListDataGoodsPrice $goodsPrice)
    {
        $this->goodsPrice = $goodsPrice;
    }

    /**
    * @return WeimobGuideGoodsExtendGetListDataGoodsPrice
    */
    public function getGoodsPrice(): ?WeimobGuideGoodsExtendGetListDataGoodsPrice
    {
        return $this->goodsPrice;
    }

    /**
    * @param WeimobGuideGoodsExtendGetListDataGoodsStock $goodsStock
    */
    public function setGoodsStock(?WeimobGuideGoodsExtendGetListDataGoodsStock $goodsStock)
    {
        $this->goodsStock = $goodsStock;
    }

    /**
    * @return WeimobGuideGoodsExtendGetListDataGoodsStock
    */
    public function getGoodsStock(): ?WeimobGuideGoodsExtendGetListDataGoodsStock
    {
        return $this->goodsStock;
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
    * @param int $createVid
    */
    public function setCreateVid(?int $createVid)
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
    * @param int $goodsType
    */
    public function setGoodsType(?int $goodsType)
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
    public function setSubGoodsType(?int $subGoodsType)
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
    * @param string $title
    */
    public function setTitle(?string $title)
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
    * @param int $soldType
    */
    public function setSoldType(?int $soldType)
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
    public function setRealSaleNum(?int $realSaleNum)
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
    public function setDefaultImageUrl(?string $defaultImageUrl)
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
    public function setSaleChannelType(?int $saleChannelType)
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
    public function setIsCanSell(?bool $isCanSell)
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
    public function setIsOnline(?bool $isOnline)
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
    * @param bool $isMultiSku
    */
    public function setIsMultiSku(?bool $isMultiSku)
    {
        $this->isMultiSku = $isMultiSku;
    }

    /**
    * @return bool
    */
    public function getIsMultiSku(): ?bool
    {
        return $this->isMultiSku;
    }

    /**
    * @param bool $isAssigned
    */
    public function setIsAssigned(?bool $isAssigned)
    {
        $this->isAssigned = $isAssigned;
    }

    /**
    * @return bool
    */
    public function getIsAssigned(): ?bool
    {
        return $this->isAssigned;
    }

    /**
    * @param int $sort
    */
    public function setSort(?int $sort)
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsExtendGetListDataGoodsPrice implements \JsonSerializable
{
    /**
    * 最大销售价
    * @var int
    */
    private $maxSalePrice;

    /**
    * 最小销售价
    * @var int
    */
    private $minSalePrice;

    /**
    * 商品最大成本价（所有SKU中的最大成本价）
    * @var int
    */
    private $maxCostPrice;

    /**
    * 最小成本价（所有SKU中的最小成本价）
    * @var int
    */
    private $minCostPrice;

    /**
    * 最大市场价（所有SKU中的最大市场价）
    * @var int
    */
    private $maxMarketPrice;

    /**
    * 最小市场价（所有SKU中的最小市场价）
    * @var int
    */
    private $minMarketPrice;

    /**
    * @param int $maxSalePrice
    */
    public function setMaxSalePrice(?int $maxSalePrice)
    {
        $this->maxSalePrice = $maxSalePrice;
    }

    /**
    * @return int
    */
    public function getMaxSalePrice(): ?int
    {
        return $this->maxSalePrice;
    }

    /**
    * @param int $minSalePrice
    */
    public function setMinSalePrice(?int $minSalePrice)
    {
        $this->minSalePrice = $minSalePrice;
    }

    /**
    * @return int
    */
    public function getMinSalePrice(): ?int
    {
        return $this->minSalePrice;
    }

    /**
    * @param int $maxCostPrice
    */
    public function setMaxCostPrice(?int $maxCostPrice)
    {
        $this->maxCostPrice = $maxCostPrice;
    }

    /**
    * @return int
    */
    public function getMaxCostPrice(): ?int
    {
        return $this->maxCostPrice;
    }

    /**
    * @param int $minCostPrice
    */
    public function setMinCostPrice(?int $minCostPrice)
    {
        $this->minCostPrice = $minCostPrice;
    }

    /**
    * @return int
    */
    public function getMinCostPrice(): ?int
    {
        return $this->minCostPrice;
    }

    /**
    * @param int $maxMarketPrice
    */
    public function setMaxMarketPrice(?int $maxMarketPrice)
    {
        $this->maxMarketPrice = $maxMarketPrice;
    }

    /**
    * @return int
    */
    public function getMaxMarketPrice(): ?int
    {
        return $this->maxMarketPrice;
    }

    /**
    * @param int $minMarketPrice
    */
    public function setMinMarketPrice(?int $minMarketPrice)
    {
        $this->minMarketPrice = $minMarketPrice;
    }

    /**
    * @return int
    */
    public function getMinMarketPrice(): ?int
    {
        return $this->minMarketPrice;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsExtendGetListDataGoodsStock implements \JsonSerializable
{
    /**
    * 渠道库存 - 需要展示线上、线下库存使用该渠道库存字段
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
    * 冻结库存 - 占用库存
    * @var int
    */
    private $frozenQuantity;

    /**
    * 可超卖数量
    * @var int
    */
    private $allowOversoldQuantity;

    /**
    * 已售库存
    * @var int
    */
    private $alreadySellQuantity;

    /**
    * 预售的商品库存数量
    * @var int
    */
    private $preGoodsStockNum;

    /**
    * 预售商品冻结库存
    * @var int
    */
    private $preFrozenQuantity;

    /**
    * 预售商品已售库存
    * @var int
    */
    private $preAlreadySellQuantity;

    /**
    * @param array $stock
    */
    public function setStock(?array $stock)
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
    public function setExistNullStock(?bool $existNullStock)
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
    public function setIsAllStockEmpty(?bool $isAllStockEmpty)
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
    public function setGoodsStockNum(?int $goodsStockNum)
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
    public function setFrozenQuantity(?int $frozenQuantity)
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
    public function setAllowOversoldQuantity(?int $allowOversoldQuantity)
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
    public function setAlreadySellQuantity(?int $alreadySellQuantity)
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
    public function setPreGoodsStockNum(?int $preGoodsStockNum)
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
    public function setPreFrozenQuantity(?int $preFrozenQuantity)
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
    public function setPreAlreadySellQuantity(?int $preAlreadySellQuantity)
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

class WeimobGuideGoodsExtendGetListDataStock implements \JsonSerializable
{
    /**
    * 库存渠道 1-线上渠道 2-线下渠道 默认线上
    * @var int
    */
    private $channelType;

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
    * 冻结库存 - 占用库存
    * @var int
    */
    private $frozenQuantity;

    /**
    * 可超卖数量
    * @var int
    */
    private $allowOversoldQuantity;

    /**
    * 已售库存
    * @var int
    */
    private $alreadySellQuantity;

    /**
    * 预售的商品库存数量
    * @var int
    */
    private $preGoodsStockNum;

    /**
    * 预售商品冻结库存
    * @var int
    */
    private $preFrozenQuantity;

    /**
    * 预售商品已售库存
    * @var int
    */
    private $preAlreadySellQuantity;

    /**
    * @param int $channelType
    */
    public function setChannelType(?int $channelType)
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
    public function setExistNullStock(?bool $existNullStock)
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
    public function setIsAllStockEmpty(?bool $isAllStockEmpty)
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
    public function setGoodsStockNum(?int $goodsStockNum)
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
    public function setFrozenQuantity(?int $frozenQuantity)
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
    public function setAllowOversoldQuantity(?int $allowOversoldQuantity)
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
    public function setAlreadySellQuantity(?int $alreadySellQuantity)
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
    public function setPreGoodsStockNum(?int $preGoodsStockNum)
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
    public function setPreFrozenQuantity(?int $preFrozenQuantity)
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
    public function setPreAlreadySellQuantity(?int $preAlreadySellQuantity)
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

