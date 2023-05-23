<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,360
 * @author weimobcloud
 * @create 2023-5-23
 */
interface PaasQueryMerchantAmountDetailService
{
    const specType = 'xinyun';

    public function execute(SQueryMerchantAmountDetailRequest $request) : SQueryMerchantAmountDetailResponse;
}

class SQueryMerchantAmountDetailRequest implements \JsonSerializable
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
     * @var SQueryMerchantAmountDetailParam
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
     * @param SQueryMerchantAmountDetailParam $param
     */
    public function setParam(?SQueryMerchantAmountDetailParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return SQueryMerchantAmountDetailParam
     */
    public function getParam(): ?SQueryMerchantAmountDetailParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class SQueryMerchantAmountDetailResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SQueryMerchantAmountDetailData
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
     * @return SQueryMerchantAmountDetailData
     */
    public function getData(): ?SQueryMerchantAmountDetailData
    {
        return $this->data;
    }

    /**
     * @param SQueryMerchantAmountDetailData $data
     */
    public function setData(?SQueryMerchantAmountDetailData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SQueryMerchantAmountDetailData implements \JsonSerializable
{
    /**
     * 会员充值信息
     * @var array
     */
    private $items;

    /**
     * 总页数
     * @var int
     */
    private $totalPage;

    /**
     * 总条数
     * @var int
     */
    private $totalCount;

    /**
     * 当前页数
     * @var int
     */
    private $currentPage;

    /**
     * @param array $items
     */
    public function setItems(?array $items): void
    {
        $this->items = $items;
    }

    /**
     * @return array
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param int $totalPage
     */
    public function setTotalPage(?int $totalPage): void
    {
        $this->totalPage = $totalPage;
    }

    /**
     * @return int
     */
    public function getTotalPage(): ?int
    {
        return $this->totalPage;
    }

    /**
     * @param int $totalCount
     */
    public function setTotalCount(?int $totalCount): void
    {
        $this->totalCount = $totalCount;
    }

    /**
     * @return int
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * @param int $currentPage
     */
    public function setCurrentPage(?int $currentPage): void
    {
        $this->currentPage = $currentPage;
    }

    /**
     * @return int
     */
    public function getCurrentPage(): ?int
    {
        return $this->currentPage;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SQueryMerchantAmountDetailDataItems implements \JsonSerializable
{
    /**
     * 过滤视角map
     * @var SQueryMerchantAmountDetailDataViewFilter
     */
    private $viewFilter;

    /**
     * 余额变更记录id
     * @var int
     */
    private $balanceId;

    /**
     * 会员卡号
     * @var string
     */
    private $code;

    /**
     * 客户wid
     * @var int
     */
    private $wid;

    /**
     * 大于0表示获得余额，小于0表示消耗余额（元）
     * @var float
     */
    private $changeMoney;

    /**
     * 剩余余额（元）
     * @var float
     */
    private $leftAmount;

    /**
     * 大于0表示获得余额，小于0表示消耗余额（元）
     * @var float
     */
    private $changeDeposit;

    /**
     * 大于0表示获得余额，小于0表示消耗余额（元）
     * @var float
     */
    private $changeGive;

    /**
     * 变更日期
     * @var int
     */
    private $changeTime;

    /**
     * 变更原因
     * @var string
     */
    private $changeReason;

    /**
     * 操作员姓名
     * @var string
     */
    private $operatorName;

    /**
     * 操作员id
     * @var string
     */
    private $operatorId;

    /**
     * 门店id
     * @var int
     */
    private $storeId;

    /**
     * @param SQueryMerchantAmountDetailDataViewFilter $viewFilter
     */
    public function setViewFilter(?SQueryMerchantAmountDetailDataViewFilter $viewFilter): void
    {
        $this->viewFilter = $viewFilter;
    }

    /**
     * @return SQueryMerchantAmountDetailDataViewFilter
     */
    public function getViewFilter(): ?SQueryMerchantAmountDetailDataViewFilter
    {
        return $this->viewFilter;
    }

    /**
     * @param int $balanceId
     */
    public function setBalanceId(?int $balanceId): void
    {
        $this->balanceId = $balanceId;
    }

    /**
     * @return int
     */
    public function getBalanceId(): ?int
    {
        return $this->balanceId;
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
     * @param float $changeMoney
     */
    public function setChangeMoney(?float $changeMoney): void
    {
        $this->changeMoney = $changeMoney;
    }

    /**
     * @return float
     */
    public function getChangeMoney(): ?float
    {
        return $this->changeMoney;
    }

    /**
     * @param float $leftAmount
     */
    public function setLeftAmount(?float $leftAmount): void
    {
        $this->leftAmount = $leftAmount;
    }

    /**
     * @return float
     */
    public function getLeftAmount(): ?float
    {
        return $this->leftAmount;
    }

    /**
     * @param float $changeDeposit
     */
    public function setChangeDeposit(?float $changeDeposit): void
    {
        $this->changeDeposit = $changeDeposit;
    }

    /**
     * @return float
     */
    public function getChangeDeposit(): ?float
    {
        return $this->changeDeposit;
    }

    /**
     * @param float $changeGive
     */
    public function setChangeGive(?float $changeGive): void
    {
        $this->changeGive = $changeGive;
    }

    /**
     * @return float
     */
    public function getChangeGive(): ?float
    {
        return $this->changeGive;
    }

    /**
     * @param int $changeTime
     */
    public function setChangeTime(?int $changeTime): void
    {
        $this->changeTime = $changeTime;
    }

    /**
     * @return int
     */
    public function getChangeTime(): ?int
    {
        return $this->changeTime;
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
     * @param string $operatorName
     */
    public function setOperatorName(?string $operatorName): void
    {
        $this->operatorName = $operatorName;
    }

    /**
     * @return string
     */
    public function getOperatorName(): ?string
    {
        return $this->operatorName;
    }

    /**
     * @param string $operatorId
     */
    public function setOperatorId(?string $operatorId): void
    {
        $this->operatorId = $operatorId;
    }

    /**
     * @return string
     */
    public function getOperatorId(): ?string
    {
        return $this->operatorId;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SQueryMerchantAmountDetailDataViewFilter implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

