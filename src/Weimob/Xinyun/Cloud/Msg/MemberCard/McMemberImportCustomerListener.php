<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\MemberCard;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,447
 * @author weimobcloud
 * @create 2023-5-29
 */
interface McMemberImportCustomerListener
{
    const topic = 'mc_member';
    const event = 'importCustomer';
    const classType = ImportCustomerMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class ImportCustomerMessage implements \JsonSerializable
{
    /**
     * 用户wid集合
     * @var array
     */
    private $widList;

    /**
     * @param array $widList
     */
    public function setWidList(?array $widList): void
    {
        $this->widList = $widList;
    }

    /**
     * @return array
     */
    public function getWidList(): ?array
    {
        return $this->widList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

