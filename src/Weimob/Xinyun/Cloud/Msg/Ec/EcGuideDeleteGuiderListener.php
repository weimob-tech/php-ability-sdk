<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,272
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface EcGuideDeleteGuiderListener
{
    const topic = 'ec_guide';
    const event = 'deleteGuider';
    const classType = DeleteGuiderMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class DeleteGuiderMessage implements \JsonSerializable
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

