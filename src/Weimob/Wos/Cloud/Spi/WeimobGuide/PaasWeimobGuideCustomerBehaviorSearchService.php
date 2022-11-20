<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 727
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobGuideCustomerBehaviorSearchService
{
    const specType = 'wos';

    public function invoke(WeimobGuideCustomerBehaviorSearchRequest $request) : WeimobGuideCustomerBehaviorSearchResponse;
}

class WeimobGuideCustomerBehaviorSearchRequest implements \JsonSerializable
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
    * @var WeimobGuideCustomerBehaviorSearchParam
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
    * @param WeimobGuideCustomerBehaviorSearchParam $param
    */
    public function setParam(?WeimobGuideCustomerBehaviorSearchParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobGuideCustomerBehaviorSearchParam
    */
    public function getParam(): ?WeimobGuideCustomerBehaviorSearchParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerBehaviorSearchParam implements \JsonSerializable
{
    private $queryParameter;

    private $basicInfo;

    private $pageSize;

    private $wid;

    private $pageNum;

    private $bizSceneType;

    /**
    * @param WeimobGuideCustomerBehaviorSearchParamQueryParameter $queryParameter
    */
    public function setQueryParameter(?WeimobGuideCustomerBehaviorSearchParamQueryParameter $queryParameter)
    {
        $this->queryParameter = $queryParameter;
    }

    /**
    * @return WeimobGuideCustomerBehaviorSearchParamQueryParameter
    */
    public function getQueryParameter(): ?WeimobGuideCustomerBehaviorSearchParamQueryParameter
    {
        return $this->queryParameter;
    }

    /**
    * @param WeimobGuideCustomerBehaviorSearchParamBasicInfo $basicInfo
    */
    public function setBasicInfo(?WeimobGuideCustomerBehaviorSearchParamBasicInfo $basicInfo)
    {
        $this->basicInfo = $basicInfo;
    }

    /**
    * @return WeimobGuideCustomerBehaviorSearchParamBasicInfo
    */
    public function getBasicInfo(): ?WeimobGuideCustomerBehaviorSearchParamBasicInfo
    {
        return $this->basicInfo;
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
    * @param int $bizSceneType
    */
    public function setBizSceneType(?int $bizSceneType)
    {
        $this->bizSceneType = $bizSceneType;
    }

    /**
    * @return int
    */
    public function getBizSceneType(): ?int
    {
        return $this->bizSceneType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerBehaviorSearchParamQueryParameter implements \JsonSerializable
{
    private $startTime;

    /**
    * @param string $startTime
    */
    public function setStartTime(?string $startTime)
    {
        $this->startTime = $startTime;
    }

    /**
    * @return string
    */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerBehaviorSearchParamBasicInfo implements \JsonSerializable
{
    private $cid;

    private $vid;

    private $globalvid;

    private $productInstanceId;

    private $merchantId;

    private $productVersionId;

    private $productId;

    private $bosId;

    private $tcode;

    private $vidType;

    /**
    * @param int $cid
    */
    public function setCid(?int $cid)
    {
        $this->cid = $cid;
    }

    /**
    * @return int
    */
    public function getCid(): ?int
    {
        return $this->cid;
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
    * @param int $globalvid
    */
    public function setGlobalvid(?int $globalvid)
    {
        $this->globalvid = $globalvid;
    }

    /**
    * @return int
    */
    public function getGlobalvid(): ?int
    {
        return $this->globalvid;
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
    * @param int $merchantId
    */
    public function setMerchantId(?int $merchantId)
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
    * @param int $productVersionId
    */
    public function setProductVersionId(?int $productVersionId)
    {
        $this->productVersionId = $productVersionId;
    }

    /**
    * @return int
    */
    public function getProductVersionId(): ?int
    {
        return $this->productVersionId;
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
    * @param string $tcode
    */
    public function setTcode(?string $tcode)
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


class WeimobGuideCustomerBehaviorSearchResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobGuideCustomerBehaviorSearchData
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
    * @return WeimobGuideCustomerBehaviorSearchData
    */
    public function getData(): ?WeimobGuideCustomerBehaviorSearchData
    {
        return $this->data;
    }

    /**
    * @param WeimobGuideCustomerBehaviorSearchData $data
    */
    public function setData(?WeimobGuideCustomerBehaviorSearchData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerBehaviorSearchData implements \JsonSerializable
{
    private $pageList;

    private $pageNum;

    private $totalCount;

    private $pageSize;

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

class WeimobGuideCustomerBehaviorSearchDataPageList implements \JsonSerializable
{
    private $values;

    private $pageName;

    private $content;

    private $wid;

    private $bizValue;

    private $timestamp;

    private $bosId;

    private $sessionId;

    private $bizType;

    private $vid;

    /**
    * @param array $values
    */
    public function setValues(?array $values)
    {
        $this->values = $values;
    }

    /**
    * @return array
    */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
    * @param string $pageName
    */
    public function setPageName(?string $pageName)
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
    * @param string $content
    */
    public function setContent(?string $content)
    {
        $this->content = $content;
    }

    /**
    * @return string
    */
    public function getContent(): ?string
    {
        return $this->content;
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

    /**
    * @param string $bizValue
    */
    public function setBizValue(?string $bizValue)
    {
        $this->bizValue = $bizValue;
    }

    /**
    * @return string
    */
    public function getBizValue(): ?string
    {
        return $this->bizValue;
    }

    /**
    * @param string $timestamp
    */
    public function setTimestamp(?string $timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
    * @return string
    */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
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
    * @param string $sessionId
    */
    public function setSessionId(?string $sessionId)
    {
        $this->sessionId = $sessionId;
    }

    /**
    * @return string
    */
    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    /**
    * @param int $bizType
    */
    public function setBizType(?int $bizType)
    {
        $this->bizType = $bizType;
    }

    /**
    * @return int
    */
    public function getBizType(): ?int
    {
        return $this->bizType;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerBehaviorSearchDataValues implements \JsonSerializable
{
    private $value;

    private $key;

    /**
    * @param string $value
    */
    public function setValue(?string $value)
    {
        $this->value = $value;
    }

    /**
    * @return string
    */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
    * @param string $key
    */
    public function setKey(?string $key)
    {
        $this->key = $key;
    }

    /**
    * @return string
    */
    public function getKey(): ?string
    {
        return $this->key;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

