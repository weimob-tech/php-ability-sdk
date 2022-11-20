<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 723
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobGuideGoodsConditionsFirstGetListService
{
    const specType = 'wos';

    public function invoke(WeimobGuideGoodsConditionsFirstGetListRequest $request) : WeimobGuideGoodsConditionsFirstGetListResponse;
}

class WeimobGuideGoodsConditionsFirstGetListRequest implements \JsonSerializable
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
     * @var WeimobGuideGoodsConditionsFirstGetListParam
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
     * @param WeimobGuideGoodsConditionsFirstGetListParam $param
     */
    public function setParam(?WeimobGuideGoodsConditionsFirstGetListParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobGuideGoodsConditionsFirstGetListParam
     */
    public function getParam(): ?WeimobGuideGoodsConditionsFirstGetListParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsConditionsFirstGetListParam implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideGoodsConditionsFirstGetListResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobGuideGoodsConditionsFirstGetListData
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
     * @return WeimobGuideGoodsConditionsFirstGetListData
     */
    public function getData(): ?WeimobGuideGoodsConditionsFirstGetListData
    {
        return $this->data;
    }

    /**
     * @param WeimobGuideGoodsConditionsFirstGetListData $data
     */
    public function setData(?WeimobGuideGoodsConditionsFirstGetListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsConditionsFirstGetListData implements \JsonSerializable
{
    /**
     * 一级分类子项
     * @var array
     */
    private $itemList;

    /**
     * 一级分类类型
     * @var int
     */
    private $type;

    /**
     * 一级筛选条件标题
     * @var string
     */
    private $title;

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
     * @param string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsConditionsFirstGetListDataItemList implements \JsonSerializable
{
    /**
     * 一级分类id
     * @var int
     */
    private $id;

    /**
     * 一级分类标题
     * @var string
     */
    private $title;

    /**
     * 一级分类类型
     * @var int
     */
    private $type;

    /**
     * 是否有子类
     * @var bool
     */
    private $hasSub;

    /**
     * @param int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
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
     * @param bool $hasSub
     */
    public function setHasSub(?bool $hasSub): void
    {
        $this->hasSub = $hasSub;
    }

    /**
     * @return bool
     */
    public function getHasSub(): ?bool
    {
        return $this->hasSub;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

