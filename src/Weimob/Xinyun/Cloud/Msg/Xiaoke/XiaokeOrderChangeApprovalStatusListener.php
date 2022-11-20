<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 3,255
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface XiaokeOrderChangeApprovalStatusListener
{
    const topic = 'xiaoke_order';
    const event = 'changeApprovalStatus';
    const classType = ChangeApprovalStatusMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ChangeApprovalStatusMessage implements \JsonSerializable
{
    /**
     * 订单唯一标识
     * @var string
     */
    private $orderNumber;

    /**
     * 变更的流程状态类型 2已撤回，3已驳回，4失败，5审批通过
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

