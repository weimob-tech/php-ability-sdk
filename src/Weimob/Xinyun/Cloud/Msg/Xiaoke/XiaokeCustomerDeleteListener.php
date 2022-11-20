<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,763
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface XiaokeCustomerDeleteListener
{
    const topic = 'xiaoke_customer';
    const event = 'delete';
    const classType = DeleteMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class DeleteMessage implements \JsonSerializable
{
    /**
    * 删除的商机keys列表
    * @var array
    */
    private $nicheKeys;

    /**
    * 删除的客户keys列表
    * @var array
    */
    private $customerKeys;

    /**
    * 删除的联系人keys列表
    * @var array
    */
    private $contactKeys;

    /**
    * 消息体创建时间
    * @var int
    */
    private $buildTime;

    /**
    * 操作用户wid
    * @var int
    */
    private $wid;

    /**
    * @param array $nicheKeys
    */
    public function setNicheKeys(?array $nicheKeys)
    {
        $this->nicheKeys = $nicheKeys;
    }

    /**
    * @return array
    */
    public function getNicheKeys(): ?array
    {
        return $this->nicheKeys;
    }

    /**
    * @param array $customerKeys
    */
    public function setCustomerKeys(?array $customerKeys)
    {
        $this->customerKeys = $customerKeys;
    }

    /**
    * @return array
    */
    public function getCustomerKeys(): ?array
    {
        return $this->customerKeys;
    }

    /**
    * @param array $contactKeys
    */
    public function setContactKeys(?array $contactKeys)
    {
        $this->contactKeys = $contactKeys;
    }

    /**
    * @return array
    */
    public function getContactKeys(): ?array
    {
        return $this->contactKeys;
    }

    /**
    * @param int $buildTime
    */
    public function setBuildTime(?int $buildTime)
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
    public function setWid(?int $wid)
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

