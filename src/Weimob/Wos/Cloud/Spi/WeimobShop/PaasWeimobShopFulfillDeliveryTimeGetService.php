<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,519
 * @author weimobcloud
 * @create 2023-5-23
 */
interface PaasWeimobShopFulfillDeliveryTimeGetService
{
    const specType = 'wos';

    public function invoke(WeimobShopFulfillDeliveryTimeGetRequest $request) : WeimobShopFulfillDeliveryTimeGetResponse;
}

class WeimobShopFulfillDeliveryTimeGetRequest implements \JsonSerializable
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
     * @var WeimobShopFulfillDeliveryTimeGetParam
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
     * @param WeimobShopFulfillDeliveryTimeGetParam $param
     */
    public function setParam(?WeimobShopFulfillDeliveryTimeGetParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobShopFulfillDeliveryTimeGetParam
     */
    public function getParam(): ?WeimobShopFulfillDeliveryTimeGetParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryTimeGetParam implements \JsonSerializable
{
    /**
     * 地址信息
     * @var WeimobShopFulfillDeliveryTimeGetParamAddressInfo
     */
    private $addressInfo;

    /**
     * 商品信息列表
     * @var array
     */
    private $goodsInfoList;

    /**
     * 微盟新商业操作系统 ID。WOS 体系下商家创建店铺时，会自动生成 bosId，是店铺的唯一标识。可以在商家后台店铺设置的组织架构页面获取该 ID，也可以通过 bos/info/get 接口获取该 ID。
     * @var int
     */
    private $bosId;

    /**
     * 组织结构节点
     * @var int
     */
    private $vid;

    /**
     * 组织架构节点类型。类型包括：1-集团；2-品牌；3-区域；4部门；5-商场；6-楼层；10-门店；11-网点；100-自提点。
     * @var int
     */
    private $vidType;

    /**
     * @param WeimobShopFulfillDeliveryTimeGetParamAddressInfo $addressInfo
     */
    public function setAddressInfo(?WeimobShopFulfillDeliveryTimeGetParamAddressInfo $addressInfo): void
    {
        $this->addressInfo = $addressInfo;
    }

    /**
     * @return WeimobShopFulfillDeliveryTimeGetParamAddressInfo
     */
    public function getAddressInfo(): ?WeimobShopFulfillDeliveryTimeGetParamAddressInfo
    {
        return $this->addressInfo;
    }

    /**
     * @param array $goodsInfoList
     */
    public function setGoodsInfoList(?array $goodsInfoList): void
    {
        $this->goodsInfoList = $goodsInfoList;
    }

    /**
     * @return array
     */
    public function getGoodsInfoList(): ?array
    {
        return $this->goodsInfoList;
    }

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryTimeGetParamAddressInfo implements \JsonSerializable
{
    /**
     * 经度
     * @var int
     */
    private $longitude;

    /**
     * 纬度
     * @var int
     */
    private $latitude;

    /**
     * @param int $longitude
     */
    public function setLongitude(?int $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return int
     */
    public function getLongitude(): ?int
    {
        return $this->longitude;
    }

    /**
     * @param int $latitude
     */
    public function setLatitude(?int $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return int
     */
    public function getLatitude(): ?int
    {
        return $this->latitude;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryTimeGetParamGoodsInfoList implements \JsonSerializable
{
    /**
     * 当前商品所属组织结构节点
     * @var int
     */
    private $vid;

    /**
     * 同城配送模板id
     * @var int
     */
    private $templateId;

    /**
     * 商品goodsId列表
     * @var array
     */
    private $goodsIdList;

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


class WeimobShopFulfillDeliveryTimeGetResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobShopFulfillDeliveryTimeGetData
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
     * @return WeimobShopFulfillDeliveryTimeGetData
     */
    public function getData(): ?WeimobShopFulfillDeliveryTimeGetData
    {
        return $this->data;
    }

    /**
     * @param WeimobShopFulfillDeliveryTimeGetData $data
     */
    public function setData(?WeimobShopFulfillDeliveryTimeGetData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryTimeGetData implements \JsonSerializable
{
    /**
     * 可选配送时间列表
     * @var array
     */
    private $deliveryTimeList;

    /**
     * @param array $deliveryTimeList
     */
    public function setDeliveryTimeList(?array $deliveryTimeList): void
    {
        $this->deliveryTimeList = $deliveryTimeList;
    }

    /**
     * @return array
     */
    public function getDeliveryTimeList(): ?array
    {
        return $this->deliveryTimeList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryTimeGetDataDeliveryTimeList implements \JsonSerializable
{
    /**
     * 配送时间。注意：1. 配送日期按日期升序返回  2. 同一配送日期内配送时间段按升序返回  3. 已早于当前时间的日期和时间段应过滤后返回。4. 集合长度限制为365以内
     * @var array
     */
    private $dateTimeList;

    /**
     * 同城配送模板id，与入参同城配送模板id一一对应
     * @var int
     */
    private $templateId;

    /**
     * 组织结构节点，与入参商品归属组织结构节点一一对应
     * @var int
     */
    private $vid;

    /**
     * @param array $dateTimeList
     */
    public function setDateTimeList(?array $dateTimeList): void
    {
        $this->dateTimeList = $dateTimeList;
    }

    /**
     * @return array
     */
    public function getDateTimeList(): ?array
    {
        return $this->dateTimeList;
    }

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFulfillDeliveryTimeGetDataDateTimeList implements \JsonSerializable
{
    /**
     * 配送日期，格式：yyyy-MM-dd
     * @var string
     */
    private $date;

    /**
     * 配送时间段，格式：HH:mm。24h制。长度限制15个。
     * @var array
     */
    private $time;

    /**
     * @param string $date
     */
    public function setDate(?string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @param array $time
     */
    public function setTime(?array $time): void
    {
        $this->time = $time;
    }

    /**
     * @return array
     */
    public function getTime(): ?array
    {
        return $this->time;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

