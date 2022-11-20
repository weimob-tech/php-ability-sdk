<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobShop;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,305
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobShopRightsInfoUpdateListener
{
    const topic = 'weimob_shop.rights';
    const event = 'infoUpdate';
    const classType = InfoUpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class InfoUpdateMessage implements \JsonSerializable
{
    /**
    * 字段描述
    * @var WeimobShopRightsInfoUpdateFieldContents
    */
    private $fieldContents;

    /**
    * 售后信息
    * @var WeimobShopRightsInfoUpdateRightsInfo
    */
    private $rightsInfo;

    /**
    * 订单信息
    * @var WeimobShopRightsInfoUpdateOrderInfo
    */
    private $orderInfo;

    /**
    * 售后操作类型([201-修改标记；202-填写退货物流])
    * @var int
    */
    private $operateType;

    /**
    * 售后单号
    * @var int
    */
    private $rightsId;

    /**
    * 订单号
    * @var int
    */
    private $orderNo;

    /**
    * 更新字段
    * @var array
    */
    private $fields;

    /**
    * @param WeimobShopRightsInfoUpdateFieldContents $fieldContents
    */
    public function setFieldContents(?WeimobShopRightsInfoUpdateFieldContents $fieldContents)
    {
        $this->fieldContents = $fieldContents;
    }

    /**
    * @return WeimobShopRightsInfoUpdateFieldContents
    */
    public function getFieldContents(): ?WeimobShopRightsInfoUpdateFieldContents
    {
        return $this->fieldContents;
    }

    /**
    * @param WeimobShopRightsInfoUpdateRightsInfo $rightsInfo
    */
    public function setRightsInfo(?WeimobShopRightsInfoUpdateRightsInfo $rightsInfo)
    {
        $this->rightsInfo = $rightsInfo;
    }

    /**
    * @return WeimobShopRightsInfoUpdateRightsInfo
    */
    public function getRightsInfo(): ?WeimobShopRightsInfoUpdateRightsInfo
    {
        return $this->rightsInfo;
    }

    /**
    * @param WeimobShopRightsInfoUpdateOrderInfo $orderInfo
    */
    public function setOrderInfo(?WeimobShopRightsInfoUpdateOrderInfo $orderInfo)
    {
        $this->orderInfo = $orderInfo;
    }

    /**
    * @return WeimobShopRightsInfoUpdateOrderInfo
    */
    public function getOrderInfo(): ?WeimobShopRightsInfoUpdateOrderInfo
    {
        return $this->orderInfo;
    }

    /**
    * @param int $operateType
    */
    public function setOperateType(?int $operateType)
    {
        $this->operateType = $operateType;
    }

    /**
    * @return int
    */
    public function getOperateType(): ?int
    {
        return $this->operateType;
    }

    /**
    * @param int $rightsId
    */
    public function setRightsId(?int $rightsId)
    {
        $this->rightsId = $rightsId;
    }

    /**
    * @return int
    */
    public function getRightsId(): ?int
    {
        return $this->rightsId;
    }

    /**
    * @param int $orderNo
    */
    public function setOrderNo(?int $orderNo)
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
    * @param array $fields
    */
    public function setFields(?array $fields)
    {
        $this->fields = $fields;
    }

    /**
    * @return array
    */
    public function getFields(): ?array
    {
        return $this->fields;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopRightsInfoUpdateFieldContents implements \JsonSerializable
{
    /**
    * 标记等级
    * @var string
    */
    private $flagRank;

    /**
    * 标记内容
    * @var string
    */
    private $flagContent;

    /**
    * @param string $flagRank
    */
    public function setFlagRank(?string $flagRank)
    {
        $this->flagRank = $flagRank;
    }

    /**
    * @return string
    */
    public function getFlagRank(): ?string
    {
        return $this->flagRank;
    }

    /**
    * @param string $flagContent
    */
    public function setFlagContent(?string $flagContent)
    {
        $this->flagContent = $flagContent;
    }

    /**
    * @return string
    */
    public function getFlagContent(): ?string
    {
        return $this->flagContent;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopRightsInfoUpdateRightsInfo implements \JsonSerializable
{
    /**
    * 销售节点
    * @var int
    */
    private $vid;

    /**
    * 服务节点
    * @var int
    */
    private $processVid;

    /**
    * 售后类型（[1-退货退款，2-退款，5-退换货]）
    * @var int
    */
    private $rightsType;

    /**
    * 售后状态（[1-买家发起售后，2-等待买家退货，3-买家已退货，5-系统退款中，6-已退款，7-取消，8-商家拒绝，9-退款失败，10-商家退款中，20-换货中]）
    * @var int
    */
    private $rightsStatus;

    /**
    * 售后方式（[1-"买家申请售后"，2-"商家取消订单"，5-"商家售后"，6-"开放平台商家退款"，7-"优惠券到期自动退款"，8-"系统自动售后"，9-"商家发起售后"，10-"付费券发券失败发起售后"]）
    * @var int
    */
    private $rightsCauseType;

    /**
    * 售后来源（[0-"系统内部订单"，100-"历史导入订单"，101-"友朋"，102-"芸智"，103-"乐美"，104-"博申"，201-"分销市场供货商"，401-"外部订单"]）
    * @var int
    */
    private $rightsSource;

    /**
    * 退款类型（[1-"线上退款"，2-"线下退款"，99-"无需退款"]）
    * @var int
    */
    private $refundType;

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
    * @param int $processVid
    */
    public function setProcessVid(?int $processVid)
    {
        $this->processVid = $processVid;
    }

    /**
    * @return int
    */
    public function getProcessVid(): ?int
    {
        return $this->processVid;
    }

    /**
    * @param int $rightsType
    */
    public function setRightsType(?int $rightsType)
    {
        $this->rightsType = $rightsType;
    }

    /**
    * @return int
    */
    public function getRightsType(): ?int
    {
        return $this->rightsType;
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
    * @param int $rightsSource
    */
    public function setRightsSource(?int $rightsSource)
    {
        $this->rightsSource = $rightsSource;
    }

    /**
    * @return int
    */
    public function getRightsSource(): ?int
    {
        return $this->rightsSource;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopRightsInfoUpdateOrderInfo implements \JsonSerializable
{
    /**
    * 父订单号
    * @var int
    */
    private $parentOrderNo;

    /**
    * 订单类型([1- B2C订单, 99-充值订单, 98-积分订单, 97-消费订单, 96-虚拟订单])
    * @var int
    */
    private $orderType;

    /**
    * 订单来源([0-系统内部订单])
    * @var int
    */
    private $orderSource;

    /**
    * 渠道来源([0-"公众号", 1-"小程序"，2- "H5"，3, "QQ"，4-"微博"，5-"字节跳动小程序"，6- "支付宝小程序"，7-"PC后台"，8-"安卓app" ，9- "苹果app"，10- "百度智能小程序"，11- "PAD"，12-"自有APP"，13-"微信小程序webview"，14- "微信小程序webview-直播"，15- "大屏扫码"，16-"企业微信"，17- "抖音原生小程序"，18-"芸智免密"，19-"QQ原生小程序"，20-"QQ小程序H5页面"，21-"支付宝原生小程序"，22-"微信小商店"，23-"快手原生小程序"，24-"快手小程序H5页面"，25-"小红书原生小程序"，26-"小红书小程序H5页面"，27-"直播半屏小程序"，28-"直播H5-微信小程序H5页面"，101-"分销商"，201- "淘宝"，202-"天猫"，203-"京东"，204-"拼多多"，205-"苏宁易购"，206-"有赞"，207-"抖音"，208-"快手"，209-"美团"，210-"惠聚"，251-"POS"，252-"OMS"，253-"ERP"，260- "有搭"，261-"BOX"，262-"直播"，263- "积分商城"，264- "微商城"，265-"商家自有渠道"，280-"CPS导入订单"])
    * @var int
    */
    private $channelType;

    /**
    * 业务来源类型（[1-"普通订单"，2-"商户助手APP"，3-"收银台"，4-"扫码购"，5-"普通货柜"，6-"免密货柜"，7-"门店自助"]）
    * @var int
    */
    private $bizSourceType;

    /**
    * @param int $parentOrderNo
    */
    public function setParentOrderNo(?int $parentOrderNo)
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

    /**
    * @param int $orderType
    */
    public function setOrderType(?int $orderType)
    {
        $this->orderType = $orderType;
    }

    /**
    * @return int
    */
    public function getOrderType(): ?int
    {
        return $this->orderType;
    }

    /**
    * @param int $orderSource
    */
    public function setOrderSource(?int $orderSource)
    {
        $this->orderSource = $orderSource;
    }

    /**
    * @return int
    */
    public function getOrderSource(): ?int
    {
        return $this->orderSource;
    }

    /**
    * @param int $channelType
    */
    public function setChannelType(?int $channelType)
    {
        $this->channelType = $channelType;
    }

    /**
    * @return int
    */
    public function getChannelType(): ?int
    {
        return $this->channelType;
    }

    /**
    * @param int $bizSourceType
    */
    public function setBizSourceType(?int $bizSourceType)
    {
        $this->bizSourceType = $bizSourceType;
    }

    /**
    * @return int
    */
    public function getBizSourceType(): ?int
    {
        return $this->bizSourceType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

