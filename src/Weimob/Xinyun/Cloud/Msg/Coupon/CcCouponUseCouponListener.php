<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Coupon;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,164
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface CcCouponUseCouponListener
{
    const topic = 'cc_coupon';
    const event = 'useCoupon';
    const classType = UseCouponMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UseCouponMessage implements \JsonSerializable
{
    /**
     * 商户pid
     * @var int
     */
    private $pid;

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
     * 券模板id
     * @var string
     */
    private $cardTemplateId;

    /**
     * 使用门店ID
     * @var int
     */
    private $useAdaptObjectId;

    /**
     * 核销来源渠道：945000表示开放平台核销
     * @var int
     */
    private $channel;

    /**
     * 业务id：如订单id等
     * @var int
     */
    private $transactionId;

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
     * @param string $cardTemplateId
     */
    public function setCardTemplateId(?string $cardTemplateId): void
    {
        $this->cardTemplateId = $cardTemplateId;
    }

    /**
     * @return string
     */
    public function getCardTemplateId(): ?string
    {
        return $this->cardTemplateId;
    }

    /**
     * @param int $useAdaptObjectId
     */
    public function setUseAdaptObjectId(?int $useAdaptObjectId): void
    {
        $this->useAdaptObjectId = $useAdaptObjectId;
    }

    /**
     * @return int
     */
    public function getUseAdaptObjectId(): ?int
    {
        return $this->useAdaptObjectId;
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
     * @param int $transactionId
     */
    public function setTransactionId(?int $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @return int
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

