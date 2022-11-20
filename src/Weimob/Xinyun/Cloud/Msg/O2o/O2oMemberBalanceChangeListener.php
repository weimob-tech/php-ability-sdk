<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\O2o;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 472
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface O2oMemberBalanceChangeListener
{
    const topic = 'o2o_member';
    const event = 'balanceChange';
    const classType = BalanceChangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class BalanceChangeMessage implements \JsonSerializable
{
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
    * 当前余额（单位：分）
    * @var int
    */
    private $balance;

    /**
    * 余额变更（正数为增加余额，负数为减少余额）（单位：分）
    * @var int
    */
    private $balanceChange;

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
    * 用户wid
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
    * @param int $balance
    */
    public function setBalance(?int $balance)
    {
        $this->balance = $balance;
    }

    /**
    * @return int
    */
    public function getBalance(): ?int
    {
        return $this->balance;
    }

    /**
    * @param int $balanceChange
    */
    public function setBalanceChange(?int $balanceChange)
    {
        $this->balanceChange = $balanceChange;
    }

    /**
    * @return int
    */
    public function getBalanceChange(): ?int
    {
        return $this->balanceChange;
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

