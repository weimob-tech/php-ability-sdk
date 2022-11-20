<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,693
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface CcCouponPresentCouponListener
{
    const topic = 'cc_coupon';
    const event = 'presentCoupon';
    const classType = PresentCouponMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PresentCouponMessage implements \JsonSerializable
{
    /**
    * 商户id
    * @var int
    */
    private $pid;

    /**
    * 转赠人
    * @var int
    */
    private $fromWid;

    /**
    * 受赠人（statusType = 1才会有受赠人）
    * @var int
    */
    private $toWid;

    /**
    * 券code
    * @var string
    */
    private $code;

    /**
    * 0 转赠中 1已转赠 2 取消转赠
    * @var int
    */
    private $statusType;

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
    * @param int $fromWid
    */
    public function setFromWid(?int $fromWid)
    {
        $this->fromWid = $fromWid;
    }

    /**
    * @return int
    */
    public function getFromWid(): ?int
    {
        return $this->fromWid;
    }

    /**
    * @param int $toWid
    */
    public function setToWid(?int $toWid)
    {
        $this->toWid = $toWid;
    }

    /**
    * @return int
    */
    public function getToWid(): ?int
    {
        return $this->toWid;
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
    * @param int $statusType
    */
    public function setStatusType(?int $statusType)
    {
        $this->statusType = $statusType;
    }

    /**
    * @return int
    */
    public function getStatusType(): ?int
    {
        return $this->statusType;
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

