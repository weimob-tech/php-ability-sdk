<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,365
 * @author weimobcloud
 * @create 2023-5-23
 */
interface PaasAddAmountService
{
    const specType = 'xinyun';

    public function execute(SAddAmountRequest $request) : SAddAmountResponse;
}

class SAddAmountRequest implements \JsonSerializable
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
     * @var SAddAmountParam
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
     * @param SAddAmountParam $param
     */
    public function setParam(?SAddAmountParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return SAddAmountParam
     */
    public function getParam(): ?SAddAmountParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class SAddAmountResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SAddAmountData
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
     * @return SAddAmountData
     */
    public function getData(): ?SAddAmountData
    {
        return $this->data;
    }

    /**
     * @param SAddAmountData $data
     */
    public function setData(?SAddAmountData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SAddAmountData implements \JsonSerializable
{
    /**
     * 商户id
     * @var int
     */
    private $pid;

    /**
     * 用户wid
     * @var int
     */
    private $wid;

    /**
     * 会员卡code
     * @var string
     */
    private $code;

    /**
     * 变更余额
     * @var float
     */
    private $changeAmount;

    /**
     * 当前余额
     * @var float
     */
    private $currentAmount;

    /**
     * 余额记录id
     * @var int
     */
    private $balanceLogId;

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
     * @param float $changeAmount
     */
    public function setChangeAmount(?float $changeAmount): void
    {
        $this->changeAmount = $changeAmount;
    }

    /**
     * @return float
     */
    public function getChangeAmount(): ?float
    {
        return $this->changeAmount;
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

    /**
     * @param int $balanceLogId
     */
    public function setBalanceLogId(?int $balanceLogId): void
    {
        $this->balanceLogId = $balanceLogId;
    }

    /**
     * @return int
     */
    public function getBalanceLogId(): ?int
    {
        return $this->balanceLogId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

