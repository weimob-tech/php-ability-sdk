<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Coupon;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,165
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface CcCouponCreateCouponListener
{
    const topic = 'cc_coupon';
    const event = 'createCoupon';
    const classType = CreateCouponMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateCouponMessage implements \JsonSerializable
{
    /**
    * 商户pid
    * @var int
    */
    private $pid;

    /**
    * 优惠券唯一标识
    * @var int
    */
    private $cardTemplateId;

    /**
    * 优惠券名称
    * @var string
    */
    private $cardTemplateName;

    /**
    * 优惠券类型（0:代金券;1:折扣券;2:兑换券）
    * @var string
    */
    private $type;

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
    * @param string $cardTemplateName
    */
    public function setCardTemplateName(?string $cardTemplateName)
    {
        $this->cardTemplateName = $cardTemplateName;
    }

    /**
    * @return string
    */
    public function getCardTemplateName(): ?string
    {
        return $this->cardTemplateName;
    }

    /**
    * @param string $type
    */
    public function setType(?string $type)
    {
        $this->type = $type;
    }

    /**
    * @return string
    */
    public function getType(): ?string
    {
        return $this->type;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

