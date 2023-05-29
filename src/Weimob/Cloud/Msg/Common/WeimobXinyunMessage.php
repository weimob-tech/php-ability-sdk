<?php

namespace WeimobAbility\Weimob\Cloud\Msg\Common;

/**
 * 新云消息请求公共参数
 * author jichao.huang
 */
class WeimobXinyunMessage implements \JsonSerializable
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
     * 商家id
     * @var string
     */
    var $business_id;

    /**
     *（新云）商家店铺 ID
     * @var string
     */
    var $public_account_id;

    /**
     * 防篡改签名：md5(clientId+id+msgBody+clientSecret)
     * @var string
     */
    var $sign;


    /**
     * 消息签名
     * @var string
     */
    var $msgSignature;

    /**
     * saas渠道
     * @var string
     */
    var $saas_channel;

    /**
     * saas客户端id
     * @var string
     */
    var $saas_clientId;

    /**
     * 业务消息体，编码格式 UTF-8
     */
    private $msg_body;

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
     * @return string
     */
    public function getBusinessId(): string
    {
        return $this->business_id;
    }

    /**
     * @param string $business_id
     */
    public function setBusinessId(string $business_id): void
    {
        $this->business_id = $business_id;
    }

    /**
     * @return string
     */
    public function getPublicAccountId(): string
    {
        return $this->public_account_id;
    }

    /**
     * @param string $public_account_id
     */
    public function setPublicAccountId(string $public_account_id): void
    {
        $this->public_account_id = $public_account_id;
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
     * @return string
     */
    public function getMsgSignature(): string
    {
        return $this->msgSignature;
    }

    /**
     * @param string $msgSignature
     */
    public function setMsgSignature(string $msgSignature): void
    {
        $this->msgSignature = $msgSignature;
    }

    /**
     * @return string
     */
    public function getSaasChannel(): string
    {
        return $this->saas_channel;
    }

    /**
     * @param string $saas_channel
     */
    public function setSaasChannel(string $saas_channel): void
    {
        $this->saas_channel = $saas_channel;
    }

    /**
     * @return string
     */
    public function getSaasClientId(): string
    {
        return $this->saas_clientId;
    }

    /**
     * @param string $saas_clientId
     */
    public function setSaasClientId(string $saas_clientId): void
    {
        $this->saas_clientId = $saas_clientId;
    }

    /**
     * @return mixed
     */
    public function getMsgBody()
    {
        return $this->msg_body;
    }

    /**
     * @param mixed $msg_body
     */
    public function setMsgBody($msg_body): void
    {
        $this->msg_body = $msg_body;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}