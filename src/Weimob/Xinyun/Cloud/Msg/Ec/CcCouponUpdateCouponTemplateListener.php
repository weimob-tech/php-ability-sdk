<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,686
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface CcCouponUpdateCouponTemplateListener
{
    const topic = 'cc_coupon';
    const event = 'updateCouponTemplate';
    const classType = UpdateCouponTemplateMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateCouponTemplateMessage implements \JsonSerializable
{
    /**
    * 商户id
    * @var int
    */
    private $pid;

    /**
    * 券模板id
    * @var int
    */
    private $cardTemplateId;

    /**
    * 操作人id
    * @var int
    */
    private $operateUserId;

    /**
    * 渠道
    * @var int
    */
    private $channel;

    /**
    * @param int $pid
    */
    public function setPid(?int $pid)
    {
        $this->pid = $pid;
    }

    /**
    * @return int
    */
    public function getPid(): ?int
    {
        return $this->pid;
    }

    /**
    * @param int $cardTemplateId
    */
    public function setCardTemplateId(?int $cardTemplateId)
    {
        $this->cardTemplateId = $cardTemplateId;
    }

    /**
    * @return int
    */
    public function getCardTemplateId(): ?int
    {
        return $this->cardTemplateId;
    }

    /**
    * @param int $operateUserId
    */
    public function setOperateUserId(?int $operateUserId)
    {
        $this->operateUserId = $operateUserId;
    }

    /**
    * @return int
    */
    public function getOperateUserId(): ?int
    {
        return $this->operateUserId;
    }

    /**
    * @param int $channel
    */
    public function setChannel(?int $channel)
    {
        $this->channel = $channel;
    }

    /**
    * @return int
    */
    public function getChannel(): ?int
    {
        return $this->channel;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

