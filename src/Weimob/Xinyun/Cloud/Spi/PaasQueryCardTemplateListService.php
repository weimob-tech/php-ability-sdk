<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,351
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasQueryCardTemplateListService
{
    const specType = 'xinyun';

    public function execute(SQueryCardTemplateListRequest $request) : SQueryCardTemplateListResponse;
}

class SQueryCardTemplateListRequest implements \JsonSerializable
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
     * @var SQueryCardTemplateListParam
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
     * @param SQueryCardTemplateListParam $param
     */
    public function setParam(?SQueryCardTemplateListParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return SQueryCardTemplateListParam
     */
    public function getParam(): ?SQueryCardTemplateListParam
    {
        return $this->param;
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
     * 是否设置该会员卡模板为默认卡模版 true：是 false：否
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
     * 会员卡code码显示类型（第三方微信卡必填字段，会员卡同步至微信该字段必传）  卡券Code类型
     * @var int
     */
    private $codeType;

    /**
     * 会员卡颜色 参见相关字段说明：#### 会员卡模板颜色对应关系
     * @var int
     */
    private $color;

    /**
     * 背景类型 0-颜色，1-自定义图片 2-等级图片
     * @var int
     */
    private $backgroundType;

    /**
     * 用户限领次数
     * @var int
     */
    private $userTakeLimit;

    /**
     * 会员卡有效期类型  卡券过期时间类型
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
     * 会员卡code码生成类型 MemberCardCodeGenerateTypeEnum
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

