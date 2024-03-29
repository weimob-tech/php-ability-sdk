<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 734
 * @author weimobcloud
 * @create 2023-5-26
 */
interface PaasWeimobGuideRightsGetListService
{
    const specType = 'wos';

    public function invoke(WeimobGuideRightsGetListRequest $request) : WeimobGuideRightsGetListResponse;
}

class WeimobGuideRightsGetListRequest implements \JsonSerializable
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
     * @var WeimobGuideRightsGetListParam
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
     * @param WeimobGuideRightsGetListParam $param
     */
    public function setParams(?WeimobGuideRightsGetListParam $param): void
    {
        $this->params = $param;
    }

    /**
     * @return WeimobGuideRightsGetListParam
     */
    public function getParams(): ?WeimobGuideRightsGetListParam
    {
        return $this->params;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideRightsGetListParam implements \JsonSerializable
{
    /**
     * 维权单号列表
     * @var array
     */
    private $rightsOrderNos;

    /**
     * @param array $rightsOrderNos
     */
    public function setRightsOrderNos(?array $rightsOrderNos): void
    {
        $this->rightsOrderNos = $rightsOrderNos;
    }

    /**
     * @return array
     */
    public function getRightsOrderNos(): ?array
    {
        return $this->rightsOrderNos;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideRightsGetListResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobGuideRightsGetListData
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
     * @return WeimobGuideRightsGetListData
     */
    public function getData(): ?WeimobGuideRightsGetListData
    {
        return $this->data;
    }

    /**
     * @param WeimobGuideRightsGetListData $data
     */
    public function setData(?WeimobGuideRightsGetListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideRightsGetListData implements \JsonSerializable
{
    /**
     * 维权列表
     * @var array
     */
    private $rightsList;

    /**
     * @param array $rightsList
     */
    public function setRightsList(?array $rightsList): void
    {
        $this->rightsList = $rightsList;
    }

    /**
     * @return array
     */
    public function getRightsList(): ?array
    {
        return $this->rightsList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideRightsGetListDataRightsList implements \JsonSerializable
{
    /**
     * 同意时间
     * @var WeimobGuideRightsGetListDataAgreeTime
     */
    private $agreeTime;

    /**
     * 确认收货时间
     * @var WeimobGuideRightsGetListDataConfirmReceivedTime
     */
    private $confirmReceivedTime;

    /**
     * 创建时间
     * @var WeimobGuideRightsGetListDataCreateTime
     */
    private $createTime;

    /**
     * 应退运费积分
     * @var WeimobGuideRightsGetListDataDeliveryRefundPoints
     */
    private $deliveryRefundPoints;

    /**
     * 完成时间 退款完成时表示完成时间、售后取消时表示取消时间
     * @var WeimobGuideRightsGetListDataFinishTime
     */
    private $finishTime;

    /**
     * 售后商品列表
     * @var array
     */
    private $itemList;

    /**
     * 订单号
     * @var WeimobGuideRightsGetListDataOrderNo
     */
    private $orderNo;

    /**
     * 退款成功时间
     * @var WeimobGuideRightsGetListDataRefundPaySuccessTime
     */
    private $refundPaySuccessTime;

    /**
     * 应退积分
     * @var WeimobGuideRightsGetListDataRefundPoints
     */
    private $refundPoints;

    /**
     * 退货时间
     * @var WeimobGuideRightsGetListDataReturnGoodsTime
     */
    private $returnGoodsTime;

    /**
     * 售后单id
     * @var WeimobGuideRightsGetListDataRightsId
     */
    private $rightsId;

    /**
     * 售后类型 1-退货退款；2-退款
     * @var WeimobGuideRightsGetListDataRightsType
     */
    private $rightsType;

    /**
     * 更新时间
     * @var WeimobGuideRightsGetListDataUpdateTime
     */
    private $updateTime;

    /**
     * 退款失败原因
     * @var string
     */
    private $amountReturnFailReason;

    /**
     * 商业操作系统ID
     * @var int
     */
    private $bosId;

    /**
     * 取消类型
     * @var int
     */
    private $cancelType;

    /**
     * 自定义售后原因
     * @var string
     */
    private $customRightsReason;

    /**
     * 应退运费实付
     * @var string
     */
    private $deliveryRefundAmount;

    /**
     * 应退运费余额
     * @var string
     */
    private $deliveryRefundBalance;

    /**
     * 应退运费积分抵扣金额
     * @var string
     */
    private $deliveryRefundPointDiscountAmount;

    /**
     * 运费模板id
     * @var int
     */
    private $freightTemplateId;

    /**
     * 售后凭证url
     * @var string
     */
    private $reasonImageUrlList;

    /**
     * 关联订单类型
     * @var int
     */
    private $referOrderType;

    /**
     * 应退金额
     * @var string
     */
    private $refundAmount;

    /**
     * 应退余额
     * @var string
     */
    private $refundBalance;

    /**
     * 应退运费(实付 + 余额 + 积分 + 储值卡)
     * @var string
     */
    private $refundDeliveryAmount;

    /**
     * 应退发票税费
     * @var int
     */
    private $refundInvoiceTexAmount;

    /**
     * 退款方式：0线上；1线下
     * @var int
     */
    private $refundMethod;

    /**
     * 应退积分抵扣金额
     * @var string
     */
    private $refundPointDiscountAmount;

    /**
     * 应退储值卡
     * @var int
     */
    private $refundStorageCard;

    /**
     * 退款类型：0自有；1微盟代收；3直连服务商
     * @var int
     */
    private $refundType;

    /**
     * 拒绝原因 code，外部售后单使用
     * @var string
     */
    private $refusedCode;

    /**
     * 商家拒绝原因
     * @var string
     */
    private $refusedReason;

    /**
     * 售后触发类型
     * @var int
     */
    private $rightsCauseType;

    /**
     * 售后原因
     * @var string
     */
    private $rightsReason;

    /**
     * 售后单状态
     * @var int
     */
    private $rightsStatus;

    /**
     * 用户昵称
     * @var string
     */
    private $userNickName;

    /**
     * 节点id
     * @var int
     */
    private $vid;

    /**
     * 节点类型
     * @var int
     */
    private $vidType;

    /**
     * 用户id
     * @var int
     */
    private $wid;

    /**
     * @param WeimobGuideRightsGetListDataAgreeTime $agreeTime
     */
    public function setAgreeTime(?WeimobGuideRightsGetListDataAgreeTime $agreeTime): void
    {
        $this->agreeTime = $agreeTime;
    }

    /**
     * @return WeimobGuideRightsGetListDataAgreeTime
     */
    public function getAgreeTime(): ?WeimobGuideRightsGetListDataAgreeTime
    {
        return $this->agreeTime;
    }

    /**
     * @param WeimobGuideRightsGetListDataConfirmReceivedTime $confirmReceivedTime
     */
    public function setConfirmReceivedTime(?WeimobGuideRightsGetListDataConfirmReceivedTime $confirmReceivedTime): void
    {
        $this->confirmReceivedTime = $confirmReceivedTime;
    }

    /**
     * @return WeimobGuideRightsGetListDataConfirmReceivedTime
     */
    public function getConfirmReceivedTime(): ?WeimobGuideRightsGetListDataConfirmReceivedTime
    {
        return $this->confirmReceivedTime;
    }

    /**
     * @param WeimobGuideRightsGetListDataCreateTime $createTime
     */
    public function setCreateTime(?WeimobGuideRightsGetListDataCreateTime $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return WeimobGuideRightsGetListDataCreateTime
     */
    public function getCreateTime(): ?WeimobGuideRightsGetListDataCreateTime
    {
        return $this->createTime;
    }

    /**
     * @param WeimobGuideRightsGetListDataDeliveryRefundPoints $deliveryRefundPoints
     */
    public function setDeliveryRefundPoints(?WeimobGuideRightsGetListDataDeliveryRefundPoints $deliveryRefundPoints): void
    {
        $this->deliveryRefundPoints = $deliveryRefundPoints;
    }

    /**
     * @return WeimobGuideRightsGetListDataDeliveryRefundPoints
     */
    public function getDeliveryRefundPoints(): ?WeimobGuideRightsGetListDataDeliveryRefundPoints
    {
        return $this->deliveryRefundPoints;
    }

    /**
     * @param WeimobGuideRightsGetListDataFinishTime $finishTime
     */
    public function setFinishTime(?WeimobGuideRightsGetListDataFinishTime $finishTime): void
    {
        $this->finishTime = $finishTime;
    }

    /**
     * @return WeimobGuideRightsGetListDataFinishTime
     */
    public function getFinishTime(): ?WeimobGuideRightsGetListDataFinishTime
    {
        return $this->finishTime;
    }

    /**
     * @param array $itemList
     */
    public function setItemList(?array $itemList): void
    {
        $this->itemList = $itemList;
    }

    /**
     * @return array
     */
    public function getItemList(): ?array
    {
        return $this->itemList;
    }

    /**
     * @param WeimobGuideRightsGetListDataOrderNo $orderNo
     */
    public function setOrderNo(?WeimobGuideRightsGetListDataOrderNo $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return WeimobGuideRightsGetListDataOrderNo
     */
    public function getOrderNo(): ?WeimobGuideRightsGetListDataOrderNo
    {
        return $this->orderNo;
    }

    /**
     * @param WeimobGuideRightsGetListDataRefundPaySuccessTime $refundPaySuccessTime
     */
    public function setRefundPaySuccessTime(?WeimobGuideRightsGetListDataRefundPaySuccessTime $refundPaySuccessTime): void
    {
        $this->refundPaySuccessTime = $refundPaySuccessTime;
    }

    /**
     * @return WeimobGuideRightsGetListDataRefundPaySuccessTime
     */
    public function getRefundPaySuccessTime(): ?WeimobGuideRightsGetListDataRefundPaySuccessTime
    {
        return $this->refundPaySuccessTime;
    }

    /**
     * @param WeimobGuideRightsGetListDataRefundPoints $refundPoints
     */
    public function setRefundPoints(?WeimobGuideRightsGetListDataRefundPoints $refundPoints): void
    {
        $this->refundPoints = $refundPoints;
    }

    /**
     * @return WeimobGuideRightsGetListDataRefundPoints
     */
    public function getRefundPoints(): ?WeimobGuideRightsGetListDataRefundPoints
    {
        return $this->refundPoints;
    }

    /**
     * @param WeimobGuideRightsGetListDataReturnGoodsTime $returnGoodsTime
     */
    public function setReturnGoodsTime(?WeimobGuideRightsGetListDataReturnGoodsTime $returnGoodsTime): void
    {
        $this->returnGoodsTime = $returnGoodsTime;
    }

    /**
     * @return WeimobGuideRightsGetListDataReturnGoodsTime
     */
    public function getReturnGoodsTime(): ?WeimobGuideRightsGetListDataReturnGoodsTime
    {
        return $this->returnGoodsTime;
    }

    /**
     * @param WeimobGuideRightsGetListDataRightsId $rightsId
     */
    public function setRightsId(?WeimobGuideRightsGetListDataRightsId $rightsId): void
    {
        $this->rightsId = $rightsId;
    }

    /**
     * @return WeimobGuideRightsGetListDataRightsId
     */
    public function getRightsId(): ?WeimobGuideRightsGetListDataRightsId
    {
        return $this->rightsId;
    }

    /**
     * @param WeimobGuideRightsGetListDataRightsType $rightsType
     */
    public function setRightsType(?WeimobGuideRightsGetListDataRightsType $rightsType): void
    {
        $this->rightsType = $rightsType;
    }

    /**
     * @return WeimobGuideRightsGetListDataRightsType
     */
    public function getRightsType(): ?WeimobGuideRightsGetListDataRightsType
    {
        return $this->rightsType;
    }

    /**
     * @param WeimobGuideRightsGetListDataUpdateTime $updateTime
     */
    public function setUpdateTime(?WeimobGuideRightsGetListDataUpdateTime $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    /**
     * @return WeimobGuideRightsGetListDataUpdateTime
     */
    public function getUpdateTime(): ?WeimobGuideRightsGetListDataUpdateTime
    {
        return $this->updateTime;
    }

    /**
     * @param string $amountReturnFailReason
     */
    public function setAmountReturnFailReason(?string $amountReturnFailReason): void
    {
        $this->amountReturnFailReason = $amountReturnFailReason;
    }

    /**
     * @return string
     */
    public function getAmountReturnFailReason(): ?string
    {
        return $this->amountReturnFailReason;
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
     * @param int $cancelType
     */
    public function setCancelType(?int $cancelType): void
    {
        $this->cancelType = $cancelType;
    }

    /**
     * @return int
     */
    public function getCancelType(): ?int
    {
        return $this->cancelType;
    }

    /**
     * @param string $customRightsReason
     */
    public function setCustomRightsReason(?string $customRightsReason): void
    {
        $this->customRightsReason = $customRightsReason;
    }

    /**
     * @return string
     */
    public function getCustomRightsReason(): ?string
    {
        return $this->customRightsReason;
    }

    /**
     * @param string $deliveryRefundAmount
     */
    public function setDeliveryRefundAmount(?string $deliveryRefundAmount): void
    {
        $this->deliveryRefundAmount = $deliveryRefundAmount;
    }

    /**
     * @return string
     */
    public function getDeliveryRefundAmount(): ?string
    {
        return $this->deliveryRefundAmount;
    }

    /**
     * @param string $deliveryRefundBalance
     */
    public function setDeliveryRefundBalance(?string $deliveryRefundBalance): void
    {
        $this->deliveryRefundBalance = $deliveryRefundBalance;
    }

    /**
     * @return string
     */
    public function getDeliveryRefundBalance(): ?string
    {
        return $this->deliveryRefundBalance;
    }

    /**
     * @param string $deliveryRefundPointDiscountAmount
     */
    public function setDeliveryRefundPointDiscountAmount(?string $deliveryRefundPointDiscountAmount): void
    {
        $this->deliveryRefundPointDiscountAmount = $deliveryRefundPointDiscountAmount;
    }

    /**
     * @return string
     */
    public function getDeliveryRefundPointDiscountAmount(): ?string
    {
        return $this->deliveryRefundPointDiscountAmount;
    }

    /**
     * @param int $freightTemplateId
     */
    public function setFreightTemplateId(?int $freightTemplateId): void
    {
        $this->freightTemplateId = $freightTemplateId;
    }

    /**
     * @return int
     */
    public function getFreightTemplateId(): ?int
    {
        return $this->freightTemplateId;
    }

    /**
     * @param string $reasonImageUrlList
     */
    public function setReasonImageUrlList(?string $reasonImageUrlList): void
    {
        $this->reasonImageUrlList = $reasonImageUrlList;
    }

    /**
     * @return string
     */
    public function getReasonImageUrlList(): ?string
    {
        return $this->reasonImageUrlList;
    }

    /**
     * @param int $referOrderType
     */
    public function setReferOrderType(?int $referOrderType): void
    {
        $this->referOrderType = $referOrderType;
    }

    /**
     * @return int
     */
    public function getReferOrderType(): ?int
    {
        return $this->referOrderType;
    }

    /**
     * @param string $refundAmount
     */
    public function setRefundAmount(?string $refundAmount): void
    {
        $this->refundAmount = $refundAmount;
    }

    /**
     * @return string
     */
    public function getRefundAmount(): ?string
    {
        return $this->refundAmount;
    }

    /**
     * @param string $refundBalance
     */
    public function setRefundBalance(?string $refundBalance): void
    {
        $this->refundBalance = $refundBalance;
    }

    /**
     * @return string
     */
    public function getRefundBalance(): ?string
    {
        return $this->refundBalance;
    }

    /**
     * @param string $refundDeliveryAmount
     */
    public function setRefundDeliveryAmount(?string $refundDeliveryAmount): void
    {
        $this->refundDeliveryAmount = $refundDeliveryAmount;
    }

    /**
     * @return string
     */
    public function getRefundDeliveryAmount(): ?string
    {
        return $this->refundDeliveryAmount;
    }

    /**
     * @param int $refundInvoiceTexAmount
     */
    public function setRefundInvoiceTexAmount(?int $refundInvoiceTexAmount): void
    {
        $this->refundInvoiceTexAmount = $refundInvoiceTexAmount;
    }

    /**
     * @return int
     */
    public function getRefundInvoiceTexAmount(): ?int
    {
        return $this->refundInvoiceTexAmount;
    }

    /**
     * @param int $refundMethod
     */
    public function setRefundMethod(?int $refundMethod): void
    {
        $this->refundMethod = $refundMethod;
    }

    /**
     * @return int
     */
    public function getRefundMethod(): ?int
    {
        return $this->refundMethod;
    }

    /**
     * @param string $refundPointDiscountAmount
     */
    public function setRefundPointDiscountAmount(?string $refundPointDiscountAmount): void
    {
        $this->refundPointDiscountAmount = $refundPointDiscountAmount;
    }

    /**
     * @return string
     */
    public function getRefundPointDiscountAmount(): ?string
    {
        return $this->refundPointDiscountAmount;
    }

    /**
     * @param int $refundStorageCard
     */
    public function setRefundStorageCard(?int $refundStorageCard): void
    {
        $this->refundStorageCard = $refundStorageCard;
    }

    /**
     * @return int
     */
    public function getRefundStorageCard(): ?int
    {
        return $this->refundStorageCard;
    }

    /**
     * @param int $refundType
     */
    public function setRefundType(?int $refundType): void
    {
        $this->refundType = $refundType;
    }

    /**
     * @return int
     */
    public function getRefundType(): ?int
    {
        return $this->refundType;
    }

    /**
     * @param string $refusedCode
     */
    public function setRefusedCode(?string $refusedCode): void
    {
        $this->refusedCode = $refusedCode;
    }

    /**
     * @return string
     */
    public function getRefusedCode(): ?string
    {
        return $this->refusedCode;
    }

    /**
     * @param string $refusedReason
     */
    public function setRefusedReason(?string $refusedReason): void
    {
        $this->refusedReason = $refusedReason;
    }

    /**
     * @return string
     */
    public function getRefusedReason(): ?string
    {
        return $this->refusedReason;
    }

    /**
     * @param int $rightsCauseType
     */
    public function setRightsCauseType(?int $rightsCauseType): void
    {
        $this->rightsCauseType = $rightsCauseType;
    }

    /**
     * @return int
     */
    public function getRightsCauseType(): ?int
    {
        return $this->rightsCauseType;
    }

    /**
     * @param string $rightsReason
     */
    public function setRightsReason(?string $rightsReason): void
    {
        $this->rightsReason = $rightsReason;
    }

    /**
     * @return string
     */
    public function getRightsReason(): ?string
    {
        return $this->rightsReason;
    }

    /**
     * @param int $rightsStatus
     */
    public function setRightsStatus(?int $rightsStatus): void
    {
        $this->rightsStatus = $rightsStatus;
    }

    /**
     * @return int
     */
    public function getRightsStatus(): ?int
    {
        return $this->rightsStatus;
    }

    /**
     * @param string $userNickName
     */
    public function setUserNickName(?string $userNickName): void
    {
        $this->userNickName = $userNickName;
    }

    /**
     * @return string
     */
    public function getUserNickName(): ?string
    {
        return $this->userNickName;
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
     * @param int $vidType
     */
    public function setVidType(?int $vidType): void
    {
        $this->vidType = $vidType;
    }

    /**
     * @return int
     */
    public function getVidType(): ?int
    {
        return $this->vidType;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideRightsGetListDataAgreeTime implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideRightsGetListDataConfirmReceivedTime implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideRightsGetListDataCreateTime implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideRightsGetListDataDeliveryRefundPoints implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideRightsGetListDataFinishTime implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideRightsGetListDataItemList implements \JsonSerializable
{
    /**
     * 余额抵扣金额（换货用，取原单上金额）
     * @var string
     */
    private $balanceDiscountAmount;

    /**
     * 成本价
     * @var int
     */
    private $costPrice;

    /**
     * 应退运费实付
     * @var int
     */
    private $deliveryRefundAmount;

    /**
     * 应退运费余额
     * @var string
     */
    private $deliveryRefundBalance;

    /**
     * 应退运费积分抵扣金额
     * @var string
     */
    private $deliveryRefundPointDiscountAmount;

    /**
     * 应退运费积分
     * @var int
     */
    private $deliveryRefundPoints;

    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * 商品标题
     * @var string
     */
    private $goodsTitle;

    /**
     * 图片
     * @var string
     */
    private $imageUrl;

    /**
     * 订单项id
     * @var int
     */
    private $orderItemId;

    /**
     * 实收金额
     * @var string
     */
    private $paymentAmount;

    /**
     * 价格
     * @var string
     */
    private $price;

    /**
     * 应退金额
     * @var string
     */
    private $refundAmount;

    /**
     * 应退余额
     * @var string
     */
    private $refundBalance;

    /**
     * 应退运费(实付 + 余额 + 积分)
     * @var string
     */
    private $refundDeliveryAmount;

    /**
     * 应退发票税费
     * @var string
     */
    private $refundInvoiceTexAmount;

    /**
     * 应退积分所对应的金额
     * @var string
     */
    private $refundPointDiscountAmount;

    /**
     * 应退积分
     * @var int
     */
    private $refundPoints;

    /**
     * 应退余额
     * @var string
     */
    private $refundStorageCard;

    /**
     * 单品id
     * @var int
     */
    private $skuId;

    /**
     * 单品名称
     * @var string
     */
    private $skuName;

    /**
     * 单品数量
     * @var int
     */
    private $skuNum;

    /**
     * @param string $balanceDiscountAmount
     */
    public function setBalanceDiscountAmount(?string $balanceDiscountAmount): void
    {
        $this->balanceDiscountAmount = $balanceDiscountAmount;
    }

    /**
     * @return string
     */
    public function getBalanceDiscountAmount(): ?string
    {
        return $this->balanceDiscountAmount;
    }

    /**
     * @param int $costPrice
     */
    public function setCostPrice(?int $costPrice): void
    {
        $this->costPrice = $costPrice;
    }

    /**
     * @return int
     */
    public function getCostPrice(): ?int
    {
        return $this->costPrice;
    }

    /**
     * @param int $deliveryRefundAmount
     */
    public function setDeliveryRefundAmount(?int $deliveryRefundAmount): void
    {
        $this->deliveryRefundAmount = $deliveryRefundAmount;
    }

    /**
     * @return int
     */
    public function getDeliveryRefundAmount(): ?int
    {
        return $this->deliveryRefundAmount;
    }

    /**
     * @param string $deliveryRefundBalance
     */
    public function setDeliveryRefundBalance(?string $deliveryRefundBalance): void
    {
        $this->deliveryRefundBalance = $deliveryRefundBalance;
    }

    /**
     * @return string
     */
    public function getDeliveryRefundBalance(): ?string
    {
        return $this->deliveryRefundBalance;
    }

    /**
     * @param string $deliveryRefundPointDiscountAmount
     */
    public function setDeliveryRefundPointDiscountAmount(?string $deliveryRefundPointDiscountAmount): void
    {
        $this->deliveryRefundPointDiscountAmount = $deliveryRefundPointDiscountAmount;
    }

    /**
     * @return string
     */
    public function getDeliveryRefundPointDiscountAmount(): ?string
    {
        return $this->deliveryRefundPointDiscountAmount;
    }

    /**
     * @param int $deliveryRefundPoints
     */
    public function setDeliveryRefundPoints(?int $deliveryRefundPoints): void
    {
        $this->deliveryRefundPoints = $deliveryRefundPoints;
    }

    /**
     * @return int
     */
    public function getDeliveryRefundPoints(): ?int
    {
        return $this->deliveryRefundPoints;
    }

    /**
     * @param int $goodsId
     */
    public function setGoodsId(?int $goodsId): void
    {
        $this->goodsId = $goodsId;
    }

    /**
     * @return int
     */
    public function getGoodsId(): ?int
    {
        return $this->goodsId;
    }

    /**
     * @param string $goodsTitle
     */
    public function setGoodsTitle(?string $goodsTitle): void
    {
        $this->goodsTitle = $goodsTitle;
    }

    /**
     * @return string
     */
    public function getGoodsTitle(): ?string
    {
        return $this->goodsTitle;
    }

    /**
     * @param string $imageUrl
     */
    public function setImageUrl(?string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return string
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
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
     * @param string $paymentAmount
     */
    public function setPaymentAmount(?string $paymentAmount): void
    {
        $this->paymentAmount = $paymentAmount;
    }

    /**
     * @return string
     */
    public function getPaymentAmount(): ?string
    {
        return $this->paymentAmount;
    }

    /**
     * @param string $price
     */
    public function setPrice(?string $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getPrice(): ?string
    {
        return $this->price;
    }

    /**
     * @param string $refundAmount
     */
    public function setRefundAmount(?string $refundAmount): void
    {
        $this->refundAmount = $refundAmount;
    }

    /**
     * @return string
     */
    public function getRefundAmount(): ?string
    {
        return $this->refundAmount;
    }

    /**
     * @param string $refundBalance
     */
    public function setRefundBalance(?string $refundBalance): void
    {
        $this->refundBalance = $refundBalance;
    }

    /**
     * @return string
     */
    public function getRefundBalance(): ?string
    {
        return $this->refundBalance;
    }

    /**
     * @param string $refundDeliveryAmount
     */
    public function setRefundDeliveryAmount(?string $refundDeliveryAmount): void
    {
        $this->refundDeliveryAmount = $refundDeliveryAmount;
    }

    /**
     * @return string
     */
    public function getRefundDeliveryAmount(): ?string
    {
        return $this->refundDeliveryAmount;
    }

    /**
     * @param string $refundInvoiceTexAmount
     */
    public function setRefundInvoiceTexAmount(?string $refundInvoiceTexAmount): void
    {
        $this->refundInvoiceTexAmount = $refundInvoiceTexAmount;
    }

    /**
     * @return string
     */
    public function getRefundInvoiceTexAmount(): ?string
    {
        return $this->refundInvoiceTexAmount;
    }

    /**
     * @param string $refundPointDiscountAmount
     */
    public function setRefundPointDiscountAmount(?string $refundPointDiscountAmount): void
    {
        $this->refundPointDiscountAmount = $refundPointDiscountAmount;
    }

    /**
     * @return string
     */
    public function getRefundPointDiscountAmount(): ?string
    {
        return $this->refundPointDiscountAmount;
    }

    /**
     * @param int $refundPoints
     */
    public function setRefundPoints(?int $refundPoints): void
    {
        $this->refundPoints = $refundPoints;
    }

    /**
     * @return int
     */
    public function getRefundPoints(): ?int
    {
        return $this->refundPoints;
    }

    /**
     * @param string $refundStorageCard
     */
    public function setRefundStorageCard(?string $refundStorageCard): void
    {
        $this->refundStorageCard = $refundStorageCard;
    }

    /**
     * @return string
     */
    public function getRefundStorageCard(): ?string
    {
        return $this->refundStorageCard;
    }

    /**
     * @param int $skuId
     */
    public function setSkuId(?int $skuId): void
    {
        $this->skuId = $skuId;
    }

    /**
     * @return int
     */
    public function getSkuId(): ?int
    {
        return $this->skuId;
    }

    /**
     * @param string $skuName
     */
    public function setSkuName(?string $skuName): void
    {
        $this->skuName = $skuName;
    }

    /**
     * @return string
     */
    public function getSkuName(): ?string
    {
        return $this->skuName;
    }

    /**
     * @param int $skuNum
     */
    public function setSkuNum(?int $skuNum): void
    {
        $this->skuNum = $skuNum;
    }

    /**
     * @return int
     */
    public function getSkuNum(): ?int
    {
        return $this->skuNum;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideRightsGetListDataOrderNo implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideRightsGetListDataRefundPaySuccessTime implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideRightsGetListDataRefundPoints implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideRightsGetListDataReturnGoodsTime implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideRightsGetListDataRightsId implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideRightsGetListDataRightsType implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideRightsGetListDataUpdateTime implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

