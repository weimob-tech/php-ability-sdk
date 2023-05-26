<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 3,841
 * @author weimobcloud
 * @create 2023-5-26
 */
interface PaasAcquireCouponCodeService
{
    const specType = 'xinyun';

    public function execute(SAcquireCouponCodeRequest $request) : SAcquireCouponCodeResponse;
}

class SAcquireCouponCodeRequest implements \JsonSerializable
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
     * @var SAcquireCouponCodeParam
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
     * @param SAcquireCouponCodeParam $param
     */
    public function setParams(?SAcquireCouponCodeParam $param): void
    {
        $this->params = $param;
    }

    /**
     * @return SAcquireCouponCodeParam
     */
    public function getParams(): ?SAcquireCouponCodeParam
    {
        return $this->params;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SAcquireCouponCodeParam implements \JsonSerializable
{
    /**
     * 渠道List
     * @var array
     */
    private $sourceObjectList;

    /**
     * 领券信息
     * @var array
     */
    private $receiveCouponList;

    /**
     * 商户id
     * @var int
     */
    private $pid;

    /**
     * 用户id
     * @var int
     */
    private $wid;

    /**
     * 当用户不存在时创建
     * @var bool
     */
    private $createUserOnNoExist;

    /**
     * 领券场景
     * @var int
     */
    private $acquireChannel;

    /**
     * 领券场景id(例如：活动id)
     * @var string
     */
    private $acquireChannelId;

    /**
     * 领券门店id
     * @var int
     */
    private $storeId;

    /**
     * 第三方模板ID
     * @var string
     */
    private $thirdId;

    /**
     * 幂等校验
     * @var string
     */
    private $requestId;

    /**
     * 发券人
     * @var string
     */
    private $operator;

    /**
     * 请求ticket
     * @var string
     */
    private $globalTicket;

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
     * @param array $receiveCouponList
     */
    public function setReceiveCouponList(?array $receiveCouponList): void
    {
        $this->receiveCouponList = $receiveCouponList;
    }

    /**
     * @return array
     */
    public function getReceiveCouponList(): ?array
    {
        return $this->receiveCouponList;
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

    /**
     * @param bool $createUserOnNoExist
     */
    public function setCreateUserOnNoExist(?bool $createUserOnNoExist): void
    {
        $this->createUserOnNoExist = $createUserOnNoExist;
    }

    /**
     * @return bool
     */
    public function getCreateUserOnNoExist(): ?bool
    {
        return $this->createUserOnNoExist;
    }

    /**
     * @param int $acquireChannel
     */
    public function setAcquireChannel(?int $acquireChannel): void
    {
        $this->acquireChannel = $acquireChannel;
    }

    /**
     * @return int
     */
    public function getAcquireChannel(): ?int
    {
        return $this->acquireChannel;
    }

    /**
     * @param string $acquireChannelId
     */
    public function setAcquireChannelId(?string $acquireChannelId): void
    {
        $this->acquireChannelId = $acquireChannelId;
    }

    /**
     * @return string
     */
    public function getAcquireChannelId(): ?string
    {
        return $this->acquireChannelId;
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
     * @param string $thirdId
     */
    public function setThirdId(?string $thirdId): void
    {
        $this->thirdId = $thirdId;
    }

    /**
     * @return string
     */
    public function getThirdId(): ?string
    {
        return $this->thirdId;
    }

    /**
     * @param string $requestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * @return string
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * @param string $operator
     */
    public function setOperator(?string $operator): void
    {
        $this->operator = $operator;
    }

    /**
     * @return string
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * @param string $globalTicket
     */
    public function setGlobalTicket(?string $globalTicket): void
    {
        $this->globalTicket = $globalTicket;
    }

    /**
     * @return string
     */
    public function getGlobalTicket(): ?string
    {
        return $this->globalTicket;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SAcquireCouponCodeParamSourceObjectList implements \JsonSerializable
{
    /**
     * 对应不同的source不同值，渠道openid参数比如手机号
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

class SAcquireCouponCodeParamReceiveCouponList implements \JsonSerializable
{
    /**
     * 卡模板id
     * @var int
     */
    private $couponTemplateId;

    /**
     * 发放数量
     * @var int
     */
    private $number;

    /**
     * 券库存id
     * @var int
     */
    private $repoId;

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
     * @param int $number
     */
    public function setNumber(?int $number): void
    {
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @param int $repoId
     */
    public function setRepoId(?int $repoId): void
    {
        $this->repoId = $repoId;
    }

    /**
     * @return int
     */
    public function getRepoId(): ?int
    {
        return $this->repoId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class SAcquireCouponCodeResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SAcquireCouponCodeData
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
     * @return SAcquireCouponCodeData
     */
    public function getData(): ?SAcquireCouponCodeData
    {
        return $this->data;
    }

    /**
     * @param SAcquireCouponCodeData $data
     */
    public function setData(?SAcquireCouponCodeData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SAcquireCouponCodeData implements \JsonSerializable
{
    /**
     * 领取结果
     * @var array
     */
    private $couponList;

    /**
     * 是否有code，如果有则依赖领取结果中的code作为领券code
     * @var bool
     */
    private $hasCode;

    /**
     * @param array $couponList
     */
    public function setCouponList(?array $couponList): void
    {
        $this->couponList = $couponList;
    }

    /**
     * @return array
     */
    public function getCouponList(): ?array
    {
        return $this->couponList;
    }

    /**
     * @param bool $hasCode
     */
    public function setHasCode(?bool $hasCode): void
    {
        $this->hasCode = $hasCode;
    }

    /**
     * @return bool
     */
    public function getHasCode(): ?bool
    {
        return $this->hasCode;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SAcquireCouponCodeDataCouponList implements \JsonSerializable
{
    /**
     * 优惠券模板id
     * @var int
     */
    private $couponTemplateId;

    /**
     * 券码
     * @var string
     */
    private $code;

    /**
     * 用户id
     * @var int
     */
    private $wid;

    /**
     * 错误码(0成功；其他值代表失败)
     * @var int
     */
    private $errorCode;

    /**
     * 失败原因
     * @var string
     */
    private $errMsg;

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
     * @param string $code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
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
     * @param int $errorCode
     */
    public function setErrorCode(?int $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return int
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    /**
     * @param string $errMsg
     */
    public function setErrMsg(?string $errMsg): void
    {
        $this->errMsg = $errMsg;
    }

    /**
     * @return string
     */
    public function getErrMsg(): ?string
    {
        return $this->errMsg;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

