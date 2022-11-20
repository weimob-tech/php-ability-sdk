<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 908
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobGuideCsMsgContactService
{
    const specType = 'wos';

    public function invoke(WeimobGuideCsMsgContactRequest $request) : WeimobGuideCsMsgContactResponse;
}

class WeimobGuideCsMsgContactRequest implements \JsonSerializable
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
     * @var WeimobGuideCsMsgContactParam
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
     * @param WeimobGuideCsMsgContactParam $param
     */
    public function setParam(?WeimobGuideCsMsgContactParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobGuideCsMsgContactParam
     */
    public function getParam(): ?WeimobGuideCsMsgContactParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCsMsgContactParam implements \JsonSerializable
{
    /**
     * 客户wid
     * @var int
     */
    private $customerWid;

    /**
     * 导购wid
     * @var int
     */
    private $guiderWid;

    /**
     * 客服操作终端（4-pc  5-app）
     * @var int
     */
    private $terminal;

    /**
     * 用户来源渠道:(1-公众号,2-H5,3-小程序)，不传默认为微信公众号
     * @var int
     */
    private $userSourceChannel;

    /**
     * @param int $customerWid
     */
    public function setCustomerWid(?int $customerWid): void
    {
        $this->customerWid = $customerWid;
    }

    /**
     * @return int
     */
    public function getCustomerWid(): ?int
    {
        return $this->customerWid;
    }

    /**
     * @param int $guiderWid
     */
    public function setGuiderWid(?int $guiderWid): void
    {
        $this->guiderWid = $guiderWid;
    }

    /**
     * @return int
     */
    public function getGuiderWid(): ?int
    {
        return $this->guiderWid;
    }

    /**
     * @param int $terminal
     */
    public function setTerminal(?int $terminal): void
    {
        $this->terminal = $terminal;
    }

    /**
     * @return int
     */
    public function getTerminal(): ?int
    {
        return $this->terminal;
    }

    /**
     * @param int $userSourceChannel
     */
    public function setUserSourceChannel(?int $userSourceChannel): void
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


class WeimobGuideCsMsgContactResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobGuideCsMsgContactData
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
     * @return WeimobGuideCsMsgContactData
     */
    public function getData(): ?WeimobGuideCsMsgContactData
    {
        return $this->data;
    }

    /**
     * @param WeimobGuideCsMsgContactData $data
     */
    public function setData(?WeimobGuideCsMsgContactData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCsMsgContactData implements \JsonSerializable
{
    /**
     * 会话id
     * @var int
     */
    private $dialogId;

    /**
     * @param int $dialogId
     */
    public function setDialogId(?int $dialogId): void
    {
        $this->dialogId = $dialogId;
    }

    /**
     * @return int
     */
    public function getDialogId(): ?int
    {
        return $this->dialogId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

