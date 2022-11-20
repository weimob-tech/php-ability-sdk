<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Marketing;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,482
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface InterScrapecardPlayCardListener
{
    const topic = 'inter_scrapecard';
    const event = 'playCard';
    const classType = PlayCardMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PlayCardMessage implements \JsonSerializable
{
    /**
     * unionid
     * @var string
     */
    private $unionid;

    /**
     * wid
     * @var int
     */
    private $wid;

    /**
     * opened
     * @var string
     */
    private $openid;

    /**
     * 参与活动时间（刮卡时间）
     * @var int
     */
    private $playtime;

    /**
     * @param string $unionid
     */
    public function setUnionid(?string $unionid): void
    {
        $this->unionid = $unionid;
    }

    /**
     * @return string
     */
    public function getUnionid(): ?string
    {
        return $this->unionid;
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

    /**
     * @param string $openid
     */
    public function setOpenid(?string $openid): void
    {
        $this->openid = $openid;
    }

    /**
     * @return string
     */
    public function getOpenid(): ?string
    {
        return $this->openid;
    }

    /**
     * @param int $playtime
     */
    public function setPlaytime(?int $playtime): void
    {
        $this->playtime = $playtime;
    }

    /**
     * @return int
     */
    public function getPlaytime(): ?int
    {
        return $this->playtime;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

