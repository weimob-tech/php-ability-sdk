<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\Niepan;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,334
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface NiepanChannelRightsCreateRightsListener
{
    const topic = 'niepan.channel.rights';
    const event = 'createRights';
    const classType = CreateRightsMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateRightsMessage implements \JsonSerializable
{
    /**
    * 附属功能json对象数组
    * @var array
    */
    private $auxiliaryInfo;

    /**
    * 菜单资源json对象
    * @var NiepanChannelRightsCreateRightsMenuResInfo
    */
    private $menuResInfo;

    /**
    * 开通时间
    * @var NiepanChannelRightsCreateRightsStartTime
    */
    private $startTime;

    /**
    * 消息类型
    * @var string
    */
    private $msgType;

    /**
    * 产品id
    * @var int
    */
    private $productId;

    /**
    * 产品实例id
    * @var int
    */
    private $productInstanceId;

    /**
    * 记录id
    * @var int
    */
    private $recordId;

    /**
    * 商家id
    * @var int
    */
    private $merchantId;

    /**
    * 组织机构id
    * @var int
    */
    private $bosId;

    /**
    * 产品版本名称
    * @var string
    */
    private $productVersionName;

    /**
    * 结束时间
    * @var int
    */
    private $endTime;

    /**
    * 产品版本id
    * @var int
    */
    private $productVersionId;

    /**
    * @param array $auxiliaryInfo
    */
    public function setAuxiliaryInfo(?array $auxiliaryInfo)
    {
        $this->auxiliaryInfo = $auxiliaryInfo;
    }

    /**
    * @return array
    */
    public function getAuxiliaryInfo(): ?array
    {
        return $this->auxiliaryInfo;
    }

    /**
    * @param NiepanChannelRightsCreateRightsMenuResInfo $menuResInfo
    */
    public function setMenuResInfo(?NiepanChannelRightsCreateRightsMenuResInfo $menuResInfo)
    {
        $this->menuResInfo = $menuResInfo;
    }

    /**
    * @return NiepanChannelRightsCreateRightsMenuResInfo
    */
    public function getMenuResInfo(): ?NiepanChannelRightsCreateRightsMenuResInfo
    {
        return $this->menuResInfo;
    }

    /**
    * @param NiepanChannelRightsCreateRightsStartTime $startTime
    */
    public function setStartTime(?NiepanChannelRightsCreateRightsStartTime $startTime)
    {
        $this->startTime = $startTime;
    }

    /**
    * @return NiepanChannelRightsCreateRightsStartTime
    */
    public function getStartTime(): ?NiepanChannelRightsCreateRightsStartTime
    {
        return $this->startTime;
    }

    /**
    * @param string $msgType
    */
    public function setMsgType(?string $msgType)
    {
        $this->msgType = $msgType;
    }

    /**
    * @return string
    */
    public function getMsgType(): ?string
    {
        return $this->msgType;
    }

    /**
    * @param int $productId
    */
    public function setProductId(?int $productId)
    {
        $this->productId = $productId;
    }

    /**
    * @return int
    */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
    * @param int $productInstanceId
    */
    public function setProductInstanceId(?int $productInstanceId)
    {
        $this->productInstanceId = $productInstanceId;
    }

    /**
    * @return int
    */
    public function getProductInstanceId(): ?int
    {
        return $this->productInstanceId;
    }

    /**
    * @param int $recordId
    */
    public function setRecordId(?int $recordId)
    {
        $this->recordId = $recordId;
    }

    /**
    * @return int
    */
    public function getRecordId(): ?int
    {
        return $this->recordId;
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
    * @param int $bosId
    */
    public function setBosId(?int $bosId)
    {
        $this->bosId = $bosId;
    }

    /**
    * @return int
    */
    public function getBosId(): ?int
    {
        return $this->bosId;
    }

    /**
    * @param string $productVersionName
    */
    public function setProductVersionName(?string $productVersionName)
    {
        $this->productVersionName = $productVersionName;
    }

    /**
    * @return string
    */
    public function getProductVersionName(): ?string
    {
        return $this->productVersionName;
    }

    /**
    * @param int $endTime
    */
    public function setEndTime(?int $endTime)
    {
        $this->endTime = $endTime;
    }

    /**
    * @return int
    */
    public function getEndTime(): ?int
    {
        return $this->endTime;
    }

    /**
    * @param int $productVersionId
    */
    public function setProductVersionId(?int $productVersionId)
    {
        $this->productVersionId = $productVersionId;
    }

    /**
    * @return int
    */
    public function getProductVersionId(): ?int
    {
        return $this->productVersionId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class NiepanChannelRightsCreateRightsAuxiliaryInfo implements \JsonSerializable
{
    /**
    * 编码
    * @var string
    */
    private $code;

    /**
    * 数量
    * @var int
    */
    private $num;

    /**
    * 类型
    * @var int
    */
    private $type;

    /**
    * 名称
    * @var string
    */
    private $name;

    /**
    * 值
    * @var array
    */
    private $value;

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

    /**
    * @param int $num
    */
    public function setNum(?int $num)
    {
        $this->num = $num;
    }

    /**
    * @return int
    */
    public function getNum(): ?int
    {
        return $this->num;
    }

    /**
    * @param int $type
    */
    public function setType(?int $type)
    {
        $this->type = $type;
    }

    /**
    * @return int
    */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
    * @param string $name
    */
    public function setName(?string $name)
    {
        $this->name = $name;
    }

    /**
    * @return string
    */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
    * @param array $value
    */
    public function setValue(?array $value)
    {
        $this->value = $value;
    }

    /**
    * @return array
    */
    public function getValue(): ?array
    {
        return $this->value;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class NiepanChannelRightsCreateRightsMenuResInfo implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class NiepanChannelRightsCreateRightsStartTime implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

