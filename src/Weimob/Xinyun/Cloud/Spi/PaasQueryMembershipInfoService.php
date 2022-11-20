<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,780
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasQueryMembershipInfoService
{
    const specType = 'xinyun';

    public function execute(SQueryMembershipInfoRequest $request) : SQueryMembershipInfoResponse;
}

class SQueryMembershipInfoRequest implements \JsonSerializable
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
    * @var SQueryMembershipInfoParam
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
    * @param SQueryMembershipInfoParam $param
    */
    public function setParam(?SQueryMembershipInfoParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return SQueryMembershipInfoParam
    */
    public function getParam(): ?SQueryMembershipInfoParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SQueryMembershipInfoParam implements \JsonSerializable
{
    private $sourceObject;

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
    * @param SQueryMembershipInfoParamSourceObject $sourceObject
    */
    public function setSourceObject(?SQueryMembershipInfoParamSourceObject $sourceObject)
    {
        $this->sourceObject = $sourceObject;
    }

    /**
    * @return SQueryMembershipInfoParamSourceObject
    */
    public function getSourceObject(): ?SQueryMembershipInfoParamSourceObject
    {
        return $this->sourceObject;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SQueryMembershipInfoParamSourceObject implements \JsonSerializable
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


class SQueryMembershipInfoResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var SQueryMembershipInfoData
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
    * @return SQueryMembershipInfoData
    */
    public function getData(): ?SQueryMembershipInfoData
    {
        return $this->data;
    }

    /**
    * @param SQueryMembershipInfoData $data
    */
    public function setData(?SQueryMembershipInfoData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SQueryMembershipInfoData implements \JsonSerializable
{
    /**
    * 数据列表
    * @var array
    */
    private $passMembershipInfos;

    /**
    * 用户手机号，如果返回手机号，会更新手机号到本地数据中，并触发合并
    * @var string
    */
    private $phone;

    /**
    * 是否会员
    * @var bool
    */
    private $isMember;

    /**
    * 会员状态。1-正常；2-冻结（默认正常）
    * @var int
    */
    private $status;

    /**
    * @param array $passMembershipInfos
    */
    public function setPassMembershipInfos(?array $passMembershipInfos)
    {
        $this->passMembershipInfos = $passMembershipInfos;
    }

    /**
    * @return array
    */
    public function getPassMembershipInfos(): ?array
    {
        return $this->passMembershipInfos;
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
    * @param bool $isMember
    */
    public function setIsMember(?bool $isMember)
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
    public function setStatus(?int $status)
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

