<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,608
 * @author weimobcloud
 * @create 2023-5-29
 */
interface EcRightsAgreeReturnRightsGoodsListener
{
    const topic = 'ec_rights';
    const event = 'agreeReturnRightsGoods';
    const classType = AgreeReturnRightsGoodsMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class AgreeReturnRightsGoodsMessage implements \JsonSerializable
{
    /**
     * 维权编号
     * @var string
     */
    private $rightsId;

    /**
     * 订单编号
     * @var string
     */
    private $orderNo;

    /**
     * 门店编号
     * @var string
     */
    private $storeId;

    /**
     * 订单来源：0,"系统内部订单"，100,"历史导入订单"，101,"友朋"，102,"芸智"，103,"乐美"，104,"博申"，105,"联想来酷"，201,"分销市场供货商",202,"外部订单-订单应用"，401,"外部订单-开放平台"
     * @var int
     */
    private $orderSource;

    /**
     * 渠道类型：0,"公众号1,"小程序"2,"H5"3,"QQ,4,"微博5,"字节跳动小程序"6,"支付宝小程序"7,"PC后台"8,"安卓app"(9,"苹果app"10,"百度智能小程序"11,"PAD"12,"自有APP"13,"微信小程序webview"14,"微信小程序webview-直播"15,"大屏扫码"16,"企业微信"17,"抖音原生小程序"18,"芸智免密"19,"QQ原生小程序"20,"QQ小程序H5页面"21,"支付宝原生小程序"22,"微信小商店"23,"快手原生小程序"24,"快手小程序H5页面"101,"分销商"201,"淘宝"202,"天猫"203,"京东"204,"拼多多"205,"苏宁易购"206,"有赞"207,"抖音"208,"快手"209,"美团"210,"惠聚"251,"POS"252,"OMS"253,"ERP"260,"有搭"261,"BOX"262,"直播"263,"积分商城"264,"微商城"265,"商家自有渠道"
     * @var int
     */
    private $channelType;

    /**
     * 订单类型：-1,"全部订单",1,"B2C订单",99,"充值订单"98,"积分订单",97,"消费订单",(96,"虚拟订单",11,"全渠道B2C订单"
     * @var int
     */
    private $orderType;

    /**
     * @param string $rightsId
     */
    public function setRightsId(?string $rightsId): void
    {
        $this->rightsId = $rightsId;
    }

    /**
     * @return string
     */
    public function getRightsId(): ?string
    {
        return $this->rightsId;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $storeId
     */
    public function setStoreId(?string $storeId): void
    {
        $this->storeId = $storeId;
    }

    /**
     * @return string
     */
    public function getStoreId(): ?string
    {
        return $this->storeId;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

