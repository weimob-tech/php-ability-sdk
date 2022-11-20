<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobCdp;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,170
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobCdpGuiderGetListService
{
    const specType = 'wos';

    public function invoke(WeimobCdpGuiderGetListRequest $request) : WeimobCdpGuiderGetListResponse;
}

class WeimobCdpGuiderGetListRequest implements \JsonSerializable
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
     * @var WeimobCdpGuiderGetListParam
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
     * @param WeimobCdpGuiderGetListParam $param
     */
    public function setParam(?WeimobCdpGuiderGetListParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobCdpGuiderGetListParam
     */
    public function getParam(): ?WeimobCdpGuiderGetListParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCdpGuiderGetListParam implements \JsonSerializable
{
    /**
     * 导购列表查询-检索字段
     * @var WeimobCdpGuiderGetListParamQueryParameter
     */
    private $queryParameter;

    /**
     * 商户id
     * @var int
     */
    private $merchantId;

    /**
     * 新商家操作系统id
     * @var int
     */
    private $bosId;

    /**
     * 节点id
     * @var int
     */
    private $vid;

    /**
     * 节点类型
     * @var int
     */
    private $vidType;

    /**
     * 产品id
     * @var int
     */
    private $productId;

    /**
     * 产品版本id
     * @var int
     */
    private $productVersionId;

    /**
     * 产品实例id
     * @var int
     */
    private $productInstanceId;

    /**
     * 端id
     * @var int
     */
    private $cid;

    /**
     * weimob、haidin   二选一
     * @var string
     */
    private $tcode;

    /**
     * 页码
     * @var int
     */
    private $pageNum;

    /**
     * 每页大小
     * @var int
     */
    private $pageSize;

    /**
     * @param WeimobCdpGuiderGetListParamQueryParameter $queryParameter
     */
    public function setQueryParameter(?WeimobCdpGuiderGetListParamQueryParameter $queryParameter): void
    {
        $this->queryParameter = $queryParameter;
    }

    /**
     * @return WeimobCdpGuiderGetListParamQueryParameter
     */
    public function getQueryParameter(): ?WeimobCdpGuiderGetListParamQueryParameter
    {
        return $this->queryParameter;
    }

    /**
     * @param int $merchantId
     */
    public function setMerchantId(?int $merchantId): void
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

    /**
     * @param int $productId
     */
    public function setProductId(?int $productId): void
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
     * @param int $productVersionId
     */
    public function setProductVersionId(?int $productVersionId): void
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

    /**
     * @param int $productInstanceId
     */
    public function setProductInstanceId(?int $productInstanceId): void
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
     * @param int $cid
     */
    public function setCid(?int $cid): void
    {
        $this->cid = $cid;
    }

    /**
     * @return int
     */
    public function getCid(): ?int
    {
        return $this->cid;
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
     * @param int $pageNum
     */
    public function setPageNum(?int $pageNum): void
    {
        $this->pageNum = $pageNum;
    }

    /**
     * @return int
     */
    public function getPageNum(): ?int
    {
        return $this->pageNum;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize(?int $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCdpGuiderGetListParamQueryParameter implements \JsonSerializable
{
    /**
     * 节点id
     * @var int
     */
    private $guiderVid;

    /**
     * 导购名
     * @var string
     */
    private $guiderName;

    /**
     * 导购电话列表
     * @var array
     */
    private $guiderPhoneList;

    /**
     * 导购wid列表
     * @var array
     */
    private $guiderWidList;

    /**
     * @param int $guiderVid
     */
    public function setGuiderVid(?int $guiderVid): void
    {
        $this->guiderVid = $guiderVid;
    }

    /**
     * @return int
     */
    public function getGuiderVid(): ?int
    {
        return $this->guiderVid;
    }

    /**
     * @param string $guiderName
     */
    public function setGuiderName(?string $guiderName): void
    {
        $this->guiderName = $guiderName;
    }

    /**
     * @return string
     */
    public function getGuiderName(): ?string
    {
        return $this->guiderName;
    }

    /**
     * @param array $guiderPhoneList
     */
    public function setGuiderPhoneList(?array $guiderPhoneList): void
    {
        $this->guiderPhoneList = $guiderPhoneList;
    }

    /**
     * @return array
     */
    public function getGuiderPhoneList(): ?array
    {
        return $this->guiderPhoneList;
    }

    /**
     * @param array $guiderWidList
     */
    public function setGuiderWidList(?array $guiderWidList): void
    {
        $this->guiderWidList = $guiderWidList;
    }

    /**
     * @return array
     */
    public function getGuiderWidList(): ?array
    {
        return $this->guiderWidList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobCdpGuiderGetListResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobCdpGuiderGetListData
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
     * @return WeimobCdpGuiderGetListData
     */
    public function getData(): ?WeimobCdpGuiderGetListData
    {
        return $this->data;
    }

    /**
     * @param WeimobCdpGuiderGetListData $data
     */
    public function setData(?WeimobCdpGuiderGetListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCdpGuiderGetListData implements \JsonSerializable
{
    /**
     * 导购信息列表
     * @var array
     */
    private $pageList;

    /**
     * 总个数
     * @var int
     */
    private $totalCount;

    /**
     * 页码
     * @var int
     */
    private $pageNum;

    /**
     * 每页大小
     * @var int
     */
    private $pageSize;

    /**
     * @param array $pageList
     */
    public function setPageList(?array $pageList): void
    {
        $this->pageList = $pageList;
    }

    /**
     * @return array
     */
    public function getPageList(): ?array
    {
        return $this->pageList;
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
     * @param int $pageNum
     */
    public function setPageNum(?int $pageNum): void
    {
        $this->pageNum = $pageNum;
    }

    /**
     * @return int
     */
    public function getPageNum(): ?int
    {
        return $this->pageNum;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize(?int $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCdpGuiderGetListDataPageList implements \JsonSerializable
{
    /**
     * 导购手机号
     * @var string
     */
    private $guiderPhone;

    /**
     * 导购名
     * @var string
     */
    private $guiderName;

    /**
     * 导购wid
     * @var int
     */
    private $guiderWid;

    /**
     * 导购门店vid
     * @var int
     */
    private $guiderVid;

    /**
     * 导购工号
     * @var int
     */
    private $jobNumber;

    /**
     * 导购id
     * @var string
     */
    private $guiderId;

    /**
     * 是否启用
     * @var int
     */
    private $isUsed;

    /**
     * 客服属性,0,1,2
     * @var int
     */
    private $isExclusiveCus;

    /**
     * @param string $guiderPhone
     */
    public function setGuiderPhone(?string $guiderPhone): void
    {
        $this->guiderPhone = $guiderPhone;
    }

    /**
     * @return string
     */
    public function getGuiderPhone(): ?string
    {
        return $this->guiderPhone;
    }

    /**
     * @param string $guiderName
     */
    public function setGuiderName(?string $guiderName): void
    {
        $this->guiderName = $guiderName;
    }

    /**
     * @return string
     */
    public function getGuiderName(): ?string
    {
        return $this->guiderName;
    }

    /**
     * @param int $guiderWid
     */
    public function setGuiderWid(?int $guiderWid): void
    {
        $this->guiderWid = $guiderWid;
    }

    /**
     * @return int
     */
    public function getGuiderWid(): ?int
    {
        return $this->guiderWid;
    }

    /**
     * @param int $guiderVid
     */
    public function setGuiderVid(?int $guiderVid): void
    {
        $this->guiderVid = $guiderVid;
    }

    /**
     * @return int
     */
    public function getGuiderVid(): ?int
    {
        return $this->guiderVid;
    }

    /**
     * @param int $jobNumber
     */
    public function setJobNumber(?int $jobNumber): void
    {
        $this->jobNumber = $jobNumber;
    }

    /**
     * @return int
     */
    public function getJobNumber(): ?int
    {
        return $this->jobNumber;
    }

    /**
     * @param string $guiderId
     */
    public function setGuiderId(?string $guiderId): void
    {
        $this->guiderId = $guiderId;
    }

    /**
     * @return string
     */
    public function getGuiderId(): ?string
    {
        return $this->guiderId;
    }

    /**
     * @param int $isUsed
     */
    public function setIsUsed(?int $isUsed): void
    {
        $this->isUsed = $isUsed;
    }

    /**
     * @return int
     */
    public function getIsUsed(): ?int
    {
        return $this->isUsed;
    }

    /**
     * @param int $isExclusiveCus
     */
    public function setIsExclusiveCus(?int $isExclusiveCus): void
    {
        $this->isExclusiveCus = $isExclusiveCus;
    }

    /**
     * @return int
     */
    public function getIsExclusiveCus(): ?int
    {
        return $this->isExclusiveCus;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

