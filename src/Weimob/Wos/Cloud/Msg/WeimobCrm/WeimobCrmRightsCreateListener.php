<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,419
 * @author weimobcloud
 * @create 2023-5-23
 */
interface WeimobCrmRightsCreateListener
{
    const topic = 'weimob_crm.rights';
    const event = 'create';
    const classType = CreateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateMessage implements \JsonSerializable
{
    /**
     * 售后信息
     * @var WeimobCrmRightsCreateRightsInfo
     */
    private $rightsInfo;

    /**
     * 售后单号
     * @var int
     */
    private $rightsId;

    /**
     * 订单号
     * @var int
     */
    private $orderNo;

    /**
     * 外部售后单号
     * @var string
     */
    private $outRightsNo;

    /**
     * 外部订单号
     * @var string
     */
    private $outOrderNo;

    /**
     * 用户 ID
     * @var int
     */
    private $wid;

    /**
     * @param WeimobCrmRightsCreateRightsInfo $rightsInfo
     */
    public function setRightsInfo(?WeimobCrmRightsCreateRightsInfo $rightsInfo): void
    {
        $this->rightsInfo = $rightsInfo;
    }

    /**
     * @return WeimobCrmRightsCreateRightsInfo
     */
    public function getRightsInfo(): ?WeimobCrmRightsCreateRightsInfo
    {
        return $this->rightsInfo;
    }

    /**
     * @param int $rightsId
     */
    public function setRightsId(?int $rightsId): void
    {
        $this->rightsId = $rightsId;
    }

    /**
     * @return int
     */
    public function getRightsId(): ?int
    {
        return $this->rightsId;
    }

    /**
     * @param int $orderNo
     */
    public function setOrderNo(?int $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }

    /**
     * @param string $outRightsNo
     */
    public function setOutRightsNo(?string $outRightsNo): void
    {
        $this->outRightsNo = $outRightsNo;
    }

    /**
     * @return string
     */
    public function getOutRightsNo(): ?string
    {
        return $this->outRightsNo;
    }

    /**
     * @param string $outOrderNo
     */
    public function setOutOrderNo(?string $outOrderNo): void
    {
        $this->outOrderNo = $outOrderNo;
    }

    /**
     * @return string
     */
    public function getOutOrderNo(): ?string
    {
        return $this->outOrderNo;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCrmRightsCreateRightsInfo implements \JsonSerializable
{
    /**
     * 销售组织架构节点 ID
     * @var int
     */
    private $vid;

    /**
     * 售后状态。支持的类型包括：6-售后完成。
     * @var int
     */
    private $rightsStatus;

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
     * @param int $rightsStatus
     */
    public function setRightsStatus(?int $rightsStatus): void
    {
        $this->rightsStatus = $rightsStatus;
    }

    /**
     * @return int
     */
    public function getRightsStatus(): ?int
    {
        return $this->rightsStatus;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

