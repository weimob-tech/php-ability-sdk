<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,690
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface CcCouponLockCouponListener
{
    const topic = 'cc_coupon';
    const event = 'lockCoupon';
    const classType = LockCouponMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class LockCouponMessage implements \JsonSerializable
{
    /**
    * 商户id
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
    * @var int
    */
    private $cardTemplateId;

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
    * @param string $code
    */
    public function setCode(?string $code)
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

