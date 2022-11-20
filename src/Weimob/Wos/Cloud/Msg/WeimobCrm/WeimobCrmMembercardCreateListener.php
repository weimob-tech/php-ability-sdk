<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,248
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface WeimobCrmMembercardCreateListener
{
    const topic = 'weimob_crm.membercard';
    const event = 'create';
    const classType = CreateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateMessage implements \JsonSerializable
{
    /**
     * 客户ID
     * @var int
     */
    private $wid;

    /**
     * 商业操作系统ID
     * @var int
     */
    private $bosId;

    /**
     * 产品实例ID
     * @var int
     */
    private $productInstanceId;

    /**
     * 组织D
     * @var int
     */
    private $vid;

    /**
     * 绑卡类型：1-手动绑卡 2-自动绑卡
     * @var int
     */
    private $bindType;

    /**
     * 会员方案ID
     * @var int
     */
    private $membershipPlanId;

    /**
     * 卡号
     * @var string
     */
    private $customCardNo;

    /**
     * 是否线下开卡：0-线上， 1-线下
     * @var int
     */
    private $offline;

    /**
     * 开卡导购ID
     * @var int
     */
    private $guideWid;

    /**
     * 开放消息来源；weimob-saas-mc- 微盟会员模块产生的消息、ONECRM_SPI-标记同步外部会员发的消息(需要外部过滤)
     * @var string
     */
    private $saasChannel;

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
     * @param int $bosId
     */
    public function setBosId(?int $bosId): void
    {
        $this->bosId = $bosId;
    }

    /**
     * @return int
     */
    public function getBosId(): ?int
    {
        return $this->bosId;
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

    /**
     * @param int $vid
     */
    public function setVid(?int $vid): void
    {
        $this->vid = $vid;
    }

    /**
     * @return int
     */
    public function getVid(): ?int
    {
        return $this->vid;
    }

    /**
     * @param int $bindType
     */
    public function setBindType(?int $bindType): void
    {
        $this->bindType = $bindType;
    }

    /**
     * @return int
     */
    public function getBindType(): ?int
    {
        return $this->bindType;
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
     * @param int $offline
     */
    public function setOffline(?int $offline): void
    {
        $this->offline = $offline;
    }

    /**
     * @return int
     */
    public function getOffline(): ?int
    {
        return $this->offline;
    }

    /**
     * @param int $guideWid
     */
    public function setGuideWid(?int $guideWid): void
    {
        $this->guideWid = $guideWid;
    }

    /**
     * @return int
     */
    public function getGuideWid(): ?int
    {
        return $this->guideWid;
    }

    /**
     * @param string $saasChannel
     */
    public function setSaasChannel(?string $saasChannel): void
    {
        $this->saasChannel = $saasChannel;
    }

    /**
     * @return string
     */
    public function getSaasChannel(): ?string
    {
        return $this->saasChannel;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

