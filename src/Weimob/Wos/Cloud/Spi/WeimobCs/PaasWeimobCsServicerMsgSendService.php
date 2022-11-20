<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobCs;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 852
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobCsServicerMsgSendService
{
    const specType = 'wos';

    public function invoke(WeimobCsServicerMsgSendRequest $request) : WeimobCsServicerMsgSendResponse;
}

class WeimobCsServicerMsgSendRequest implements \JsonSerializable
{
    /**
     * 商业操作系统ID
     * @var int
     */
    private $bosId;

    /**
     * 全局唯一的扩展点
     * @var string
     */
    private $actionKey;

    /**
     * 功能集ID
     * @var int
     */
    private $functionId;

    /**
     * 组织结构节点ID
     * @var int
     */
    private $vid;

    /**
     * 	组织结构节点类型
     * @var int
     */
    private $vType;

    /**
     * @var WeimobCsServicerMsgSendParam
     */
    private $params;

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
     * @param string $actionKey
     */
    public function setActionKey(?string $actionKey): void
    {
        $this->actionKey = $actionKey;
    }

    /**
     * @return string
     */
    public function getActionKey(): ?string
    {
        return $this->actionKey;
    }

    /**
     * @param int $functionId
     */
    public function setFunctionId(?int $functionId): void
    {
        $this->functionId = $functionId;
    }

    /**
     * @return int
     */
    public function getFunctionId(): ?int
    {
        return $this->functionId;
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
     * @param int $vType
     */
    public function setVType(?int $vType): void
    {
        $this->vType = $vType;
    }

    /**
     * @return int
     */
    public function getVType(): ?int
    {
        return $this->vType;
    }

    /**
     * @param WeimobCsServicerMsgSendParam $param
     */
    public function setParam(?WeimobCsServicerMsgSendParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobCsServicerMsgSendParam
     */
    public function getParam(): ?WeimobCsServicerMsgSendParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCsServicerMsgSendParam implements \JsonSerializable
{
    /**
     * 扩展参数
     * @var WeimobCsServicerMsgSendParamExt
     */
    private $ext;

    /**
     * 来源产品id
     * @var int
     */
    private $originProductInstanceId;

    /**
     * 消息类型（文本：text； 图片：image）
     * @var string
     */
    private $msgType;

    /**
     * 消息内容（当消息类型为text时content内容为回复文本；当消息类型为image时content的内容为图片链接）
     * @var string
     */
    private $content;

    /**
     * 状态（ 0:正常发消息; 1:无答案; 2:请求转人工）
     * @var int
     */
    private $status;

    /**
     * @param WeimobCsServicerMsgSendParamExt $ext
     */
    public function setExt(?WeimobCsServicerMsgSendParamExt $ext): void
    {
        $this->ext = $ext;
    }

    /**
     * @return WeimobCsServicerMsgSendParamExt
     */
    public function getExt(): ?WeimobCsServicerMsgSendParamExt
    {
        return $this->ext;
    }

    /**
     * @param int $originProductInstanceId
     */
    public function setOriginProductInstanceId(?int $originProductInstanceId): void
    {
        $this->originProductInstanceId = $originProductInstanceId;
    }

    /**
     * @return int
     */
    public function getOriginProductInstanceId(): ?int
    {
        return $this->originProductInstanceId;
    }

    /**
     * @param string $msgType
     */
    public function setMsgType(?string $msgType): void
    {
        $this->msgType = $msgType;
    }

    /**
     * @return string
     */
    public function getMsgType(): ?string
    {
        return $this->msgType;
    }

    /**
     * @param string $content
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCsServicerMsgSendParamExt implements \JsonSerializable
{
    /**
     * 用户编号
     * @var int
     */
    private $customerId;

    /**
     * 咨询渠道（h5 ：h5页面会话；wechat： 微信公众号；wmp： 微信小程序）
     * @var string
     */
    private $channel;

    /**
     * 机器人编号
     * @var string
     */
    private $clientId;

    /**
     * 机器人名称
     * @var string
     */
    private $clientName;

    /**
     * @param int $customerId
     */
    public function setCustomerId(?int $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * @return int
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * @param string $channel
     */
    public function setChannel(?string $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @return string
     */
    public function getChannel(): ?string
    {
        return $this->channel;
    }

    /**
     * @param string $clientId
     */
    public function setClientId(?string $clientId): void
    {
        $this->clientId = $clientId;
    }

    /**
     * @return string
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    /**
     * @param string $clientName
     */
    public function setClientName(?string $clientName): void
    {
        $this->clientName = $clientName;
    }

    /**
     * @return string
     */
    public function getClientName(): ?string
    {
        return $this->clientName;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobCsServicerMsgSendResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobCsServicerMsgSendData
     */
    private $data;

    /**
     * @return int
     */
    public function getCode(): ?PaasResponseCode
    {
        return $this->code;
    }

    /**
     * @param PaasResponseCode $code
     */
    public function setCode(?PaasResponseCode $code): void
    {
        $this->code = $code;
    }

    /**
     * @return WeimobCsServicerMsgSendData
     */
    public function getData(): ?WeimobCsServicerMsgSendData
    {
        return $this->data;
    }

    /**
     * @param WeimobCsServicerMsgSendData $data
     */
    public function setData(?WeimobCsServicerMsgSendData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCsServicerMsgSendData implements \JsonSerializable
{
    /**
     * 扩展参数
     * @var WeimobCsServicerMsgSendDataExt
     */
    private $ext;

    /**
     * 消息类型（文本：text； 图片：image）
     * @var string
     */
    private $msgType;

    /**
     * 消息内容（当消息类型为text时content内容为回复文本；当消息类型为image时content的内容为图片链接）
     * @var string
     */
    private $content;

    /**
     * 状态（ 0:正常发消息; 1:无答案; 2:请求转人工 3:等待响应）
     * @var int
     */
    private $status;

    /**
     * @param WeimobCsServicerMsgSendDataExt $ext
     */
    public function setExt(?WeimobCsServicerMsgSendDataExt $ext): void
    {
        $this->ext = $ext;
    }

    /**
     * @return WeimobCsServicerMsgSendDataExt
     */
    public function getExt(): ?WeimobCsServicerMsgSendDataExt
    {
        return $this->ext;
    }

    /**
     * @param string $msgType
     */
    public function setMsgType(?string $msgType): void
    {
        $this->msgType = $msgType;
    }

    /**
     * @return string
     */
    public function getMsgType(): ?string
    {
        return $this->msgType;
    }

    /**
     * @param string $content
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCsServicerMsgSendDataExt implements \JsonSerializable
{
    /**
     * 客户id
     * @var int
     */
    private $customerId;

    /**
     * 咨询渠道（h5 ：h5页面会话；wechat： 微信公众号；wmp： 微信小程序）
     * @var string
     */
    private $channel;

    /**
     * 机器人编号
     * @var string
     */
    private $clientId;

    /**
     * 机器人名称
     * @var string
     */
    private $clientName;

    /**
     * @param int $customerId
     */
    public function setCustomerId(?int $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * @return int
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * @param string $channel
     */
    public function setChannel(?string $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @return string
     */
    public function getChannel(): ?string
    {
        return $this->channel;
    }

    /**
     * @param string $clientId
     */
    public function setClientId(?string $clientId): void
    {
        $this->clientId = $clientId;
    }

    /**
     * @return string
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    /**
     * @param string $clientName
     */
    public function setClientName(?string $clientName): void
    {
        $this->clientName = $clientName;
    }

    /**
     * @return string
     */
    public function getClientName(): ?string
    {
        return $this->clientName;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

