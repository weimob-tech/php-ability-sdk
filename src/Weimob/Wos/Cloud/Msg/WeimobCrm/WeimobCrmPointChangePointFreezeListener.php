<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,415
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobCrmPointChangePointFreezeListener
{
    const topic = 'weimob_crm.point.change';
    const event = 'pointFreeze';
    const classType = PointFreezeMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PointFreezeMessage implements \JsonSerializable
{
    /**
    * 商业操作系统ID
    * @var int
    */
    private $bosId;

    /**
    * 微盟用户id
    * @var int
    */
    private $wid;

    /**
    * vid
    * @var int
    */
    private $vid;

    /**
    * 锁定积分
    * @var int
    */
    private $point;

    /**
    * 产品ID
    * @var int
    */
    private $productId;

    /**
    * 产品实例ID
    * @var int
    */
    private $productInstanceId;

    /**
    * 积分方案ID
    * @var int
    */
    private $pointPlanId;

    /**
    * 来源产品ID
    * @var int
    */
    private $sourceProductId;

    /**
    * 交易时间
    * @var string
    */
    private $transTime;

    /**
    * 积分交易流水号
    * @var int
    */
    private $transNo;

    /**
    * 101_1 消费订单101_2 商城订单（普通/虚拟）101_3 积分商城（普通/虚拟）
    * @var string
    */
    private $changeType;

    /**
    * 渠道类型。支持的类型包括：0-公众号； 1-微信小程序； 2-百度小程序； 3-字节跳动小程序； 4-支付宝生活号； 5-支付宝小程序； 6-QQ小程序； 7-快手小程序； 8-抖店； 9-快手小店； 10-广点通账号(微盟-->腾讯)； 11-广点通账号(腾讯-->微盟)； 12-企业微信； 13-微信小商店； 16-腾讯惠聚； 17-美团闪购。
    * @var string
    */
    private $channelType;

    /**
    * 交易发生地vid
    * @var int
    */
    private $occurVid;

    /**
    * 备注
    * @var string
    */
    private $remark;

    /**
    * 操作人wid
    * @var int
    */
    private $operatorWid;

    /**
    * 请求流水号，与requestType搭配使用，需要保证全局唯一来保证操作幂等。
    * @var string
    */
    private $requestId;

    /**
    * 请求类型。支持的类型包括：0-其他；1-微商城订单请求；2-提现申请单请求；3-预充订单请求；4-预充调整订单请求；5-开放平台请求；6-智慧酒店订单请求；7-智慧旅游订单请求；8-发券宝活动请求；9-老旺铺迁移订单；10-到店请求；11-公共营销请求；12-营销活动奖品服务请求；13-签到有礼服务请求；14-解绑微信会员卡请求；15-删除会员请求；16-智营销请求；17-智营销流程自动化插件；18-会员营销发奖服务请求；19-知识付费；20-智慧美业；21-OneCrm；22-售后退还；23-交易中台扣减积分。
    * @var string
    */
    private $requestType;

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
    * @param int $point
    */
    public function setPoint(?int $point)
    {
        $this->point = $point;
    }

    /**
    * @return int
    */
    public function getPoint(): ?int
    {
        return $this->point;
    }

    /**
    * @param int $productId
    */
    public function setProductId(?int $productId)
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
    public function setProductInstanceId(?int $productInstanceId)
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
    * @param int $pointPlanId
    */
    public function setPointPlanId(?int $pointPlanId)
    {
        $this->pointPlanId = $pointPlanId;
    }

    /**
    * @return int
    */
    public function getPointPlanId(): ?int
    {
        return $this->pointPlanId;
    }

    /**
    * @param int $sourceProductId
    */
    public function setSourceProductId(?int $sourceProductId)
    {
        $this->sourceProductId = $sourceProductId;
    }

    /**
    * @return int
    */
    public function getSourceProductId(): ?int
    {
        return $this->sourceProductId;
    }

    /**
    * @param string $transTime
    */
    public function setTransTime(?string $transTime)
    {
        $this->transTime = $transTime;
    }

    /**
    * @return string
    */
    public function getTransTime(): ?string
    {
        return $this->transTime;
    }

    /**
    * @param int $transNo
    */
    public function setTransNo(?int $transNo)
    {
        $this->transNo = $transNo;
    }

    /**
    * @return int
    */
    public function getTransNo(): ?int
    {
        return $this->transNo;
    }

    /**
    * @param string $changeType
    */
    public function setChangeType(?string $changeType)
    {
        $this->changeType = $changeType;
    }

    /**
    * @return string
    */
    public function getChangeType(): ?string
    {
        return $this->changeType;
    }

    /**
    * @param string $channelType
    */
    public function setChannelType(?string $channelType)
    {
        $this->channelType = $channelType;
    }

    /**
    * @return string
    */
    public function getChannelType(): ?string
    {
        return $this->channelType;
    }

    /**
    * @param int $occurVid
    */
    public function setOccurVid(?int $occurVid)
    {
        $this->occurVid = $occurVid;
    }

    /**
    * @return int
    */
    public function getOccurVid(): ?int
    {
        return $this->occurVid;
    }

    /**
    * @param string $remark
    */
    public function setRemark(?string $remark)
    {
        $this->remark = $remark;
    }

    /**
    * @return string
    */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
    * @param int $operatorWid
    */
    public function setOperatorWid(?int $operatorWid)
    {
        $this->operatorWid = $operatorWid;
    }

    /**
    * @return int
    */
    public function getOperatorWid(): ?int
    {
        return $this->operatorWid;
    }

    /**
    * @param string $requestId
    */
    public function setRequestId(?string $requestId)
    {
        $this->requestId = $requestId;
    }

    /**
    * @return string
    */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
    * @param string $requestType
    */
    public function setRequestType(?string $requestType)
    {
        $this->requestType = $requestType;
    }

    /**
    * @return string
    */
    public function getRequestType(): ?string
    {
        return $this->requestType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

