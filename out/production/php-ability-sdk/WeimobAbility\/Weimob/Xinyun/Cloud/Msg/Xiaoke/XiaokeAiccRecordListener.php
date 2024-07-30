<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 3,735
 * @author weimobcloud
 * @create 2023-5-29
 */
interface XiaokeAiccRecordListener
{
    const topic = 'xiaoke_aicc';
    const event = 'record';
    const classType = RecordMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class RecordMessage implements \JsonSerializable
{
    /**
     * -
     * @var XiaokeAiccRecordNumberData
     */
    private $numberData;

    /**
     * 录音地址
     * @var string
     */
    private $aAudioUrl;

    /**
     * 任务名称
     * @var string
     */
    private $aTaskName;

    /**
     * 第三方用户ID
     * @var string
     */
    private $aUserId;

    /**
     * 账单
     * @var int
     */
    private $bill;

    /**
     * 通话时间
     * @var int
     */
    private $callDate;

    /**
     * 第三方通话ID
     * @var string
     */
    private $callId;

    /**
     * 意向等级ID
     * @var int
     */
    private $levelId;

    /**
     * 意向等级名称
     * @var string
     */
    private $levelName;

    /**
     * 话单ID
     * @var string
     */
    private $recordId;

    /**
     * 接听状态，1.已接听,2.运营商拦截,3.拒接,4.无人应答,5.空号,6.关机,7.停机,8.忙线中,9.主叫欠费,10.黑名单拦截,11.风控拦截
     * @var int
     */
    private $status;

    /**
     * 任务ID
     * @var int
     */
    private $taskId;

    /**
     * 通话轮次
     * @var int
     */
    private $turnCount;

    /**
     * 自动加微标识0-否；1-是
     * @var int
     */
    private $autoAddWechat;

    /**
     * 加微状态，0-默认不需要加微，1-待发送，2-已发送，3-未找到
     * @var int
     */
    private $addWechatStatus;

    /**
     * 所属商户bosId
     * @var int
     */
    private $bosId;

    private $tagList;

    /**
     * 对话内容
     * @var string
     */
    private $conversation;

    /**
     * 通话时长
     * @var int
     */
    private $duration;

    /**
     * @param XiaokeAiccRecordNumberData $numberData
     */
    public function setNumberData(?XiaokeAiccRecordNumberData $numberData): void
    {
        $this->numberData = $numberData;
    }

    /**
     * @return XiaokeAiccRecordNumberData
     */
    public function getNumberData(): ?XiaokeAiccRecordNumberData
    {
        return $this->numberData;
    }

    /**
     * @param string $aAudioUrl
     */
    public function setAAudioUrl(?string $aAudioUrl): void
    {
        $this->aAudioUrl = $aAudioUrl;
    }

    /**
     * @return string
     */
    public function getAAudioUrl(): ?string
    {
        return $this->aAudioUrl;
    }

    /**
     * @param string $aTaskName
     */
    public function setATaskName(?string $aTaskName): void
    {
        $this->aTaskName = $aTaskName;
    }

    /**
     * @return string
     */
    public function getATaskName(): ?string
    {
        return $this->aTaskName;
    }

    /**
     * @param string $aUserId
     */
    public function setAUserId(?string $aUserId): void
    {
        $this->aUserId = $aUserId;
    }

    /**
     * @return string
     */
    public function getAUserId(): ?string
    {
        return $this->aUserId;
    }

    /**
     * @param int $bill
     */
    public function setBill(?int $bill): void
    {
        $this->bill = $bill;
    }

    /**
     * @return int
     */
    public function getBill(): ?int
    {
        return $this->bill;
    }

    /**
     * @param int $callDate
     */
    public function setCallDate(?int $callDate): void
    {
        $this->callDate = $callDate;
    }

    /**
     * @return int
     */
    public function getCallDate(): ?int
    {
        return $this->callDate;
    }

    /**
     * @param string $callId
     */
    public function setCallId(?string $callId): void
    {
        $this->callId = $callId;
    }

    /**
     * @return string
     */
    public function getCallId(): ?string
    {
        return $this->callId;
    }

    /**
     * @param int $levelId
     */
    public function setLevelId(?int $levelId): void
    {
        $this->levelId = $levelId;
    }

    /**
     * @return int
     */
    public function getLevelId(): ?int
    {
        return $this->levelId;
    }

    /**
     * @param string $levelName
     */
    public function setLevelName(?string $levelName): void
    {
        $this->levelName = $levelName;
    }

    /**
     * @return string
     */
    public function getLevelName(): ?string
    {
        return $this->levelName;
    }

    /**
     * @param string $recordId
     */
    public function setRecordId(?string $recordId): void
    {
        $this->recordId = $recordId;
    }

    /**
     * @return string
     */
    public function getRecordId(): ?string
    {
        return $this->recordId;
    }

    /**
     * @param int $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $taskId
     */
    public function setTaskId(?int $taskId): void
    {
        $this->taskId = $taskId;
    }

    /**
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * @param int $turnCount
     */
    public function setTurnCount(?int $turnCount): void
    {
        $this->turnCount = $turnCount;
    }

    /**
     * @return int
     */
    public function getTurnCount(): ?int
    {
        return $this->turnCount;
    }

    /**
     * @param int $autoAddWechat
     */
    public function setAutoAddWechat(?int $autoAddWechat): void
    {
        $this->autoAddWechat = $autoAddWechat;
    }

    /**
     * @return int
     */
    public function getAutoAddWechat(): ?int
    {
        return $this->autoAddWechat;
    }

    /**
     * @param int $addWechatStatus
     */
    public function setAddWechatStatus(?int $addWechatStatus): void
    {
        $this->addWechatStatus = $addWechatStatus;
    }

    /**
     * @return int
     */
    public function getAddWechatStatus(): ?int
    {
        return $this->addWechatStatus;
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
     * @param array $tagList
     */
    public function setTagList(?array $tagList): void
    {
        $this->tagList = $tagList;
    }

    /**
     * @return array
     */
    public function getTagList(): ?array
    {
        return $this->tagList;
    }

    /**
     * @param string $conversation
     */
    public function setConversation(?string $conversation): void
    {
        $this->conversation = $conversation;
    }

    /**
     * @return string
     */
    public function getConversation(): ?string
    {
        return $this->conversation;
    }

    /**
     * @param int $duration
     */
    public function setDuration(?int $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return int
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class XiaokeAiccRecordNumberData implements \JsonSerializable
{
    /**
     * 挂机时间
     * @var int
     */
    private $handUpDate;

    /**
     * 号码
     * @var string
     */
    private $number;

    /**
     * @param int $handUpDate
     */
    public function setHandUpDate(?int $handUpDate): void
    {
        $this->handUpDate = $handUpDate;
    }

    /**
     * @return int
     */
    public function getHandUpDate(): ?int
    {
        return $this->handUpDate;
    }

    /**
     * @param string $number
     */
    public function setNumber(?string $number): void
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

