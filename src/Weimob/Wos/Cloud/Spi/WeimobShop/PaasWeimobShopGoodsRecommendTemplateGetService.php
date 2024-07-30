<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,669
 * @author weimobcloud
 * @create 2024-7-29
 */
interface PaasWeimobShopGoodsRecommendTemplateGetService
{
    const specType = 'wos';

    public function invoke(WeimobShopGoodsRecommendTemplateGetRequest $request) : WeimobShopGoodsRecommendTemplateGetResponse;
}

class WeimobShopGoodsRecommendTemplateGetRequest implements \JsonSerializable
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
     * @var WeimobShopGoodsRecommendTemplateGetParam
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
     * @param WeimobShopGoodsRecommendTemplateGetParam $param
     */
    public function setParams(?WeimobShopGoodsRecommendTemplateGetParam $param): void
    {
        $this->params = $param;
    }

    /**
     * @return WeimobShopGoodsRecommendTemplateGetParam
     */
    public function getParams(): ?WeimobShopGoodsRecommendTemplateGetParam
    {
        return $this->params;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopGoodsRecommendTemplateGetParam implements \JsonSerializable
{
    /**
     * 登录账号id
     * @var int
     */
    private $wid;

    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * 进店门店id
     * @var int
     */
    private $storeId;

    /**
     * @param int $wid
     */
    public function setWid(?int $wid): void
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
     * @param int $storeId
     */
    public function setStoreId(?int $storeId): void
    {
        $this->storeId = $storeId;
    }

    /**
     * @return int
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobShopGoodsRecommendTemplateGetResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobShopGoodsRecommendTemplateGetData
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
     * @return WeimobShopGoodsRecommendTemplateGetData
     */
    public function getData(): ?WeimobShopGoodsRecommendTemplateGetData
    {
        return $this->data;
    }

    /**
     * @param WeimobShopGoodsRecommendTemplateGetData $data
     */
    public function setData(?WeimobShopGoodsRecommendTemplateGetData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopGoodsRecommendTemplateGetData implements \JsonSerializable
{
    /**
     * 商详模板实例id（系统模板可以不返回）
     * @var int
     */
    private $templateId;

    /**
     * 推荐paas模板id（系统模板可以不返回）
     * @var int
     */
    private $paasTemplateId;

    /**
     * 商详页模板类型：1-系统模板 2-paas模板
     * @var int
     */
    private $templateBizType;

    /**
     * @param int $templateId
     */
    public function setTemplateId(?int $templateId): void
    {
        $this->templateId = $templateId;
    }

    /**
     * @return int
     */
    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }

    /**
     * @param int $paasTemplateId
     */
    public function setPaasTemplateId(?int $paasTemplateId): void
    {
        $this->paasTemplateId = $paasTemplateId;
    }

    /**
     * @return int
     */
    public function getPaasTemplateId(): ?int
    {
        return $this->paasTemplateId;
    }

    /**
     * @param int $templateBizType
     */
    public function setTemplateBizType(?int $templateBizType): void
    {
        $this->templateBizType = $templateBizType;
    }

    /**
     * @return int
     */
    public function getTemplateBizType(): ?int
    {
        return $this->templateBizType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

