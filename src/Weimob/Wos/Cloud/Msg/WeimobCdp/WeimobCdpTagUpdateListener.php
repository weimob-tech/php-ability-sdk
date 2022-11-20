<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCdp;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,266
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface WeimobCdpTagUpdateListener
{
    const topic = 'weimob_cdp.tag';
    const event = 'update';
    const classType = UpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateMessage implements \JsonSerializable
{
    /**
     * 属性列表
     * @var array
     */
    private $openAttrInfoVos;

    /**
     * 产品实例ID
     * @var int
     */
    private $productInstantId;

    /**
     * 标签ID
     * @var int
     */
    private $tagId;

    /**
     * 标签类型 MULTIPLE_CHOICE(1,"多选项"),SINGLE_CHOICE(2,"单选项"),TEXT(3,"文本"),DATE(4,"日期"),NUMERICAL(5,"数值")
     * @var int
     */
    private $tagType;

    /**
     * 标签名称
     * @var string
     */
    private $tagName;

    /**
     * 标签颜色
     * @var string
     */
    private $tagColor;

    /**
     * 标签属性类型 MULTIPLE_CHOICE(1,"多选项"),SINGLE_CHOICE(2,"单选项"),TEXT(3,"文本"),DATE(4,"日期"),NUMERICAL(5,"数值")
     * @var int
     */
    private $attType;

    /**
     * 标签来源
     * @var string
     */
    private $tagSource;

    /**
     * 标签更新时间
     * @var string
     */
    private $tagDataUpdateTime;

    /**
     * viewFilterJson
     * @var string
     */
    private $bizViewFilterJson;

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
     * weimob：微盟；haidin：海鼎
     * @var string
     */
    private $tcode;

    /**
     * 标签event NO_CHANGE(0,"NO_CHANGE","无变化"),INSERT(1,"INSERT","新增"),UPDATE(2,"UPDATE","编辑"),DELETE(3,"DELETE","删除"),ATT_ADD(4, "INSERT_ATT","新增属性"),ATT_EDIT(5, "UPDATE_ATT","编辑属性"),ATT_DELETE(6, "DELETE_ATT","删除属性")
     * @var string
     */
    private $event;

    /**
     * 操作来源。1：商家后台；2：openAPI；3：新云APP
     * @var int
     */
    private $operationSource;

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
     * 归属节点类型 。1：集团；2：品牌；3：区域；4：部门；5：区域；6：楼层；10：门店；11：网点；100：自提点/站点
     * @var int
     */
    private $vidType;

    /**
     * @param array $openAttrInfoVos
     */
    public function setOpenAttrInfoVos(?array $openAttrInfoVos): void
    {
        $this->openAttrInfoVos = $openAttrInfoVos;
    }

    /**
     * @return array
     */
    public function getOpenAttrInfoVos(): ?array
    {
        return $this->openAttrInfoVos;
    }

    /**
     * @param int $productInstantId
     */
    public function setProductInstantId(?int $productInstantId): void
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
     * @param int $tagId
     */
    public function setTagId(?int $tagId): void
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
     * @param int $tagType
     */
    public function setTagType(?int $tagType): void
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
    public function setTagName(?string $tagName): void
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
     * @param string $tagColor
     */
    public function setTagColor(?string $tagColor): void
    {
        $this->tagColor = $tagColor;
    }

    /**
     * @return string
     */
    public function getTagColor(): ?string
    {
        return $this->tagColor;
    }

    /**
     * @param int $attType
     */
    public function setAttType(?int $attType): void
    {
        $this->attType = $attType;
    }

    /**
     * @return int
     */
    public function getAttType(): ?int
    {
        return $this->attType;
    }

    /**
     * @param string $tagSource
     */
    public function setTagSource(?string $tagSource): void
    {
        $this->tagSource = $tagSource;
    }

    /**
     * @return string
     */
    public function getTagSource(): ?string
    {
        return $this->tagSource;
    }

    /**
     * @param string $tagDataUpdateTime
     */
    public function setTagDataUpdateTime(?string $tagDataUpdateTime): void
    {
        $this->tagDataUpdateTime = $tagDataUpdateTime;
    }

    /**
     * @return string
     */
    public function getTagDataUpdateTime(): ?string
    {
        return $this->tagDataUpdateTime;
    }

    /**
     * @param string $bizViewFilterJson
     */
    public function setBizViewFilterJson(?string $bizViewFilterJson): void
    {
        $this->bizViewFilterJson = $bizViewFilterJson;
    }

    /**
     * @return string
     */
    public function getBizViewFilterJson(): ?string
    {
        return $this->bizViewFilterJson;
    }

    /**
     * @param int $tagVersion
     */
    public function setTagVersion(?int $tagVersion): void
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
    public function setUpdateTime(?string $updateTime): void
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
     * @param string $tcode
     */
    public function setTcode(?string $tcode): void
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
     * @param string $event
     */
    public function setEvent(?string $event): void
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
     * @param int $operationSource
     */
    public function setOperationSource(?int $operationSource): void
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
     * @param string $extTagGId
     */
    public function setExtTagGId(?string $extTagGId): void
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
    public function setChannelId(?string $channelId): void
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
     * @param int $bosId
     */
    public function setBosId(?int $bosId): void
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
     * @param int $vidType
     */
    public function setVidType(?int $vidType): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCdpTagUpdateOpenAttrInfoVos implements \JsonSerializable
{
    /**
     * NO_CHANGE(0,"NO_CHANGE","无变化"),INSERT(1,"INSERT","新增"),UPDATE(2,"UPDATE","编辑"),ATT_ADD(4, "INSERT_ATT","新增属性"),ATT_EDIT(5, "UPDATE_ATT","编辑属性"),ATT_DELETE(6, "DELETE_ATT","删除属性");
     * @var string
     */
    private $attrEvent;

    /**
     * 外部标签ID
     * @var string
     */
    private $extTagId;

    /**
     * @param string $attrEvent
     */
    public function setAttrEvent(?string $attrEvent): void
    {
        $this->attrEvent = $attrEvent;
    }

    /**
     * @return string
     */
    public function getAttrEvent(): ?string
    {
        return $this->attrEvent;
    }

    /**
     * @param string $extTagId
     */
    public function setExtTagId(?string $extTagId): void
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

