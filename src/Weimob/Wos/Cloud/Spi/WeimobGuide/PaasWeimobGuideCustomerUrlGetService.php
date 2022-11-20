<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 749
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobGuideCustomerUrlGetService
{
    const specType = 'wos';

    public function invoke(WeimobGuideCustomerUrlGetRequest $request) : WeimobGuideCustomerUrlGetResponse;
}

class WeimobGuideCustomerUrlGetRequest implements \JsonSerializable
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
     * @var WeimobGuideCustomerUrlGetParam
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
     * @param WeimobGuideCustomerUrlGetParam $param
     */
    public function setParam(?WeimobGuideCustomerUrlGetParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobGuideCustomerUrlGetParam
     */
    public function getParam(): ?WeimobGuideCustomerUrlGetParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerUrlGetParam implements \JsonSerializable
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
     * 产品实例id	
     * @var int
     */
    private $productInstanceId;

    /**
     * 组织结构节点	
     * @var int
     */
    private $vidType;

    /**
     * 客户wid
     * @var int
     */
    private $queryWid;

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
     * @param int $queryWid
     */
    public function setQueryWid(?int $queryWid): void
    {
        $this->queryWid = $queryWid;
    }

    /**
     * @return int
     */
    public function getQueryWid(): ?int
    {
        return $this->queryWid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideCustomerUrlGetResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobGuideCustomerUrlGetData
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
     * @return WeimobGuideCustomerUrlGetData
     */
    public function getData(): ?WeimobGuideCustomerUrlGetData
    {
        return $this->data;
    }

    /**
     * @param WeimobGuideCustomerUrlGetData $data
     */
    public function setData(?WeimobGuideCustomerUrlGetData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerUrlGetData implements \JsonSerializable
{
    /**
     * 虚拟url
     * @var string
     */
    private $urlLink;

    /**
     * @param string $urlLink
     */
    public function setUrlLink(?string $urlLink): void
    {
        $this->urlLink = $urlLink;
    }

    /**
     * @return string
     */
    public function getUrlLink(): ?string
    {
        return $this->urlLink;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

