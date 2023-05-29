<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,395
 * @author weimobcloud
 * @create 2023-5-29
 */
interface PaasGetCardRanksService
{
    const specType = 'xinyun';

    public function execute(SGetCardRanksRequest $request) : SGetCardRanksResponse;
}

class SGetCardRanksRequest implements \JsonSerializable
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
    * @var SGetCardRanksParam
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
    * @param SGetCardRanksParam $param
    */
    public function setParams(?SGetCardRanksParam $param): void
    {
        $this->params = $param;
    }

    /**
    * @return SGetCardRanksParam
    */
    public function getParams(): ?SGetCardRanksParam
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


class SGetCardRanksResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SGetCardRanksData
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
     * @return SGetCardRanksData
     */
    public function getData(): ?SGetCardRanksData
    {
        return $this->data;
    }

    /**
     * @param SGetCardRanksData $data
     */
    public function setData(?SGetCardRanksData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SGetCardRanksData implements \JsonSerializable
{
    /**
     * 多卡等级列表
     * @var array
     */
    private $itemList;

    /**
     * @param array $itemList
     */
    public function setItemList(?array $itemList): void
    {
        $this->itemList = $itemList;
    }

    /**
     * @return array
     */
    public function getItemList(): ?array
    {
        return $this->itemList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SGetCardRanksDataItemList implements \JsonSerializable
{
    /**
     * 等级列表
     * @var array
     */
    private $ruleList;

    /**
     * 会员卡模板id
     * @var int
     */
    private $memberCardTemplateId;

    /**
     * @param array $ruleList
     */
    public function setRuleList(?array $ruleList): void
    {
        $this->ruleList = $ruleList;
    }

    /**
     * @return array
     */
    public function getRuleList(): ?array
    {
        return $this->ruleList;
    }

    /**
     * @param int $memberCardTemplateId
     */
    public function setMemberCardTemplateId(?int $memberCardTemplateId): void
    {
        $this->memberCardTemplateId = $memberCardTemplateId;
    }

    /**
     * @return int
     */
    public function getMemberCardTemplateId(): ?int
    {
        return $this->memberCardTemplateId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SGetCardRanksDataRuleList implements \JsonSerializable
{
    /**
     * 等级id
     * @var int
     */
    private $rankId;

    /**
     * 等级名称
     * @var string
     */
    private $rankName;

    /**
     * 成长值上限
     * @var int
     */
    private $rankUpLimit;

    /**
     * 成长值的下限
     * @var int
     */
    private $rankDownLimit;

    /**
     * 等级折扣
     * @var int
     */
    private $rankDiscount;

    /**
     * @param int $rankId
     */
    public function setRankId(?int $rankId): void
    {
        $this->rankId = $rankId;
    }

    /**
     * @return int
     */
    public function getRankId(): ?int
    {
        return $this->rankId;
    }

    /**
     * @param string $rankName
     */
    public function setRankName(?string $rankName): void
    {
        $this->rankName = $rankName;
    }

    /**
     * @return string
     */
    public function getRankName(): ?string
    {
        return $this->rankName;
    }

    /**
     * @param int $rankUpLimit
     */
    public function setRankUpLimit(?int $rankUpLimit): void
    {
        $this->rankUpLimit = $rankUpLimit;
    }

    /**
     * @return int
     */
    public function getRankUpLimit(): ?int
    {
        return $this->rankUpLimit;
    }

    /**
     * @param int $rankDownLimit
     */
    public function setRankDownLimit(?int $rankDownLimit): void
    {
        $this->rankDownLimit = $rankDownLimit;
    }

    /**
     * @return int
     */
    public function getRankDownLimit(): ?int
    {
        return $this->rankDownLimit;
    }

    /**
     * @param int $rankDiscount
     */
    public function setRankDiscount(?int $rankDiscount): void
    {
        $this->rankDiscount = $rankDiscount;
    }

    /**
     * @return int
     */
    public function getRankDiscount(): ?int
    {
        return $this->rankDiscount;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

