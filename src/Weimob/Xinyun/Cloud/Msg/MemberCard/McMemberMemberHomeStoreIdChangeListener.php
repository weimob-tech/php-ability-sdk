<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\MemberCard;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,418
 * @author weimobcloud
 * @create 2023-5-29
 */
interface McMemberMemberHomeStoreIdChangeListener
{
    const topic = 'mc_member';
    const event = 'memberHomeStoreIdChange';
    const classType = MemberHomeStoreIdChangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class MemberHomeStoreIdChangeMessage implements \JsonSerializable
{
    /**
     * 用户wid
     * @var int
     */
    private $wid;

    /**
     * 变更前归属门店，首次绑定为null
     * @var int
     */
    private $oldHomeStoreId;

    /**
     * 变更后的归属门店
     * @var int
     */
    private $newHomeStoreId;

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

    /**
     * @param int $oldHomeStoreId
     */
    public function setOldHomeStoreId(?int $oldHomeStoreId): void
    {
        $this->oldHomeStoreId = $oldHomeStoreId;
    }

    /**
     * @return int
     */
    public function getOldHomeStoreId(): ?int
    {
        return $this->oldHomeStoreId;
    }

    /**
     * @param int $newHomeStoreId
     */
    public function setNewHomeStoreId(?int $newHomeStoreId): void
    {
        $this->newHomeStoreId = $newHomeStoreId;
    }

    /**
     * @return int
     */
    public function getNewHomeStoreId(): ?int
    {
        return $this->newHomeStoreId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

