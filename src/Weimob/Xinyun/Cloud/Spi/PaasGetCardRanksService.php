<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,395
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasGetCardRanksService
{
    const specType = 'xinyun';

    public function execute(SGetCardRanksRequest $request) : SGetCardRanksResponse;
}

class SGetCardRanksRequest implements \JsonSerializable
{
    /**
    * 商业操作系统ID
    * @var int
    */
    private $bosId;

    /**
    * 全局唯一的扩展点
    * @var string
    */
    private $actionKey;

    /**
    * 功能集ID
    * @var int
    */
    private $functionId;

    /**
    * 组织结构节点ID
    * @var int
    */
    private $vid;

    /**
    * 	组织结构节点类型
    * @var int
    */
    private $vType;

    /**
    * @var SGetCardRanksParam
    */
    private $params;

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
    * @param string $actionKey
    */
    public function setActionKey(?string $actionKey): void
    {
        $this->actionKey = $actionKey;
    }

    /**
    * @return string
    */
    public function getActionKey(): ?string
    {
        return $this->actionKey;
    }

    /**
    * @param int $functionId
    */
    public function setFunctionId(?int $functionId): void
    {
        $this->functionId = $functionId;
    }

    /**
    * @return int
    */
    public function getFunctionId(): ?int
    {
        return $this->functionId;
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
    * @param int $vType
    */
    public function setVType(?int $vType): void
    {
        $this->vType = $vType;
    }

    /**
    * @return int
    */
    public function getVType(): ?int
    {
        return $this->vType;
    }

    /**
    * @param SGetCardRanksParam $param
    */
    public function setParam(?SGetCardRanksParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return SGetCardRanksParam
    */
    public function getParam(): ?SGetCardRanksParam
    {
        return $this->param;
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
    public function setItemList(?array $itemList)
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
    public function setRuleList(?array $ruleList)
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
    public function setMemberCardTemplateId(?int $memberCardTemplateId)
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
    public function setRankId(?int $rankId)
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
    public function setRankName(?string $rankName)
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
    public function setRankUpLimit(?int $rankUpLimit)
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
    public function setRankDownLimit(?int $rankDownLimit)
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
    public function setRankDiscount(?int $rankDiscount)
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

