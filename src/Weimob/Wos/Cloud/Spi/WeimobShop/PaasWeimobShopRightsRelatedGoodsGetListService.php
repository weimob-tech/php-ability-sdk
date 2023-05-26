<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,526
 * @author weimobcloud
 * @create 2023-5-26
 */
interface PaasWeimobShopRightsRelatedGoodsGetListService
{
    const specType = 'wos';

    public function invoke(WeimobShopRightsRelatedGoodsGetListRequest $request) : WeimobShopRightsRelatedGoodsGetListResponse;
}

class WeimobShopRightsRelatedGoodsGetListRequest implements \JsonSerializable
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
     * @var WeimobShopRightsRelatedGoodsGetListParam
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
     * @param WeimobShopRightsRelatedGoodsGetListParam $param
     */
    public function setParams(?WeimobShopRightsRelatedGoodsGetListParam $param): void
    {
        $this->params = $param;
    }

    /**
     * @return WeimobShopRightsRelatedGoodsGetListParam
     */
    public function getParams(): ?WeimobShopRightsRelatedGoodsGetListParam
    {
        return $this->params;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopRightsRelatedGoodsGetListParam implements \JsonSerializable
{
    /**
     * 申请售后商品项
     * @var array
     */
    private $applyItems;

    /**
     * 订单父单号
     * @var int
     */
    private $parentOrderNo;

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
     * @param int $parentOrderNo
     */
    public function setParentOrderNo(?int $parentOrderNo): void
    {
        $this->parentOrderNo = $parentOrderNo;
    }

    /**
     * @return int
     */
    public function getParentOrderNo(): ?int
    {
        return $this->parentOrderNo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopRightsRelatedGoodsGetListParamApplyItems implements \JsonSerializable
{
    /**
     * 扩展信息
     * @var WeimobShopRightsRelatedGoodsGetListParamExt
     */
    private $ext;

    /**
     * 订单号
     * @var int
     */
    private $orderNo;

    /**
     * 订单项id
     * @var int
     */
    private $orderItemId;

    /**
     * 商品编码
     * @var string
     */
    private $skuCode;

    /**
     * 申请售后金额
     * @var int
     */
    private $applyAmount;

    /**
     * 申请数量
     * @var int
     */
    private $applyNum;

    /**
     * 已售后数量（包含售后中、售后完成）
     * @var int
     */
    private $alreadyRightsNum;

    /**
     * @param WeimobShopRightsRelatedGoodsGetListParamExt $ext
     */
    public function setExt(?WeimobShopRightsRelatedGoodsGetListParamExt $ext): void
    {
        $this->ext = $ext;
    }

    /**
     * @return WeimobShopRightsRelatedGoodsGetListParamExt
     */
    public function getExt(): ?WeimobShopRightsRelatedGoodsGetListParamExt
    {
        return $this->ext;
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
     * @param int $orderItemId
     */
    public function setOrderItemId(?int $orderItemId): void
    {
        $this->orderItemId = $orderItemId;
    }

    /**
     * @return int
     */
    public function getOrderItemId(): ?int
    {
        return $this->orderItemId;
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

    /**
     * @param int $alreadyRightsNum
     */
    public function setAlreadyRightsNum(?int $alreadyRightsNum): void
    {
        $this->alreadyRightsNum = $alreadyRightsNum;
    }

    /**
     * @return int
     */
    public function getAlreadyRightsNum(): ?int
    {
        return $this->alreadyRightsNum;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopRightsRelatedGoodsGetListParamExt implements \JsonSerializable
{
    /**
     * 关联订单项（申请类型为2时，当前售后项关联项）
     * @var array
     */
    private $clueItems;

    /**
     * 商品参与活动类型列表
     * @var array
     */
    private $activtiyIds;

    /**
     * 申请类型 1-用户申请 2-关联申请
     * @var int
     */
    private $applyType;

    /**
     * @param array $clueItems
     */
    public function setClueItems(?array $clueItems): void
    {
        $this->clueItems = $clueItems;
    }

    /**
     * @return array
     */
    public function getClueItems(): ?array
    {
        return $this->clueItems;
    }

    /**
     * @param array $activtiyIds
     */
    public function setActivtiyIds(?array $activtiyIds): void
    {
        $this->activtiyIds = $activtiyIds;
    }

    /**
     * @return array
     */
    public function getActivtiyIds(): ?array
    {
        return $this->activtiyIds;
    }

    /**
     * @param int $applyType
     */
    public function setApplyType(?int $applyType): void
    {
        $this->applyType = $applyType;
    }

    /**
     * @return int
     */
    public function getApplyType(): ?int
    {
        return $this->applyType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopRightsRelatedGoodsGetListParamClueItems implements \JsonSerializable
{
    /**
     * 订单号
     * @var int
     */
    private $orderNo;

    /**
     * 订单项id集合
     * @var array
     */
    private $orderItemIds;

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
     * @param array $orderItemIds
     */
    public function setOrderItemIds(?array $orderItemIds): void
    {
        $this->orderItemIds = $orderItemIds;
    }

    /**
     * @return array
     */
    public function getOrderItemIds(): ?array
    {
        return $this->orderItemIds;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobShopRightsRelatedGoodsGetListResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobShopRightsRelatedGoodsGetListData
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
     * @return WeimobShopRightsRelatedGoodsGetListData
     */
    public function getData(): ?WeimobShopRightsRelatedGoodsGetListData
    {
        return $this->data;
    }

    /**
     * @param WeimobShopRightsRelatedGoodsGetListData $data
     */
    public function setData(?WeimobShopRightsRelatedGoodsGetListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopRightsRelatedGoodsGetListData implements \JsonSerializable
{
    /**
     * 新增关联关系
     * @var WeimobShopRightsRelatedGoodsGetListDataRelations
     */
    private $relations;

    /**
     * 外部Paas关联说明
     * @var string
     */
    private $relatedRemark;

    /**
     * @param WeimobShopRightsRelatedGoodsGetListDataRelations $relations
     */
    public function setRelations(?WeimobShopRightsRelatedGoodsGetListDataRelations $relations): void
    {
        $this->relations = $relations;
    }

    /**
     * @return WeimobShopRightsRelatedGoodsGetListDataRelations
     */
    public function getRelations(): ?WeimobShopRightsRelatedGoodsGetListDataRelations
    {
        return $this->relations;
    }

    /**
     * @param string $relatedRemark
     */
    public function setRelatedRemark(?string $relatedRemark): void
    {
        $this->relatedRemark = $relatedRemark;
    }

    /**
     * @return string
     */
    public function getRelatedRemark(): ?string
    {
        return $this->relatedRemark;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopRightsRelatedGoodsGetListDataRelations implements \JsonSerializable
{
    /**
     * 新增关联售后项（入参中applyItem为微盟内部申请售后项，外部返回新增关联售后项relatedItems 意思为新增需要售后项，不可与applyItem中的售后项重复）
     * @var array
     */
    private $relatedItems;

    /**
     * 新增关联售后项-关联项
     * @var array
     */
    private $clueItems;

    /**
     * @param array $relatedItems
     */
    public function setRelatedItems(?array $relatedItems): void
    {
        $this->relatedItems = $relatedItems;
    }

    /**
     * @return array
     */
    public function getRelatedItems(): ?array
    {
        return $this->relatedItems;
    }

    /**
     * @param array $clueItems
     */
    public function setClueItems(?array $clueItems): void
    {
        $this->clueItems = $clueItems;
    }

    /**
     * @return array
     */
    public function getClueItems(): ?array
    {
        return $this->clueItems;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopRightsRelatedGoodsGetListDataRelatedItems implements \JsonSerializable
{
    /**
     * 订单号
     * @var int
     */
    private $orderNo;

    /**
     * 订单项id
     * @var int
     */
    private $orderItemId;

    /**
     * 申请售后数量（目前只支持全部数量售后，不传默认全部数量售后）
     * @var int
     */
    private $applyNum;

    /**
     * 申请售后金额（应退金额，包含积分余额等资产；不传默认全部金额售后）
     * @var int
     */
    private $applyAmount;

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
     * @param int $orderItemId
     */
    public function setOrderItemId(?int $orderItemId): void
    {
        $this->orderItemId = $orderItemId;
    }

    /**
     * @return int
     */
    public function getOrderItemId(): ?int
    {
        return $this->orderItemId;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopRightsRelatedGoodsGetListDataClueItems implements \JsonSerializable
{
    /**
     * 订单号
     * @var int
     */
    private $orderNo;

    /**
     * 订单项id集合
     * @var array
     */
    private $orderItemIds;

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
     * @param array $orderItemIds
     */
    public function setOrderItemIds(?array $orderItemIds): void
    {
        $this->orderItemIds = $orderItemIds;
    }

    /**
     * @return array
     */
    public function getOrderItemIds(): ?array
    {
        return $this->orderItemIds;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

