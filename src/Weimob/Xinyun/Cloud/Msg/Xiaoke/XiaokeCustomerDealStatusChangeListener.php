<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,764
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface XiaokeCustomerDealStatusChangeListener
{
    const topic = 'xiaoke_customer';
    const event = 'dealStatusChange';
    const classType = DealStatusChangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class DealStatusChangeMessage implements \JsonSerializable
{
    /**
     * 客户key
     * @var string
     */
    private $customerKey;

    /**
     * 客户成单状态，1 未成单，2 已成单，3再成单
     * @var int
     */
    private $dealStatus;

    /**
     * 消息体创建时间
     * @var int
     */
    private $buildTime;

    /**
     * 操作用户wid
     * @var int
     */
    private $wid;

    /**
     * @param string $customerKey
     */
    public function setCustomerKey(?string $customerKey): void
    {
        $this->customerKey = $customerKey;
    }

    /**
     * @return string
     */
    public function getCustomerKey(): ?string
    {
        return $this->customerKey;
    }

    /**
     * @param int $dealStatus
     */
    public function setDealStatus(?int $dealStatus): void
    {
        $this->dealStatus = $dealStatus;
    }

    /**
     * @return int
     */
    public function getDealStatus(): ?int
    {
        return $this->dealStatus;
    }

    /**
     * @param int $buildTime
     */
    public function setBuildTime(?int $buildTime): void
    {
        $this->buildTime = $buildTime;
    }

    /**
     * @return int
     */
    public function getBuildTime(): ?int
    {
        return $this->buildTime;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

