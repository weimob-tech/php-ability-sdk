<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Kld;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 245
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface KLDCashAddCashOrderListener
{
    const topic = 'KLD_Cash';
    const event = 'addCashOrder';
    const classType = AddCashOrderMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class AddCashOrderMessage implements \JsonSerializable
{
    /**
    * 会员信息
    * @var KLDCashAddCashOrderMeg_body
    */
    private $meg_body;

    /**
    * 服务商的client_id
    * @var string
    */
    private $client_id;

    /**
    * 实际需支付金额
    * @var float
    */
    private $realAmount;

    /**
    * 支付金额
    * @var float
    */
    private $amount;

    /**
    * 订单编号
    * @var string
    */
    private $orderNo;

    /**
    * 客户openId
    * @var string
    */
    private $openId;

    /**
    * @param KLDCashAddCashOrderMeg_body $meg_body
    */
    public function setMegBody(?KLDCashAddCashOrderMeg_body $meg_body)
    {
        $this->meg_body = $meg_body;
    }

    /**
    * @return KLDCashAddCashOrderMeg_body
    */
    public function getMegBody(): ?KLDCashAddCashOrderMeg_body
    {
        return $this->meg_body;
    }

    /**
    * @param string $client_id
    */
    public function setClientId(?string $client_id)
    {
        $this->client_id = $client_id;
    }

    /**
    * @return string
    */
    public function getClientId(): ?string
    {
        return $this->client_id;
    }

    /**
    * @param float $realAmount
    */
    public function setRealAmount(?float $realAmount)
    {
        $this->realAmount = $realAmount;
    }

    /**
    * @return float
    */
    public function getRealAmount(): ?float
    {
        return $this->realAmount;
    }

    /**
    * @param float $amount
    */
    public function setAmount(?float $amount)
    {
        $this->amount = $amount;
    }

    /**
    * @return float
    */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
    * @param string $orderNo
    */
    public function setOrderNo(?string $orderNo)
    {
        $this->orderNo = $orderNo;
    }

    /**
    * @return string
    */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class KLDCashAddCashOrderMeg_body implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

