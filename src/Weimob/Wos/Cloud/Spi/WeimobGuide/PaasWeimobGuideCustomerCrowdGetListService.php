<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 746
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobGuideCustomerCrowdGetListService
{
    const specType = 'wos';

    public function invoke(WeimobGuideCustomerCrowdGetListRequest $request) : WeimobGuideCustomerCrowdGetListResponse;
}

class WeimobGuideCustomerCrowdGetListRequest implements \JsonSerializable
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
    * @var WeimobGuideCustomerCrowdGetListParam
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
    * @param WeimobGuideCustomerCrowdGetListParam $param
    */
    public function setParam(?WeimobGuideCustomerCrowdGetListParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobGuideCustomerCrowdGetListParam
    */
    public function getParam(): ?WeimobGuideCustomerCrowdGetListParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerCrowdGetListParam implements \JsonSerializable
{
    /**
    * 客户wid list
    * @var array
    */
    private $widList;

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
    * 组织结构节点类型	
    * @var int
    */
    private $vidType;

    /**
    * @param array $widList
    */
    public function setWidList(?array $widList)
    {
        $this->widList = $widList;
    }

    /**
    * @return array
    */
    public function getWidList(): ?array
    {
        return $this->widList;
    }

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerCrowdGetListParamWidList implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideCustomerCrowdGetListResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobGuideCustomerCrowdGetListData
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
    * @return WeimobGuideCustomerCrowdGetListData
    */
    public function getData(): ?WeimobGuideCustomerCrowdGetListData
    {
        return $this->data;
    }

    /**
    * @param WeimobGuideCustomerCrowdGetListData $data
    */
    public function setData(?WeimobGuideCustomerCrowdGetListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerCrowdGetListData implements \JsonSerializable
{
    /**
    * 数据list
    * @var array
    */
    private $list;

    /**
    * @param array $list
    */
    public function setList(?array $list)
    {
        $this->list = $list;
    }

    /**
    * @return array
    */
    public function getList(): ?array
    {
        return $this->list;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerCrowdGetListDatalist implements \JsonSerializable
{
    /**
    * 人群包id列表
    * @var array
    */
    private $crowdIdList;

    /**
    * wid
    * @var int
    */
    private $wid;

    /**
    * @param array $crowdIdList
    */
    public function setCrowdIdList(?array $crowdIdList)
    {
        $this->crowdIdList = $crowdIdList;
    }

    /**
    * @return array
    */
    public function getCrowdIdList(): ?array
    {
        return $this->crowdIdList;
    }

    /**
    * @param int $wid
    */
    public function setWid(?int $wid)
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

class WeimobGuideCustomerCrowdGetListDataCrowdIdList implements \JsonSerializable
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
    * createTime
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

