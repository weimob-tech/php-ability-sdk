<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,853
 * @author weimobcloud
 * @create 2023-5-29
 */
interface PaasGetExternalRecommendGoodsService
{
    const specType = 'xinyun';

    public function execute(SGetExternalRecommendGoodsRequest $request) : SGetExternalRecommendGoodsResponse;
}

class SGetExternalRecommendGoodsRequest implements \JsonSerializable
{
    /**
    * 商业操作系统ID（解决方案体系）
    * @var int
    */
    private $pid;

    /**
    * 签名
    * @var string
    */
    private $sign;

    /**
    * 发送方时间戳，验签的时候使用
    * @var string
    */
    private $timestamp;

    /**
    * @var SGetExternalRecommendGoodsParam
    */
    private $params;

    /**
    * 商业操作系统ID（产品方案体系）
    * @var int
    */
    private $bosId;

    /**
    * actionKey
    * @var string
    */
    private $actionKey;

    /**
    * 组织结构节点ID
    * @var int
    */
    private $vid;

    /**
    * 组织结构节点类型
    * @var int
    */
    private $vType;

    /**
    *  源产品id
    * @var int
    */
    private $originProductId;

    /**
    * 目标产品id
    * @var int
    */
    private $targetProductId;

    /**
    * 源代产品实例id
    * @var int
    */
    private $originProductInstanceId;

    /**
    * 目标产品实例id
    * @var int
    */
    private $targetProductInstanceId;

    /**
    * 功能集ID
    * @var int
    */
    private $functionId;

    /**
    * @return int
    */
    public function getPid(): ?int
    {
        return $this->pid;
    }

    /**
    * @param int $pid
    */
    public function setPid(?int $pid): void
    {
        $this->pid = $pid;
    }

    /**
    * @return string
    */
    public function getSign(): ?string
    {
        return $this->sign;
    }

    /**
    * @param string $sign
    */
    public function setSign(?string $sign): void
    {
        $this->sign = $sign;
    }

    /**
    * @return string
    */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }

    /**
    * @param string $timestamp
    */
    public function setTimestamp(?string $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
    * @param SGetExternalRecommendGoodsParam $param
    */
    public function setParams(?SGetExternalRecommendGoodsParam $param): void
    {
        $this->params = $param;
    }

    /**
    * @return SGetExternalRecommendGoodsParam
    */
    public function getParams(): ?SGetExternalRecommendGoodsParam
    {
        return $this->params;
    }

    /**
    * @return int
    */
    public function getBosId(): ?int
    {
        return $this->bosId;
    }

    /**
    * @param int $bosId
    */
    public function setBosId(?int $bosId): void
    {
        $this->bosId = $bosId;
    }

    /**
    * @return string
    */
    public function getActionKey(): ?string
    {
        return $this->actionKey;
    }

    /**
    * @param string $actionKey
    */
    public function setActionKey(?string $actionKey): void
    {
        $this->actionKey = $actionKey;
    }

    /**
    * @return int
    */
    public function getVid(): ?int
    {
        return $this->vid;
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
    public function getVType(): ?int
    {
        return $this->vType;
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
    public function getOriginProductId(): ?int
    {
        return $this->originProductId;
    }

    /**
    * @param int $originProductId
    */
    public function setOriginProductId(?int $originProductId): void
    {
        $this->originProductId = $originProductId;
    }

    /**
    * @return int
    */
    public function getTargetProductId(): ?int
    {
        return $this->targetProductId;
    }

    /**
    * @param int $targetProductId
    */
    public function setTargetProductId(?int $targetProductId): void
    {
        $this->targetProductId = $targetProductId;
    }

    /**
    * @return int
    */
    public function getOriginProductInstanceId(): ?int
    {
        return $this->originProductInstanceId;
    }

    /**
    * @param int $originProductInstanceId
    */
    public function setOriginProductInstanceId(?int $originProductInstanceId): void
    {
        $this->originProductInstanceId = $originProductInstanceId;
    }

    /**
    * @return int
    */
    public function getTargetProductInstanceId(): ?int
    {
        return $this->targetProductInstanceId;
    }

    /**
    * @param int $targetProductInstanceId
    */
    public function setTargetProductInstanceId(?int $targetProductInstanceId): void
    {
        $this->targetProductInstanceId = $targetProductInstanceId;
    }

    /**
    * @return int
    */
    public function getFunctionId(): ?int
    {
        return $this->functionId;
    }

    /**
    * @param int $functionId
    */
    public function setFunctionId(?int $functionId): void
    {
        $this->functionId = $functionId;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SGetExternalRecommendGoodsParam implements \JsonSerializable
{
    /**
     * 推荐场景的商品ID，如购物车内商品的商品ID
     * @var array
     */
    private $goodsIdList;

    /**
     * 推荐场景:1-支付完成页，2-搜索空结果页，3-购物车页，4-评论成功页，5-商品详情页，6-失效专题页，7-海报扫码空态页
     * @var int
     */
    private $sceneId;

    /**
     * 商户ID
     * @var int
     */
    private $pid;

    /**
     * 用户ID
     * @var int
     */
    private $wid;

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
     * @param int $pid
     */
    public function setPid(?int $pid): void
    {
        $this->pid = $pid;
    }

    /**
     * @return int
     */
    public function getPid(): ?int
    {
        return $this->pid;
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


class SGetExternalRecommendGoodsResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SGetExternalRecommendGoodsData
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
     * @return SGetExternalRecommendGoodsData
     */
    public function getData(): ?SGetExternalRecommendGoodsData
    {
        return $this->data;
    }

    /**
     * @param SGetExternalRecommendGoodsData $data
     */
    public function setData(?SGetExternalRecommendGoodsData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SGetExternalRecommendGoodsData implements \JsonSerializable
{
    /**
     * 推荐商品ID列表
     * @var array
     */
    private $recommendGoodsIdList;

    /**
     * 当前场景是否要使用PaaS返回的商品ID
     * @var bool
     */
    private $sceneSwitchOn;

    /**
     * 需要展示的数量，取值范围为0~100
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

