<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,692
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface CcCouponDeleteCouponListener
{
    const topic = 'cc_coupon';
    const event = 'deleteCoupon';
    const classType = DeleteCouponMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class DeleteCouponMessage implements \JsonSerializable
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
     * 用户唯一标识
     * @var int
     */
    private $wid;

    /**
     * 券code
     * @var string
     */
    private $code;

    /**
     * 渠道
     * @var int
     */
    private $channel;

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
     * @param string $code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

