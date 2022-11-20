<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,363
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobCrmCouponCreateCouponTemplateListener
{
    const topic = 'weimob_crm.coupon';
    const event = 'createCouponTemplate';
    const classType = CreateCouponTemplateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateCouponTemplateMessage implements \JsonSerializable
{
    /**
    * 券模板id
    * @var int
    */
    private $couponTemplateId;

    /**
    * 券名称
    * @var string
    */
    private $name;

    /**
    * 优惠券类型：1-代金券；2-折扣券；3-兑换券；5-随机金额代金券；9-免运费
    * @var int
    */
    private $couponType;

    /**
    * 用户wid
    * @var int
    */
    private $wid;

    /**
    * @param int $couponTemplateId
    */
    public function setCouponTemplateId(?int $couponTemplateId)
    {
        $this->couponTemplateId = $couponTemplateId;
    }

    /**
    * @return int
    */
    public function getCouponTemplateId(): ?int
    {
        return $this->couponTemplateId;
    }

    /**
    * @param string $name
    */
    public function setName(?string $name)
    {
        $this->name = $name;
    }

    /**
    * @return string
    */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
    * @param int $couponType
    */
    public function setCouponType(?int $couponType)
    {
        $this->couponType = $couponType;
    }

    /**
    * @return int
    */
    public function getCouponType(): ?int
    {
        return $this->couponType;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

