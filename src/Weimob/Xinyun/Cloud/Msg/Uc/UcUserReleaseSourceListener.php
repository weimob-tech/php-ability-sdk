<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Uc;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,486
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface UcUserReleaseSourceListener
{
    const topic = 'uc_user';
    const event = 'release_source';
    const classType = ReleaseSourceMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ReleaseSourceMessage implements \JsonSerializable
{
    /**
     * 解绑渠道对应的wid
     * @var int
     */
    private $wid;

    /**
     * 对应的渠道类型 4：手机号
     * @var int
     */
    private $source;

    /**
     * 应用标识，如微信小程序、公众号的appid。若是unionId、手机号等，则是default
     * @var string
     */
    private $sourceAppid;

    /**
     * 对应释放的渠道内容，如手机号、微信环境用户的openId
     * @var string
     */
    private $sourceOpenid;

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
     * @param int $source
     */
    public function setSource(?int $source): void
    {
        $this->source = $source;
    }

    /**
     * @return int
     */
    public function getSource(): ?int
    {
        return $this->source;
    }

    /**
     * @param string $sourceAppid
     */
    public function setSourceAppid(?string $sourceAppid): void
    {
        $this->sourceAppid = $sourceAppid;
    }

    /**
     * @return string
     */
    public function getSourceAppid(): ?string
    {
        return $this->sourceAppid;
    }

    /**
     * @param string $sourceOpenid
     */
    public function setSourceOpenid(?string $sourceOpenid): void
    {
        $this->sourceOpenid = $sourceOpenid;
    }

    /**
     * @return string
     */
    public function getSourceOpenid(): ?string
    {
        return $this->sourceOpenid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

