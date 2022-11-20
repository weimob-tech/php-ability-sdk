<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,271
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface EcGuideUpdateGuiderListener
{
    const topic = 'ec_guide';
    const event = 'updateGuider';
    const classType = UpdateGuiderMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateGuiderMessage implements \JsonSerializable
{
    /**
    * 门店id
    * @var int
    */
    private $storeId;

    /**
    * 导购wid
    * @var int
    */
    private $guiderWid;

    /**
    * 导购工号
    * @var string
    */
    private $jobNumber;

    /**
    * 导购手机号
    * @var string
    */
    private $guiderPhone;

    /**
    * 是否启用 (0 未启用 1已启用)
    * @var int
    */
    private $isUsed;

    /**
    * 是否专属客服 (0 不是 1是)
    * @var int
    */
    private $isExclusiveCus;

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
    * @param int $guiderWid
    */
    public function setGuiderWid(?int $guiderWid)
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
    * @param string $jobNumber
    */
    public function setJobNumber(?string $jobNumber)
    {
        $this->jobNumber = $jobNumber;
    }

    /**
    * @return string
    */
    public function getJobNumber(): ?string
    {
        return $this->jobNumber;
    }

    /**
    * @param string $guiderPhone
    */
    public function setGuiderPhone(?string $guiderPhone)
    {
        $this->guiderPhone = $guiderPhone;
    }

    /**
    * @return string
    */
    public function getGuiderPhone(): ?string
    {
        return $this->guiderPhone;
    }

    /**
    * @param int $isUsed
    */
    public function setIsUsed(?int $isUsed)
    {
        $this->isUsed = $isUsed;
    }

    /**
    * @return int
    */
    public function getIsUsed(): ?int
    {
        return $this->isUsed;
    }

    /**
    * @param int $isExclusiveCus
    */
    public function setIsExclusiveCus(?int $isExclusiveCus)
    {
        $this->isExclusiveCus = $isExclusiveCus;
    }

    /**
    * @return int
    */
    public function getIsExclusiveCus(): ?int
    {
        return $this->isExclusiveCus;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

