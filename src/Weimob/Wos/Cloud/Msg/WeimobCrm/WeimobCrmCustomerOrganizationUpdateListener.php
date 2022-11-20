<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,357
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobCrmCustomerOrganizationUpdateListener
{
    const topic = 'weimob_crm.customer';
    const event = 'organizationUpdate';
    const classType = OrganizationUpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class OrganizationUpdateMessage implements \JsonSerializable
{
    /**
    * 客户编号，是用户身份的唯一标识。可以通过B端页面客户列表/客户详情找到该编号。
    * @var int
    */
    private $wid;

    /**
    * 变更后的归属门店ID。可以通过B端店铺/店铺设置/组织架构找到门店对应ID。
    * @var int
    */
    private $newBelongVid;

    /**
    * 变更前的归属门店ID。可以通过B端店铺/店铺设置/组织架构找到门店对应ID。
    * @var int
    */
    private $oldBelongVid;

    /**
    * @param int $wid
    */
    public function setWid(?int $wid)
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
    * @param int $newBelongVid
    */
    public function setNewBelongVid(?int $newBelongVid)
    {
        $this->newBelongVid = $newBelongVid;
    }

    /**
    * @return int
    */
    public function getNewBelongVid(): ?int
    {
        return $this->newBelongVid;
    }

    /**
    * @param int $oldBelongVid
    */
    public function setOldBelongVid(?int $oldBelongVid)
    {
        $this->oldBelongVid = $oldBelongVid;
    }

    /**
    * @return int
    */
    public function getOldBelongVid(): ?int
    {
        return $this->oldBelongVid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

