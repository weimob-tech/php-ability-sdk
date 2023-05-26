<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,375
 * @author weimobcloud
 * @create 2023-5-26
 */
interface PaasQueryUserPointDetailService
{
    const specType = 'xinyun';

    public function execute(SQueryUserPointDetailRequest $request) : SQueryUserPointDetailResponse;
}

class SQueryUserPointDetailRequest implements \JsonSerializable
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
     * @var SQueryUserPointDetailParam
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
     * @param SQueryUserPointDetailParam $param
     */
    public function setParams(?SQueryUserPointDetailParam $param): void
    {
        $this->params = $param;
    }

    /**
     * @return SQueryUserPointDetailParam
     */
    public function getParams(): ?SQueryUserPointDetailParam
    {
        return $this->params;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class SQueryUserPointDetailResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SQueryUserPointDetailData
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
     * @return SQueryUserPointDetailData
     */
    public function getData(): ?SQueryUserPointDetailData
    {
        return $this->data;
    }

    /**
     * @param SQueryUserPointDetailData $data
     */
    public function setData(?SQueryUserPointDetailData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SQueryUserPointDetailData implements \JsonSerializable
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

class SQueryUserPointDetailDataItems implements \JsonSerializable
{
    /**
     * 过滤视角map详细介绍：https:cloud.weimob.com/saas/word/detail.html?tag=1332&menuId=5
     * @var SQueryUserPointDetailDataViewFilter
     */
    private $viewFilter;

    /**
     * >0表示获得积分，<0表示消耗积分
     * @var int
     */
    private $changePoint;

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
     * 剩余积分
     * @var int
     */
    private $leftPoint;

    /**
     * 操作人
     * @var int
     */
    private $operatorName;

    /**
     * @param SQueryUserPointDetailDataViewFilter $viewFilter
     */
    public function setViewFilter(?SQueryUserPointDetailDataViewFilter $viewFilter): void
    {
        $this->viewFilter = $viewFilter;
    }

    /**
     * @return SQueryUserPointDetailDataViewFilter
     */
    public function getViewFilter(): ?SQueryUserPointDetailDataViewFilter
    {
        return $this->viewFilter;
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
     * @param int $leftPoint
     */
    public function setLeftPoint(?int $leftPoint): void
    {
        $this->leftPoint = $leftPoint;
    }

    /**
     * @return int
     */
    public function getLeftPoint(): ?int
    {
        return $this->leftPoint;
    }

    /**
     * @param int $operatorName
     */
    public function setOperatorName(?int $operatorName): void
    {
        $this->operatorName = $operatorName;
    }

    /**
     * @return int
     */
    public function getOperatorName(): ?int
    {
        return $this->operatorName;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SQueryUserPointDetailDataViewFilter implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

