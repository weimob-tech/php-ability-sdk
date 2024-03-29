<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,240
 * @author weimobcloud
 * @create 2023-5-23
 */
interface WeimobGuideGuiderRelationshipRelationshipChangeListener
{
    const topic = 'weimob_guide.guider.relationship';
    const event = 'relationshipChange';
    const classType = RelationshipChangeMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class RelationshipChangeMessage implements \JsonSerializable
{
    /**
     * 商业操作系统ID
     * @var string
     */
    private $bosId;

    /**
     * 变更前归属门店VID，来源于组织节点ID
     * @var string
     */
    private $beforeVid;

    /**
     * 变更后归属门店VID，来源于组织节点ID
     * @var string
     */
    private $afterVid;

    /**
     * 客户WID，来源于客户编号
     * @var string
     */
    private $customWid;

    /**
     * 变更前导购WID，eventType为3,4,5,6,7,8时有值
     * @var string
     */
    private $beforeGuiderWid;

    /**
     * 变更后导购WID，eventType为2,3,4,5时有值
     * @var string
     */
    private $afterGuiderWid;

    /**
     * 事件类型：2：绑定；3：换绑；4：修改有效期；5：更换门店；6：手动解绑；7：隐式解绑；(换绑时会触发换绑消息和隐式解绑消息)8：过期解绑；
     * @var string
     */
    private $eventType;

    /**
     * 来源产品ID
     * @var string
     */
    private $sourceProductId;

    /**
     * 来源产品实例ID
     * @var string
     */
    private $sourceProductInstanceId;

    /**
     * 变更时间戳
     * @var int
     */
    private $time;

    /**
     * 变更前导购id，eventType为3,4,5,6,7,8时有值
     * @var string
     */
    private $beforeGuiderId;

    /**
     * 变更后导购id，eventType为2,3,4,5时有值
     * @var string
     */
    private $afterGuiderId;

    /**
     * @param string $bosId
     */
    public function setBosId(?string $bosId): void
    {
        $this->bosId = $bosId;
    }

    /**
     * @return string
     */
    public function getBosId(): ?string
    {
        return $this->bosId;
    }

    /**
     * @param string $beforeVid
     */
    public function setBeforeVid(?string $beforeVid): void
    {
        $this->beforeVid = $beforeVid;
    }

    /**
     * @return string
     */
    public function getBeforeVid(): ?string
    {
        return $this->beforeVid;
    }

    /**
     * @param string $afterVid
     */
    public function setAfterVid(?string $afterVid): void
    {
        $this->afterVid = $afterVid;
    }

    /**
     * @return string
     */
    public function getAfterVid(): ?string
    {
        return $this->afterVid;
    }

    /**
     * @param string $customWid
     */
    public function setCustomWid(?string $customWid): void
    {
        $this->customWid = $customWid;
    }

    /**
     * @return string
     */
    public function getCustomWid(): ?string
    {
        return $this->customWid;
    }

    /**
     * @param string $beforeGuiderWid
     */
    public function setBeforeGuiderWid(?string $beforeGuiderWid): void
    {
        $this->beforeGuiderWid = $beforeGuiderWid;
    }

    /**
     * @return string
     */
    public function getBeforeGuiderWid(): ?string
    {
        return $this->beforeGuiderWid;
    }

    /**
     * @param string $afterGuiderWid
     */
    public function setAfterGuiderWid(?string $afterGuiderWid): void
    {
        $this->afterGuiderWid = $afterGuiderWid;
    }

    /**
     * @return string
     */
    public function getAfterGuiderWid(): ?string
    {
        return $this->afterGuiderWid;
    }

    /**
     * @param string $eventType
     */
    public function setEventType(?string $eventType): void
    {
        $this->eventType = $eventType;
    }

    /**
     * @return string
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * @param string $sourceProductId
     */
    public function setSourceProductId(?string $sourceProductId): void
    {
        $this->sourceProductId = $sourceProductId;
    }

    /**
     * @return string
     */
    public function getSourceProductId(): ?string
    {
        return $this->sourceProductId;
    }

    /**
     * @param string $sourceProductInstanceId
     */
    public function setSourceProductInstanceId(?string $sourceProductInstanceId): void
    {
        $this->sourceProductInstanceId = $sourceProductInstanceId;
    }

    /**
     * @return string
     */
    public function getSourceProductInstanceId(): ?string
    {
        return $this->sourceProductInstanceId;
    }

    /**
     * @param int $time
     */
    public function setTime(?int $time): void
    {
        $this->time = $time;
    }

    /**
     * @return int
     */
    public function getTime(): ?int
    {
        return $this->time;
    }

    /**
     * @param string $beforeGuiderId
     */
    public function setBeforeGuiderId(?string $beforeGuiderId): void
    {
        $this->beforeGuiderId = $beforeGuiderId;
    }

    /**
     * @return string
     */
    public function getBeforeGuiderId(): ?string
    {
        return $this->beforeGuiderId;
    }

    /**
     * @param string $afterGuiderId
     */
    public function setAfterGuiderId(?string $afterGuiderId): void
    {
        $this->afterGuiderId = $afterGuiderId;
    }

    /**
     * @return string
     */
    public function getAfterGuiderId(): ?string
    {
        return $this->afterGuiderId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

