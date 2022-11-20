<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 747
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobGuideCustomerTagGetListService
{
    const specType = 'wos';

    public function invoke(WeimobGuideCustomerTagGetListRequest $request) : WeimobGuideCustomerTagGetListResponse;
}

class WeimobGuideCustomerTagGetListRequest implements \JsonSerializable
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
    * @var WeimobGuideCustomerTagGetListParam
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
    * @param WeimobGuideCustomerTagGetListParam $param
    */
    public function setParam(?WeimobGuideCustomerTagGetListParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobGuideCustomerTagGetListParam
    */
    public function getParam(): ?WeimobGuideCustomerTagGetListParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerTagGetListParam implements \JsonSerializable
{
    /**
    * 商业操作系统ID
    * @var int
    */
    private $bosId;

    /**
    * 产品实例id
    * @var int
    */
    private $productInstanceId;

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
    * 客户wid list
    * @var array
    */
    private $widList;

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideCustomerTagGetListResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobGuideCustomerTagGetListData
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
    * @return WeimobGuideCustomerTagGetListData
    */
    public function getData(): ?WeimobGuideCustomerTagGetListData
    {
        return $this->data;
    }

    /**
    * @param WeimobGuideCustomerTagGetListData $data
    */
    public function setData(?WeimobGuideCustomerTagGetListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerTagGetListData implements \JsonSerializable
{
    /**
    * 标签列表
    * @var WeimobGuideCustomerTagGetListDataTagInfoMap
    */
    private $tagInfoMap;

    /**
    * @param WeimobGuideCustomerTagGetListDataTagInfoMap $tagInfoMap
    */
    public function setTagInfoMap(?WeimobGuideCustomerTagGetListDataTagInfoMap $tagInfoMap)
    {
        $this->tagInfoMap = $tagInfoMap;
    }

    /**
    * @return WeimobGuideCustomerTagGetListDataTagInfoMap
    */
    public function getTagInfoMap(): ?WeimobGuideCustomerTagGetListDataTagInfoMap
    {
        return $this->tagInfoMap;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerTagGetListDataTagInfoMap implements \JsonSerializable
{
    /**
    * 客户wid	
    * @var WeimobGuideCustomerTagGetListDataCustomer_wid
    */
    private $customer_wid;

    /**
    * @param WeimobGuideCustomerTagGetListDataCustomer_wid $customer_wid
    */
    public function setCustomerWid(?WeimobGuideCustomerTagGetListDataCustomer_wid $customer_wid)
    {
        $this->customer_wid = $customer_wid;
    }

    /**
    * @return WeimobGuideCustomerTagGetListDataCustomer_wid
    */
    public function getCustomerWid(): ?WeimobGuideCustomerTagGetListDataCustomer_wid
    {
        return $this->customer_wid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerTagGetListDataCustomer_wid implements \JsonSerializable
{
    /**
    * 属性列表
    * @var array
    */
    private $userTagAttrVoList;

    /**
    * 标签id
    * @var int
    */
    private $tagId;

    /**
    * 标签名
    * @var string
    */
    private $tagName;

    /**
    * 更新时间
    * @var string
    */
    private $updateTime;

    /**
    * @param array $userTagAttrVoList
    */
    public function setUserTagAttrVoList(?array $userTagAttrVoList)
    {
        $this->userTagAttrVoList = $userTagAttrVoList;
    }

    /**
    * @return array
    */
    public function getUserTagAttrVoList(): ?array
    {
        return $this->userTagAttrVoList;
    }

    /**
    * @param int $tagId
    */
    public function setTagId(?int $tagId)
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
    * @param string $tagName
    */
    public function setTagName(?string $tagName)
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

class WeimobGuideCustomerTagGetListDataUserTagAttrVoList implements \JsonSerializable
{
    /**
    * 属性id
    * @var int
    */
    private $attrId;

    /**
    * 属性名称
    * @var string
    */
    private $attrName;

    /**
    * 查询起始值
    * @var string
    */
    private $startValue;

    /**
    * 查询结束值
    * @var string
    */
    private $endValue;

    /**
    * @param int $attrId
    */
    public function setAttrId(?int $attrId)
    {
        $this->attrId = $attrId;
    }

    /**
    * @return int
    */
    public function getAttrId(): ?int
    {
        return $this->attrId;
    }

    /**
    * @param string $attrName
    */
    public function setAttrName(?string $attrName)
    {
        $this->attrName = $attrName;
    }

    /**
    * @return string
    */
    public function getAttrName(): ?string
    {
        return $this->attrName;
    }

    /**
    * @param string $startValue
    */
    public function setStartValue(?string $startValue)
    {
        $this->startValue = $startValue;
    }

    /**
    * @return string
    */
    public function getStartValue(): ?string
    {
        return $this->startValue;
    }

    /**
    * @param string $endValue
    */
    public function setEndValue(?string $endValue)
    {
        $this->endValue = $endValue;
    }

    /**
    * @return string
    */
    public function getEndValue(): ?string
    {
        return $this->endValue;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

