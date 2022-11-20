<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,786
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface EcPromotionPromotionChangeListener
{
    const topic = 'ec_promotion';
    const event = 'promotionChange';
    const classType = PromotionChangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PromotionChangeMessage implements \JsonSerializable
{
    /**
    * 营销活动id
    * @var int
    */
    private $activityId;

    /**
    * 活动类型（1-满减满折，3-限时折扣，12-N元N件，13-优惠套装，14-加价购，32-满赠，37-第X件X折）
    * @var int
    */
    private $activityType;

    /**
    * 商品id列表
    * @var array
    */
    private $goodsIdList;

    /**
    * 发送时间
    * @var int
    */
    private $dateTime;

    /**
    * 消息类型（1-活动信息变更，2-单品级活动主商品变更）
    * @var int
    */
    private $msgType;

    /**
    * 操作类型（1-创建，2-修改，3-开始，4-结束，5-删除）
    * @var int
    */
    private $operateType;

    /**
    * @param int $activityId
    */
    public function setActivityId(?int $activityId)
    {
        $this->activityId = $activityId;
    }

    /**
    * @return int
    */
    public function getActivityId(): ?int
    {
        return $this->activityId;
    }

    /**
    * @param int $activityType
    */
    public function setActivityType(?int $activityType)
    {
        $this->activityType = $activityType;
    }

    /**
    * @return int
    */
    public function getActivityType(): ?int
    {
        return $this->activityType;
    }

    /**
    * @param array $goodsIdList
    */
    public function setGoodsIdList(?array $goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    /**
    * @return array
    */
    public function getGoodsIdList(): ?array
    {
        return $this->goodsIdList;
    }

    /**
    * @param int $dateTime
    */
    public function setDateTime(?int $dateTime)
    {
        $this->dateTime = $dateTime;
    }

    /**
    * @return int
    */
    public function getDateTime(): ?int
    {
        return $this->dateTime;
    }

    /**
    * @param int $msgType
    */
    public function setMsgType(?int $msgType)
    {
        $this->msgType = $msgType;
    }

    /**
    * @return int
    */
    public function getMsgType(): ?int
    {
        return $this->msgType;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

