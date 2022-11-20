<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,244
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface EcStoreStoreChangeListener
{
    const topic = 'ec_store';
    const event = 'storeChange';
    const classType = StoreChangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class StoreChangeMessage implements \JsonSerializable
{
    /**
    * 状态变动的门店
    * @var int
    */
    private $storeId;

    /**
    * 状态变动类型（1-门店创建；2-门店删除；3-门店修改，修改包括门店开启与关闭，网店开启与关闭）
    * @var int
    */
    private $changeType;

    /**
    * @param int $storeId
    */
    public function setStoreId(?int $storeId)
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
    * @param int $changeType
    */
    public function setChangeType(?int $changeType)
    {
        $this->changeType = $changeType;
    }

    /**
    * @return int
    */
    public function getChangeType(): ?int
    {
        return $this->changeType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

