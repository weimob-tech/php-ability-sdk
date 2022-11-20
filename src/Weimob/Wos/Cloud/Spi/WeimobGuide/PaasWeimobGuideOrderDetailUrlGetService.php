<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 733
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobGuideOrderDetailUrlGetService
{
    const specType = 'wos';

    public function invoke(WeimobGuideOrderDetailUrlGetRequest $request) : WeimobGuideOrderDetailUrlGetResponse;
}

class WeimobGuideOrderDetailUrlGetRequest implements \JsonSerializable
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
    * @var WeimobGuideOrderDetailUrlGetParam
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
    * @param WeimobGuideOrderDetailUrlGetParam $param
    */
    public function setParam(?WeimobGuideOrderDetailUrlGetParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobGuideOrderDetailUrlGetParam
    */
    public function getParam(): ?WeimobGuideOrderDetailUrlGetParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideOrderDetailUrlGetParam implements \JsonSerializable
{
    /**
    * 页面类型
    * @var string
    */
    private $pageType;

    /**
    * @param string $pageType
    */
    public function setPageType(?string $pageType)
    {
        $this->pageType = $pageType;
    }

    /**
    * @return string
    */
    public function getPageType(): ?string
    {
        return $this->pageType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideOrderDetailUrlGetResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobGuideOrderDetailUrlGetData
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
    * @return WeimobGuideOrderDetailUrlGetData
    */
    public function getData(): ?WeimobGuideOrderDetailUrlGetData
    {
        return $this->data;
    }

    /**
    * @param WeimobGuideOrderDetailUrlGetData $data
    */
    public function setData(?WeimobGuideOrderDetailUrlGetData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideOrderDetailUrlGetData implements \JsonSerializable
{
    /**
    * 页面路径
    * @var string
    */
    private $urlLink;

    /**
    * @param string $urlLink
    */
    public function setUrlLink(?string $urlLink)
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

