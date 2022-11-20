<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobCdp;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 885
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobCdpBalancesAdjustService
{
    const specType = 'wos';

    public function invoke(WeimobCdpBalancesAdjustRequest $request) : WeimobCdpBalancesAdjustResponse;
}

class WeimobCdpBalancesAdjustRequest implements \JsonSerializable
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
    * @var WeimobCdpBalancesAdjustParam
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
    * @param WeimobCdpBalancesAdjustParam $param
    */
    public function setParam(?WeimobCdpBalancesAdjustParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobCdpBalancesAdjustParam
    */
    public function getParam(): ?WeimobCdpBalancesAdjustParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCdpBalancesAdjustParam implements \JsonSerializable
{
    /**
    * 用户信息
    * @var array
    */
    private $oneCrmAdjustInfoList;

    /**
    * 分摊信息
    * @var WeimobCdpBalancesAdjustParamSettleRule
    */
    private $settleRule;

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
    * 本金（单位：元）
    * @var int
    */
    private $changCapitalAmount;

    /**
    * 赠金（单位：元）
    * @var int
    */
    private $changeGrantsAmount;

    /**
    * 调账类型（1：正；2负）
    * @var string
    */
    private $adjustType;

    /**
    * 备注
    * @var string
    */
    private $changeReason;

    /**
    * 来源
    * @var int
    */
    private $sourceVid;

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
    * 操作人wid
    * @var int
    */
    private $operatorWid;

    /**
    * 操作operateStoreVid
    * @var int
    */
    private $operateStoreVid;

    /**
    * @param array $oneCrmAdjustInfoList
    */
    public function setOneCrmAdjustInfoList(?array $oneCrmAdjustInfoList)
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
    * @param WeimobCdpBalancesAdjustParamSettleRule $settleRule
    */
    public function setSettleRule(?WeimobCdpBalancesAdjustParamSettleRule $settleRule)
    {
        $this->settleRule = $settleRule;
    }

    /**
    * @return WeimobCdpBalancesAdjustParamSettleRule
    */
    public function getSettleRule(): ?WeimobCdpBalancesAdjustParamSettleRule
    {
        return $this->settleRule;
    }

    /**
    * @param string $requestId
    */
    public function setRequestId(?string $requestId)
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
    public function setRequestType(?string $requestType)
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
    * @param int $changCapitalAmount
    */
    public function setChangCapitalAmount(?int $changCapitalAmount)
    {
        $this->changCapitalAmount = $changCapitalAmount;
    }

    /**
    * @return int
    */
    public function getChangCapitalAmount(): ?int
    {
        return $this->changCapitalAmount;
    }

    /**
    * @param int $changeGrantsAmount
    */
    public function setChangeGrantsAmount(?int $changeGrantsAmount)
    {
        $this->changeGrantsAmount = $changeGrantsAmount;
    }

    /**
    * @return int
    */
    public function getChangeGrantsAmount(): ?int
    {
        return $this->changeGrantsAmount;
    }

    /**
    * @param string $adjustType
    */
    public function setAdjustType(?string $adjustType)
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
    public function setChangeReason(?string $changeReason)
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
    * @param int $sourceVid
    */
    public function setSourceVid(?int $sourceVid)
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
    * @param int $operatorWid
    */
    public function setOperatorWid(?int $operatorWid)
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
    public function setOperateStoreVid(?int $operateStoreVid)
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCdpBalancesAdjustParamOneCrmAdjustInfoList implements \JsonSerializable
{
    /**
    * vid
    * @var int
    */
    private $vid;

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
    * piid
    * @var int
    */
    private $productInstanceId;

    /**
    * 储值方案id
    * @var int
    */
    private $balancePlanId;

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
    * @param int $balancePlanId
    */
    public function setBalancePlanId(?int $balancePlanId)
    {
        $this->balancePlanId = $balancePlanId;
    }

    /**
    * @return int
    */
    public function getBalancePlanId(): ?int
    {
        return $this->balancePlanId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCdpBalancesAdjustParamSettleRule implements \JsonSerializable
{
    /**
    * 分摊商户
    * @var int
    */
    private $vid;

    /**
    * 分摊比例
    * @var int
    */
    private $rate;

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
    * @param int $rate
    */
    public function setRate(?int $rate)
    {
        $this->rate = $rate;
    }

    /**
    * @return int
    */
    public function getRate(): ?int
    {
        return $this->rate;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobCdpBalancesAdjustResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobCdpBalancesAdjustData
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
    * @return WeimobCdpBalancesAdjustData
    */
    public function getData(): ?WeimobCdpBalancesAdjustData
    {
        return $this->data;
    }

    /**
    * @param WeimobCdpBalancesAdjustData $data
    */
    public function setData(?WeimobCdpBalancesAdjustData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCdpBalancesAdjustData implements \JsonSerializable
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
    public function setList(?array $list)
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
    public function setResult(?bool $result)
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

class WeimobCdpBalancesAdjustDatalist implements \JsonSerializable
{
    /**
    * 成功
    * @var int
    */
    private $status;

    /**
    * wid
    * @var int
    */
    private $wid;

    /**
    * 原因
    * @var string
    */
    private $message;

    /**
    * 人
    * @var string
    */
    private $widName;

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
    * @param string $message
    */
    public function setMessage(?string $message)
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
    * @param string $widName
    */
    public function setWidName(?string $widName)
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

