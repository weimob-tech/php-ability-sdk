<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,558
 * @author weimobcloud
 * @create 2023-5-23
 */
interface PaasRefundAmountService
{
    const specType = 'xinyun';

    public function execute(SRefundAmountRequest $request) : SRefundAmountResponse;
}

class SRefundAmountRequest implements \JsonSerializable
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
     * @var SRefundAmountParam
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
     * @param SRefundAmountParam $param
     */
    public function setParam(?SRefundAmountParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return SRefundAmountParam
     */
    public function getParam(): ?SRefundAmountParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class SRefundAmountResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SRefundAmountData
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
     * @return SRefundAmountData
     */
    public function getData(): ?SRefundAmountData
    {
        return $this->data;
    }

    /**
     * @param SRefundAmountData $data
     */
    public function setData(?SRefundAmountData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SRefundAmountData implements \JsonSerializable
{
    /**
     * 退还余额
     * @var float
     */
    private $refundAmount;

    /**
     * 当前余额（使用后）
     * @var float
     */
    private $currentAmount;

    /**
     * @param float $refundAmount
     */
    public function setRefundAmount(?float $refundAmount): void
    {
        $this->refundAmount = $refundAmount;
    }

    /**
     * @return float
     */
    public function getRefundAmount(): ?float
    {
        return $this->refundAmount;
    }

    /**
     * @param float $currentAmount
     */
    public function setCurrentAmount(?float $currentAmount): void
    {
        $this->currentAmount = $currentAmount;
    }

    /**
     * @return float
     */
    public function getCurrentAmount(): ?float
    {
        return $this->currentAmount;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

