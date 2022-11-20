<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 2,684
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface XiaokeOrderEditListener
{
    const topic = 'xiaoke_order';
    const event = 'edit';
    const classType = EditMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class EditMessage implements \JsonSerializable
{
    /**
     * 业务字段
     * @var array
     */
    private $list;

    /**
     * 订单意向产品
     * @var array
     */
    private $products;

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
     * @param array $list
     */
    public function setList(?array $list): void
    {
        $this->list = $list;
    }

    /**
     * @return array
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param array $products
     */
    public function setProducts(?array $products): void
    {
        $this->products = $products;
    }

    /**
     * @return array
     */
    public function getProducts(): ?array
    {
        return $this->products;
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

