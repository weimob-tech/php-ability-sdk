<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobShop;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,302
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface WeimobShopOrderUpdateListener
{
    const topic = 'weimob_shop.order';
    const event = 'update';
    const classType = UpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateMessage implements \JsonSerializable
{
    /**
     * 订单业务来源：1-普通订单，2-商户助手APP，3-收银台，5-普通货柜，6-免密货柜，7-扫码购，10-换货订单
     * @var int
     */
    private $bizSourceType;

    /**
     * 商户id
     * @var int
     */
    private $bosId;

    /**
     * 渠道来源：0-公众号，1-小程序，2-H5，3-QQ，4-微博，5-字节跳动小程序，6-支付宝小程序 ，7-PC后台，8-安卓app，9-苹果app，10-百度智能小程序，11-PAD，12-自有APP，13-微信小程序webview，14-微信小程序webview-直播，15-大屏扫码，16-企业微信，17-抖音原生小程序，18-芸智免密，19-QQ原生小程序，20-QQ小程序H5页面，21-支付宝原生小程序，22-微信小商店，23-快手原生小程序，24-快手小程序H5页面，101-分销商
     * @var int
     */
    private $channelType;

    /**
     * 创建时间
     * @var int
     */
    private $createTime;

    /**
     * 交付类型：1-商家配送，2-同城限时达，3-到店交易，4-门店交易，5-无需物流
     * @var int
     */
    private $deliveryType;

    /**
     * 商家id
     * @var int
     */
    private $merchantId;

    /**
     * 单号
     * @var int
     */
    private $orderNo;

    /**
     * 订单来源：0-系统内部订单，100-历史导入订单，101-友朋，102-芸智，103-芸智，104-博申，201-分销市场供货商，401-外部订单
     * @var int
     */
    private $orderSource;

    /**
     * 真实订单状态：0-创建，1-部分支付，2-已支付，3-待发货，4-部分发货，5-已发货，7-确认收货，8-完成，9-取消
     * @var int
     */
    private $orderStatus;

    /**
     * 订单类型：1-普通订单，96-虚拟订单，97-消费订单，99-充值订单，11-全渠道B2C订单
     * @var int
     */
    private $orderType;

    /**
     * 父单号
     * @var int
     */
    private $parentOrderNo;

    /**
     * 支付状态：0-未支付，1-部分支付，2-已支付
     * @var int
     */
    private $paymentStatus;

    /**
     * 支付类型：1-线上支付，2-线下支付
     * @var int
     */
    private $paymentType;

    /**
     * 产品Id
     * @var int
     */
    private $productId;

    /**
     * 产品实例Id
     * @var int
     */
    private $productInstanceId;

    /**
     * 销售渠道：10001-线上网店，10002-线下门店
     * @var int
     */
    private $saleChannelType;

    /**
     * 更新时间
     * @var int
     */
    private $updateTime;

    /**
     * 更新类型：1-更新标记，2-更新收货人信息，3-转单，4-订单改价
     * @var int
     */
    private $updateType;

    /**
     * 销售节点
     * @var int
     */
    private $vid;

    /**
     * 客户编号
     * @var int
     */
    private $wid;

    /**
     * @param int $bizSourceType
     */
    public function setBizSourceType(?int $bizSourceType): void
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
     * @param int $channelType
     */
    public function setChannelType(?int $channelType): void
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
     * @param int $createTime
     */
    public function setCreateTime(?int $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * @param int $deliveryType
     */
    public function setDeliveryType(?int $deliveryType): void
    {
        $this->deliveryType = $deliveryType;
    }

    /**
     * @return int
     */
    public function getDeliveryType(): ?int
    {
        return $this->deliveryType;
    }

    /**
     * @param int $merchantId
     */
    public function setMerchantId(?int $merchantId): void
    {
        $this->merchantId = $merchantId;
    }

    /**
     * @return int
     */
    public function getMerchantId(): ?int
    {
        return $this->merchantId;
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
     * @param int $orderSource
     */
    public function setOrderSource(?int $orderSource): void
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
     * @param int $orderStatus
     */
    public function setOrderStatus(?int $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return int
     */
    public function getOrderStatus(): ?int
    {
        return $this->orderStatus;
    }

    /**
     * @param int $orderType
     */
    public function setOrderType(?int $orderType): void
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

    /**
     * @param int $paymentStatus
     */
    public function setPaymentStatus(?int $paymentStatus): void
    {
        $this->paymentStatus = $paymentStatus;
    }

    /**
     * @return int
     */
    public function getPaymentStatus(): ?int
    {
        return $this->paymentStatus;
    }

    /**
     * @param int $paymentType
     */
    public function setPaymentType(?int $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * @return int
     */
    public function getPaymentType(): ?int
    {
        return $this->paymentType;
    }

    /**
     * @param int $productId
     */
    public function setProductId(?int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int $productInstanceId
     */
    public function setProductInstanceId(?int $productInstanceId): void
    {
        $this->productInstanceId = $productInstanceId;
    }

    /**
     * @return int
     */
    public function getProductInstanceId(): ?int
    {
        return $this->productInstanceId;
    }

    /**
     * @param int $saleChannelType
     */
    public function setSaleChannelType(?int $saleChannelType): void
    {
        $this->saleChannelType = $saleChannelType;
    }

    /**
     * @return int
     */
    public function getSaleChannelType(): ?int
    {
        return $this->saleChannelType;
    }

    /**
     * @param int $updateTime
     */
    public function setUpdateTime(?int $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    /**
     * @return int
     */
    public function getUpdateTime(): ?int
    {
        return $this->updateTime;
    }

    /**
     * @param int $updateType
     */
    public function setUpdateType(?int $updateType): void
    {
        $this->updateType = $updateType;
    }

    /**
     * @return int
     */
    public function getUpdateType(): ?int
    {
        return $this->updateType;
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

