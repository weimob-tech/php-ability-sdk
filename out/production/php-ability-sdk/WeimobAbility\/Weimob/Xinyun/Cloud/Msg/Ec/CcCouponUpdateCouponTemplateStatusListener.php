<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,687
 * @author weimobcloud
 * @create 2023-5-29
 */
interface CcCouponUpdateCouponTemplateStatusListener
{
    const topic = 'cc_coupon';
    const event = 'updateCouponTemplateStatus';
    const classType = UpdateCouponTemplateStatusMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class UpdateCouponTemplateStatusMessage implements \JsonSerializable
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
     * 当前状态（1-开始投放2-停止投放6-删除11-开始发放12停止发放）如果状态变更频繁，传输过程中可能会有乱序问题
     * @var int
     */
    private $status;

    /**
     * 渠道
     * @var int
     */
    private $channel;

    /**
     * 消息发送时间
     * @var int
     */
    private $timestamp;

    /**
     * @param int $pid
     */
    public function setPid(?int $pid): void
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
    public function setCardTemplateId(?int $cardTemplateId): void
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
     * @param int $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $channel
     */
    public function setChannel(?int $channel): void
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

    /**
     * @param int $timestamp
     */
    public function setTimestamp(?int $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return int
     */
    public function getTimestamp(): ?int
    {
        return $this->timestamp;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

