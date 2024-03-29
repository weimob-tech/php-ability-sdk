<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 2,691
 * @author weimobcloud
 * @create 2023-5-29
 */
interface XiaokeProductPutAwayListener
{
    const topic = 'xiaoke_product';
    const event = 'putAway';
    const classType = PutAwayMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class PutAwayMessage implements \JsonSerializable
{
    private $productUniqueRequestList;

    private $buildTime;

    private $wid;

    /**
     * @param array $productUniqueRequestList
     */
    public function setProductUniqueRequestList(?array $productUniqueRequestList): void
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
    public function setBuildTime(?int $buildTime): void
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

