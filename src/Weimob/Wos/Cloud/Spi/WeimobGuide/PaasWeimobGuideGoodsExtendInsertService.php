<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 737
 * @author weimobcloud
 * @create 2023-5-26
 */
interface PaasWeimobGuideGoodsExtendInsertService
{
    const specType = 'wos';

    public function invoke(WeimobGuideGoodsExtendInsertRequest $request) : WeimobGuideGoodsExtendInsertResponse;
}

class WeimobGuideGoodsExtendInsertRequest implements \JsonSerializable
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
     * @var WeimobGuideGoodsExtendInsertParam
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
     * @param WeimobGuideGoodsExtendInsertParam $param
     */
    public function setParams(?WeimobGuideGoodsExtendInsertParam $param): void
    {
        $this->params = $param;
    }

    /**
     * @return WeimobGuideGoodsExtendInsertParam
     */
    public function getParams(): ?WeimobGuideGoodsExtendInsertParam
    {
        return $this->params;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsExtendInsertParam implements \JsonSerializable
{
    /**
     * 打标商品列表
     * @var array
     */
    private $goodsExtList;

    /**
     * @param array $goodsExtList
     */
    public function setGoodsExtList(?array $goodsExtList): void
    {
        $this->goodsExtList = $goodsExtList;
    }

    /**
     * @return array
     */
    public function getGoodsExtList(): ?array
    {
        return $this->goodsExtList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsExtendInsertParamGoodsExtList implements \JsonSerializable
{
    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * 节点id
     * @var int
     */
    private $vid;

    /**
     * 打标字段
     * @var string
     */
    private $key;

    /**
     * 打标值
     * @var array
     */
    private $value;

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
     * @param string $key
     */
    public function setKey(?string $key): void
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

    /**
     * @param array $value
     */
    public function setValue(?array $value): void
    {
        $this->value = $value;
    }

    /**
     * @return array
     */
    public function getValue(): ?array
    {
        return $this->value;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideGoodsExtendInsertResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobGuideGoodsExtendInsertData
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
     * @return WeimobGuideGoodsExtendInsertData
     */
    public function getData(): ?WeimobGuideGoodsExtendInsertData
    {
        return $this->data;
    }

    /**
     * @param WeimobGuideGoodsExtendInsertData $data
     */
    public function setData(?WeimobGuideGoodsExtendInsertData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsExtendInsertData implements \JsonSerializable
{
    /**
     * 记录id
     * @var int
     */
    private $id;

    /**
     * @param int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

