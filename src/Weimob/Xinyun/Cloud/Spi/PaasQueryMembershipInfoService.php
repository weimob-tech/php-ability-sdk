<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,780
 * @author weimobcloud
 * @create 2023-5-29
 */
interface PaasQueryMembershipInfoService
{
    const specType = 'xinyun';

    public function execute(SQueryMembershipInfoRequest $request) : SQueryMembershipInfoResponse;
}

class SQueryMembershipInfoRequest implements \JsonSerializable
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
    * @var SQueryMembershipInfoParam
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
    * @param SQueryMembershipInfoParam $param
    */
    public function setParams(?SQueryMembershipInfoParam $param): void
    {
        $this->params = $param;
    }

    /**
    * @return SQueryMembershipInfoParam
    */
    public function getParams(): ?SQueryMembershipInfoParam
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
    public function setSourceObject(?SQueryMembershipInfoParamSourceObject $sourceObject): void
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

class SQueryMembershipInfoParamSourceObject implements \JsonSerializable
{
    /**
     * 对应不同的source不同值，比如渠道的openid、手机号、unionid
     * @var string
     */
    private $sourceOpenId;

    /**
     * 渠道的appid如果渠道没有appid概念的话，可以不传
     * @var string
     */
    private $sourceAppId;

    /**
     * 渠道类型0微信公众号1微信小程序2unionid4手机号phone
     * @var string
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
     * @param string $source
     */
    public function setSource(?string $source): void
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
    public function setPassMembershipInfos(?array $passMembershipInfos): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

