<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobCdp;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 886
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobCdpPointsAdjustService
{
    const specType = 'wos';

    public function invoke(WeimobCdpPointsAdjustRequest $request) : WeimobCdpPointsAdjustResponse;
}

class WeimobCdpPointsAdjustRequest implements \JsonSerializable
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
     * @var WeimobCdpPointsAdjustParam
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
     * @param WeimobCdpPointsAdjustParam $param
     */
    public function setParam(?WeimobCdpPointsAdjustParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobCdpPointsAdjustParam
     */
    public function getParam(): ?WeimobCdpPointsAdjustParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCdpPointsAdjustParam implements \JsonSerializable
{
    /**
     * 用户信息
     * @var array
     */
    private $oneCrmAdjustInfoList;

    /**
     * 请求流水号,幂等作用
     * @var string
     */
    private $requestId;

    /**
     * 幂等对象类型
     * @var string
     */
    private $requestType;

    /**
     * 积分
     * @var int
     */
    private $changePoint;

    /**
     * 调账类型（1：调增；2：调减）
     * @var string
     */
    private $adjustType;

    /**
     * 变更原因
     * @var string
     */
    private $changeReason;

    /**
     * 操作人wid
     * @var int
     */
    private $operatorWid;

    /**
     * 操作门店vid
     * @var int
     */
    private $operateStoreVid;

    /**
     * 积分来源vid
     * @var int
     */
    private $sourceVid;

    /**
     * common包中的changeTypeEnum
     * @var string
     */
    private $changeType;

    /**
     * @param array $oneCrmAdjustInfoList
     */
    public function setOneCrmAdjustInfoList(?array $oneCrmAdjustInfoList): void
    {
        $this->oneCrmAdjustInfoList = $oneCrmAdjustInfoList;
    }

    /**
     * @return array
     */
    public function getOneCrmAdjustInfoList(): ?array
    {
        return $this->oneCrmAdjustInfoList;
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
     * @param string $requestType
     */
    public function setRequestType(?string $requestType): void
    {
        $this->requestType = $requestType;
    }

    /**
     * @return string
     */
    public function getRequestType(): ?string
    {
        return $this->requestType;
    }

    /**
     * @param int $changePoint
     */
    public function setChangePoint(?int $changePoint): void
    {
        $this->changePoint = $changePoint;
    }

    /**
     * @return int
     */
    public function getChangePoint(): ?int
    {
        return $this->changePoint;
    }

    /**
     * @param string $adjustType
     */
    public function setAdjustType(?string $adjustType): void
    {
        $this->adjustType = $adjustType;
    }

    /**
     * @return string
     */
    public function getAdjustType(): ?string
    {
        return $this->adjustType;
    }

    /**
     * @param string $changeReason
     */
    public function setChangeReason(?string $changeReason): void
    {
        $this->changeReason = $changeReason;
    }

    /**
     * @return string
     */
    public function getChangeReason(): ?string
    {
        return $this->changeReason;
    }

    /**
     * @param int $operatorWid
     */
    public function setOperatorWid(?int $operatorWid): void
    {
        $this->operatorWid = $operatorWid;
    }

    /**
     * @return int
     */
    public function getOperatorWid(): ?int
    {
        return $this->operatorWid;
    }

    /**
     * @param int $operateStoreVid
     */
    public function setOperateStoreVid(?int $operateStoreVid): void
    {
        $this->operateStoreVid = $operateStoreVid;
    }

    /**
     * @return int
     */
    public function getOperateStoreVid(): ?int
    {
        return $this->operateStoreVid;
    }

    /**
     * @param int $sourceVid
     */
    public function setSourceVid(?int $sourceVid): void
    {
        $this->sourceVid = $sourceVid;
    }

    /**
     * @return int
     */
    public function getSourceVid(): ?int
    {
        return $this->sourceVid;
    }

    /**
     * @param string $changeType
     */
    public function setChangeType(?string $changeType): void
    {
        $this->changeType = $changeType;
    }

    /**
     * @return string
     */
    public function getChangeType(): ?string
    {
        return $this->changeType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCdpPointsAdjustParamOneCrmAdjustInfoList implements \JsonSerializable
{
    /**
     * vid（积分方案归属vid）
     * @var int
     */
    private $vid;

    /**
     * 用户类型
     * @var int
     */
    private $userType;

    /**
     * 积分方案id和vid必传其一
     * @var int
     */
    private $pointPlanId;

    /**
     * wid
     * @var int
     */
    private $wid;

    /**
     * bosId
     * @var int
     */
    private $bosId;

    /**
     * productInstanceId
     * @var int
     */
    private $productInstanceId;

    /**
     * tcode
     * @var string
     */
    private $tcode;

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
     * @param int $userType
     */
    public function setUserType(?int $userType): void
    {
        $this->userType = $userType;
    }

    /**
     * @return int
     */
    public function getUserType(): ?int
    {
        return $this->userType;
    }

    /**
     * @param int $pointPlanId
     */
    public function setPointPlanId(?int $pointPlanId): void
    {
        $this->pointPlanId = $pointPlanId;
    }

    /**
     * @return int
     */
    public function getPointPlanId(): ?int
    {
        return $this->pointPlanId;
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

    /**
     * @param string $tcode
     */
    public function setTcode(?string $tcode): void
    {
        $this->tcode = $tcode;
    }

    /**
     * @return string
     */
    public function getTcode(): ?string
    {
        return $this->tcode;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobCdpPointsAdjustResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobCdpPointsAdjustData
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
     * @return WeimobCdpPointsAdjustData
     */
    public function getData(): ?WeimobCdpPointsAdjustData
    {
        return $this->data;
    }

    /**
     * @param WeimobCdpPointsAdjustData $data
     */
    public function setData(?WeimobCdpPointsAdjustData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCdpPointsAdjustData implements \JsonSerializable
{
    /**
     * 结果
     * @var array
     */
    private $list;

    /**
     * 结果
     * @var bool
     */
    private $result;

    /**
     * @param array $list
     */
    public function setList(?array $list): void
    {
        $this->list = $list;
    }

    /**
     * @return array
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param bool $result
     */
    public function setResult(?bool $result): void
    {
        $this->result = $result;
    }

    /**
     * @return bool
     */
    public function getResult(): ?bool
    {
        return $this->result;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCdpPointsAdjustDatalist implements \JsonSerializable
{
    /**
     * 状态
     * @var int
     */
    private $status;

    /**
     * 消息
     * @var string
     */
    private $message;

    /**
     * wid
     * @var int
     */
    private $wid;

    /**
     * 名称
     * @var string
     */
    private $widName;

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
     * @param string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
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
     * @param string $widName
     */
    public function setWidName(?string $widName): void
    {
        $this->widName = $widName;
    }

    /**
     * @return string
     */
    public function getWidName(): ?string
    {
        return $this->widName;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

