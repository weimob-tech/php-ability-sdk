<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobXinyunMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,901
 * @author weimobcloud
 * @create 2023-5-29
 */
interface EcMarketingUserPraiseListener
{
    const topic = 'ec_marketing';
    const event = 'userPraise';
    const classType = UserPraiseMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobXinyunMessage $message) : WeimobMessageAck;
}

class UserPraiseMessage implements \JsonSerializable
{
    /**
     * 微盟用户wid，客户唯一标识
     * @var int
     */
    private $wid;

    /**
     * 买家秀ID或专题文章ID
     * @var int
     */
    private $bizId;

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
     * @param int $bizId
     */
    public function setBizId(?int $bizId): void
    {
        $this->bizId = $bizId;
    }

    /**
     * @return int
     */
    public function getBizId(): ?int
    {
        return $this->bizId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

