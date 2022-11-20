<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 726
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobGuideCrowdDetailGetListService
{
    const specType = 'wos';

    public function invoke(WeimobGuideCrowdDetailGetListRequest $request) : WeimobGuideCrowdDetailGetListResponse;
}

class WeimobGuideCrowdDetailGetListRequest implements \JsonSerializable
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
     * @var WeimobGuideCrowdDetailGetListParam
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
     * @param WeimobGuideCrowdDetailGetListParam $param
     */
    public function setParam(?WeimobGuideCrowdDetailGetListParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobGuideCrowdDetailGetListParam
     */
    public function getParam(): ?WeimobGuideCrowdDetailGetListParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCrowdDetailGetListParam implements \JsonSerializable
{
    /**
     * 人群id列表
     * @var array
     */
    private $crowIdList;

    /**
     * 商业操作系统ID
     * @var int
     */
    private $bosId;

    /**
     * 组织结构节点类型
     * @var int
     */
    private $vidType;

    /**
     * 组织结构节点
     * @var int
     */
    private $vid;

    /**
     * 导购wid
     * @var int
     */
    private $guiderWid;

    /**
     * 产品id
     * @var int
     */
    private $productId;

    /**
     * 产品实例id
     * @var int
     */
    private $productInstanceId;

    /**
     * 导购唯一标识
     * @var int
     */
    private $guiderId;

    /**
     * @param array $crowIdList
     */
    public function setCrowIdList(?array $crowIdList): void
    {
        $this->crowIdList = $crowIdList;
    }

    /**
     * @return array
     */
    public function getCrowIdList(): ?array
    {
        return $this->crowIdList;
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
     * @param int $guiderId
     */
    public function setGuiderId(?int $guiderId): void
    {
        $this->guiderId = $guiderId;
    }

    /**
     * @return int
     */
    public function getGuiderId(): ?int
    {
        return $this->guiderId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideCrowdDetailGetListResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobGuideCrowdDetailGetListData
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
     * @return WeimobGuideCrowdDetailGetListData
     */
    public function getData(): ?WeimobGuideCrowdDetailGetListData
    {
        return $this->data;
    }

    /**
     * @param WeimobGuideCrowdDetailGetListData $data
     */
    public function setData(?WeimobGuideCrowdDetailGetListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCrowdDetailGetListData implements \JsonSerializable
{
    /**
     * 客群信息
     * @var array
     */
    private $customCrowd;

    /**
     * @param array $customCrowd
     */
    public function setCustomCrowd(?array $customCrowd): void
    {
        $this->customCrowd = $customCrowd;
    }

    /**
     * @return array
     */
    public function getCustomCrowd(): ?array
    {
        return $this->customCrowd;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCrowdDetailGetListDataCustomCrowd implements \JsonSerializable
{
    /**
     * 人群id
     * @var int
     */
    private $crowdId;

    /**
     * 人群名称
     * @var string
     */
    private $crowdName;

    /**
     * 人群描述
     * @var string
     */
    private $description;

    /**
     * 分类id
     * @var int
     */
    private $categoryId;

    /**
     * @param int $crowdId
     */
    public function setCrowdId(?int $crowdId): void
    {
        $this->crowdId = $crowdId;
    }

    /**
     * @return int
     */
    public function getCrowdId(): ?int
    {
        return $this->crowdId;
    }

    /**
     * @param string $crowdName
     */
    public function setCrowdName(?string $crowdName): void
    {
        $this->crowdName = $crowdName;
    }

    /**
     * @return string
     */
    public function getCrowdName(): ?string
    {
        return $this->crowdName;
    }

    /**
     * @param string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param int $categoryId
     */
    public function setCategoryId(?int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return int
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

