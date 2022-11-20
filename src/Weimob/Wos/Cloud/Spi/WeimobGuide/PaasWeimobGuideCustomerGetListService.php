<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 750
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobGuideCustomerGetListService
{
    const specType = 'wos';

    public function invoke(WeimobGuideCustomerGetListRequest $request) : WeimobGuideCustomerGetListResponse;
}

class WeimobGuideCustomerGetListRequest implements \JsonSerializable
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
    * @var WeimobGuideCustomerGetListParam
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
    * @param WeimobGuideCustomerGetListParam $param
    */
    public function setParam(?WeimobGuideCustomerGetListParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobGuideCustomerGetListParam
    */
    public function getParam(): ?WeimobGuideCustomerGetListParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerGetListParam implements \JsonSerializable
{
    /**
    * 组织结构节点
    * @var int
    */
    private $vid;

    /**
    * 产品实例id
    * @var int
    */
    private $productInstanceId;

    /**
    * 商业操作系统ID
    * @var int
    */
    private $bosId;

    /**
    * 组织结构节点类型
    * @var int
    */
    private $vidType;

    /**
    * 客户wid list
    * @var array
    */
    private $widList;

    /**
    * @param int $vid
    */
    public function setVid(?int $vid)
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
    * @param int $productInstanceId
    */
    public function setProductInstanceId(?int $productInstanceId)
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
    * @param int $bosId
    */
    public function setBosId(?int $bosId)
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
    * @param int $vidType
    */
    public function setVidType(?int $vidType)
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
    * @param array $widList
    */
    public function setWidList(?array $widList)
    {
        $this->widList = $widList;
    }

    /**
    * @return array
    */
    public function getWidList(): ?array
    {
        return $this->widList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideCustomerGetListResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobGuideCustomerGetListData
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
    * @return WeimobGuideCustomerGetListData
    */
    public function getData(): ?WeimobGuideCustomerGetListData
    {
        return $this->data;
    }

    /**
    * @param WeimobGuideCustomerGetListData $data
    */
    public function setData(?WeimobGuideCustomerGetListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerGetListData implements \JsonSerializable
{
    /**
    * 业务参数
    * @var array
    */
    private $userBaseInfoList;

    /**
    * @param array $userBaseInfoList
    */
    public function setUserBaseInfoList(?array $userBaseInfoList)
    {
        $this->userBaseInfoList = $userBaseInfoList;
    }

    /**
    * @return array
    */
    public function getUserBaseInfoList(): ?array
    {
        return $this->userBaseInfoList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerGetListDataUserBaseInfoList implements \JsonSerializable
{
    /**
    * wid
    * @var int
    */
    private $wid;

    /**
    * 昵称
    * @var string
    */
    private $nickName;

    /**
    * 头像url
    * @var int
    */
    private $avatarUrl;

    /**
    * bosId
    * @var int
    */
    private $bosId;

    /**
    * 产品实例id
    * @var int
    */
    private $productInstanceId;

    /**
    * 手机号
    * @var string
    */
    private $phone;

    /**
    * 姓名
    * @var int
    */
    private $name;

    /**
    * 性别
    * @var int
    */
    private $sex;

    /**
    * 性别
    * @var string
    */
    private $gender;

    /**
    * 是否订阅公众号
    * @var string
    */
    private $isSubscribe;

    /**
    * 邮箱
    * @var int
    */
    private $email;

    /**
    * 用户归属节点
    * @var int
    */
    private $belongVid;

    /**
    * 用户绑定归属节点时间
    * @var string
    */
    private $belongVidBindTime;

    /**
    * 身份证号
    * @var string
    */
    private $identityCardNum;

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
    * @param string $nickName
    */
    public function setNickName(?string $nickName)
    {
        $this->nickName = $nickName;
    }

    /**
    * @return string
    */
    public function getNickName(): ?string
    {
        return $this->nickName;
    }

    /**
    * @param int $avatarUrl
    */
    public function setAvatarUrl(?int $avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;
    }

    /**
    * @return int
    */
    public function getAvatarUrl(): ?int
    {
        return $this->avatarUrl;
    }

    /**
    * @param int $bosId
    */
    public function setBosId(?int $bosId)
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
    * @param int $productInstanceId
    */
    public function setProductInstanceId(?int $productInstanceId)
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
    * @param string $phone
    */
    public function setPhone(?string $phone)
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
    * @param int $name
    */
    public function setName(?int $name)
    {
        $this->name = $name;
    }

    /**
    * @return int
    */
    public function getName(): ?int
    {
        return $this->name;
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
    * @param string $gender
    */
    public function setGender(?string $gender)
    {
        $this->gender = $gender;
    }

    /**
    * @return string
    */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
    * @param string $isSubscribe
    */
    public function setIsSubscribe(?string $isSubscribe)
    {
        $this->isSubscribe = $isSubscribe;
    }

    /**
    * @return string
    */
    public function getIsSubscribe(): ?string
    {
        return $this->isSubscribe;
    }

    /**
    * @param int $email
    */
    public function setEmail(?int $email)
    {
        $this->email = $email;
    }

    /**
    * @return int
    */
    public function getEmail(): ?int
    {
        return $this->email;
    }

    /**
    * @param int $belongVid
    */
    public function setBelongVid(?int $belongVid)
    {
        $this->belongVid = $belongVid;
    }

    /**
    * @return int
    */
    public function getBelongVid(): ?int
    {
        return $this->belongVid;
    }

    /**
    * @param string $belongVidBindTime
    */
    public function setBelongVidBindTime(?string $belongVidBindTime)
    {
        $this->belongVidBindTime = $belongVidBindTime;
    }

    /**
    * @return string
    */
    public function getBelongVidBindTime(): ?string
    {
        return $this->belongVidBindTime;
    }

    /**
    * @param string $identityCardNum
    */
    public function setIdentityCardNum(?string $identityCardNum)
    {
        $this->identityCardNum = $identityCardNum;
    }

    /**
    * @return string
    */
    public function getIdentityCardNum(): ?string
    {
        return $this->identityCardNum;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

