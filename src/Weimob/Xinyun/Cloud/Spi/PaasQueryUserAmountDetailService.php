<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,359
 * @author weimobcloud
 * @create 2023-5-23
 */
interface PaasQueryUserAmountDetailService
{
    const specType = 'xinyun';

    public function execute(SQueryUserAmountDetailRequest $request) : SQueryUserAmountDetailResponse;
}

class SQueryUserAmountDetailRequest implements \JsonSerializable
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
     * @var SQueryUserAmountDetailParam
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
     * @param SQueryUserAmountDetailParam $param
     */
    public function setParam(?SQueryUserAmountDetailParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return SQueryUserAmountDetailParam
     */
    public function getParam(): ?SQueryUserAmountDetailParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class SQueryUserAmountDetailResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SQueryUserAmountDetailData
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
     * @return SQueryUserAmountDetailData
     */
    public function getData(): ?SQueryUserAmountDetailData
    {
        return $this->data;
    }

    /**
     * @param SQueryUserAmountDetailData $data
     */
    public function setData(?SQueryUserAmountDetailData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SQueryUserAmountDetailData implements \JsonSerializable
{
    /**
     * 列表信息
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

class SQueryUserAmountDetailDataItems implements \JsonSerializable
{
    /**
     * 过滤视角map
     * @var SQueryUserAmountDetailDataViewFilter
     */
    private $viewFilter;

    /**
     * >0表示获得余额，<0表示消耗余额,单位元
     * @var float
     */
    private $changeMoney;

    /**
     * 变更日期
     * @var int
     */
    private $changeTime;

    /**
     * 操作人id
     * @var string
     */
    private $operatorId;

    /**
     * 操作人名称
     * @var string
     */
    private $operatorName;

    /**
     * 门店id
     * @var int
     */
    private $storeId;

    /**
     * 变更原因
     * @var string
     */
    private $changeReason;

    /**
     * @param SQueryUserAmountDetailDataViewFilter $viewFilter
     */
    public function setViewFilter(?SQueryUserAmountDetailDataViewFilter $viewFilter): void
    {
        $this->viewFilter = $viewFilter;
    }

    /**
     * @return SQueryUserAmountDetailDataViewFilter
     */
    public function getViewFilter(): ?SQueryUserAmountDetailDataViewFilter
    {
        return $this->viewFilter;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SQueryUserAmountDetailDataViewFilter implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

