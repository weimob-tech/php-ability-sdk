<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Hotel;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,441
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface HOTELMealOrderSubmitMealOrderListener
{
    const topic = 'HOTEL_MealOrder';
    const event = 'submitMealOrder';
    const classType = SubmitMealOrderMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class SubmitMealOrderMessage implements \JsonSerializable
{
    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 桌号
     * @var string
     */
    private $tableNumber;

    /**
     * 就餐人数
     * @var string
     */
    private $mealPeopleNum;

    /**
     * 客户备注
     * @var string
     */
    private $mealRemark;

    /**
     * 门店id
     * @var string
     */
    private $storeId;

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
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
     * @param string $tableNumber
     */
    public function setTableNumber(?string $tableNumber): void
    {
        $this->tableNumber = $tableNumber;
    }

    /**
     * @return string
     */
    public function getTableNumber(): ?string
    {
        return $this->tableNumber;
    }

    /**
     * @param string $mealPeopleNum
     */
    public function setMealPeopleNum(?string $mealPeopleNum): void
    {
        $this->mealPeopleNum = $mealPeopleNum;
    }

    /**
     * @return string
     */
    public function getMealPeopleNum(): ?string
    {
        return $this->mealPeopleNum;
    }

    /**
     * @param string $mealRemark
     */
    public function setMealRemark(?string $mealRemark): void
    {
        $this->mealRemark = $mealRemark;
    }

    /**
     * @return string
     */
    public function getMealRemark(): ?string
    {
        return $this->mealRemark;
    }

    /**
     * @param string $storeId
     */
    public function setStoreId(?string $storeId): void
    {
        $this->storeId = $storeId;
    }

    /**
     * @return string
     */
    public function getStoreId(): ?string
    {
        return $this->storeId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

