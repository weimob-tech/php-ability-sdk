<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\O2o;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 471
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface O2oMemberPointChangeListener
{
    const topic = 'o2o_member';
    const event = 'pointChange';
    const classType = PointChangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PointChangeMessage implements \JsonSerializable
{
    /**
    * 当前积分
    * @var int
    */
    private $point;

    /**
    * 积分变更值（正数为增加积分，负数为减少积分）
    * @var int
    */
    private $pointChange;

    /**
    * 备注
    * @var string
    */
    private $comment;

    /**
    * 消息生成时间
    * @var int
    */
    private $createTime;

    /**
    * 商户id
    * @var int
    */
    private $merchantId;

    /**
    * 用户openid
    * @var string
    */
    private $openId;

    /**
    * 用户会员的wid
    * @var string
    */
    private $wid;

    /**
    * 会员id
    * @var int
    */
    private $customerId;

    /**
    * 会员卡号
    * @var string
    */
    private $code;

    /**
    * @param int $point
    */
    public function setPoint(?int $point)
    {
        $this->point = $point;
    }

    /**
    * @return int
    */
    public function getPoint(): ?int
    {
        return $this->point;
    }

    /**
    * @param int $pointChange
    */
    public function setPointChange(?int $pointChange)
    {
        $this->pointChange = $pointChange;
    }

    /**
    * @return int
    */
    public function getPointChange(): ?int
    {
        return $this->pointChange;
    }

    /**
    * @param string $comment
    */
    public function setComment(?string $comment)
    {
        $this->comment = $comment;
    }

    /**
    * @return string
    */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
    * @param int $createTime
    */
    public function setCreateTime(?int $createTime)
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

    /**
    * @param int $merchantId
    */
    public function setMerchantId(?int $merchantId)
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
    public function setOpenId(?string $openId)
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
    * @param string $wid
    */
    public function setWid(?string $wid)
    {
        $this->wid = $wid;
    }

    /**
    * @return string
    */
    public function getWid(): ?string
    {
        return $this->wid;
    }

    /**
    * @param int $customerId
    */
    public function setCustomerId(?int $customerId)
    {
        $this->customerId = $customerId;
    }

    /**
    * @return int
    */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
    * @param string $code
    */
    public function setCode(?string $code)
    {
        $this->code = $code;
    }

    /**
    * @return string
    */
    public function getCode(): ?string
    {
        return $this->code;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

