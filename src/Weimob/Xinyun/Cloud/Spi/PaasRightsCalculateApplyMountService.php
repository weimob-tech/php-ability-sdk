<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 3,883
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasRightsCalculateApplyMountService
{
    const specType = 'xinyun';

    public function execute(SRightsCalculateApplyMountRequest $request) : SRightsCalculateApplyMountResponse;
}

class SRightsCalculateApplyMountRequest implements \JsonSerializable
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
     * @var SRightsCalculateApplyMountParam
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
     * @param SRightsCalculateApplyMountParam $param
     */
    public function setParam(?SRightsCalculateApplyMountParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return SRightsCalculateApplyMountParam
     */
    public function getParam(): ?SRightsCalculateApplyMountParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SRightsCalculateApplyMountParam implements \JsonSerializable
{
    /**
     * 申请item信息
     * @var array
     */
    private $applyItems;

    /**
     * ⽤户 ID
     * @var int
     */
    private $wid;

    /**
     * 商家 ID
     * @var int
     */
    private $pid;

    /**
     * 店铺 ID
     * @var int
     */
    private $storeId;

    /**
     * 订单号
     * @var int
     */
    private $orderNo;

    /**
     * @param array $applyItems
     */
    public function setApplyItems(?array $applyItems): void
    {
        $this->applyItems = $applyItems;
    }

    /**
     * @return array
     */
    public function getApplyItems(): ?array
    {
        return $this->applyItems;
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
     * @param int $orderNo
     */
    public function setOrderNo(?int $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SRightsCalculateApplyMountParamApplyItems implements \JsonSerializable
{
    /**
     * 订单项 ID
     * @var int
     */
    private $itemId;

    /**
     * 商品商家编码
     * @var string
     */
    private $skuCode;

    /**
     * 申请⾦额
     * @var int
     */
    private $applyAmount;

    /**
     * 申请积分商品的积分数
     * @var int
     */
    private $applyGoodsPoints;

    /**
     * 申请售后数量
     * @var int
     */
    private $applyNum;

    /**
     * @param int $itemId
     */
    public function setItemId(?int $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param string $skuCode
     */
    public function setSkuCode(?string $skuCode): void
    {
        $this->skuCode = $skuCode;
    }

    /**
     * @return string
     */
    public function getSkuCode(): ?string
    {
        return $this->skuCode;
    }

    /**
     * @param int $applyAmount
     */
    public function setApplyAmount(?int $applyAmount): void
    {
        $this->applyAmount = $applyAmount;
    }

    /**
     * @return int
     */
    public function getApplyAmount(): ?int
    {
        return $this->applyAmount;
    }

    /**
     * @param int $applyGoodsPoints
     */
    public function setApplyGoodsPoints(?int $applyGoodsPoints): void
    {
        $this->applyGoodsPoints = $applyGoodsPoints;
    }

    /**
     * @return int
     */
    public function getApplyGoodsPoints(): ?int
    {
        return $this->applyGoodsPoints;
    }

    /**
     * @param int $applyNum
     */
    public function setApplyNum(?int $applyNum): void
    {
        $this->applyNum = $applyNum;
    }

    /**
     * @return int
     */
    public function getApplyNum(): ?int
    {
        return $this->applyNum;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class SRightsCalculateApplyMountResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SRightsCalculateApplyMountData
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
     * @return SRightsCalculateApplyMountData
     */
    public function getData(): ?SRightsCalculateApplyMountData
    {
        return $this->data;
    }

    /**
     * @param SRightsCalculateApplyMountData $data
     */
    public function setData(?SRightsCalculateApplyMountData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SRightsCalculateApplyMountData implements \JsonSerializable
{
    /**
     * 售后明细
     * @var array
     */
    private $rightsDetails;

    /**
     * 订单号
     * @var int
     */
    private $orderNo;

    /**
     * 总申请⾦额
     * @var int
     */
    private $totalApplyAmount;

    /**
     * 总申请⾦额说明
     * @var string
     */
    private $amountDesc;

    /**
     * 是否成功
     * @var bool
     */
    private $success;

    /**
     * @param array $rightsDetails
     */
    public function setRightsDetails(?array $rightsDetails): void
    {
        $this->rightsDetails = $rightsDetails;
    }

    /**
     * @return array
     */
    public function getRightsDetails(): ?array
    {
        return $this->rightsDetails;
    }

    /**
     * @param int $orderNo
     */
    public function setOrderNo(?int $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }

    /**
     * @param int $totalApplyAmount
     */
    public function setTotalApplyAmount(?int $totalApplyAmount): void
    {
        $this->totalApplyAmount = $totalApplyAmount;
    }

    /**
     * @return int
     */
    public function getTotalApplyAmount(): ?int
    {
        return $this->totalApplyAmount;
    }

    /**
     * @param string $amountDesc
     */
    public function setAmountDesc(?string $amountDesc): void
    {
        $this->amountDesc = $amountDesc;
    }

    /**
     * @return string
     */
    public function getAmountDesc(): ?string
    {
        return $this->amountDesc;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(?bool $success): void
    {
        $this->success = $success;
    }

    /**
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SRightsCalculateApplyMountDataRightsDetails implements \JsonSerializable
{
    /**
     * 订单项 ID
     * @var int
     */
    private $itemId;

    /**
     * 原申请⾦额
     * @var int
     */
    private $originalApplyAmount;

    /**
     * 申请⾦额
     * @var int
     */
    private $applyAmount;

    /**
     * 申请⾦额说明
     * @var string
     */
    private $amountDesc;

    /**
     * @param int $itemId
     */
    public function setItemId(?int $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $originalApplyAmount
     */
    public function setOriginalApplyAmount(?int $originalApplyAmount): void
    {
        $this->originalApplyAmount = $originalApplyAmount;
    }

    /**
     * @return int
     */
    public function getOriginalApplyAmount(): ?int
    {
        return $this->originalApplyAmount;
    }

    /**
     * @param int $applyAmount
     */
    public function setApplyAmount(?int $applyAmount): void
    {
        $this->applyAmount = $applyAmount;
    }

    /**
     * @return int
     */
    public function getApplyAmount(): ?int
    {
        return $this->applyAmount;
    }

    /**
     * @param string $amountDesc
     */
    public function setAmountDesc(?string $amountDesc): void
    {
        $this->amountDesc = $amountDesc;
    }

    /**
     * @return string
     */
    public function getAmountDesc(): ?string
    {
        return $this->amountDesc;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

