<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,278
 * @author weimobcloud
 * @create 2023-5-23
 */
interface WeimobCrmMembercardDeleteListener
{
    const topic = 'weimob_crm.membercard';
    const event = 'delete';
    const classType = DeleteMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class DeleteMessage implements \JsonSerializable
{
    /**
     * 会员方案id
     * @var int
     */
    private $membershipPlanId;

    /**
     * 自定义卡号
     * @var string
     */
    private $customCardNo;

    /**
     * 用户ID
     * @var int
     */
    private $wid;

    /**
     * 产品实例ID
     * @var int
     */
    private $productInstanceId;

    /**
     * @param int $membershipPlanId
     */
    public function setmembershipPlanId(?int $membershipPlanId): void
    {
        $this-> membershipPlanId = $membershipPlanId;
    }

    /**
     * @return int
     */
    public function getmembershipPlanId(): ?int
    {
        return $this-> membershipPlanId;
    }

    /**
     * @param string $customCardNo
     */
    public function setCustomCardNo(?string $customCardNo): void
    {
        $this->customCardNo = $customCardNo;
    }

    /**
     * @return string
     */
    public function getCustomCardNo(): ?string
    {
        return $this->customCardNo;
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
     * @param int $productInstanceId
     */
    public function setProductInstanceId(?int $productInstanceId): void
    {
        $this->productInstanceId = $productInstanceId;
    }

    /**
     * @return int
     */
    public function getProductInstanceId(): ?int
    {
        return $this->productInstanceId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

