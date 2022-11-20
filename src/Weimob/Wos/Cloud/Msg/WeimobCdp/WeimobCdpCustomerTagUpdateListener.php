<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCdp;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,260
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobCdpCustomerTagUpdateListener
{
    const topic = 'weimob_cdp.customer.tag';
    const event = 'update';
    const classType = UpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateMessage implements \JsonSerializable
{
    /**
    * 商业操作系统ID
    * @var int
    */
    private $bosId;

    /**
    * 归属节点ID
    * @var int
    */
    private $vid;

    /**
    * 归属节点类型 。1：集团；2：品牌；3：区域；4：部门；5：区域；6：楼层；10：门店；11：网点；100：自提点/站点。
    * @var int
    */
    private $vidType;

    /**
    * 产品实例ID
    * @var int
    */
    private $productInstantId;

    /**
    * wid
    * @var int
    */
    private $wid;

    /**
    * 标签ID
    * @var int
    */
    private $tagId;

    /**
    * 属性ID
    * @var int
    */
    private $attId;

    /**
    * 标签值
    * @var string
    */
    private $attValue;

    /**
    * 标签版本号
    * @var int
    */
    private $tagVersion;

    /**
    * 更新时间
    * @var string
    */
    private $updateTime;

    /**
    * 标签event NO_CHANGE(0,"NO_CHANGE","无变化"),INSERT(1,"INSERT","新增"),UPDATE(2,"UPDATE","编辑"),DELETE(3,"DELETE","删除"),ATT_ADD(4, "INSERT_ATT","新增属性"),ATT_EDIT(5, "UPDATE_ATT","编辑属性"),ATT_DELETE(6, "DELETE_ATT","删除属性")
    * @var string
    */
    private $event;

    /**
    * weimob：微盟；haidin：海鼎
    * @var string
    */
    private $tcode;

    /**
    * 操作来源 1：商家后台；2：openAPI；3：新云APP
    * @var int
    */
    private $operationSource;

    /**
    * 标签来源 0-后台创建， 1-企业微信， 2-开放平台
    * @var int
    */
    private $source;

    /**
    * 标签类型 1:多选项 2:单选项 3:文本 4:日期 5:数值
    * @var int
    */
    private $tagType;

    /**
    * 标签名
    * @var string
    */
    private $tagName;

    /**
    * 是否手工打标，1是，0否
    * @var int
    */
    private $isManual;

    /**
    * 外部标签组id
    * @var string
    */
    private $extTagGId;

    /**
    * 渠道ID
    * @var string
    */
    private $channelId;

    /**
    * 外部标签组id
    * @var string
    */
    private $extTagId;

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
    * @param int $vid
    */
    public function setVid(?int $vid)
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
    * @param int $vidType
    */
    public function setVidType(?int $vidType)
    {
        $this->vidType = $vidType;
    }

    /**
    * @return int
    */
    public function getVidType(): ?int
    {
        return $this->vidType;
    }

    /**
    * @param int $productInstantId
    */
    public function setProductInstantId(?int $productInstantId)
    {
        $this->productInstantId = $productInstantId;
    }

    /**
    * @return int
    */
    public function getProductInstantId(): ?int
    {
        return $this->productInstantId;
    }

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
    * @param int $tagId
    */
    public function setTagId(?int $tagId)
    {
        $this->tagId = $tagId;
    }

    /**
    * @return int
    */
    public function getTagId(): ?int
    {
        return $this->tagId;
    }

    /**
    * @param int $attId
    */
    public function setAttId(?int $attId)
    {
        $this->attId = $attId;
    }

    /**
    * @return int
    */
    public function getAttId(): ?int
    {
        return $this->attId;
    }

    /**
    * @param string $attValue
    */
    public function setAttValue(?string $attValue)
    {
        $this->attValue = $attValue;
    }

    /**
    * @return string
    */
    public function getAttValue(): ?string
    {
        return $this->attValue;
    }

    /**
    * @param int $tagVersion
    */
    public function setTagVersion(?int $tagVersion)
    {
        $this->tagVersion = $tagVersion;
    }

    /**
    * @return int
    */
    public function getTagVersion(): ?int
    {
        return $this->tagVersion;
    }

    /**
    * @param string $updateTime
    */
    public function setUpdateTime(?string $updateTime)
    {
        $this->updateTime = $updateTime;
    }

    /**
    * @return string
    */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
    * @param string $event
    */
    public function setEvent(?string $event)
    {
        $this->event = $event;
    }

    /**
    * @return string
    */
    public function getEvent(): ?string
    {
        return $this->event;
    }

    /**
    * @param string $tcode
    */
    public function setTcode(?string $tcode)
    {
        $this->tcode = $tcode;
    }

    /**
    * @return string
    */
    public function getTcode(): ?string
    {
        return $this->tcode;
    }

    /**
    * @param int $operationSource
    */
    public function setOperationSource(?int $operationSource)
    {
        $this->operationSource = $operationSource;
    }

    /**
    * @return int
    */
    public function getOperationSource(): ?int
    {
        return $this->operationSource;
    }

    /**
    * @param int $source
    */
    public function setSource(?int $source)
    {
        $this->source = $source;
    }

    /**
    * @return int
    */
    public function getSource(): ?int
    {
        return $this->source;
    }

    /**
    * @param int $tagType
    */
    public function setTagType(?int $tagType)
    {
        $this->tagType = $tagType;
    }

    /**
    * @return int
    */
    public function getTagType(): ?int
    {
        return $this->tagType;
    }

    /**
    * @param string $tagName
    */
    public function setTagName(?string $tagName)
    {
        $this->tagName = $tagName;
    }

    /**
    * @return string
    */
    public function getTagName(): ?string
    {
        return $this->tagName;
    }

    /**
    * @param int $isManual
    */
    public function setIsManual(?int $isManual)
    {
        $this->isManual = $isManual;
    }

    /**
    * @return int
    */
    public function getIsManual(): ?int
    {
        return $this->isManual;
    }

    /**
    * @param string $extTagGId
    */
    public function setExtTagGId(?string $extTagGId)
    {
        $this->extTagGId = $extTagGId;
    }

    /**
    * @return string
    */
    public function getExtTagGId(): ?string
    {
        return $this->extTagGId;
    }

    /**
    * @param string $channelId
    */
    public function setChannelId(?string $channelId)
    {
        $this->channelId = $channelId;
    }

    /**
    * @return string
    */
    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    /**
    * @param string $extTagId
    */
    public function setExtTagId(?string $extTagId)
    {
        $this->extTagId = $extTagId;
    }

    /**
    * @return string
    */
    public function getExtTagId(): ?string
    {
        return $this->extTagId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

