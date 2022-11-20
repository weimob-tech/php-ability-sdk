<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 734
 * @author weimobcloud
 * @create 2022年11月18日
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
    public function setParam(?WeimobGuideRightsGetListParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobGuideRightsGetListParam
    */
    public function getParam(): ?WeimobGuideRightsGetListParam
    {
        return $this->param;
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
    public function setRightsOrderNos(?array $rightsOrderNos)
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
    public function setRightsList(?array $rightsList)
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
    * @var int
    */
    private $deliveryRefundAmount;

    /**
    * 应退运费余额
    * @var int
    */
    private $deliveryRefundBalance;

    /**
    * 应退运费积分抵扣金额
    * @var int
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
    * @var int
    */
    private $refundAmount;

    /**
    * 应退余额
    * @var int
    */
    private $refundBalance;

    /**
    * 应退运费(实付 + 余额 + 积分 + 储值卡)
    * @var int
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
    * @var int
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
    public function setAgreeTime(?WeimobGuideRightsGetListDataAgreeTime $agreeTime)
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
    public function setConfirmReceivedTime(?WeimobGuideRightsGetListDataConfirmReceivedTime $confirmReceivedTime)
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
    public function setCreateTime(?WeimobGuideRightsGetListDataCreateTime $createTime)
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
    public function setDeliveryRefundPoints(?WeimobGuideRightsGetListDataDeliveryRefundPoints $deliveryRefundPoints)
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
    public function setFinishTime(?WeimobGuideRightsGetListDataFinishTime $finishTime)
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
    public function setItemList(?array $itemList)
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
    public function setOrderNo(?WeimobGuideRightsGetListDataOrderNo $orderNo)
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
    public function setRefundPaySuccessTime(?WeimobGuideRightsGetListDataRefundPaySuccessTime $refundPaySuccessTime)
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
    public function setRefundPoints(?WeimobGuideRightsGetListDataRefundPoints $refundPoints)
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
    public function setReturnGoodsTime(?WeimobGuideRightsGetListDataReturnGoodsTime $returnGoodsTime)
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
    public function setRightsId(?WeimobGuideRightsGetListDataRightsId $rightsId)
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
    public function setRightsType(?WeimobGuideRightsGetListDataRightsType $rightsType)
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
    public function setUpdateTime(?WeimobGuideRightsGetListDataUpdateTime $updateTime)
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
    public function setAmountReturnFailReason(?string $amountReturnFailReason)
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
    * @param int $cancelType
    */
    public function setCancelType(?int $cancelType)
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
    public function setCustomRightsReason(?string $customRightsReason)
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
    * @param int $deliveryRefundAmount
    */
    public function setDeliveryRefundAmount(?int $deliveryRefundAmount)
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
    * @param int $deliveryRefundBalance
    */
    public function setDeliveryRefundBalance(?int $deliveryRefundBalance)
    {
        $this->deliveryRefundBalance = $deliveryRefundBalance;
    }

    /**
    * @return int
    */
    public function getDeliveryRefundBalance(): ?int
    {
        return $this->deliveryRefundBalance;
    }

    /**
    * @param int $deliveryRefundPointDiscountAmount
    */
    public function setDeliveryRefundPointDiscountAmount(?int $deliveryRefundPointDiscountAmount)
    {
        $this->deliveryRefundPointDiscountAmount = $deliveryRefundPointDiscountAmount;
    }

    /**
    * @return int
    */
    public function getDeliveryRefundPointDiscountAmount(): ?int
    {
        return $this->deliveryRefundPointDiscountAmount;
    }

    /**
    * @param int $freightTemplateId
    */
    public function setFreightTemplateId(?int $freightTemplateId)
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
    public function setReasonImageUrlList(?string $reasonImageUrlList)
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
    public function setReferOrderType(?int $referOrderType)
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
    * @param int $refundAmount
    */
    public function setRefundAmount(?int $refundAmount)
    {
        $this->refundAmount = $refundAmount;
    }

    /**
    * @return int
    */
    public function getRefundAmount(): ?int
    {
        return $this->refundAmount;
    }

    /**
    * @param int $refundBalance
    */
    public function setRefundBalance(?int $refundBalance)
    {
        $this->refundBalance = $refundBalance;
    }

    /**
    * @return int
    */
    public function getRefundBalance(): ?int
    {
        return $this->refundBalance;
    }

    /**
    * @param int $refundDeliveryAmount
    */
    public function setRefundDeliveryAmount(?int $refundDeliveryAmount)
    {
        $this->refundDeliveryAmount = $refundDeliveryAmount;
    }

    /**
    * @return int
    */
    public function getRefundDeliveryAmount(): ?int
    {
        return $this->refundDeliveryAmount;
    }

    /**
    * @param int $refundInvoiceTexAmount
    */
    public function setRefundInvoiceTexAmount(?int $refundInvoiceTexAmount)
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
    public function setRefundMethod(?int $refundMethod)
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
    * @param int $refundPointDiscountAmount
    */
    public function setRefundPointDiscountAmount(?int $refundPointDiscountAmount)
    {
        $this->refundPointDiscountAmount = $refundPointDiscountAmount;
    }

    /**
    * @return int
    */
    public function getRefundPointDiscountAmount(): ?int
    {
        return $this->refundPointDiscountAmount;
    }

    /**
    * @param int $refundStorageCard
    */
    public function setRefundStorageCard(?int $refundStorageCard)
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
    public function setRefundType(?int $refundType)
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
    public function setRefusedCode(?string $refusedCode)
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
    public function setRefusedReason(?string $refusedReason)
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
    public function setRightsCauseType(?int $rightsCauseType)
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
    public function setRightsReason(?string $rightsReason)
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
    public function setRightsStatus(?int $rightsStatus)
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
    public function setUserNickName(?string $userNickName)
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
    * @param int $vidType
    */
    public function setVidType(?int $vidType)
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
    * 应退余额
    * @var WeimobGuideRightsGetListDataRefundStorageCard
    */
    private $refundStorageCard;

    /**
    * 余额抵扣金额（换货用，取原单上金额）
    * @var int
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
    * @var int
    */
    private $deliveryRefundBalance;

    /**
    * 应退运费积分抵扣金额
    * @var int
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
    * @var int
    */
    private $paymentAmount;

    /**
    * 价格
    * @var int
    */
    private $price;

    /**
    * 应退金额
    * @var int
    */
    private $refundAmount;

    /**
    * 应退余额
    * @var int
    */
    private $refundBalance;

    /**
    * 应退运费(实付 + 余额 + 积分)
    * @var int
    */
    private $refundDeliveryAmount;

    /**
    * 应退发票税费
    * @var int
    */
    private $refundInvoiceTexAmount;

    /**
    * 应退积分所对应的金额
    * @var int
    */
    private $refundPointDiscountAmount;

    /**
    * 应退积分
    * @var int
    */
    private $refundPoints;

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
    * @param WeimobGuideRightsGetListDataRefundStorageCard $refundStorageCard
    */
    public function setRefundStorageCard(?WeimobGuideRightsGetListDataRefundStorageCard $refundStorageCard)
    {
        $this->refundStorageCard = $refundStorageCard;
    }

    /**
    * @return WeimobGuideRightsGetListDataRefundStorageCard
    */
    public function getRefundStorageCard(): ?WeimobGuideRightsGetListDataRefundStorageCard
    {
        return $this->refundStorageCard;
    }

    /**
    * @param int $balanceDiscountAmount
    */
    public function setBalanceDiscountAmount(?int $balanceDiscountAmount)
    {
        $this->balanceDiscountAmount = $balanceDiscountAmount;
    }

    /**
    * @return int
    */
    public function getBalanceDiscountAmount(): ?int
    {
        return $this->balanceDiscountAmount;
    }

    /**
    * @param int $costPrice
    */
    public function setCostPrice(?int $costPrice)
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
    public function setDeliveryRefundAmount(?int $deliveryRefundAmount)
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
    * @param int $deliveryRefundBalance
    */
    public function setDeliveryRefundBalance(?int $deliveryRefundBalance)
    {
        $this->deliveryRefundBalance = $deliveryRefundBalance;
    }

    /**
    * @return int
    */
    public function getDeliveryRefundBalance(): ?int
    {
        return $this->deliveryRefundBalance;
    }

    /**
    * @param int $deliveryRefundPointDiscountAmount
    */
    public function setDeliveryRefundPointDiscountAmount(?int $deliveryRefundPointDiscountAmount)
    {
        $this->deliveryRefundPointDiscountAmount = $deliveryRefundPointDiscountAmount;
    }

    /**
    * @return int
    */
    public function getDeliveryRefundPointDiscountAmount(): ?int
    {
        return $this->deliveryRefundPointDiscountAmount;
    }

    /**
    * @param int $deliveryRefundPoints
    */
    public function setDeliveryRefundPoints(?int $deliveryRefundPoints)
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
    public function setGoodsId(?int $goodsId)
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
    public function setGoodsTitle(?string $goodsTitle)
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
    public function setImageUrl(?string $imageUrl)
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
    public function setOrderItemId(?int $orderItemId)
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
    * @param int $paymentAmount
    */
    public function setPaymentAmount(?int $paymentAmount)
    {
        $this->paymentAmount = $paymentAmount;
    }

    /**
    * @return int
    */
    public function getPaymentAmount(): ?int
    {
        return $this->paymentAmount;
    }

    /**
    * @param int $price
    */
    public function setPrice(?int $price)
    {
        $this->price = $price;
    }

    /**
    * @return int
    */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
    * @param int $refundAmount
    */
    public function setRefundAmount(?int $refundAmount)
    {
        $this->refundAmount = $refundAmount;
    }

    /**
    * @return int
    */
    public function getRefundAmount(): ?int
    {
        return $this->refundAmount;
    }

    /**
    * @param int $refundBalance
    */
    public function setRefundBalance(?int $refundBalance)
    {
        $this->refundBalance = $refundBalance;
    }

    /**
    * @return int
    */
    public function getRefundBalance(): ?int
    {
        return $this->refundBalance;
    }

    /**
    * @param int $refundDeliveryAmount
    */
    public function setRefundDeliveryAmount(?int $refundDeliveryAmount)
    {
        $this->refundDeliveryAmount = $refundDeliveryAmount;
    }

    /**
    * @return int
    */
    public function getRefundDeliveryAmount(): ?int
    {
        return $this->refundDeliveryAmount;
    }

    /**
    * @param int $refundInvoiceTexAmount
    */
    public function setRefundInvoiceTexAmount(?int $refundInvoiceTexAmount)
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
    * @param int $refundPointDiscountAmount
    */
    public function setRefundPointDiscountAmount(?int $refundPointDiscountAmount)
    {
        $this->refundPointDiscountAmount = $refundPointDiscountAmount;
    }

    /**
    * @return int
    */
    public function getRefundPointDiscountAmount(): ?int
    {
        return $this->refundPointDiscountAmount;
    }

    /**
    * @param int $refundPoints
    */
    public function setRefundPoints(?int $refundPoints)
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
    * @param int $skuId
    */
    public function setSkuId(?int $skuId)
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
    public function setSkuName(?string $skuName)
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
    public function setSkuNum(?int $skuNum)
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

class WeimobGuideRightsGetListDataRefundStorageCard implements \JsonSerializable
{

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

