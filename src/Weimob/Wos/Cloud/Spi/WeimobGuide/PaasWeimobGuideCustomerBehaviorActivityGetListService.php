<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 728
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobGuideCustomerBehaviorActivityGetListService
{
    const specType = 'wos';

    public function invoke(WeimobGuideCustomerBehaviorActivityGetListRequest $request) : WeimobGuideCustomerBehaviorActivityGetListResponse;
}

class WeimobGuideCustomerBehaviorActivityGetListRequest implements \JsonSerializable
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
     * @var WeimobGuideCustomerBehaviorActivityGetListParam
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
     * @param WeimobGuideCustomerBehaviorActivityGetListParam $param
     */
    public function setParam(?WeimobGuideCustomerBehaviorActivityGetListParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobGuideCustomerBehaviorActivityGetListParam
     */
    public function getParam(): ?WeimobGuideCustomerBehaviorActivityGetListParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerBehaviorActivityGetListParam implements \JsonSerializable
{
    /**
     * 过滤条件
     * @var WeimobGuideCustomerBehaviorActivityGetListParamFilterList
     */
    private $filterList;

    /**
     * 导购wid
     * @var int
     */
    private $guiderWid;

    /**
     * 行为记录开始时间
     * @var int
     */
    private $startTime;

    /**
     * 行为记录结束时间
     * @var int
     */
    private $endTime;

    /**
     * 商业操作系统ID
     * @var int
     */
    private $bosId;

    /**
     * 组织结构节点
     * @var int
     */
    private $vid;

    /**
     * 产品实例id
     * @var int
     */
    private $productInstanceId;

    /**
     * 排序类型(asc, desc)
     * @var string
     */
    private $order;

    /**
     * 查询的客户数量
     * @var int
     */
    private $queryUserSize;

    /**
     * 查询的行为明细数量
     * @var int
     */
    private $queryRecordSize;

    /**
     * 节点类型
     * @var int
     */
    private $vidType;

    /**
     * 产品id
     * @var int
     */
    private $productId;

    /**
     * @param WeimobGuideCustomerBehaviorActivityGetListParamFilterList $filterList
     */
    public function setFilterList(?WeimobGuideCustomerBehaviorActivityGetListParamFilterList $filterList): void
    {
        $this->filterList = $filterList;
    }

    /**
     * @return WeimobGuideCustomerBehaviorActivityGetListParamFilterList
     */
    public function getFilterList(): ?WeimobGuideCustomerBehaviorActivityGetListParamFilterList
    {
        return $this->filterList;
    }

    /**
     * @param int $guiderWid
     */
    public function setGuiderWid(?int $guiderWid): void
    {
        $this->guiderWid = $guiderWid;
    }

    /**
     * @return int
     */
    public function getGuiderWid(): ?int
    {
        return $this->guiderWid;
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
     * @param string $order
     */
    public function setOrder(?string $order): void
    {
        $this->order = $order;
    }

    /**
     * @return string
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }

    /**
     * @param int $queryUserSize
     */
    public function setQueryUserSize(?int $queryUserSize): void
    {
        $this->queryUserSize = $queryUserSize;
    }

    /**
     * @return int
     */
    public function getQueryUserSize(): ?int
    {
        return $this->queryUserSize;
    }

    /**
     * @param int $queryRecordSize
     */
    public function setQueryRecordSize(?int $queryRecordSize): void
    {
        $this->queryRecordSize = $queryRecordSize;
    }

    /**
     * @return int
     */
    public function getQueryRecordSize(): ?int
    {
        return $this->queryRecordSize;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerBehaviorActivityGetListParamFilterList implements \JsonSerializable
{
    /**
     * 事件
     * @var string
     */
    private $en;

    /**
     * 页面名称
     * @var string
     */
    private $pageName;

    /**
     * @param string $en
     */
    public function setEn(?string $en): void
    {
        $this->en = $en;
    }

    /**
     * @return string
     */
    public function getEn(): ?string
    {
        return $this->en;
    }

    /**
     * @param string $pageName
     */
    public function setPageName(?string $pageName): void
    {
        $this->pageName = $pageName;
    }

    /**
     * @return string
     */
    public function getPageName(): ?string
    {
        return $this->pageName;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideCustomerBehaviorActivityGetListResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobGuideCustomerBehaviorActivityGetListData
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
     * @return WeimobGuideCustomerBehaviorActivityGetListData
     */
    public function getData(): ?WeimobGuideCustomerBehaviorActivityGetListData
    {
        return $this->data;
    }

    /**
     * @param WeimobGuideCustomerBehaviorActivityGetListData $data
     */
    public function setData(?WeimobGuideCustomerBehaviorActivityGetListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerBehaviorActivityGetListData implements \JsonSerializable
{
    /**
     * 老的行为记录
     * @var WeimobGuideCustomerBehaviorActivityGetListDataOldBehaviorInfo
     */
    private $oldBehaviorInfo;

    /**
     * 行为记录列表
     * @var WeimobGuideCustomerBehaviorActivityGetListDataBehaviorRecordList
     */
    private $behaviorRecordList;

    /**
     * 是否是老数据
     * @var bool
     */
    private $isOld;

    /**
     * @param WeimobGuideCustomerBehaviorActivityGetListDataOldBehaviorInfo $oldBehaviorInfo
     */
    public function setOldBehaviorInfo(?WeimobGuideCustomerBehaviorActivityGetListDataOldBehaviorInfo $oldBehaviorInfo): void
    {
        $this->oldBehaviorInfo = $oldBehaviorInfo;
    }

    /**
     * @return WeimobGuideCustomerBehaviorActivityGetListDataOldBehaviorInfo
     */
    public function getOldBehaviorInfo(): ?WeimobGuideCustomerBehaviorActivityGetListDataOldBehaviorInfo
    {
        return $this->oldBehaviorInfo;
    }

    /**
     * @param WeimobGuideCustomerBehaviorActivityGetListDataBehaviorRecordList $behaviorRecordList
     */
    public function setBehaviorRecordList(?WeimobGuideCustomerBehaviorActivityGetListDataBehaviorRecordList $behaviorRecordList): void
    {
        $this->behaviorRecordList = $behaviorRecordList;
    }

    /**
     * @return WeimobGuideCustomerBehaviorActivityGetListDataBehaviorRecordList
     */
    public function getBehaviorRecordList(): ?WeimobGuideCustomerBehaviorActivityGetListDataBehaviorRecordList
    {
        return $this->behaviorRecordList;
    }

    /**
     * @param bool $isOld
     */
    public function setIsOld(?bool $isOld): void
    {
        $this->isOld = $isOld;
    }

    /**
     * @return bool
     */
    public function getIsOld(): ?bool
    {
        return $this->isOld;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerBehaviorActivityGetListDataOldBehaviorInfo implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerBehaviorActivityGetListDataBehaviorRecordList implements \JsonSerializable
{
    /**
     * 客户wid
     * @var WeimobGuideCustomerBehaviorActivityGetListDataCustomer_wid
     */
    private $customer_wid;

    /**
     * @param WeimobGuideCustomerBehaviorActivityGetListDataCustomer_wid $customer_wid
     */
    public function setCustomerWid(?WeimobGuideCustomerBehaviorActivityGetListDataCustomer_wid $customer_wid): void
    {
        $this->customer_wid = $customer_wid;
    }

    /**
     * @return WeimobGuideCustomerBehaviorActivityGetListDataCustomer_wid
     */
    public function getCustomerWid(): ?WeimobGuideCustomerBehaviorActivityGetListDataCustomer_wid
    {
        return $this->customer_wid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerBehaviorActivityGetListDataCustomer_wid implements \JsonSerializable
{
    /**
     * 商业操作系统ID
     * @var int
     */
    private $bosId;

    /**
     * 用户id
     * @var string
     */
    private $ukey;

    /**
     * 用户id类型
     * @var string
     */
    private $ukeyType;

    /**
     * 页面别名
     * @var string
     */
    private $pageName;

    /**
     * 节点id
     * @var int
     */
    private $vid;

    /**
     * 节点类型
     * @var int
     */
    private $vidType;

    /**
     * 事件
     * @var string
     */
    private $en;

    /**
     * 商品id
     * @var string
     */
    private $goodsId;

    /**
     * 订单号
     * @var string
     */
    private $orderId;

    /**
     * 搜索关键字
     * @var string
     */
    private $keyword;

    /**
     * 活动名称
     * @var string
     */
    private $activityName;

    /**
     * 停留时长(单位:s)
     * @var string
     */
    private $visitDuration;

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
     * @param string $ukey
     */
    public function setUkey(?string $ukey): void
    {
        $this->ukey = $ukey;
    }

    /**
     * @return string
     */
    public function getUkey(): ?string
    {
        return $this->ukey;
    }

    /**
     * @param string $ukeyType
     */
    public function setUkeyType(?string $ukeyType): void
    {
        $this->ukeyType = $ukeyType;
    }

    /**
     * @return string
     */
    public function getUkeyType(): ?string
    {
        return $this->ukeyType;
    }

    /**
     * @param string $pageName
     */
    public function setPageName(?string $pageName): void
    {
        $this->pageName = $pageName;
    }

    /**
     * @return string
     */
    public function getPageName(): ?string
    {
        return $this->pageName;
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
     * @param string $en
     */
    public function setEn(?string $en): void
    {
        $this->en = $en;
    }

    /**
     * @return string
     */
    public function getEn(): ?string
    {
        return $this->en;
    }

    /**
     * @param string $goodsId
     */
    public function setGoodsId(?string $goodsId): void
    {
        $this->goodsId = $goodsId;
    }

    /**
     * @return string
     */
    public function getGoodsId(): ?string
    {
        return $this->goodsId;
    }

    /**
     * @param string $orderId
     */
    public function setOrderId(?string $orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * @return string
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * @param string $keyword
     */
    public function setKeyword(?string $keyword): void
    {
        $this->keyword = $keyword;
    }

    /**
     * @return string
     */
    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    /**
     * @param string $activityName
     */
    public function setActivityName(?string $activityName): void
    {
        $this->activityName = $activityName;
    }

    /**
     * @return string
     */
    public function getActivityName(): ?string
    {
        return $this->activityName;
    }

    /**
     * @param string $visitDuration
     */
    public function setVisitDuration(?string $visitDuration): void
    {
        $this->visitDuration = $visitDuration;
    }

    /**
     * @return string
     */
    public function getVisitDuration(): ?string
    {
        return $this->visitDuration;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

