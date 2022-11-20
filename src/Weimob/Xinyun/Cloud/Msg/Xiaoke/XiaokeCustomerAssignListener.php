<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,769
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface XiaokeCustomerAssignListener
{
    const topic = 'xiaoke_customer';
    const event = 'assign';
    const classType = AssignMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class AssignMessage implements \JsonSerializable
{
    /**
    * 商机主键集合
    * @var array
    */
    private $nicheKeys;

    /**
    * 联系人主键集合
    * @var array
    */
    private $contactKeys;

    /**
    * 客户主键集合
    * @var array
    */
    private $customerKeys;

    /**
    * 线索新所属人wid
    * @var int
    */
    private $owner;

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
    * @param int $owner
    */
    public function setOwner(?int $owner)
    {
        $this->owner = $owner;
    }

    /**
    * @return int
    */
    public function getOwner(): ?int
    {
        return $this->owner;
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

