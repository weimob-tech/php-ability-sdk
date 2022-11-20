<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,688
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface CcCouponUpdateCouponStockListener
{
    const topic = 'cc_coupon';
    const event = 'updateCouponStock';
    const classType = UpdateCouponStockMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateCouponStockMessage implements \JsonSerializable
{
    /**
     * 商户id
     * @var int
     */
    private $pid;

    /**
     * 优惠券唯一标识
     * @var int
     */
    private $cardTemplateId;

    /**
     * 修改的库存数量
     * @var int
     */
    private $stock;

    /**
     * 总库存
     * @var int
     */
    private $totalStock;

    /**
     * 新增true，减少false
     * @var bool
     */
    private $isIncr;

    /**
     * 渠道
     * @var int
     */
    private $channel;

    /**
     * @param int $pid
     */
    public function setPid(?int $pid): void
    {
        $this->pid = $pid;
    }

    /**
     * @return int
     */
    public function getPid(): ?int
    {
        return $this->pid;
    }

    /**
     * @param int $cardTemplateId
     */
    public function setCardTemplateId(?int $cardTemplateId): void
    {
        $this->cardTemplateId = $cardTemplateId;
    }

    /**
     * @return int
     */
    public function getCardTemplateId(): ?int
    {
        return $this->cardTemplateId;
    }

    /**
     * @param int $stock
     */
    public function setStock(?int $stock): void
    {
        $this->stock = $stock;
    }

    /**
     * @return int
     */
    public function getStock(): ?int
    {
        return $this->stock;
    }

    /**
     * @param int $totalStock
     */
    public function setTotalStock(?int $totalStock): void
    {
        $this->totalStock = $totalStock;
    }

    /**
     * @return int
     */
    public function getTotalStock(): ?int
    {
        return $this->totalStock;
    }

    /**
     * @param bool $isIncr
     */
    public function setIsIncr(?bool $isIncr): void
    {
        $this->isIncr = $isIncr;
    }

    /**
     * @return bool
     */
    public function getIsIncr(): ?bool
    {
        return $this->isIncr;
    }

    /**
     * @param int $channel
     */
    public function setChannel(?int $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @return int
     */
    public function getChannel(): ?int
    {
        return $this->channel;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

