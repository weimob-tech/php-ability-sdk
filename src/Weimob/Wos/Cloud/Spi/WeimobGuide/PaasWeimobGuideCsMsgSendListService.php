<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 732
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobGuideCsMsgSendListService
{
    const specType = 'wos';

    public function invoke(WeimobGuideCsMsgSendListRequest $request) : WeimobGuideCsMsgSendListResponse;
}

class WeimobGuideCsMsgSendListRequest implements \JsonSerializable
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
    * @var WeimobGuideCsMsgSendListParam
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
    * @param WeimobGuideCsMsgSendListParam $param
    */
    public function setParam(?WeimobGuideCsMsgSendListParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobGuideCsMsgSendListParam
    */
    public function getParam(): ?WeimobGuideCsMsgSendListParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCsMsgSendListParam implements \JsonSerializable
{
    /**
    * 发送用户集合
    * @var array
    */
    private $customerList;

    /**
    * 客服id
    * @var int
    */
    private $servicerId;

    /**
    * 消息类型
    * @var string
    */
    private $msgType;

    /**
    * 消息内容，格式对应msgType
    * @var string
    */
    private $content;

    /**
    * 第三方业务方id，由客服分配,导购固定为：51
    * @var int
    */
    private $businessId;

    /**
    * 消息来源渠道:(4-pc,5-app,6-企业微信)
    * @var int
    */
    private $msgSourceChannel;

    /**
    * @param array $customerList
    */
    public function setCustomerList(?array $customerList)
    {
        $this->customerList = $customerList;
    }

    /**
    * @return array
    */
    public function getCustomerList(): ?array
    {
        return $this->customerList;
    }

    /**
    * @param int $servicerId
    */
    public function setServicerId(?int $servicerId)
    {
        $this->servicerId = $servicerId;
    }

    /**
    * @return int
    */
    public function getServicerId(): ?int
    {
        return $this->servicerId;
    }

    /**
    * @param string $msgType
    */
    public function setMsgType(?string $msgType)
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
    public function setContent(?string $content)
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
    * @param int $businessId
    */
    public function setBusinessId(?int $businessId)
    {
        $this->businessId = $businessId;
    }

    /**
    * @return int
    */
    public function getBusinessId(): ?int
    {
        return $this->businessId;
    }

    /**
    * @param int $msgSourceChannel
    */
    public function setMsgSourceChannel(?int $msgSourceChannel)
    {
        $this->msgSourceChannel = $msgSourceChannel;
    }

    /**
    * @return int
    */
    public function getMsgSourceChannel(): ?int
    {
        return $this->msgSourceChannel;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCsMsgSendListParamCustomerList implements \JsonSerializable
{
    /**
    * 用户id
    * @var int
    */
    private $customerId;

    /**
    * 客户来源节点
    * @var int
    */
    private $vid;

    /**
    * 用户来源渠道:(1-公众号,2-H5,3-小程序)，优先去参数的用户渠道作为消息推送渠道，
如果不传则取客户最新联系的渠道，如果客服系统不存在该客户，则优先取已关注公众号渠道
    * @var int
    */
    private $userSourceChannel;

    /**
    * @param int $customerId
    */
    public function setCustomerId(?int $customerId)
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
    * @param int $vid
    */
    public function setVid(?int $vid)
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
    * @param int $userSourceChannel
    */
    public function setUserSourceChannel(?int $userSourceChannel)
    {
        $this->userSourceChannel = $userSourceChannel;
    }

    /**
    * @return int
    */
    public function getUserSourceChannel(): ?int
    {
        return $this->userSourceChannel;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideCsMsgSendListResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobGuideCsMsgSendListData
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
    * @return WeimobGuideCsMsgSendListData
    */
    public function getData(): ?WeimobGuideCsMsgSendListData
    {
        return $this->data;
    }

    /**
    * @param WeimobGuideCsMsgSendListData $data
    */
    public function setData(?WeimobGuideCsMsgSendListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCsMsgSendListData implements \JsonSerializable
{
    /**
    * 失败集合
    * @var array
    */
    private $failList;

    /**
    * 成功数量
    * @var int
    */
    private $successCount;

    /**
    * @param array $failList
    */
    public function setFailList(?array $failList)
    {
        $this->failList = $failList;
    }

    /**
    * @return array
    */
    public function getFailList(): ?array
    {
        return $this->failList;
    }

    /**
    * @param int $successCount
    */
    public function setSuccessCount(?int $successCount)
    {
        $this->successCount = $successCount;
    }

    /**
    * @return int
    */
    public function getSuccessCount(): ?int
    {
        return $this->successCount;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCsMsgSendListDataFailList implements \JsonSerializable
{
    /**
    * 客户Id
    * @var int
    */
    private $userId;

    /**
    * 失败原因
    * @var string
    */
    private $failReason;

    /**
    * @param int $userId
    */
    public function setUserId(?int $userId)
    {
        $this->userId = $userId;
    }

    /**
    * @return int
    */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
    * @param string $failReason
    */
    public function setFailReason(?string $failReason)
    {
        $this->failReason = $failReason;
    }

    /**
    * @return string
    */
    public function getFailReason(): ?string
    {
        return $this->failReason;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

