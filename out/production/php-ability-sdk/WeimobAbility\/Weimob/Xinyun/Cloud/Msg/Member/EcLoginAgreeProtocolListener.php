<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Member;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,910
 * @author weimobcloud
 * @create 2023-5-29
 */
interface EcLoginAgreeProtocolListener
{
    const topic = 'ec_login';
    const event = 'agreeProtocol';
    const classType = AgreeProtocolMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class AgreeProtocolMessage implements \JsonSerializable
{
    /**
     * 商户pid
     * @var int
     */
    private $pid;

    /**
     * 门店id
     * @var int
     */
    private $storeId;

    /**
     * 协议类型1.访问协议2.登录协议
     * @var int
     */
    private $agreementType;

    /**
     * 协议文件名称
     * @var array
     */
    private $protocolFileNames;

    /**
     * 协议签名，对应某个版本
     * @var string
     */
    private $signature;

    /**
     * 客户wid
     * @var int
     */
    private $wid;

    /**
     * @param int $pid
     */
    public function setPid(?int $pid): void
    {
        $this->pid = $pid;
    }

    /**
     * @return int
     */
    public function getPid(): ?int
    {
        return $this->pid;
    }

    /**
     * @param int $storeId
     */
    public function setStoreId(?int $storeId): void
    {
        $this->storeId = $storeId;
    }

    /**
     * @return int
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }

    /**
     * @param int $agreementType
     */
    public function setAgreementType(?int $agreementType): void
    {
        $this->agreementType = $agreementType;
    }

    /**
     * @return int
     */
    public function getAgreementType(): ?int
    {
        return $this->agreementType;
    }

    /**
     * @param array $protocolFileNames
     */
    public function setProtocolFileNames(?array $protocolFileNames): void
    {
        $this->protocolFileNames = $protocolFileNames;
    }

    /**
     * @return array
     */
    public function getProtocolFileNames(): ?array
    {
        return $this->protocolFileNames;
    }

    /**
     * @param string $signature
     */
    public function setSignature(?string $signature): void
    {
        $this->signature = $signature;
    }

    /**
     * @return string
     */
    public function getSignature(): ?string
    {
        return $this->signature;
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

