<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,341
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface WeimobCrmCouponConsumeCouponListener
{
    const topic = 'weimob_crm.coupon';
    const event = 'consumeCoupon';
    const classType = ConsumeCouponMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ConsumeCouponMessage implements \JsonSerializable
{
    /**
     * 用户wid
     * @var int
     */
    private $wid;

    /**
     * 码值
     * @var string
     */
    private $code;

    /**
     * 券模板id
     * @var int
     */
    private $couponTemplateId;

    /**
     * 门店id
     * @var int
     */
    private $vid;

    /**
     * 核销场景：1-网店订单；3-app&收银台；7-商城api核销；8-商城买家直接消费；9-买家直接消费
     * @var int
     */
    private $useScene;

    /**
     * 业务id，如：订单号
     * @var int
     */
    private $transactionId;

    /**
     * 核销时间
     * @var int
     */
    private $useTime;

    /**
     * 发券人WID，比如导购WID
     * @var int
     */
    private $sWid;

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
     * @param string $code
     */
    public function setCode(?string $code): void
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

    /**
     * @param int $couponTemplateId
     */
    public function setCouponTemplateId(?int $couponTemplateId): void
    {
        $this->couponTemplateId = $couponTemplateId;
    }

    /**
     * @return int
     */
    public function getCouponTemplateId(): ?int
    {
        return $this->couponTemplateId;
    }

    /**
     * @param int $vid
     */
    public function setVid(?int $vid): void
    {
        $this->vid = $vid;
    }

    /**
     * @return int
     */
    public function getVid(): ?int
    {
        return $this->vid;
    }

    /**
     * @param int $useScene
     */
    public function setUseScene(?int $useScene): void
    {
        $this->useScene = $useScene;
    }

    /**
     * @return int
     */
    public function getUseScene(): ?int
    {
        return $this->useScene;
    }

    /**
     * @param int $transactionId
     */
    public function setTransactionId(?int $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @return int
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }

    /**
     * @param int $useTime
     */
    public function setUseTime(?int $useTime): void
    {
        $this->useTime = $useTime;
    }

    /**
     * @return int
     */
    public function getUseTime(): ?int
    {
        return $this->useTime;
    }

    /**
     * @param int $sWid
     */
    public function setSWid(?int $sWid): void
    {
        $this->sWid = $sWid;
    }

    /**
     * @return int
     */
    public function getSWid(): ?int
    {
        return $this->sWid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

