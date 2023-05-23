<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,556
 * @author weimobcloud
 * @create 2023-5-23
 */
interface PaasDepositAmountService
{
    const specType = 'xinyun';

    public function execute(SDepositAmountRequest $request) : SDepositAmountResponse;
}

class SDepositAmountRequest implements \JsonSerializable
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
     * @var SDepositAmountParam
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
     * @param SDepositAmountParam $param
     */
    public function setParam(?SDepositAmountParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return SDepositAmountParam
     */
    public function getParam(): ?SDepositAmountParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class SDepositAmountResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SDepositAmountData
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
     * @return SDepositAmountData
     */
    public function getData(): ?SDepositAmountData
    {
        return $this->data;
    }

    /**
     * @param SDepositAmountData $data
     */
    public function setData(?SDepositAmountData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SDepositAmountData implements \JsonSerializable
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

