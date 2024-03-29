<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,617
 * @author weimobcloud
 * @create 2023-5-29
 */
interface UcTagCustomerTagV2ReleationChangedListener
{
    const topic = 'uc_tag';
    const event = 'customerTagV2ReleationChanged';
    const classType = CustomerTagV2ReleationChangedMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class CustomerTagV2ReleationChangedMessage implements \JsonSerializable
{
    /**
     * 用户wid
     * @var array
     */
    private $wids;

    /**
     * 商户id
     * @var int
     */
    private $pid;

    /**
     * @param array $wids
     */
    public function setWids(?array $wids): void
    {
        $this->wids = $wids;
    }

    /**
     * @return array
     */
    public function getWids(): ?array
    {
        return $this->wids;
    }

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

