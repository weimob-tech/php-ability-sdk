<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,348
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasQueryUserBasicInfoService
{
    const specType = 'xinyun';

    public function execute(SQueryUserBasicInfoRequest $request) : SQueryUserBasicInfoResponse;
}

class SQueryUserBasicInfoRequest implements \JsonSerializable
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
     * @var SQueryUserBasicInfoParam
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
     * @param SQueryUserBasicInfoParam $param
     */
    public function setParam(?SQueryUserBasicInfoParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return SQueryUserBasicInfoParam
     */
    public function getParam(): ?SQueryUserBasicInfoParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SQueryUserBasicInfoParam implements \JsonSerializable
{
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
     * 门店id
     * @var int
     */
    private $storeId;

    /**
     * 用户wid
     * @var int
     */
    private $wid;

    /**
     * @param array $sourceObjectList
     */
    public function setSourceObjectList(?array $sourceObjectList): void
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

class SQueryUserBasicInfoParamSourceObjectList implements \JsonSerializable
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
     * @var int
     */
    private $source;

    /**
     * @param string $sourceOpenId
     */
    public function setSourceOpenId(?string $sourceOpenId): void
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
    public function setSourceAppId(?string $sourceAppId): void
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
     * @param int $source
     */
    public function setSource(?int $source): void
    {
        $this->source = $source;
    }

    /**
     * @return int
     */
    public function getSource(): ?int
    {
        return $this->source;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class SQueryUserBasicInfoResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SQueryUserBasicInfoData
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
     * @return SQueryUserBasicInfoData
     */
    public function getData(): ?SQueryUserBasicInfoData
    {
        return $this->data;
    }

    /**
     * @param SQueryUserBasicInfoData $data
     */
    public function setData(?SQueryUserBasicInfoData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SQueryUserBasicInfoData implements \JsonSerializable
{
    /**
     * 同步信息
     * @var array
     */
    private $channelStatuses;

    /**
     * 是否是会员身份 true-是 false-否 客户有至少一张未过期状态的会员卡则为会员，否则不是会员
     * @var bool
     */
    private $isMember;

    /**
     * 会员本地卡的状态。参见下文字典 MemberCardStatusEnum 枚举。
     * @var int
     */
    private $status;

    /**
     * 有效期开始时间
     * @var int
     */
    private $startTime;

    /**
     * 有效期截止时间
     * @var int
     */
    private $expireTime;

    /**
     * 领卡来源类型。参见下文字典 AppChannelEnum 枚举。
     * @var int
     */
    private $appChannel;

    /**
     * 领取渠道
     * @var int
     */
    private $getChannel;

    /**
     * 领取渠道id,比如通过营销活动领卡，对应活动id
     * @var int
     */
    private $getChannelId;

    /**
     * 领取渠道的第三方信息
     * @var string
     */
    private $outerStr;

    /**
     * 领卡时间,成为会员的时间
     * @var int
     */
    private $cardPublishTime;

    /**
     * 成为客户时间
     * @var int
     */
    private $gmtCreate;

    /**
     * 姓名
     * @var string
     */
    private $name;

    /**
     * 生日
     * @var int
     */
    private $birthday;

    /**
     * 省，中文名称
     * @var string
     */
    private $province;

    /**
     * 市，中文名称
     * @var string
     */
    private $city;

    /**
     * 区，中文名称
     * @var string
     */
    private $area;

    /**
     * 省，对应的code码
     * @var string
     */
    private $provinceCode;

    /**
     * 市，对应的code码
     * @var string
     */
    private $cityCode;

    /**
     * 区，对应的code码
     * @var string
     */
    private $areaCode;

    /**
     * 身份证号码
     * @var string
     */
    private $idCard;

    /**
     * 地址
     * @var string
     */
    private $address;

    /**
     * 邮箱
     * @var string
     */
    private $mail;

    /**
     * 性别
     * @var int
     */
    private $sex;

    /**
     * 教育背景
     * @var string
     */
    private $education;

    /**
     * 爱好
     * @var string
     */
    private $hobby;

    /**
     * 收入
     * @var string
     */
    private $income;

    /**
     * 行业
     * @var string
     */
    private $industry;

    /**
     * 备注
     * @var string
     */
    private $remark;

    /**
     * 自定义字段的扩展字段，包含所有扩展字段
     * @var array
     */
    private $extInfo;

    /**
     * @param array $channelStatuses
     */
    public function setChannelStatuses(?array $channelStatuses): void
    {
        $this->channelStatuses = $channelStatuses;
    }

    /**
     * @return array
     */
    public function getChannelStatuses(): ?array
    {
        return $this->channelStatuses;
    }

    /**
     * @param bool $isMember
     */
    public function setIsMember(?bool $isMember): void
    {
        $this->isMember = $isMember;
    }

    /**
     * @return bool
     */
    public function getIsMember(): ?bool
    {
        return $this->isMember;
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
     * @param int $startTime
     */
    public function setStartTime(?int $startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * @return int
     */
    public function getStartTime(): ?int
    {
        return $this->startTime;
    }

    /**
     * @param int $expireTime
     */
    public function setExpireTime(?int $expireTime): void
    {
        $this->expireTime = $expireTime;
    }

    /**
     * @return int
     */
    public function getExpireTime(): ?int
    {
        return $this->expireTime;
    }

    /**
     * @param int $appChannel
     */
    public function setAppChannel(?int $appChannel): void
    {
        $this->appChannel = $appChannel;
    }

    /**
     * @return int
     */
    public function getAppChannel(): ?int
    {
        return $this->appChannel;
    }

    /**
     * @param int $getChannel
     */
    public function setGetChannel(?int $getChannel): void
    {
        $this->getChannel = $getChannel;
    }

    /**
     * @return int
     */
    public function getGetChannel(): ?int
    {
        return $this->getChannel;
    }

    /**
     * @param int $getChannelId
     */
    public function setGetChannelId(?int $getChannelId): void
    {
        $this->getChannelId = $getChannelId;
    }

    /**
     * @return int
     */
    public function getGetChannelId(): ?int
    {
        return $this->getChannelId;
    }

    /**
     * @param string $outerStr
     */
    public function setOuterStr(?string $outerStr): void
    {
        $this->outerStr = $outerStr;
    }

    /**
     * @return string
     */
    public function getOuterStr(): ?string
    {
        return $this->outerStr;
    }

    /**
     * @param int $cardPublishTime
     */
    public function setCardPublishTime(?int $cardPublishTime): void
    {
        $this->cardPublishTime = $cardPublishTime;
    }

    /**
     * @return int
     */
    public function getCardPublishTime(): ?int
    {
        return $this->cardPublishTime;
    }

    /**
     * @param int $gmtCreate
     */
    public function setGmtCreate(?int $gmtCreate): void
    {
        $this->gmtCreate = $gmtCreate;
    }

    /**
     * @return int
     */
    public function getGmtCreate(): ?int
    {
        return $this->gmtCreate;
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
     * @param int $birthday
     */
    public function setBirthday(?int $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return int
     */
    public function getBirthday(): ?int
    {
        return $this->birthday;
    }

    /**
     * @param string $province
     */
    public function setProvince(?string $province): void
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
    public function setCity(?string $city): void
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
    public function setArea(?string $area): void
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
     * @param string $areaCode
     */
    public function setAreaCode(?string $areaCode): void
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

    /**
     * @param string $idCard
     */
    public function setIdCard(?string $idCard): void
    {
        $this->idCard = $idCard;
    }

    /**
     * @return string
     */
    public function getIdCard(): ?string
    {
        return $this->idCard;
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
     * @param string $mail
     */
    public function setMail(?string $mail): void
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
    public function setSex(?int $sex): void
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
     * @param string $education
     */
    public function setEducation(?string $education): void
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
     * @param string $hobby
     */
    public function setHobby(?string $hobby): void
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
     * @param string $income
     */
    public function setIncome(?string $income): void
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
     * @param string $industry
     */
    public function setIndustry(?string $industry): void
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
     * @param string $remark
     */
    public function setRemark(?string $remark): void
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
     * @param array $extInfo
     */
    public function setExtInfo(?array $extInfo): void
    {
        $this->extInfo = $extInfo;
    }

    /**
     * @return array
     */
    public function getExtInfo(): ?array
    {
        return $this->extInfo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SQueryUserBasicInfoDataChannelStatuses implements \JsonSerializable
{
    /**
     * 第三方appid渠道。参见下文字段 CardTemplateSynchTypeConstants 枚举。
     * @var int
     */
    private $channel;

    /**
     * 第三方状态
     * @var string
     */
    private $status;

    /**
     * 第三方的code，比如微信code
     * @var string
     */
    private $thirdCode;

    /**
     * @param int $channel
     */
    public function setChannel(?int $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @return int
     */
    public function getChannel(): ?int
    {
        return $this->channel;
    }

    /**
     * @param string $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $thirdCode
     */
    public function setThirdCode(?string $thirdCode): void
    {
        $this->thirdCode = $thirdCode;
    }

    /**
     * @return string
     */
    public function getThirdCode(): ?string
    {
        return $this->thirdCode;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

