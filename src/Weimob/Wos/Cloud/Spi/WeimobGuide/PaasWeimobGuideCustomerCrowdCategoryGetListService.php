<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 744
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobGuideCustomerCrowdCategoryGetListService
{
    const specType = 'wos';

    public function invoke(WeimobGuideCustomerCrowdCategoryGetListRequest $request) : WeimobGuideCustomerCrowdCategoryGetListResponse;
}

class WeimobGuideCustomerCrowdCategoryGetListRequest implements \JsonSerializable
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
    * @var WeimobGuideCustomerCrowdCategoryGetListParam
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
    * @param WeimobGuideCustomerCrowdCategoryGetListParam $param
    */
    public function setParam(?WeimobGuideCustomerCrowdCategoryGetListParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobGuideCustomerCrowdCategoryGetListParam
    */
    public function getParam(): ?WeimobGuideCustomerCrowdCategoryGetListParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerCrowdCategoryGetListParam implements \JsonSerializable
{
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
    * 组织结构节点类型	
    * @var int
    */
    private $vidType;

    /**
    * 产品实例id	
    * @var int
    */
    private $productInstanceId;

    /**
    * 导购wid
    * @var int
    */
    private $guiderWid;

    /**
    * 人群id列表
    * @var array
    */
    private $crowdIds;

    /**
    * 搜索关键字
    * @var string
    */
    private $searchKey;

    /**
    * 人群分类id
    * @var int
    */
    private $categoryId;

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
    * @param int $guiderWid
    */
    public function setGuiderWid(?int $guiderWid)
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
    * @param array $crowdIds
    */
    public function setCrowdIds(?array $crowdIds)
    {
        $this->crowdIds = $crowdIds;
    }

    /**
    * @return array
    */
    public function getCrowdIds(): ?array
    {
        return $this->crowdIds;
    }

    /**
    * @param string $searchKey
    */
    public function setSearchKey(?string $searchKey)
    {
        $this->searchKey = $searchKey;
    }

    /**
    * @return string
    */
    public function getSearchKey(): ?string
    {
        return $this->searchKey;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideCustomerCrowdCategoryGetListResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobGuideCustomerCrowdCategoryGetListData
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
    * @return WeimobGuideCustomerCrowdCategoryGetListData
    */
    public function getData(): ?WeimobGuideCustomerCrowdCategoryGetListData
    {
        return $this->data;
    }

    /**
    * @param WeimobGuideCustomerCrowdCategoryGetListData $data
    */
    public function setData(?WeimobGuideCustomerCrowdCategoryGetListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerCrowdCategoryGetListData implements \JsonSerializable
{
    /**
    * 属性信息
    * @var array
    */
    private $categoryInfoList;

    /**
    * 总数
    * @var int
    */
    private $count;

    /**
    * @param array $categoryInfoList
    */
    public function setCategoryInfoList(?array $categoryInfoList)
    {
        $this->categoryInfoList = $categoryInfoList;
    }

    /**
    * @return array
    */
    public function getCategoryInfoList(): ?array
    {
        return $this->categoryInfoList;
    }

    /**
    * @param int $count
    */
    public function setCount(?int $count)
    {
        $this->count = $count;
    }

    /**
    * @return int
    */
    public function getCount(): ?int
    {
        return $this->count;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerCrowdCategoryGetListDataCategoryInfoList implements \JsonSerializable
{
    /**
    * 人群id
    * @var int
    */
    private $crowdId;

    /**
    * 人群名称
    * @var string
    */
    private $crowdName;

    /**
    * crowdType
    * @var int
    */
    private $crowdType;

    /**
    * 人群描述
    * @var string
    */
    private $description;

    /**
    * 分类id
    * @var int
    */
    private $categoryId;

    /**
    * 分类名称
    * @var string
    */
    private $categoryName;

    /**
    * 覆盖人数
    * @var int
    */
    private $coverNumber;

    /**
    * 是否开启
    * @var int
    */
    private $status;

    /**
    * 创建时间
    * @var string
    */
    private $createTime;

    /**
    * 更新时间
    * @var string
    */
    private $updateTime;

    /**
    * @param int $crowdId
    */
    public function setCrowdId(?int $crowdId)
    {
        $this->crowdId = $crowdId;
    }

    /**
    * @return int
    */
    public function getCrowdId(): ?int
    {
        return $this->crowdId;
    }

    /**
    * @param string $crowdName
    */
    public function setCrowdName(?string $crowdName)
    {
        $this->crowdName = $crowdName;
    }

    /**
    * @return string
    */
    public function getCrowdName(): ?string
    {
        return $this->crowdName;
    }

    /**
    * @param int $crowdType
    */
    public function setCrowdType(?int $crowdType)
    {
        $this->crowdType = $crowdType;
    }

    /**
    * @return int
    */
    public function getCrowdType(): ?int
    {
        return $this->crowdType;
    }

    /**
    * @param string $description
    */
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }

    /**
    * @return string
    */
    public function getDescription(): ?string
    {
        return $this->description;
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
    * @param string $categoryName
    */
    public function setCategoryName(?string $categoryName)
    {
        $this->categoryName = $categoryName;
    }

    /**
    * @return string
    */
    public function getCategoryName(): ?string
    {
        return $this->categoryName;
    }

    /**
    * @param int $coverNumber
    */
    public function setCoverNumber(?int $coverNumber)
    {
        $this->coverNumber = $coverNumber;
    }

    /**
    * @return int
    */
    public function getCoverNumber(): ?int
    {
        return $this->coverNumber;
    }

    /**
    * @param int $status
    */
    public function setStatus(?int $status)
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
    * @param string $createTime
    */
    public function setCreateTime(?string $createTime)
    {
        $this->createTime = $createTime;
    }

    /**
    * @return string
    */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
    * @param string $updateTime
    */
    public function setUpdateTime(?string $updateTime)
    {
        $this->updateTime = $updateTime;
    }

    /**
    * @return string
    */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

