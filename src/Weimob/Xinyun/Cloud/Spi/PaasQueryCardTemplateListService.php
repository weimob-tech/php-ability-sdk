<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,351
 * @author weimobcloud
 * @create 2023-5-29
 */
interface PaasQueryCardTemplateListService
{
    const specType = 'xinyun';

    public function execute(SQueryCardTemplateListRequest $request) : SQueryCardTemplateListResponse;
}

class SQueryCardTemplateListRequest implements \JsonSerializable
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
    * @var SQueryCardTemplateListParam
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
    * @param SQueryCardTemplateListParam $param
    */
    public function setParams(?SQueryCardTemplateListParam $param): void
    {
        $this->params = $param;
    }

    /**
    * @return SQueryCardTemplateListParam
    */
    public function getParams(): ?SQueryCardTemplateListParam
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


class SQueryCardTemplateListResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SQueryCardTemplateListData
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
     * @return SQueryCardTemplateListData
     */
    public function getData(): ?SQueryCardTemplateListData
    {
        return $this->data;
    }

    /**
     * @param SQueryCardTemplateListData $data
     */
    public function setData(?SQueryCardTemplateListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SQueryCardTemplateListData implements \JsonSerializable
{
    /**
     * 会员卡模板信息
     * @var array
     */
    private $items;

    /**
     * 卡模板基本信息
     * @var SQueryCardTemplateListDataBaseInfo
     */
    private $baseInfo;

    /**
     * 总页数
     * @var int
     */
    private $totalPage;

    /**
     * 总条数
     * @var int
     */
    private $totalCount;

    /**
     * 当前页数
     * @var int
     */
    private $currentPage;

    /**
     * 商户id
     * @var int
     */
    private $pid;

    /**
     * @param array $items
     */
    public function setItems(?array $items): void
    {
        $this->items = $items;
    }

    /**
     * @return array
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param SQueryCardTemplateListDataBaseInfo $baseInfo
     */
    public function setBaseInfo(?SQueryCardTemplateListDataBaseInfo $baseInfo): void
    {
        $this->baseInfo = $baseInfo;
    }

    /**
     * @return SQueryCardTemplateListDataBaseInfo
     */
    public function getBaseInfo(): ?SQueryCardTemplateListDataBaseInfo
    {
        return $this->baseInfo;
    }

    /**
     * @param int $totalPage
     */
    public function setTotalPage(?int $totalPage): void
    {
        $this->totalPage = $totalPage;
    }

    /**
     * @return int
     */
    public function getTotalPage(): ?int
    {
        return $this->totalPage;
    }

    /**
     * @param int $totalCount
     */
    public function setTotalCount(?int $totalCount): void
    {
        $this->totalCount = $totalCount;
    }

    /**
     * @return int
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * @param int $currentPage
     */
    public function setCurrentPage(?int $currentPage): void
    {
        $this->currentPage = $currentPage;
    }

    /**
     * @return int
     */
    public function getCurrentPage(): ?int
    {
        return $this->currentPage;
    }

    /**
     * @param int $pid
     */
    public function setPid(?int $pid): void
    {
        $this->pid = $pid;
    }

    /**
     * @return int
     */
    public function getPid(): ?int
    {
        return $this->pid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SQueryCardTemplateListDataBaseInfo implements \JsonSerializable
{
    /**
     * 是否设置该会员卡模板为默认卡模版true：是false：否
     * @var bool
     */
    private $isDefault;

    /**
     * 会员卡模板id，全局唯一
     * @var int
     */
    private $memberCardTemplateId;

    /**
     * 会员卡名称（会员卡名称长度不能超过9个汉字）
     * @var string
     */
    private $name;

    /**
     * 会员卡品牌名称（会员卡品牌名称长度不能超过12个汉字）
     * @var string
     */
    private $brandName;

    /**
     * 会员卡code码显示类型（第三方微信卡必填字段，会员卡同步至微信该字段必传）卡券Code类型
     * @var int
     */
    private $codeType;

    /**
     * 会员卡颜色参见相关字段说明：####会员卡模板颜色对应关系
     * @var int
     */
    private $color;

    /**
     * 背景类型0-颜色，1-自定义图片2-等级图片
     * @var int
     */
    private $backgroundType;

    /**
     * 用户限领次数
     * @var int
     */
    private $userTakeLimit;

    /**
     * 会员卡有效期类型卡券过期时间类型
     * @var int
     */
    private $dateType;

    /**
     * 开始时间（固定类型有效期，开始日期不能为空）
     * @var int
     */
    private $startDate;

    /**
     * 结束时间（固定类型有效期，结束日期不能为空）
     * @var int
     */
    private $expireDate;

    /**
     * 领取后几天生效（动态类型有效期，领取后生效天数不能为空）
     * @var int
     */
    private $startDayCount;

    /**
     * 领取后几天有效（动态类型有效期，领取后过期天数不能为空）
     * @var int
     */
    private $expDayCount;

    /**
     * 是否适用全部门店
     * @var bool
     */
    private $useAllStore;

    /**
     * 会员卡code码生成类型MemberCardCodeGenerateTypeEnum
     * @var int
     */
    private $codeGenerateType;

    /**
     * 自定义code码前缀
     * @var string
     */
    private $prefix;

    /**
     * 自定义code码后缀
     * @var string
     */
    private $postfix;

    /**
     * @param bool $isDefault
     */
    public function setIsDefault(?bool $isDefault): void
    {
        $this->isDefault = $isDefault;
    }

    /**
     * @return bool
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
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
     * @param string $brandName
     */
    public function setBrandName(?string $brandName): void
    {
        $this->brandName = $brandName;
    }

    /**
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * @param int $codeType
     */
    public function setCodeType(?int $codeType): void
    {
        $this->codeType = $codeType;
    }

    /**
     * @return int
     */
    public function getCodeType(): ?int
    {
        return $this->codeType;
    }

    /**
     * @param int $color
     */
    public function setColor(?int $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getColor(): ?int
    {
        return $this->color;
    }

    /**
     * @param int $backgroundType
     */
    public function setBackgroundType(?int $backgroundType): void
    {
        $this->backgroundType = $backgroundType;
    }

    /**
     * @return int
     */
    public function getBackgroundType(): ?int
    {
        return $this->backgroundType;
    }

    /**
     * @param int $userTakeLimit
     */
    public function setUserTakeLimit(?int $userTakeLimit): void
    {
        $this->userTakeLimit = $userTakeLimit;
    }

    /**
     * @return int
     */
    public function getUserTakeLimit(): ?int
    {
        return $this->userTakeLimit;
    }

    /**
     * @param int $dateType
     */
    public function setDateType(?int $dateType): void
    {
        $this->dateType = $dateType;
    }

    /**
     * @return int
     */
    public function getDateType(): ?int
    {
        return $this->dateType;
    }

    /**
     * @param int $startDate
     */
    public function setStartDate(?int $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return int
     */
    public function getStartDate(): ?int
    {
        return $this->startDate;
    }

    /**
     * @param int $expireDate
     */
    public function setExpireDate(?int $expireDate): void
    {
        $this->expireDate = $expireDate;
    }

    /**
     * @return int
     */
    public function getExpireDate(): ?int
    {
        return $this->expireDate;
    }

    /**
     * @param int $startDayCount
     */
    public function setStartDayCount(?int $startDayCount): void
    {
        $this->startDayCount = $startDayCount;
    }

    /**
     * @return int
     */
    public function getStartDayCount(): ?int
    {
        return $this->startDayCount;
    }

    /**
     * @param int $expDayCount
     */
    public function setExpDayCount(?int $expDayCount): void
    {
        $this->expDayCount = $expDayCount;
    }

    /**
     * @return int
     */
    public function getExpDayCount(): ?int
    {
        return $this->expDayCount;
    }

    /**
     * @param bool $useAllStore
     */
    public function setUseAllStore(?bool $useAllStore): void
    {
        $this->useAllStore = $useAllStore;
    }

    /**
     * @return bool
     */
    public function getUseAllStore(): ?bool
    {
        return $this->useAllStore;
    }

    /**
     * @param int $codeGenerateType
     */
    public function setCodeGenerateType(?int $codeGenerateType): void
    {
        $this->codeGenerateType = $codeGenerateType;
    }

    /**
     * @return int
     */
    public function getCodeGenerateType(): ?int
    {
        return $this->codeGenerateType;
    }

    /**
     * @param string $prefix
     */
    public function setPrefix(?string $prefix): void
    {
        $this->prefix = $prefix;
    }

    /**
     * @return string
     */
    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    /**
     * @param string $postfix
     */
    public function setPostfix(?string $postfix): void
    {
        $this->postfix = $postfix;
    }

    /**
     * @return string
     */
    public function getPostfix(): ?string
    {
        return $this->postfix;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

