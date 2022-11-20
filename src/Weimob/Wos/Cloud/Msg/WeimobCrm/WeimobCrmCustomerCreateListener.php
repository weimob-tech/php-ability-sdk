<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,280
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface WeimobCrmCustomerCreateListener
{
    const topic = 'weimob_crm.customer';
    const event = 'create';
    const classType = CreateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateMessage implements \JsonSerializable
{
    /**
     * 成为客户的场景类型。可能出现的场景类型包括:1-普通创建身份;2-开放平台导入创建身份;
     * @var int
     */
    private $membershipCreateSceneType;

    /**
     * 会员方案ID。
     * @var int
     */
    private $membershipPlanId;

    /**
     * 会员方案类型。可能出现的方案类型包括:1-会员;2-客户;3-粉丝。
     * @var int
     */
    private $membershipType;

    /**
     * 客户编号列表。客户编号是用户身份的唯一标识。可以通过B端页面客户列表/客户详情找到该编号。
     * @var array
     */
    private $widList;

    /**
     * @param int $membershipCreateSceneType
     */
    public function setMembershipCreateSceneType(?int $membershipCreateSceneType): void
    {
        $this->membershipCreateSceneType = $membershipCreateSceneType;
    }

    /**
     * @return int
     */
    public function getMembershipCreateSceneType(): ?int
    {
        return $this->membershipCreateSceneType;
    }

    /**
     * @param int $membershipPlanId
     */
    public function setMembershipPlanId(?int $membershipPlanId): void
    {
        $this->membershipPlanId = $membershipPlanId;
    }

    /**
     * @return int
     */
    public function getMembershipPlanId(): ?int
    {
        return $this->membershipPlanId;
    }

    /**
     * @param int $membershipType
     */
    public function setMembershipType(?int $membershipType): void
    {
        $this->membershipType = $membershipType;
    }

    /**
     * @return int
     */
    public function getMembershipType(): ?int
    {
        return $this->membershipType;
    }

    /**
     * @param array $widList
     */
    public function setWidList(?array $widList): void
    {
        $this->widList = $widList;
    }

    /**
     * @return array
     */
    public function getWidList(): ?array
    {
        return $this->widList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

