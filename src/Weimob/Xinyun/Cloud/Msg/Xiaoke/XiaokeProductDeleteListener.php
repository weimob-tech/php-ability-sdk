<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 2,690
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface XiaokeProductDeleteListener
{
    const topic = 'xiaoke_product';
    const event = 'delete';
    const classType = DeleteMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class DeleteMessage implements \JsonSerializable
{
    /**
    * 产品信息
    * @var array
    */
    private $productUniqueRequestList;

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
    * @param array $productUniqueRequestList
    */
    public function setProductUniqueRequestList(?array $productUniqueRequestList)
    {
        $this->productUniqueRequestList = $productUniqueRequestList;
    }

    /**
    * @return array
    */
    public function getProductUniqueRequestList(): ?array
    {
        return $this->productUniqueRequestList;
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

