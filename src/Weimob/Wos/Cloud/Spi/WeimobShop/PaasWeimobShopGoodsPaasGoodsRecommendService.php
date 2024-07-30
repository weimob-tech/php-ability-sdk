<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,197
 * @author weimobcloud
 * @create 2024-7-29
 */
interface PaasWeimobShopGoodsPaasGoodsRecommendService
{
    const specType = 'wos';

    public function invoke(WeimobShopGoodsPaasGoodsRecommendRequest $request) : WeimobShopGoodsPaasGoodsRecommendResponse;
}

class WeimobShopGoodsPaasGoodsRecommendRequest implements \JsonSerializable
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
     * @var WeimobShopGoodsPaasGoodsRecommendParam
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
     * @param WeimobShopGoodsPaasGoodsRecommendParam $param
     */
    public function setParams(?WeimobShopGoodsPaasGoodsRecommendParam $param): void
    {
        $this->params = $param;
    }

    /**
     * @return WeimobShopGoodsPaasGoodsRecommendParam
     */
    public function getParams(): ?WeimobShopGoodsPaasGoodsRecommendParam
    {
        return $this->params;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopGoodsPaasGoodsRecommendParam implements \JsonSerializable
{
    /**
     * bosId
     * @var int
     */
    private $bosId;

    /**
     * 场景商品id集合
     * @var array
     */
    private $goodsIdList;

    /**
     * 产品id
     * @var int
     */
    private $productId;

    /**
     * 产品实例id
     * @var int
     */
    private $productInstanceId;

    /**
     * 推荐场景 : 1-支付完成页，2-搜索空结果页，3-购物车页，4-评论成功页，5-商品详情页，6-失效专题页，7-海报扫码空态页
     * @var int
     */
    private $sceneId;

    /**
     * 租户
     * @var string
     */
    private $tcode;

    /**
     * 节点id
     * @var int
     */
    private $vid;

    /**
     * 节点类型2-品牌 5-商场10-门店
     * @var int
     */
    private $vidType;

    /**
     * 登录账号id
     * @var int
     */
    private $wid;

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
     * @param int $sceneId
     */
    public function setSceneId(?int $sceneId): void
    {
        $this->sceneId = $sceneId;
    }

    /**
     * @return int
     */
    public function getSceneId(): ?int
    {
        return $this->sceneId;
    }

    /**
     * @param string $tcode
     */
    public function setTcode(?string $tcode): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobShopGoodsPaasGoodsRecommendResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobShopGoodsPaasGoodsRecommendData
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
     * @return WeimobShopGoodsPaasGoodsRecommendData
     */
    public function getData(): ?WeimobShopGoodsPaasGoodsRecommendData
    {
        return $this->data;
    }

    /**
     * @param WeimobShopGoodsPaasGoodsRecommendData $data
     */
    public function setData(?WeimobShopGoodsPaasGoodsRecommendData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopGoodsPaasGoodsRecommendData implements \JsonSerializable
{
    /**
     * paas返回的外部推荐商品id
     * @var array
     */
    private $recommendGoodsIdList;

    /**
     * 当前场景是否要使用paas返回的商品id
     * @var bool
     */
    private $sceneSwitchOn;

    /**
     * 需要展示的数量min:0，max:100
     * @var int
     */
    private $displayCount;

    /**
     * @param array $recommendGoodsIdList
     */
    public function setRecommendGoodsIdList(?array $recommendGoodsIdList): void
    {
        $this->recommendGoodsIdList = $recommendGoodsIdList;
    }

    /**
     * @return array
     */
    public function getRecommendGoodsIdList(): ?array
    {
        return $this->recommendGoodsIdList;
    }

    /**
     * @param bool $sceneSwitchOn
     */
    public function setSceneSwitchOn(?bool $sceneSwitchOn): void
    {
        $this->sceneSwitchOn = $sceneSwitchOn;
    }

    /**
     * @return bool
     */
    public function getSceneSwitchOn(): ?bool
    {
        return $this->sceneSwitchOn;
    }

    /**
     * @param int $displayCount
     */
    public function setDisplayCount(?int $displayCount): void
    {
        $this->displayCount = $displayCount;
    }

    /**
     * @return int
     */
    public function getDisplayCount(): ?int
    {
        return $this->displayCount;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

