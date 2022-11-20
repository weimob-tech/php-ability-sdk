<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 739
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobGuideGoodsTagGetListService
{
    const specType = 'wos';

    public function invoke(WeimobGuideGoodsTagGetListRequest $request) : WeimobGuideGoodsTagGetListResponse;
}

class WeimobGuideGoodsTagGetListRequest implements \JsonSerializable
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
    * @var WeimobGuideGoodsTagGetListParam
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
    * @param WeimobGuideGoodsTagGetListParam $param
    */
    public function setParam(?WeimobGuideGoodsTagGetListParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobGuideGoodsTagGetListParam
    */
    public function getParam(): ?WeimobGuideGoodsTagGetListParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsTagGetListParam implements \JsonSerializable
{
    /**
    * 请求页数
    * @var int
    */
    private $pageNum;

    /**
    * 请求页面大小
    * @var int
    */
    private $pageSize;

    /**
    * @param int $pageNum
    */
    public function setPageNum(?int $pageNum)
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
    public function setPageSize(?int $pageSize)
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


class WeimobGuideGoodsTagGetListResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobGuideGoodsTagGetListData
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
    * @return WeimobGuideGoodsTagGetListData
    */
    public function getData(): ?WeimobGuideGoodsTagGetListData
    {
        return $this->data;
    }

    /**
    * @param WeimobGuideGoodsTagGetListData $data
    */
    public function setData(?WeimobGuideGoodsTagGetListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsTagGetListData implements \JsonSerializable
{
    /**
    * 标签列表
    * @var array
    */
    private $pageList;

    /**
    * 请求页数
    * @var int
    */
    private $pageNum;

    /**
    * 20
    * @var int
    */
    private $pageSize;

    /**
    * 数据总数
    * @var int
    */
    private $totalCount;

    /**
    * @param array $pageList
    */
    public function setPageList(?array $pageList)
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
    * @param int $pageNum
    */
    public function setPageNum(?int $pageNum)
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
    public function setPageSize(?int $pageSize)
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

    /**
    * @param int $totalCount
    */
    public function setTotalCount(?int $totalCount)
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsTagGetListDataPageList implements \JsonSerializable
{
    /**
    * 标签id
    * @var int
    */
    private $tagId;

    /**
    * 标签名称
    * @var string
    */
    private $name;

    /**
    * 标签关联商品数量
    * @var int
    */
    private $goodsNum;

    /**
    * 标签关联商品申请数量
    * @var int
    */
    private $goodsApplyNum;

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
    * @param int $goodsNum
    */
    public function setGoodsNum(?int $goodsNum)
    {
        $this->goodsNum = $goodsNum;
    }

    /**
    * @return int
    */
    public function getGoodsNum(): ?int
    {
        return $this->goodsNum;
    }

    /**
    * @param int $goodsApplyNum
    */
    public function setGoodsApplyNum(?int $goodsApplyNum)
    {
        $this->goodsApplyNum = $goodsApplyNum;
    }

    /**
    * @return int
    */
    public function getGoodsApplyNum(): ?int
    {
        return $this->goodsApplyNum;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

