<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 3,065
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface XiaokeOrderCreateApprovalListener
{
    const topic = 'xiaoke_order';
    const event = 'createApproval';
    const classType = CreateApprovalMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateApprovalMessage implements \JsonSerializable
{
    /**
     * 订单唯一标识
     * @var string
     */
    private $orderNumber;

    /**
     * 变更的流程状态类型—1审批中
     * @var int
     */
    private $workFlowStatus;

    /**
     * 操作时间,时间戳
     * @var int
     */
    private $buildTime;

    /**
     * 操作用户wid
     * @var int
     */
    private $wid;

    /**
     * @param string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return string
     */
    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    /**
     * @param int $workFlowStatus
     */
    public function setWorkFlowStatus(?int $workFlowStatus): void
    {
        $this->workFlowStatus = $workFlowStatus;
    }

    /**
     * @return int
     */
    public function getWorkFlowStatus(): ?int
    {
        return $this->workFlowStatus;
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

