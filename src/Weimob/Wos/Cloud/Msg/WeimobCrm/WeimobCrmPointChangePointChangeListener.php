<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,245
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobCrmPointChangePointChangeListener
{
    const topic = 'weimob_crm.point.change';
    const event = 'pointChange';
    const classType = PointChangeMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PointChangeMessage implements \JsonSerializable
{
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
    * 来源产品ID
    * @var int
    */
    private $sourceProductId;

    /**
    * tcode
    * @var string
    */
    private $tcode;

    /**
    * 商业操作系统ID
    * @var int
    */
    private $bosId;

    /**
    * vid
    * @var int
    */
    private $vid;

    /**
    * 微盟用户id
    * @var int
    */
    private $wid;

    /**
    * 积分方案ID
    * @var int
    */
    private $pointPlanId;

    /**
    * 0:发放积分 1:消耗积分 3:消耗积分回退 4:回收积分
    * @var int
    */
    private $transType;

    /**
    * "100" ： "积分发放" "101" ： "积分消耗" "102" ： "售后" "103" ： "分销" "104" ： "商家调整" "104_1" ： "调正" "104_2" ： "调负" "105" ： "营销活动" "105_1" ： "积分商城" "105_2" ： "荐客有礼" "105_3" ： " 其他" "105_4" ： "任务卡" "106" ： "互动游戏" "106_207" ： "砸金蛋" "106_226" ： "扭蛋机" "106_222" ： "大转盘" "106_210" ： "刮刮卡" "106_212" ： "摇摇乐" "106_213" ： "摇一摇" "106_214" ： "消消乐" "106_344" ： "签到摇奖机" "106_215" ： "粉丝集结令" "106_216" ： "荐客有礼" "106_341" ： "红包也疯狂" "106_340" ： "拆礼盒" "106_337" ： "微助力" "106_224" ： "砍价 "106_322" ： "微留言" "106_225" ： "微投票" "106_220" ： "带参二维码" "106_221" ： "一码多用" "106_217" ： "礼品卡" "106_425" ： "高级表单" "106_165946" ： "挖宝达人" "106_165544" ： "包粽子" "106_165646" ： "集卡 "106_165575" ： "语音红包" "106_165604" ： "整蛊大师" "106_165921" ： "默契大考验" "106_165937" ： "我是预言家" "106_165635" ： "步数星球" "106_165636" ： "答题吃鸡" "106_165875" ： "小小果园" "106_165551" ： "测评 "106_165932" ： "睡神大作战" "106_165876" ： "脸战 "106_165874" ： "全民奥运会" "106_165600" ： "任务卡" "107" ： "开放平台" "108" ： "清零规则" "109" ： "其他" "110" ："客户营销" "110_1" ："开卡有礼" "110_2" ："消费有礼" "110_3" ："充值有礼" "110_4" ："升级有礼" "110_5" ："生日有礼" "110_6" ："节日有礼" "110_7" ："签到有礼" "110_8" ："完善有礼" "110_9" ："N倍积分" "111" ："自动化营销(MA)" "112" ："企微助手" "112_1" ："裂变" "112_2" ："直接发放"
    * @var string
    */
    private $bizType;

    /**
    * 积分业务交易ID
    * @var int
    */
    private $bizUniqueId;

    /**
    * 变更积分
    * @var int
    */
    private $changPoint;

    /**
    * 总积分
    * @var int
    */
    private $totalPoint;

    /**
    * 变更时间
    * @var int
    */
    private $changeTime;

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
    * @param string $tcode
    */
    public function setTcode(?string $tcode)
    {
        $this->tcode = $tcode;
    }

    /**
    * @return string
    */
    public function getTcode(): ?string
    {
        return $this->tcode;
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
    * @param int $transType
    */
    public function setTransType(?int $transType)
    {
        $this->transType = $transType;
    }

    /**
    * @return int
    */
    public function getTransType(): ?int
    {
        return $this->transType;
    }

    /**
    * @param string $bizType
    */
    public function setBizType(?string $bizType)
    {
        $this->bizType = $bizType;
    }

    /**
    * @return string
    */
    public function getBizType(): ?string
    {
        return $this->bizType;
    }

    /**
    * @param int $bizUniqueId
    */
    public function setBizUniqueId(?int $bizUniqueId)
    {
        $this->bizUniqueId = $bizUniqueId;
    }

    /**
    * @return int
    */
    public function getBizUniqueId(): ?int
    {
        return $this->bizUniqueId;
    }

    /**
    * @param int $changPoint
    */
    public function setChangPoint(?int $changPoint)
    {
        $this->changPoint = $changPoint;
    }

    /**
    * @return int
    */
    public function getChangPoint(): ?int
    {
        return $this->changPoint;
    }

    /**
    * @param int $totalPoint
    */
    public function setTotalPoint(?int $totalPoint)
    {
        $this->totalPoint = $totalPoint;
    }

    /**
    * @return int
    */
    public function getTotalPoint(): ?int
    {
        return $this->totalPoint;
    }

    /**
    * @param int $changeTime
    */
    public function setChangeTime(?int $changeTime)
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

