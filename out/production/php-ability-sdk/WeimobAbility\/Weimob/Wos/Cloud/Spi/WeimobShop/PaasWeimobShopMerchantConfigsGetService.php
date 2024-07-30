<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,687
 * @author weimobcloud
 * @create 2024-7-29
 */
interface PaasWeimobShopMerchantConfigsGetService
{
    const specType = 'wos';

    public function invoke(WeimobShopMerchantConfigsGetRequest $request) : WeimobShopMerchantConfigsGetResponse;
}

class WeimobShopMerchantConfigsGetRequest implements \JsonSerializable
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
     * @var WeimobShopMerchantConfigsGetParam
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
     * @param WeimobShopMerchantConfigsGetParam $param
     */
    public function setParams(?WeimobShopMerchantConfigsGetParam $param): void
    {
        $this->params = $param;
    }

    /**
     * @return WeimobShopMerchantConfigsGetParam
     */
    public function getParams(): ?WeimobShopMerchantConfigsGetParam
    {
        return $this->params;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMerchantConfigsGetParam implements \JsonSerializable
{
    /**
     * 业务流程设置请求参数
     * @var array
     */
    private $mallConfigInfoList;

    /**
     * @param array $mallConfigInfoList
     */
    public function setMallConfigInfoList(?array $mallConfigInfoList): void
    {
        $this->mallConfigInfoList = $mallConfigInfoList;
    }

    /**
     * @return array
     */
    public function getMallConfigInfoList(): ?array
    {
        return $this->mallConfigInfoList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMerchantConfigsGetParamMallConfigInfoList implements \JsonSerializable
{
    /**
     * 业务流程设置纬度ID
     * @var string
     */
    private $bizId;

    /**
     * 业务流程设置纬度类型 3: wid
     * @var int
     */
    private $bizType;

    /**
     * 业务流程设置字段
     * @var array
     */
    private $settingFields;

    /**
     * @param string $bizId
     */
    public function setBizId(?string $bizId): void
    {
        $this->bizId = $bizId;
    }

    /**
     * @return string
     */
    public function getBizId(): ?string
    {
        return $this->bizId;
    }

    /**
     * @param int $bizType
     */
    public function setBizType(?int $bizType): void
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
     * @param array $settingFields
     */
    public function setSettingFields(?array $settingFields): void
    {
        $this->settingFields = $settingFields;
    }

    /**
     * @return array
     */
    public function getSettingFields(): ?array
    {
        return $this->settingFields;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobShopMerchantConfigsGetResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobShopMerchantConfigsGetData
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
     * @return WeimobShopMerchantConfigsGetData
     */
    public function getData(): ?WeimobShopMerchantConfigsGetData
    {
        return $this->data;
    }

    /**
     * @param WeimobShopMerchantConfigsGetData $data
     */
    public function setData(?WeimobShopMerchantConfigsGetData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMerchantConfigsGetData implements \JsonSerializable
{
    /**
     * 业务流程设置

商品业务设置：
【goodsPriceType:  0｜1｜2   商品组件价格展示配置：0 - 价格隐藏；1 - 用商城价格显示；2 - 价格用 goodsPriceText 写入文案】
【goodsPriceText：true｜false   商品组件价格展示文案；】    
【promotionTags：true｜false   商品组件促销标签是否展示 true-显示 false - 隐藏】
【addPurchase：true | false     商品组件加购按钮是否展示  true-显示 false - 隐藏】
     * @var array
     */
    private $settingInfo;

    /**
     * 业务流程设置纬度ID
     * @var string
     */
    private $bizId;

    /**
     * 业务流程设置纬度类型 2: bosId, 3: vid, 4: wid
     * @var int
     */
    private $bizType;

    /**
     * @param array $settingInfo
     */
    public function setSettingInfo(?array $settingInfo): void
    {
        $this->settingInfo = $settingInfo;
    }

    /**
     * @return array
     */
    public function getSettingInfo(): ?array
    {
        return $this->settingInfo;
    }

    /**
     * @param string $bizId
     */
    public function setBizId(?string $bizId): void
    {
        $this->bizId = $bizId;
    }

    /**
     * @return string
     */
    public function getBizId(): ?string
    {
        return $this->bizId;
    }

    /**
     * @param int $bizType
     */
    public function setBizType(?int $bizType): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopMerchantConfigsGetDataSettingInfo implements \JsonSerializable
{
    /**
     * 业务流程设置key
     * @var string
     */
    private $settingFields;

    /**
     * 业务流程设置值
     * @var string
     */
    private $settingValue;

    /**
     * @param string $settingFields
     */
    public function setSettingFields(?string $settingFields): void
    {
        $this->settingFields = $settingFields;
    }

    /**
     * @return string
     */
    public function getSettingFields(): ?string
    {
        return $this->settingFields;
    }

    /**
     * @param string $settingValue
     */
    public function setSettingValue(?string $settingValue): void
    {
        $this->settingValue = $settingValue;
    }

    /**
     * @return string
     */
    public function getSettingValue(): ?string
    {
        return $this->settingValue;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

