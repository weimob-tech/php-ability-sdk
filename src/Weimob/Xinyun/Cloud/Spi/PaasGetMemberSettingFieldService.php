<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,563
 * @author weimobcloud
 * @create 2023-5-29
 */
interface PaasGetMemberSettingFieldService
{
    const specType = 'xinyun';

    public function execute(SGetMemberSettingFieldRequest $request) : SGetMemberSettingFieldResponse;
}

class SGetMemberSettingFieldRequest implements \JsonSerializable
{
    /**
    * 商业操作系统ID（解决方案体系）
    * @var int
    */
    private $pid;

    /**
    * 签名
    * @var string
    */
    private $sign;

    /**
    * 发送方时间戳，验签的时候使用
    * @var string
    */
    private $timestamp;

    /**
    * @var SGetMemberSettingFieldParam
    */
    private $params;

    /**
    * 商业操作系统ID（产品方案体系）
    * @var int
    */
    private $bosId;

    /**
    * actionKey
    * @var string
    */
    private $actionKey;

    /**
    * 组织结构节点ID
    * @var int
    */
    private $vid;

    /**
    * 组织结构节点类型
    * @var int
    */
    private $vType;

    /**
    *  源产品id
    * @var int
    */
    private $originProductId;

    /**
    * 目标产品id
    * @var int
    */
    private $targetProductId;

    /**
    * 源代产品实例id
    * @var int
    */
    private $originProductInstanceId;

    /**
    * 目标产品实例id
    * @var int
    */
    private $targetProductInstanceId;

    /**
    * 功能集ID
    * @var int
    */
    private $functionId;

    /**
    * @return int
    */
    public function getPid(): ?int
    {
        return $this->pid;
    }

    /**
    * @param int $pid
    */
    public function setPid(?int $pid): void
    {
        $this->pid = $pid;
    }

    /**
    * @return string
    */
    public function getSign(): ?string
    {
        return $this->sign;
    }

    /**
    * @param string $sign
    */
    public function setSign(?string $sign): void
    {
        $this->sign = $sign;
    }

    /**
    * @return string
    */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }

    /**
    * @param string $timestamp
    */
    public function setTimestamp(?string $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
    * @param SGetMemberSettingFieldParam $param
    */
    public function setParams(?SGetMemberSettingFieldParam $param): void
    {
        $this->params = $param;
    }

    /**
    * @return SGetMemberSettingFieldParam
    */
    public function getParams(): ?SGetMemberSettingFieldParam
    {
        return $this->params;
    }

    /**
    * @return int
    */
    public function getBosId(): ?int
    {
        return $this->bosId;
    }

    /**
    * @param int $bosId
    */
    public function setBosId(?int $bosId): void
    {
        $this->bosId = $bosId;
    }

    /**
    * @return string
    */
    public function getActionKey(): ?string
    {
        return $this->actionKey;
    }

    /**
    * @param string $actionKey
    */
    public function setActionKey(?string $actionKey): void
    {
        $this->actionKey = $actionKey;
    }

    /**
    * @return int
    */
    public function getVid(): ?int
    {
        return $this->vid;
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
    public function getVType(): ?int
    {
        return $this->vType;
    }

    /**
    * @param int $vType
    */
    public function setVType(?int $vType): void
    {
        $this->vType = $vType;
    }

    /**
    * @return int
    */
    public function getOriginProductId(): ?int
    {
        return $this->originProductId;
    }

    /**
    * @param int $originProductId
    */
    public function setOriginProductId(?int $originProductId): void
    {
        $this->originProductId = $originProductId;
    }

    /**
    * @return int
    */
    public function getTargetProductId(): ?int
    {
        return $this->targetProductId;
    }

    /**
    * @param int $targetProductId
    */
    public function setTargetProductId(?int $targetProductId): void
    {
        $this->targetProductId = $targetProductId;
    }

    /**
    * @return int
    */
    public function getOriginProductInstanceId(): ?int
    {
        return $this->originProductInstanceId;
    }

    /**
    * @param int $originProductInstanceId
    */
    public function setOriginProductInstanceId(?int $originProductInstanceId): void
    {
        $this->originProductInstanceId = $originProductInstanceId;
    }

    /**
    * @return int
    */
    public function getTargetProductInstanceId(): ?int
    {
        return $this->targetProductInstanceId;
    }

    /**
    * @param int $targetProductInstanceId
    */
    public function setTargetProductInstanceId(?int $targetProductInstanceId): void
    {
        $this->targetProductInstanceId = $targetProductInstanceId;
    }

    /**
    * @return int
    */
    public function getFunctionId(): ?int
    {
        return $this->functionId;
    }

    /**
    * @param int $functionId
    */
    public function setFunctionId(?int $functionId): void
    {
        $this->functionId = $functionId;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class SGetMemberSettingFieldResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SGetMemberSettingFieldData
     */
    private $data;

    /**
     * @return int
     */
    public function getCode(): ?PaasResponseCode
    {
        return $this->code;
    }

    /**
     * @param PaasResponseCode $code
     */
    public function setCode(?PaasResponseCode $code): void
    {
        $this->code = $code;
    }

    /**
     * @return SGetMemberSettingFieldData
     */
    public function getData(): ?SGetMemberSettingFieldData
    {
        return $this->data;
    }

    /**
     * @param SGetMemberSettingFieldData $data
     */
    public function setData(?SGetMemberSettingFieldData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SGetMemberSettingFieldData implements \JsonSerializable
{
    /**
     * 规则列表
     * @var array
     */
    private $fields;

    /**
     * @param array $fields
     */
    public function setFields(?array $fields): void
    {
        $this->fields = $fields;
    }

    /**
     * @return array
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SGetMemberSettingFieldDataFields implements \JsonSerializable
{
    /**
     * 字段名，系统定义字段见下方枚举
     * @var string
     */
    private $name;

    /**
     * 提示文案
     * @var string
     */
    private $tips;

    /**
     * 是否必填
     * @var bool
     */
    private $required;

    /**
     * 客户资料字段类型
     * @var int
     */
    private $type;

    /**
     * 自定义富文本的字段类型
     * @var int
     */
    private $fieldType;

    /**
     * 自定义富文本可选类型
     * @var array
     */
    private $values;

    /**
     * 是否可更改
     * @var bool
     */
    private $canModify;

    /**
     * 是否启用
     * @var bool
     */
    private $enabled;

    /**
     * 排序字段
     * @var int
     */
    private $seq;

    /**
     * 展示字段名，如果没有默认使用name展示
     * @var string
     */
    private $showName;

    /**
     * @param string $name
     */
    public function setName(?string $name): void
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
     * @param string $tips
     */
    public function setTips(?string $tips): void
    {
        $this->tips = $tips;
    }

    /**
     * @return string
     */
    public function getTips(): ?string
    {
        return $this->tips;
    }

    /**
     * @param bool $required
     */
    public function setRequired(?bool $required): void
    {
        $this->required = $required;
    }

    /**
     * @return bool
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }

    /**
     * @param int $type
     */
    public function setType(?int $type): void
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
     * @param int $fieldType
     */
    public function setFieldType(?int $fieldType): void
    {
        $this->fieldType = $fieldType;
    }

    /**
     * @return int
     */
    public function getFieldType(): ?int
    {
        return $this->fieldType;
    }

    /**
     * @param array $values
     */
    public function setValues(?array $values): void
    {
        $this->values = $values;
    }

    /**
     * @return array
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * @param bool $canModify
     */
    public function setCanModify(?bool $canModify): void
    {
        $this->canModify = $canModify;
    }

    /**
     * @return bool
     */
    public function getCanModify(): ?bool
    {
        return $this->canModify;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * @return bool
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * @param int $seq
     */
    public function setSeq(?int $seq): void
    {
        $this->seq = $seq;
    }

    /**
     * @return int
     */
    public function getSeq(): ?int
    {
        return $this->seq;
    }

    /**
     * @param string $showName
     */
    public function setShowName(?string $showName): void
    {
        $this->showName = $showName;
    }

    /**
     * @return string
     */
    public function getShowName(): ?string
    {
        return $this->showName;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

