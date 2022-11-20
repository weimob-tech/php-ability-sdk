<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,564
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasUpdateMemberBasicInfoService
{
    const specType = 'xinyun';

    public function execute(SUpdateMemberBasicInfoRequest $request) : SUpdateMemberBasicInfoResponse;
}

class SUpdateMemberBasicInfoRequest implements \JsonSerializable
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
    * @var SUpdateMemberBasicInfoParam
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
    * @param SUpdateMemberBasicInfoParam $param
    */
    public function setParam(?SUpdateMemberBasicInfoParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return SUpdateMemberBasicInfoParam
    */
    public function getParam(): ?SUpdateMemberBasicInfoParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SUpdateMemberBasicInfoParam implements \JsonSerializable
{
    /**
    * 自定义字段的扩展字段，支持超过8个扩展字段的，请使用此map写入所有扩展字段
    * @var SUpdateMemberBasicInfoParamExtInfo
    */
    private $extInfo;

    /**
    * 渠道List
    * @var array
    */
    private $sourceObjectList;

    /**
    * 商户id
    * @var int
    */
    private $pid;

    /**
    * 门店ID
    * @var int
    */
    private $storeId;

    /**
    * 用户wid
    * @var int
    */
    private $wid;

    /**
    * 姓名
    * @var string
    */
    private $name;

    /**
    * 生日
    * @var string
    */
    private $birthday;

    /**
    * 教育背景
    * @var string
    */
    private $education;

    /**
    * 收入
    * @var string
    */
    private $income;

    /**
    * 地址
    * @var string
    */
    private $address;

    /**
    * 邮件
    * @var string
    */
    private $mail;

    /**
    * 性别 MemberSexTypeEnum
    * @var int
    */
    private $sex;

    /**
    * 爱好
    * @var string
    */
    private $hobby;

    /**
    * 行业
    * @var string
    */
    private $industry;

    /**
    * 会员头像地址
    * @var string
    */
    private $logo;

    /**
    * 备注
    * @var string
    */
    private $remark;

    /**
    * 省
    * @var string
    */
    private $province;

    /**
    * 市
    * @var string
    */
    private $city;

    /**
    * 区
    * @var string
    */
    private $area;

    /**
    * 省code
    * @var string
    */
    private $provinceCode;

    /**
    * 市code
    * @var string
    */
    private $cityCode;

    /**
    * 区code
    * @var string
    */
    private $areaCode;

    /**
    * @param SUpdateMemberBasicInfoParamExtInfo $extInfo
    */
    public function setExtInfo(?SUpdateMemberBasicInfoParamExtInfo $extInfo)
    {
        $this->extInfo = $extInfo;
    }

    /**
    * @return SUpdateMemberBasicInfoParamExtInfo
    */
    public function getExtInfo(): ?SUpdateMemberBasicInfoParamExtInfo
    {
        return $this->extInfo;
    }

    /**
    * @param array $sourceObjectList
    */
    public function setSourceObjectList(?array $sourceObjectList)
    {
        $this->sourceObjectList = $sourceObjectList;
    }

    /**
    * @return array
    */
    public function getSourceObjectList(): ?array
    {
        return $this->sourceObjectList;
    }

    /**
    * @param int $pid
    */
    public function setPid(?int $pid)
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
    * @param int $storeId
    */
    public function setStoreId(?int $storeId)
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

    /**
    * @param int $wid
    */
    public function setWid(?int $wid)
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
    * @param string $name
    */
    public function setName(?string $name)
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
    * @param string $birthday
    */
    public function setBirthday(?string $birthday)
    {
        $this->birthday = $birthday;
    }

    /**
    * @return string
    */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    /**
    * @param string $education
    */
    public function setEducation(?string $education)
    {
        $this->education = $education;
    }

    /**
    * @return string
    */
    public function getEducation(): ?string
    {
        return $this->education;
    }

    /**
    * @param string $income
    */
    public function setIncome(?string $income)
    {
        $this->income = $income;
    }

    /**
    * @return string
    */
    public function getIncome(): ?string
    {
        return $this->income;
    }

    /**
    * @param string $address
    */
    public function setAddress(?string $address)
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
    * @param string $mail
    */
    public function setMail(?string $mail)
    {
        $this->mail = $mail;
    }

    /**
    * @return string
    */
    public function getMail(): ?string
    {
        return $this->mail;
    }

    /**
    * @param int $sex
    */
    public function setSex(?int $sex)
    {
        $this->sex = $sex;
    }

    /**
    * @return int
    */
    public function getSex(): ?int
    {
        return $this->sex;
    }

    /**
    * @param string $hobby
    */
    public function setHobby(?string $hobby)
    {
        $this->hobby = $hobby;
    }

    /**
    * @return string
    */
    public function getHobby(): ?string
    {
        return $this->hobby;
    }

    /**
    * @param string $industry
    */
    public function setIndustry(?string $industry)
    {
        $this->industry = $industry;
    }

    /**
    * @return string
    */
    public function getIndustry(): ?string
    {
        return $this->industry;
    }

    /**
    * @param string $logo
    */
    public function setLogo(?string $logo)
    {
        $this->logo = $logo;
    }

    /**
    * @return string
    */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
    * @param string $remark
    */
    public function setRemark(?string $remark)
    {
        $this->remark = $remark;
    }

    /**
    * @return string
    */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
    * @param string $province
    */
    public function setProvince(?string $province)
    {
        $this->province = $province;
    }

    /**
    * @return string
    */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
    * @param string $city
    */
    public function setCity(?string $city)
    {
        $this->city = $city;
    }

    /**
    * @return string
    */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
    * @param string $area
    */
    public function setArea(?string $area)
    {
        $this->area = $area;
    }

    /**
    * @return string
    */
    public function getArea(): ?string
    {
        return $this->area;
    }

    /**
    * @param string $provinceCode
    */
    public function setProvinceCode(?string $provinceCode)
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
    * @param string $cityCode
    */
    public function setCityCode(?string $cityCode)
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
    * @param string $areaCode
    */
    public function setAreaCode(?string $areaCode)
    {
        $this->areaCode = $areaCode;
    }

    /**
    * @return string
    */
    public function getAreaCode(): ?string
    {
        return $this->areaCode;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SUpdateMemberBasicInfoParamExtInfo implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SUpdateMemberBasicInfoParamSourceObjectList implements \JsonSerializable
{
    /**
    * 对应不同的source不同值，比如渠道的openid、手机号、unionid
    * @var string
    */
    private $sourceOpenId;

    /**
    * 渠道的appid 如果渠道没有appid概念的话，可以不传
    * @var string
    */
    private $sourceAppId;

    /**
    * 渠道类型 0 微信公众号 1 微信小程序 2 unionid 4 手机号 phone
    * @var string
    */
    private $source;

    /**
    * @param string $sourceOpenId
    */
    public function setSourceOpenId(?string $sourceOpenId)
    {
        $this->sourceOpenId = $sourceOpenId;
    }

    /**
    * @return string
    */
    public function getSourceOpenId(): ?string
    {
        return $this->sourceOpenId;
    }

    /**
    * @param string $sourceAppId
    */
    public function setSourceAppId(?string $sourceAppId)
    {
        $this->sourceAppId = $sourceAppId;
    }

    /**
    * @return string
    */
    public function getSourceAppId(): ?string
    {
        return $this->sourceAppId;
    }

    /**
    * @param string $source
    */
    public function setSource(?string $source)
    {
        $this->source = $source;
    }

    /**
    * @return string
    */
    public function getSource(): ?string
    {
        return $this->source;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class SUpdateMemberBasicInfoResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var SUpdateMemberBasicInfoData
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
    * @return SUpdateMemberBasicInfoData
    */
    public function getData(): ?SUpdateMemberBasicInfoData
    {
        return $this->data;
    }

    /**
    * @param SUpdateMemberBasicInfoData $data
    */
    public function setData(?SUpdateMemberBasicInfoData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SUpdateMemberBasicInfoData implements \JsonSerializable
{
    /**
    * 返回结果
    * @var bool
    */
    private $status;

    /**
    * @param bool $status
    */
    public function setStatus(?bool $status)
    {
        $this->status = $status;
    }

    /**
    * @return bool
    */
    public function getStatus(): ?bool
    {
        return $this->status;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

