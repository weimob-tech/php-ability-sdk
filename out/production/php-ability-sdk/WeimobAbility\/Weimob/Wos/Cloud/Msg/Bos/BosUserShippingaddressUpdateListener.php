<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\Bos;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,440
 * @author weimobcloud
 * @create 2023-5-23
 */
interface BosUserShippingaddressUpdateListener
{
    const topic = 'bos.user.shippingaddress';
    const event = 'update';
    const classType = UpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateMessage implements \JsonSerializable
{
    /**
     * 收货地址详细信息
     * @var BosUserShippingaddressUpdateAddressInfo
     */
    private $addressInfo;

    /**
     * 操作类型 1.新增 2.编辑 3.删除
     * @var int
     */
    private $operateType;

    /**
     * 用户id
     * @var int
     */
    private $wid;

    /**
     * 收货地址唯一id
     * @var int
     */
    private $addressId;

    /**
     * @param BosUserShippingaddressUpdateAddressInfo $addressInfo
     */
    public function setAddressInfo(?BosUserShippingaddressUpdateAddressInfo $addressInfo): void
    {
        $this->addressInfo = $addressInfo;
    }

    /**
     * @return BosUserShippingaddressUpdateAddressInfo
     */
    public function getAddressInfo(): ?BosUserShippingaddressUpdateAddressInfo
    {
        return $this->addressInfo;
    }

    /**
     * @param int $operateType
     */
    public function setOperateType(?int $operateType): void
    {
        $this->operateType = $operateType;
    }

    /**
     * @return int
     */
    public function getOperateType(): ?int
    {
        return $this->operateType;
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

    /**
     * @param int $addressId
     */
    public function setAddressId(?int $addressId): void
    {
        $this->addressId = $addressId;
    }

    /**
     * @return int
     */
    public function getAddressId(): ?int
    {
        return $this->addressId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class BosUserShippingaddressUpdateAddressInfo implements \JsonSerializable
{
    /**
     * 收货地址唯一id
     * @var int
     */
    private $addressId;

    /**
     * 用户id
     * @var int
     */
    private $wid;

    /**
     * 国家代码
     * @var string
     */
    private $countryCode;

    /**
     * 国家名称
     * @var string
     */
    private $countryName;

    /**
     * 省份代码
     * @var string
     */
    private $provinceCode;

    /**
     * 省份名称
     * @var string
     */
    private $provinceName;

    /**
     * 城市代码
     * @var string
     */
    private $cityCode;

    /**
     * 城市名称
     * @var string
     */
    private $cityName;

    /**
     * 区代码
     * @var string
     */
    private $districtCode;

    /**
     * 区名称
     * @var string
     */
    private $districtName;

    /**
     * 街道代码
     * @var string
     */
    private $streetCode;

    /**
     * 街道名称
     * @var string
     */
    private $streetName;

    /**
     * 详细地址
     * @var string
     */
    private $address;

    /**
     * 门牌号
     * @var string
     */
    private $houseNumber;

    /**
     * 详细地址(包含省市区)
     * @var string
     */
    private $fullAddress;

    /**
     * 是否默认地址 0否 1是
     * @var int
     */
    private $isDefault;

    /**
     * 收货人姓名
     * @var string
     */
    private $name;

    /**
     * 电话区号
     * @var string
     */
    private $phoneZone;

    /**
     * 收货人电话
     * @var string
     */
    private $phone;

    /**
     * 使用语言
     * @var string
     */
    private $language;

    /**
     * 邮编
     * @var string
     */
    private $postalCode;

    /**
     * 地图类型
(1, "高德地图"),
(2, "谷歌地图"),
(3, "百度地图"),
(4, "腾讯地图")
     * @var int
     */
    private $mapType;

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
     * @param int $addressId
     */
    public function setAddressId(?int $addressId): void
    {
        $this->addressId = $addressId;
    }

    /**
     * @return int
     */
    public function getAddressId(): ?int
    {
        return $this->addressId;
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

    /**
     * @param string $countryCode
     */
    public function setCountryCode(?string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return string
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryName
     */
    public function setCountryName(?string $countryName): void
    {
        $this->countryName = $countryName;
    }

    /**
     * @return string
     */
    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    /**
     * @param string $provinceCode
     */
    public function setProvinceCode(?string $provinceCode): void
    {
        $this->provinceCode = $provinceCode;
    }

    /**
     * @return string
     */
    public function getProvinceCode(): ?string
    {
        return $this->provinceCode;
    }

    /**
     * @param string $provinceName
     */
    public function setProvinceName(?string $provinceName): void
    {
        $this->provinceName = $provinceName;
    }

    /**
     * @return string
     */
    public function getProvinceName(): ?string
    {
        return $this->provinceName;
    }

    /**
     * @param string $cityCode
     */
    public function setCityCode(?string $cityCode): void
    {
        $this->cityCode = $cityCode;
    }

    /**
     * @return string
     */
    public function getCityCode(): ?string
    {
        return $this->cityCode;
    }

    /**
     * @param string $cityName
     */
    public function setCityName(?string $cityName): void
    {
        $this->cityName = $cityName;
    }

    /**
     * @return string
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    /**
     * @param string $districtCode
     */
    public function setDistrictCode(?string $districtCode): void
    {
        $this->districtCode = $districtCode;
    }

    /**
     * @return string
     */
    public function getDistrictCode(): ?string
    {
        return $this->districtCode;
    }

    /**
     * @param string $districtName
     */
    public function setDistrictName(?string $districtName): void
    {
        $this->districtName = $districtName;
    }

    /**
     * @return string
     */
    public function getDistrictName(): ?string
    {
        return $this->districtName;
    }

    /**
     * @param string $streetCode
     */
    public function setStreetCode(?string $streetCode): void
    {
        $this->streetCode = $streetCode;
    }

    /**
     * @return string
     */
    public function getStreetCode(): ?string
    {
        return $this->streetCode;
    }

    /**
     * @param string $streetName
     */
    public function setStreetName(?string $streetName): void
    {
        $this->streetName = $streetName;
    }

    /**
     * @return string
     */
    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    /**
     * @param string $address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string $houseNumber
     */
    public function setHouseNumber(?string $houseNumber): void
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * @return string
     */
    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    /**
     * @param string $fullAddress
     */
    public function setFullAddress(?string $fullAddress): void
    {
        $this->fullAddress = $fullAddress;
    }

    /**
     * @return string
     */
    public function getFullAddress(): ?string
    {
        return $this->fullAddress;
    }

    /**
     * @param int $isDefault
     */
    public function setIsDefault(?int $isDefault): void
    {
        $this->isDefault = $isDefault;
    }

    /**
     * @return int
     */
    public function getIsDefault(): ?int
    {
        return $this->isDefault;
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
     * @param string $phoneZone
     */
    public function setPhoneZone(?string $phoneZone): void
    {
        $this->phoneZone = $phoneZone;
    }

    /**
     * @return string
     */
    public function getPhoneZone(): ?string
    {
        return $this->phoneZone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $language
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @param int $mapType
     */
    public function setMapType(?int $mapType): void
    {
        $this->mapType = $mapType;
    }

    /**
     * @return int
     */
    public function getMapType(): ?int
    {
        return $this->mapType;
    }

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

