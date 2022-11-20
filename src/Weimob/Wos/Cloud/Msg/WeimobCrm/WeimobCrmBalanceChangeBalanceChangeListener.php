<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,246
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobCrmBalanceChangeBalanceChangeListener
{
    const topic = 'weimob_crm.balance.change';
    const event = 'balanceChange';
    const classType = BalanceChangeMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class BalanceChangeMessage implements \JsonSerializable
{
    /**
    * 产品id
    * @var int
    */
    private $productId;

    /**
    * 产品实例id
    * @var int
    */
    private $productInstanceId;

    /**
    * 来源产品id
    * @var int
    */
    private $sourceProductId;

    /**
    * 调用方来源。支持的类型包括：weimob-微盟；haidin-海鼎。
    * @var string
    */
    private $tcode;

    /**
    * 商业操作系统ID
    * @var int
    */
    private $bosId;

    /**
    * 组织架构节点 ID
    * @var int
    */
    private $vid;

    /**
    * 客户编号，是用户身份的唯一标识。
    * @var int
    */
    private $wid;

    /**
    * 储值方案 ID
    * @var int
    */
    private $balancePlanId;

    /**
    * 交易类型。支持的类型包括：0-充值；1-消耗；3-消耗回退；4-余额回收。
    * @var int
    */
    private $transType;

    /**
    * 业务类型。支持的类型包括：100-充值；101-消费；102-售后；103-分销；104-商家调整；104_1-调正；104_2-调负；105-营销活动；105_1-积分商城；105_2-荐客有礼；105_3-其他；105_4-任务卡；105_5-营销活动回收；106-互动游戏；106_207-砸金蛋；106_226-扭蛋机；106_222-大转盘；106_210-刮刮卡；106_212-摇摇乐；106_213-摇一摇；106_214-消消乐；106_344-签到摇奖机；106_215-粉丝集结令；106_216-荐客有礼；106_341-红包也疯狂；106_340-拆礼盒；106_337-微助力；106_224-砍价；106_322-微留言；106_225-微投票；106_220-带参二维码；106_221-一码多用；106_217-礼品卡；106_425-高级表单；106_165946-挖宝达人；106_165544-包粽子；106_165646-集卡；106_165575-语音红包；106_165604-整蛊大师；106_165921-默契大考验；106_165937-我是预言家；106_165635-步数星球；106_165636-答题吃鸡；106_165875-小小果园；106_165551-测评；106_165932-睡神大作战；106_165876-脸战；106_165876-全民运动会；106_165600-任务卡；107-开放平台；108-清零规则；109-其他；110-客户营销；110_1-开卡有礼；110_2-消费有礼；110_3-充值有礼；110_4-升级有礼；110_5-生日有礼；110_6-节日有礼；110_7-签到有礼；110_10-首单有礼；110_11-收藏有礼；110_12-关注有礼；111-自动化营销；112-企微助手；112_1-裂变；112_2-直接发放。
    * @var string
    */
    private $bizType;

    /**
    * 余额交易流水号
    * @var int
    */
    private $bizUniqueId;

    /**
    * 变动金额，单位：元
    * @var int
    */
    private $changAmount;

    /**
    * 总金额，单位：元
    * @var int
    */
    private $totalAmount;

    /**
    * 变更时间。格式为'yyyy-MM-dd HH:mm:ss'。
    * @var string
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
    * @param int $balancePlanId
    */
    public function setBalancePlanId(?int $balancePlanId)
    {
        $this->balancePlanId = $balancePlanId;
    }

    /**
    * @return int
    */
    public function getBalancePlanId(): ?int
    {
        return $this->balancePlanId;
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
    * @param int $changAmount
    */
    public function setChangAmount(?int $changAmount)
    {
        $this->changAmount = $changAmount;
    }

    /**
    * @return int
    */
    public function getChangAmount(): ?int
    {
        return $this->changAmount;
    }

    /**
    * @param int $totalAmount
    */
    public function setTotalAmount(?int $totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    /**
    * @return int
    */
    public function getTotalAmount(): ?int
    {
        return $this->totalAmount;
    }

    /**
    * @param string $changeTime
    */
    public function setChangeTime(?string $changeTime)
    {
        $this->changeTime = $changeTime;
    }

    /**
    * @return string
    */
    public function getChangeTime(): ?string
    {
        return $this->changeTime;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

