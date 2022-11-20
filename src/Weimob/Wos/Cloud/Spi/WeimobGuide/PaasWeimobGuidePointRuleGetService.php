<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 925
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobGuidePointRuleGetService
{
    const specType = 'wos';

    public function invoke(WeimobGuidePointRuleGetRequest $request) : WeimobGuidePointRuleGetResponse;
}

class WeimobGuidePointRuleGetRequest implements \JsonSerializable
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
    * @var WeimobGuidePointRuleGetParam
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
    * @param WeimobGuidePointRuleGetParam $param
    */
    public function setParam(?WeimobGuidePointRuleGetParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobGuidePointRuleGetParam
    */
    public function getParam(): ?WeimobGuidePointRuleGetParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuidePointRuleGetParam implements \JsonSerializable
{
    /**
    * 积分方案规则id
    * @var int
    */
    private $pointPlanId;

    /**
    * basicRule(基础规则)
pointUnit(抵扣价值)
deductRule(抵扣规则)
expiryRule(有效期规则)
    * @var string
    */
    private $fields;

    /**
    * @param int $pointPlanId
    */
    public function setPointPlanId(?int $pointPlanId)
    {
        $this->pointPlanId = $pointPlanId;
    }

    /**
    * @return int
    */
    public function getPointPlanId(): ?int
    {
        return $this->pointPlanId;
    }

    /**
    * @param string $fields
    */
    public function setFields(?string $fields)
    {
        $this->fields = $fields;
    }

    /**
    * @return string
    */
    public function getFields(): ?string
    {
        return $this->fields;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuidePointRuleGetResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobGuidePointRuleGetData
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
    * @return WeimobGuidePointRuleGetData
    */
    public function getData(): ?WeimobGuidePointRuleGetData
    {
        return $this->data;
    }

    /**
    * @param WeimobGuidePointRuleGetData $data
    */
    public function setData(?WeimobGuidePointRuleGetData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuidePointRuleGetData implements \JsonSerializable
{
    /**
    * 有效期规则
    * @var WeimobGuidePointRuleGetDataExpiryRule
    */
    private $expiryRule;

    /**
    * 抵扣规则
    * @var WeimobGuidePointRuleGetDataDeductRule
    */
    private $deductRule;

    /**
    * 抵扣价值
    * @var WeimobGuidePointRuleGetDataPointUnit
    */
    private $pointUnit;

    /**
    * 基础规则
    * @var WeimobGuidePointRuleGetDataBasicRule
    */
    private $basicRule;

    /**
    * 积分方案规则id
    * @var int
    */
    private $pointPlanId;

    /**
    * 规则名称:基础规则, 抵扣价值,抵扣规则,有效期规则
    * @var string
    */
    private $pointPlanName;

    /**
    * 使用须知
    * @var string
    */
    private $instruction;

    /**
    * @param WeimobGuidePointRuleGetDataExpiryRule $expiryRule
    */
    public function setExpiryRule(?WeimobGuidePointRuleGetDataExpiryRule $expiryRule)
    {
        $this->expiryRule = $expiryRule;
    }

    /**
    * @return WeimobGuidePointRuleGetDataExpiryRule
    */
    public function getExpiryRule(): ?WeimobGuidePointRuleGetDataExpiryRule
    {
        return $this->expiryRule;
    }

    /**
    * @param WeimobGuidePointRuleGetDataDeductRule $deductRule
    */
    public function setDeductRule(?WeimobGuidePointRuleGetDataDeductRule $deductRule)
    {
        $this->deductRule = $deductRule;
    }

    /**
    * @return WeimobGuidePointRuleGetDataDeductRule
    */
    public function getDeductRule(): ?WeimobGuidePointRuleGetDataDeductRule
    {
        return $this->deductRule;
    }

    /**
    * @param WeimobGuidePointRuleGetDataPointUnit $pointUnit
    */
    public function setPointUnit(?WeimobGuidePointRuleGetDataPointUnit $pointUnit)
    {
        $this->pointUnit = $pointUnit;
    }

    /**
    * @return WeimobGuidePointRuleGetDataPointUnit
    */
    public function getPointUnit(): ?WeimobGuidePointRuleGetDataPointUnit
    {
        return $this->pointUnit;
    }

    /**
    * @param WeimobGuidePointRuleGetDataBasicRule $basicRule
    */
    public function setBasicRule(?WeimobGuidePointRuleGetDataBasicRule $basicRule)
    {
        $this->basicRule = $basicRule;
    }

    /**
    * @return WeimobGuidePointRuleGetDataBasicRule
    */
    public function getBasicRule(): ?WeimobGuidePointRuleGetDataBasicRule
    {
        return $this->basicRule;
    }

    /**
    * @param int $pointPlanId
    */
    public function setPointPlanId(?int $pointPlanId)
    {
        $this->pointPlanId = $pointPlanId;
    }

    /**
    * @return int
    */
    public function getPointPlanId(): ?int
    {
        return $this->pointPlanId;
    }

    /**
    * @param string $pointPlanName
    */
    public function setPointPlanName(?string $pointPlanName)
    {
        $this->pointPlanName = $pointPlanName;
    }

    /**
    * @return string
    */
    public function getPointPlanName(): ?string
    {
        return $this->pointPlanName;
    }

    /**
    * @param string $instruction
    */
    public function setInstruction(?string $instruction)
    {
        $this->instruction = $instruction;
    }

    /**
    * @return string
    */
    public function getInstruction(): ?string
    {
        return $this->instruction;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuidePointRuleGetDataExpiryRule implements \JsonSerializable
{
    /**
    * 过期类型
    * @var string
    */
    private $type;

    /**
    * 年
    * @var int
    */
    private $year;

    /**
    * 月
    * @var int
    */
    private $month;

    /**
    * 日
    * @var int
    */
    private $day;

    /**
    * @param string $type
    */
    public function setType(?string $type)
    {
        $this->type = $type;
    }

    /**
    * @return string
    */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
    * @param int $year
    */
    public function setYear(?int $year)
    {
        $this->year = $year;
    }

    /**
    * @return int
    */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
    * @param int $month
    */
    public function setMonth(?int $month)
    {
        $this->month = $month;
    }

    /**
    * @return int
    */
    public function getMonth(): ?int
    {
        return $this->month;
    }

    /**
    * @param int $day
    */
    public function setDay(?int $day)
    {
        $this->day = $day;
    }

    /**
    * @return int
    */
    public function getDay(): ?int
    {
        return $this->day;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuidePointRuleGetDataDeductRule implements \JsonSerializable
{
    /**
    * 抵扣项目（1：整单抵扣；2：商品余额）
    * @var int
    */
    private $deductItem;

    /**
    * 抵扣项目-商品金额是否参与抵扣（0否，1是）
    * @var int
    */
    private $deductGoodsItem;

    /**
    * 抵扣项目-运费是否参与抵扣（0否，1是）
    * @var int
    */
    private $freight;

    /**
    * 使用商品 1-全部 2-指定商品 3-指定类目 4-指定分组
    * @var int
    */
    private $applicableScope;

    /**
    * 是否排除商品（0-否 1-是）
    * @var int
    */
    private $isExcludeGoods;

    /**
    * 使用校验（0：关闭，1：开启）
    * @var int
    */
    private $isOpenVerify;

    /**
    * C端默认校验状态（0：不校验，1：校验）
    * @var int
    */
    private $defaultVerify;

    /**
    * 默认使用状态（0：关闭，1：开启）
    * @var int
    */
    private $defaultUseFlag;

    /**
    * 最少抵扣积分开关（0关闭，1开启）
    * @var int
    */
    private $minDeductPointRequire;

    /**
    * 最大抵扣积分开关（0关闭，1开启）
    * @var int
    */
    private $maxDeductPointRequire;

    /**
    * 抵扣项目比例开关（0关闭，1开启）
    * @var int
    */
    private $deductItemAmtRatioRequire;

    /**
    * 适用商品id列表
    * @var array
    */
    private $applicableGoods;

    /**
    * 最少抵扣积分
    * @var int
    */
    private $minDeductPoint;

    /**
    * 最大抵扣积分
    * @var int
    */
    private $maxDeductPoint;

    /**
    * 抵扣项目比例
    * @var int
    */
    private $deductItemAmtRatio;

    /**
    * 排除的商品ID列表
    * @var array
    */
    private $excludeGoods;

    /**
    * @param int $deductItem
    */
    public function setDeductItem(?int $deductItem)
    {
        $this->deductItem = $deductItem;
    }

    /**
    * @return int
    */
    public function getDeductItem(): ?int
    {
        return $this->deductItem;
    }

    /**
    * @param int $deductGoodsItem
    */
    public function setDeductGoodsItem(?int $deductGoodsItem)
    {
        $this->deductGoodsItem = $deductGoodsItem;
    }

    /**
    * @return int
    */
    public function getDeductGoodsItem(): ?int
    {
        return $this->deductGoodsItem;
    }

    /**
    * @param int $freight
    */
    public function setFreight(?int $freight)
    {
        $this->freight = $freight;
    }

    /**
    * @return int
    */
    public function getFreight(): ?int
    {
        return $this->freight;
    }

    /**
    * @param int $applicableScope
    */
    public function setApplicableScope(?int $applicableScope)
    {
        $this->applicableScope = $applicableScope;
    }

    /**
    * @return int
    */
    public function getApplicableScope(): ?int
    {
        return $this->applicableScope;
    }

    /**
    * @param int $isExcludeGoods
    */
    public function setIsExcludeGoods(?int $isExcludeGoods)
    {
        $this->isExcludeGoods = $isExcludeGoods;
    }

    /**
    * @return int
    */
    public function getIsExcludeGoods(): ?int
    {
        return $this->isExcludeGoods;
    }

    /**
    * @param int $isOpenVerify
    */
    public function setIsOpenVerify(?int $isOpenVerify)
    {
        $this->isOpenVerify = $isOpenVerify;
    }

    /**
    * @return int
    */
    public function getIsOpenVerify(): ?int
    {
        return $this->isOpenVerify;
    }

    /**
    * @param int $defaultVerify
    */
    public function setDefaultVerify(?int $defaultVerify)
    {
        $this->defaultVerify = $defaultVerify;
    }

    /**
    * @return int
    */
    public function getDefaultVerify(): ?int
    {
        return $this->defaultVerify;
    }

    /**
    * @param int $defaultUseFlag
    */
    public function setDefaultUseFlag(?int $defaultUseFlag)
    {
        $this->defaultUseFlag = $defaultUseFlag;
    }

    /**
    * @return int
    */
    public function getDefaultUseFlag(): ?int
    {
        return $this->defaultUseFlag;
    }

    /**
    * @param int $minDeductPointRequire
    */
    public function setMinDeductPointRequire(?int $minDeductPointRequire)
    {
        $this->minDeductPointRequire = $minDeductPointRequire;
    }

    /**
    * @return int
    */
    public function getMinDeductPointRequire(): ?int
    {
        return $this->minDeductPointRequire;
    }

    /**
    * @param int $maxDeductPointRequire
    */
    public function setMaxDeductPointRequire(?int $maxDeductPointRequire)
    {
        $this->maxDeductPointRequire = $maxDeductPointRequire;
    }

    /**
    * @return int
    */
    public function getMaxDeductPointRequire(): ?int
    {
        return $this->maxDeductPointRequire;
    }

    /**
    * @param int $deductItemAmtRatioRequire
    */
    public function setDeductItemAmtRatioRequire(?int $deductItemAmtRatioRequire)
    {
        $this->deductItemAmtRatioRequire = $deductItemAmtRatioRequire;
    }

    /**
    * @return int
    */
    public function getDeductItemAmtRatioRequire(): ?int
    {
        return $this->deductItemAmtRatioRequire;
    }

    /**
    * @param array $applicableGoods
    */
    public function setApplicableGoods(?array $applicableGoods)
    {
        $this->applicableGoods = $applicableGoods;
    }

    /**
    * @return array
    */
    public function getApplicableGoods(): ?array
    {
        return $this->applicableGoods;
    }

    /**
    * @param int $minDeductPoint
    */
    public function setMinDeductPoint(?int $minDeductPoint)
    {
        $this->minDeductPoint = $minDeductPoint;
    }

    /**
    * @return int
    */
    public function getMinDeductPoint(): ?int
    {
        return $this->minDeductPoint;
    }

    /**
    * @param int $maxDeductPoint
    */
    public function setMaxDeductPoint(?int $maxDeductPoint)
    {
        $this->maxDeductPoint = $maxDeductPoint;
    }

    /**
    * @return int
    */
    public function getMaxDeductPoint(): ?int
    {
        return $this->maxDeductPoint;
    }

    /**
    * @param int $deductItemAmtRatio
    */
    public function setDeductItemAmtRatio(?int $deductItemAmtRatio)
    {
        $this->deductItemAmtRatio = $deductItemAmtRatio;
    }

    /**
    * @return int
    */
    public function getDeductItemAmtRatio(): ?int
    {
        return $this->deductItemAmtRatio;
    }

    /**
    * @param array $excludeGoods
    */
    public function setExcludeGoods(?array $excludeGoods)
    {
        $this->excludeGoods = $excludeGoods;
    }

    /**
    * @return array
    */
    public function getExcludeGoods(): ?array
    {
        return $this->excludeGoods;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuidePointRuleGetDataPointUnit implements \JsonSerializable
{
    /**
    * 最小抵扣单位
    * @var int
    */
    private $unit;

    /**
    * 每单位抵扣金额（元）
    * @var int
    */
    private $unitAmount;

    /**
    * @param int $unit
    */
    public function setUnit(?int $unit)
    {
        $this->unit = $unit;
    }

    /**
    * @return int
    */
    public function getUnit(): ?int
    {
        return $this->unit;
    }

    /**
    * @param int $unitAmount
    */
    public function setUnitAmount(?int $unitAmount)
    {
        $this->unitAmount = $unitAmount;
    }

    /**
    * @return int
    */
    public function getUnitAmount(): ?int
    {
        return $this->unitAmount;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuidePointRuleGetDataBasicRule implements \JsonSerializable
{
    /**
    * 所属节点
    * @var int
    */
    private $sourceVid;

    /**
    * 产品实例ID
    * @var int
    */
    private $productInstanceId;

    /**
    * 可用人群 (1:会员，2:客户)
    * @var int
    */
    private $availableCrowd;

    /**
    * 最后更新时间
    * @var string
    */
    private $updateTime;

    /**
    * @param int $sourceVid
    */
    public function setSourceVid(?int $sourceVid)
    {
        $this->sourceVid = $sourceVid;
    }

    /**
    * @return int
    */
    public function getSourceVid(): ?int
    {
        return $this->sourceVid;
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
    * @param int $availableCrowd
    */
    public function setAvailableCrowd(?int $availableCrowd)
    {
        $this->availableCrowd = $availableCrowd;
    }

    /**
    * @return int
    */
    public function getAvailableCrowd(): ?int
    {
        return $this->availableCrowd;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

