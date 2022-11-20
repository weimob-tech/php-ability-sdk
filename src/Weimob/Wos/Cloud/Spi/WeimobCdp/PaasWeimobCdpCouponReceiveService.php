<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobCdp;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 887
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobCdpCouponReceiveService
{
    const specType = 'wos';

    public function invoke(WeimobCdpCouponReceiveRequest $request) : WeimobCdpCouponReceiveResponse;
}

class WeimobCdpCouponReceiveRequest implements \JsonSerializable
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
     * @var WeimobCdpCouponReceiveParam
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
     * @param WeimobCdpCouponReceiveParam $param
     */
    public function setParam(?WeimobCdpCouponReceiveParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobCdpCouponReceiveParam
     */
    public function getParam(): ?WeimobCdpCouponReceiveParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCdpCouponReceiveParam implements \JsonSerializable
{
    /**
     * 批量领取券列表
     * @var array
     */
    private $couponNums;

    /**
     * wid
     * @var int
     */
    private $wid;

    /**
     * 领券渠道
     * @var int
     */
    private $channel;

    /**
     * 领券来源
     * @var int
     */
    private $scene;

    /**
     * 领券来源id(活动id)
     * @var int
     */
    private $sceneId;

    /**
     * 是否预发领取
     * @var bool
     */
    private $isPreReceive;

    /**
     * bosId
     * @var int
     */
    private $bosId;

    /**
     * piid
     * @var int
     */
    private $productInstanceId;

    /**
     * @param array $couponNums
     */
    public function setCouponNums(?array $couponNums): void
    {
        $this->couponNums = $couponNums;
    }

    /**
     * @return array
     */
    public function getCouponNums(): ?array
    {
        return $this->couponNums;
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
     * @param int $scene
     */
    public function setScene(?int $scene): void
    {
        $this->scene = $scene;
    }

    /**
     * @return int
     */
    public function getScene(): ?int
    {
        return $this->scene;
    }

    /**
     * @param int $sceneId
     */
    public function setSceneId(?int $sceneId): void
    {
        $this->sceneId = $sceneId;
    }

    /**
     * @return int
     */
    public function getSceneId(): ?int
    {
        return $this->sceneId;
    }

    /**
     * @param bool $isPreReceive
     */
    public function setIsPreReceive(?bool $isPreReceive): void
    {
        $this->isPreReceive = $isPreReceive;
    }

    /**
     * @return bool
     */
    public function getIsPreReceive(): ?bool
    {
        return $this->isPreReceive;
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
     * @param int $productInstanceId
     */
    public function setProductInstanceId(?int $productInstanceId): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCdpCouponReceiveParamCouponNums implements \JsonSerializable
{
    /**
     * 券模板id
     * @var int
     */
    private $couponTemplateId;

    /**
     * 领取数量
     * @var int
     */
    private $num;

    /**
     * 幂等id
     * @var string
     */
    private $requestId;

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
     * @param int $num
     */
    public function setNum(?int $num): void
    {
        $this->num = $num;
    }

    /**
     * @return int
     */
    public function getNum(): ?int
    {
        return $this->num;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobCdpCouponReceiveResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobCdpCouponReceiveData
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
     * @return WeimobCdpCouponReceiveData
     */
    public function getData(): ?WeimobCdpCouponReceiveData
    {
        return $this->data;
    }

    /**
     * @param WeimobCdpCouponReceiveData $data
     */
    public function setData(?WeimobCdpCouponReceiveData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCdpCouponReceiveData implements \JsonSerializable
{
    /**
     * 优惠券列表
     * @var array
     */
    private $couponResultList;

    /**
     * 成功发放数量
     * @var int
     */
    private $successCount;

    /**
     * 失败发放数量
     * @var int
     */
    private $failedCount;

    /**
     * 领取结果1 全部领取成功 2部分领取成功 3全部领取失败
     * @var int
     */
    private $status;

    /**
     * @param array $couponResultList
     */
    public function setCouponResultList(?array $couponResultList): void
    {
        $this->couponResultList = $couponResultList;
    }

    /**
     * @return array
     */
    public function getCouponResultList(): ?array
    {
        return $this->couponResultList;
    }

    /**
     * @param int $successCount
     */
    public function setSuccessCount(?int $successCount): void
    {
        $this->successCount = $successCount;
    }

    /**
     * @return int
     */
    public function getSuccessCount(): ?int
    {
        return $this->successCount;
    }

    /**
     * @param int $failedCount
     */
    public function setFailedCount(?int $failedCount): void
    {
        $this->failedCount = $failedCount;
    }

    /**
     * @return int
     */
    public function getFailedCount(): ?int
    {
        return $this->failedCount;
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

class WeimobCdpCouponReceiveDataCouponResultList implements \JsonSerializable
{
    /**
     * 优惠券模板id
     * @var int
     */
    private $couponTemplateId;

    /**
     * 优惠券模板名称
     * @var string
     */
    private $name;

    /**
     * 用户id
     * @var int
     */
    private $wid;

    /**
     * 当前券模板是否领取成功
     * @var bool
     */
    private $isSuccess;

    /**
     * 失败数量
     * @var int
     */
    private $failureNum;

    /**
     * 赠送失败的code
     * @var int
     */
    private $errCode;

    /**
     * 赠送失败的原因
     * @var string
     */
    private $errMsg;

    /**
     * 是否可继续领取
     * @var bool
     */
    private $canReceive;

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
     * @param bool $isSuccess
     */
    public function setIsSuccess(?bool $isSuccess): void
    {
        $this->isSuccess = $isSuccess;
    }

    /**
     * @return bool
     */
    public function getIsSuccess(): ?bool
    {
        return $this->isSuccess;
    }

    /**
     * @param int $failureNum
     */
    public function setFailureNum(?int $failureNum): void
    {
        $this->failureNum = $failureNum;
    }

    /**
     * @return int
     */
    public function getFailureNum(): ?int
    {
        return $this->failureNum;
    }

    /**
     * @param int $errCode
     */
    public function setErrCode(?int $errCode): void
    {
        $this->errCode = $errCode;
    }

    /**
     * @return int
     */
    public function getErrCode(): ?int
    {
        return $this->errCode;
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

    /**
     * @param bool $canReceive
     */
    public function setCanReceive(?bool $canReceive): void
    {
        $this->canReceive = $canReceive;
    }

    /**
     * @return bool
     */
    public function getCanReceive(): ?bool
    {
        return $this->canReceive;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

