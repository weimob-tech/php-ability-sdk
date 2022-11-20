<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 729
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobGuideCouponDetailGetService
{
    const specType = 'wos';

    public function invoke(WeimobGuideCouponDetailGetRequest $request) : WeimobGuideCouponDetailGetResponse;
}

class WeimobGuideCouponDetailGetRequest implements \JsonSerializable
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
     * @var WeimobGuideCouponDetailGetParam
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
     * @param WeimobGuideCouponDetailGetParam $param
     */
    public function setParam(?WeimobGuideCouponDetailGetParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobGuideCouponDetailGetParam
     */
    public function getParam(): ?WeimobGuideCouponDetailGetParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCouponDetailGetParam implements \JsonSerializable
{
    /**
     * 客户wid
     * @var int
     */
    private $wid;

    /**
     * 券id列表
     * @var array
     */
    private $couponTemplateIds;

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
     * @param array $couponTemplateIds
     */
    public function setCouponTemplateIds(?array $couponTemplateIds): void
    {
        $this->couponTemplateIds = $couponTemplateIds;
    }

    /**
     * @return array
     */
    public function getCouponTemplateIds(): ?array
    {
        return $this->couponTemplateIds;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideCouponDetailGetResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobGuideCouponDetailGetData
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
     * @return WeimobGuideCouponDetailGetData
     */
    public function getData(): ?WeimobGuideCouponDetailGetData
    {
        return $this->data;
    }

    /**
     * @param WeimobGuideCouponDetailGetData $data
     */
    public function setData(?WeimobGuideCouponDetailGetData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCouponDetailGetData implements \JsonSerializable
{
    /**
     * 领取开始时间
     * @var WeimobGuideCouponDetailGetDataRecommendStartTime
     */
    private $recommendStartTime;

    /**
     * 领取结束时间
     * @var WeimobGuideCouponDetailGetDataRecommendEndTime
     */
    private $recommendEndTime;

    /**
     * 有效期
     * @var WeimobGuideCouponDetailGetDataValidDate
     */
    private $validDate;

    /**
     * 券id
     * @var int
     */
    private $couponTemplateId;

    /**
     * 券名称
     * @var string
     */
    private $name;

    /**
     * 过期状态:(0:不可用；1:可用；2:已过期；10:已解除绑定)
     * @var int
     */
    private $status;

    /**
     * 券面默认url
     * @var string
     */
    private $imageUrl;

    /**
     * 券平台类型:(1微盟，2微信 3支付宝)
     * @var int
     */
    private $platformType;

    /**
     * 优惠券类型 :(1:代金券；2:折扣券；3:兑换券; 5随机券)
     * @var int
     */
    private $couponType;

    /**
     * 库存
     * @var int
     */
    private $stock;

    /**
     * @param WeimobGuideCouponDetailGetDataRecommendStartTime $recommendStartTime
     */
    public function setRecommendStartTime(?WeimobGuideCouponDetailGetDataRecommendStartTime $recommendStartTime): void
    {
        $this->recommendStartTime = $recommendStartTime;
    }

    /**
     * @return WeimobGuideCouponDetailGetDataRecommendStartTime
     */
    public function getRecommendStartTime(): ?WeimobGuideCouponDetailGetDataRecommendStartTime
    {
        return $this->recommendStartTime;
    }

    /**
     * @param WeimobGuideCouponDetailGetDataRecommendEndTime $recommendEndTime
     */
    public function setRecommendEndTime(?WeimobGuideCouponDetailGetDataRecommendEndTime $recommendEndTime): void
    {
        $this->recommendEndTime = $recommendEndTime;
    }

    /**
     * @return WeimobGuideCouponDetailGetDataRecommendEndTime
     */
    public function getRecommendEndTime(): ?WeimobGuideCouponDetailGetDataRecommendEndTime
    {
        return $this->recommendEndTime;
    }

    /**
     * @param WeimobGuideCouponDetailGetDataValidDate $validDate
     */
    public function setValidDate(?WeimobGuideCouponDetailGetDataValidDate $validDate): void
    {
        $this->validDate = $validDate;
    }

    /**
     * @return WeimobGuideCouponDetailGetDataValidDate
     */
    public function getValidDate(): ?WeimobGuideCouponDetailGetDataValidDate
    {
        return $this->validDate;
    }

    /**
     * @param int $couponTemplateId
     */
    public function setCouponTemplateId(?int $couponTemplateId): void
    {
        $this->couponTemplateId = $couponTemplateId;
    }

    /**
     * @return int
     */
    public function getCouponTemplateId(): ?int
    {
        return $this->couponTemplateId;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param int $status
     */
    public function setStatus(?int $status): void
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
     * @param string $imageUrl
     */
    public function setImageUrl(?string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return string
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * @param int $platformType
     */
    public function setPlatformType(?int $platformType): void
    {
        $this->platformType = $platformType;
    }

    /**
     * @return int
     */
    public function getPlatformType(): ?int
    {
        return $this->platformType;
    }

    /**
     * @param int $couponType
     */
    public function setCouponType(?int $couponType): void
    {
        $this->couponType = $couponType;
    }

    /**
     * @return int
     */
    public function getCouponType(): ?int
    {
        return $this->couponType;
    }

    /**
     * @param int $stock
     */
    public function setStock(?int $stock): void
    {
        $this->stock = $stock;
    }

    /**
     * @return int
     */
    public function getStock(): ?int
    {
        return $this->stock;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCouponDetailGetDataRecommendStartTime implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCouponDetailGetDataRecommendEndTime implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCouponDetailGetDataValidDate implements \JsonSerializable
{
    /**
     * 有效期开始时间
     * @var WeimobGuideCouponDetailGetDataUseStartTime
     */
    private $useStartTime;

    /**
     * 使用结束时间
     * @var WeimobGuideCouponDetailGetDataUseEndTime
     */
    private $useEndTime;

    /**
     * 有效天数
     * @var int
     */
    private $validDays;

    /**
     * 有效期描述
     * @var string
     */
    private $validDateDesc;

    /**
     * @param WeimobGuideCouponDetailGetDataUseStartTime $useStartTime
     */
    public function setUseStartTime(?WeimobGuideCouponDetailGetDataUseStartTime $useStartTime): void
    {
        $this->useStartTime = $useStartTime;
    }

    /**
     * @return WeimobGuideCouponDetailGetDataUseStartTime
     */
    public function getUseStartTime(): ?WeimobGuideCouponDetailGetDataUseStartTime
    {
        return $this->useStartTime;
    }

    /**
     * @param WeimobGuideCouponDetailGetDataUseEndTime $useEndTime
     */
    public function setUseEndTime(?WeimobGuideCouponDetailGetDataUseEndTime $useEndTime): void
    {
        $this->useEndTime = $useEndTime;
    }

    /**
     * @return WeimobGuideCouponDetailGetDataUseEndTime
     */
    public function getUseEndTime(): ?WeimobGuideCouponDetailGetDataUseEndTime
    {
        return $this->useEndTime;
    }

    /**
     * @param int $validDays
     */
    public function setValidDays(?int $validDays): void
    {
        $this->validDays = $validDays;
    }

    /**
     * @return int
     */
    public function getValidDays(): ?int
    {
        return $this->validDays;
    }

    /**
     * @param string $validDateDesc
     */
    public function setValidDateDesc(?string $validDateDesc): void
    {
        $this->validDateDesc = $validDateDesc;
    }

    /**
     * @return string
     */
    public function getValidDateDesc(): ?string
    {
        return $this->validDateDesc;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCouponDetailGetDataUseStartTime implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCouponDetailGetDataUseEndTime implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

