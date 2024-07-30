<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,198
 * @author weimobcloud
 * @create 2024-7-29
 */
interface PaasWeimobShopGoodsPaasGoodsListService
{
    const specType = 'wos';

    public function invoke(WeimobShopGoodsPaasGoodsListRequest $request) : WeimobShopGoodsPaasGoodsListResponse;
}

class WeimobShopGoodsPaasGoodsListRequest implements \JsonSerializable
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
     * @var WeimobShopGoodsPaasGoodsListParam
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
     * @param WeimobShopGoodsPaasGoodsListParam $param
     */
    public function setParams(?WeimobShopGoodsPaasGoodsListParam $param): void
    {
        $this->params = $param;
    }

    /**
     * @return WeimobShopGoodsPaasGoodsListParam
     */
    public function getParams(): ?WeimobShopGoodsPaasGoodsListParam
    {
        return $this->params;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopGoodsPaasGoodsListParam implements \JsonSerializable
{
    /**
     * 搜索信息（非前端paas自定义入参传入）
     * @var WeimobShopGoodsPaasGoodsListParamQueryGoodsListParam
     */
    private $queryGoodsListParam;

    /**
     * 搜索框前端paas自定义入参（江南布衣必填）
     * @var object
     */
    private $passData;

    /**
     * @param WeimobShopGoodsPaasGoodsListParamQueryGoodsListParam $queryGoodsListParam
     */
    public function setQueryGoodsListParam(?WeimobShopGoodsPaasGoodsListParamQueryGoodsListParam $queryGoodsListParam): void
    {
        $this->queryGoodsListParam = $queryGoodsListParam;
    }

    /**
     * @return WeimobShopGoodsPaasGoodsListParamQueryGoodsListParam
     */
    public function getQueryGoodsListParam(): ?WeimobShopGoodsPaasGoodsListParamQueryGoodsListParam
    {
        return $this->queryGoodsListParam;
    }

    /**
     * @param object $passData
     */
    public function setPassData(?object $passData): void
    {
        $this->passData = $passData;
    }

    /**
     * @return object
     */
    public function getPassData(): ?object
    {
        return $this->passData;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopGoodsPaasGoodsListParamQueryGoodsListParam implements \JsonSerializable
{
    /**
     * 搜索内容
     * @var string
     */
    private $search;

    /**
     * 分组id
     * @var int
     */
    private $classifyId;

    /**
     * @param string $search
     */
    public function setSearch(?string $search): void
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
     * @param int $classifyId
     */
    public function setClassifyId(?int $classifyId): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobShopGoodsPaasGoodsListResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobShopGoodsPaasGoodsListData
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
     * @return WeimobShopGoodsPaasGoodsListData
     */
    public function getData(): ?WeimobShopGoodsPaasGoodsListData
    {
        return $this->data;
    }

    /**
     * @param WeimobShopGoodsPaasGoodsListData $data
     */
    public function setData(?WeimobShopGoodsPaasGoodsListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopGoodsPaasGoodsListData implements \JsonSerializable
{
    /**
     * 返回的c端商品列表商品id
     * @var array
     */
    private $goodsIdList;

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

