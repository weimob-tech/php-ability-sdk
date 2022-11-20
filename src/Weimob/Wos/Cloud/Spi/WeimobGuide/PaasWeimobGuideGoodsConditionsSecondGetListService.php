<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 722
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobGuideGoodsConditionsSecondGetListService
{
    const specType = 'wos';

    public function invoke(WeimobGuideGoodsConditionsSecondGetListRequest $request) : WeimobGuideGoodsConditionsSecondGetListResponse;
}

class WeimobGuideGoodsConditionsSecondGetListRequest implements \JsonSerializable
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
     * @var WeimobGuideGoodsConditionsSecondGetListParam
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
     * @param WeimobGuideGoodsConditionsSecondGetListParam $param
     */
    public function setParam(?WeimobGuideGoodsConditionsSecondGetListParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobGuideGoodsConditionsSecondGetListParam
     */
    public function getParam(): ?WeimobGuideGoodsConditionsSecondGetListParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsConditionsSecondGetListParam implements \JsonSerializable
{
    /**
     * 父级条件类型
     * @var int
     */
    private $type;

    /**
     * 父级类型id
     * @var int
     */
    private $id;

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideGoodsConditionsSecondGetListResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobGuideGoodsConditionsSecondGetListData
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
     * @return WeimobGuideGoodsConditionsSecondGetListData
     */
    public function getData(): ?WeimobGuideGoodsConditionsSecondGetListData
    {
        return $this->data;
    }

    /**
     * @param WeimobGuideGoodsConditionsSecondGetListData $data
     */
    public function setData(?WeimobGuideGoodsConditionsSecondGetListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGoodsConditionsSecondGetListData implements \JsonSerializable
{
    /**
     * 二级筛选条件id
     * @var int
     */
    private $id;

    /**
     * 二级筛选条件标题
     * @var string
     */
    private $title;

    /**
     * 父级分类类型
     * @var int
     */
    private $type;

    /**
     * 父级分类id
     * @var int
     */
    private $parentId;

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
     * @param int $parentId
     */
    public function setParentId(?int $parentId): void
    {
        $this->parentId = $parentId;
    }

    /**
     * @return int
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

