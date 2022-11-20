<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Coupon;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,166
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface CouponCodeUseCouponCodeListener
{
    const topic = 'coupon_code';
    const event = 'useCouponCode';
    const classType = UseCouponCodeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UseCouponCodeMessage implements \JsonSerializable
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
     * 优惠码code
     * @var string
     */
    private $code;

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

