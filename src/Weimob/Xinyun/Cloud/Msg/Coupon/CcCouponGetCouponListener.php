<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Coupon;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,163
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface CcCouponGetCouponListener
{
    const topic = 'cc_coupon';
    const event = 'getCoupon';
    const classType = GetCouponMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class GetCouponMessage implements \JsonSerializable
{
    /**
    * 店铺pid
    * @var int
    */
    private $pid;

    /**
    * 用户唯一标识
    * @var int
    */
    private $wid;

    /**
    * 券码
    * @var string
    */
    private $code;

    /**
    * 券类型
    * @var int
    */
    private $type;

    /**
    * 券模板id
    * @var int
    */
    private $cardTemplateId;

    /**
    * 领券渠道：945000表示通过openapi领券
    * @var int
    */
    private $channel;

    /**
    * 是否转赠 0 否 1是
    * @var int
    */
    private $isGiveByFriend;

    /**
    * 是否通过paas获取code
    * @var int
    */
    private $isExternalGeneration;

    /**
    * 领取门店id
    * @var int
    */
    private $acquireStoreId;

    /**
    * 过期时间
    * @var int
    */
    private $expDate;

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
    * @param int $type
    */
    public function setType(?int $type)
    {
        $this->type = $type;
    }

    /**
    * @return int
    */
    public function getType(): ?int
    {
        return $this->type;
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

    /**
    * @param int $isGiveByFriend
    */
    public function setIsGiveByFriend(?int $isGiveByFriend)
    {
        $this->isGiveByFriend = $isGiveByFriend;
    }

    /**
    * @return int
    */
    public function getIsGiveByFriend(): ?int
    {
        return $this->isGiveByFriend;
    }

    /**
    * @param int $isExternalGeneration
    */
    public function setIsExternalGeneration(?int $isExternalGeneration)
    {
        $this->isExternalGeneration = $isExternalGeneration;
    }

    /**
    * @return int
    */
    public function getIsExternalGeneration(): ?int
    {
        return $this->isExternalGeneration;
    }

    /**
    * @param int $acquireStoreId
    */
    public function setAcquireStoreId(?int $acquireStoreId)
    {
        $this->acquireStoreId = $acquireStoreId;
    }

    /**
    * @return int
    */
    public function getAcquireStoreId(): ?int
    {
        return $this->acquireStoreId;
    }

    /**
    * @param int $expDate
    */
    public function setExpDate(?int $expDate)
    {
        $this->expDate = $expDate;
    }

    /**
    * @return int
    */
    public function getExpDate(): ?int
    {
        return $this->expDate;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

