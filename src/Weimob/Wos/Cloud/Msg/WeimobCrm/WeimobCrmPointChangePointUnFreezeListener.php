<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,414
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface WeimobCrmPointChangePointUnFreezeListener
{
    const topic = 'weimob_crm.point.change';
    const event = 'pointUnFreeze';
    const classType = PointUnFreezeMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PointUnFreezeMessage implements \JsonSerializable
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
     * 解锁积分值
     * @var int
     */
    private $point;

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
     * @param int $pointPlanId
     */
    public function setPointPlanId(?int $pointPlanId): void
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
    public function setSourceProductId(?int $sourceProductId): void
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
    public function setTransTime(?string $transTime): void
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
    public function setTransNo(?int $transNo): void
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
     * @param string $requestId
     */
    public function setRequestId(?string $requestId): void
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
    public function setRequestType(?string $requestType): void
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

    /**
     * @param int $point
     */
    public function setPoint(?int $point): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

