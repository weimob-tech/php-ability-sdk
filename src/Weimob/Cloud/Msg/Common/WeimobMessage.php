<?php

namespace WeimobAbility\Weimob\Cloud\Msg\Common;

/**
 * 消息请求公共参数
 * author bokang.li
 */
class WeimobMessage implements \JsonSerializable
{
    /**
     * 微盟业务系统消息 ID，如智慧餐厅的订单编号
     * @var int
     */
    var $id;

    /**
     * 消息主题名称
     * @var string
     */
    var $topic;

    /**
     * 消息事件名称
     * @var string
     */
    var $event;

    /**
     * 微盟新商业操作系统 ID
     * @var int
     */
    var $bosId;

    /**
     * 防篡改签名：md5(clientId+id+msgBody+clientSecret)
     * @var string
     */
    var $sign;

    /**
     * 业务消息体
     */
    var $msgBody;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTopic(): string
    {
        return $this->topic;
    }

    /**
     * @param string $topic
     */
    public function setTopic(string $topic): void
    {
        $this->topic = $topic;
    }

    /**
     * @return string
     */
    public function getEvent(): string
    {
        return $this->event;
    }

    /**
     * @param string $event
     */
    public function setEvent(string $event): void
    {
        $this->event = $event;
    }

    /**
     * @return int
     */
    public function getBosId(): int
    {
        return $this->bosId;
    }

    /**
     * @param int $bosId
     */
    public function setBosId(int $bosId): void
    {
        $this->bosId = $bosId;
    }

    /**
     * @return string
     */
    public function getSign(): string
    {
        return $this->sign;
    }

    /**
     * @param string $sign
     */
    public function setSign(string $sign): void
    {
        $this->sign = $sign;
    }

    /**
     * @return mixed
     */
    public function getMsgBody()
    {
        return $this->msgBody;
    }

    /**
     * @param mixed $msgBody
     */
    public function setMsgBody($msgBody): void
    {
        $this->msgBody = $msgBody;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}