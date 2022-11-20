<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,689
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface CcCouponUpdateCouponOwnerListener
{
    const topic = 'cc_coupon';
    const event = 'updateCouponOwner';
    const classType = UpdateCouponOwnerMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateCouponOwnerMessage implements \JsonSerializable
{
    /**
    * 原wid （fromWid和toWid仅作参考，券具体归属，需要通过反查接口获取）
    * @var int
    */
    private $fromWid;

    /**
    * 新归属wid
    * @var int
    */
    private $toWid;

    /**
    * 商户id
    * @var int
    */
    private $pid;

    /**
    * 码列表
    * @var string
    */
    private $cardIds;

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
    * @param string $cardIds
    */
    public function setCardIds(?string $cardIds)
    {
        $this->cardIds = $cardIds;
    }

    /**
    * @return string
    */
    public function getCardIds(): ?string
    {
        return $this->cardIds;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

