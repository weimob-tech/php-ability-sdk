<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\O2o;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 468
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface O2oMemberSubscribeListener
{
    const topic = 'o2o_member';
    const event = 'subscribe';
    const classType = SubscribeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class SubscribeMessage implements \JsonSerializable
{
    /**
     * 商户id
     * @var int
     */
    private $merchantId;

    /**
     * 用户openId
     * @var string
     */
    private $openId;

    /**
     * 消息生成时间
     * @var int
     */
    private $createTime;

    /**
     * @param int $merchantId
     */
    public function setMerchantId(?int $merchantId): void
    {
        $this->merchantId = $merchantId;
    }

    /**
     * @return int
     */
    public function getMerchantId(): ?int
    {
        return $this->merchantId;
    }

    /**
     * @param string $openId
     */
    public function setOpenId(?string $openId): void
    {
        $this->openId = $openId;
    }

    /**
     * @return string
     */
    public function getOpenId(): ?string
    {
        return $this->openId;
    }

    /**
     * @param int $createTime
     */
    public function setCreateTime(?int $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

