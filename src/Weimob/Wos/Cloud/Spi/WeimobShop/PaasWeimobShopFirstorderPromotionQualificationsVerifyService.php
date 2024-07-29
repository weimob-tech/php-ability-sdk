<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,703
 * @author weimobcloud
 * @create 2024-7-29
 */
interface PaasWeimobShopFirstorderPromotionQualificationsVerifyService
{
    const specType = 'wos';

    public function invoke(WeimobShopFirstorderPromotionQualificationsVerifyRequest $request) : WeimobShopFirstorderPromotionQualificationsVerifyResponse;
}

class WeimobShopFirstorderPromotionQualificationsVerifyRequest implements \JsonSerializable
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
     * @var WeimobShopFirstorderPromotionQualificationsVerifyParam
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
     * @param WeimobShopFirstorderPromotionQualificationsVerifyParam $param
     */
    public function setParams(?WeimobShopFirstorderPromotionQualificationsVerifyParam $param): void
    {
        $this->params = $param;
    }

    /**
     * @return WeimobShopFirstorderPromotionQualificationsVerifyParam
     */
    public function getParams(): ?WeimobShopFirstorderPromotionQualificationsVerifyParam
    {
        return $this->params;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFirstorderPromotionQualificationsVerifyParam implements \JsonSerializable
{
    /**
     * 活动id列表
     * @var array
     */
    private $activityIdList;

    /**
     * wid
     * @var int
     */
    private $wid;

    /**
     * @param array $activityIdList
     */
    public function setActivityIdList(?array $activityIdList): void
    {
        $this->activityIdList = $activityIdList;
    }

    /**
     * @return array
     */
    public function getActivityIdList(): ?array
    {
        return $this->activityIdList;
    }

    /**
     * @param int $wid
     */
    public function setWid(?int $wid): void
    {
        $this->wid = $wid;
    }

    /**
     * @return int
     */
    public function getWid(): ?int
    {
        return $this->wid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobShopFirstorderPromotionQualificationsVerifyResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobShopFirstorderPromotionQualificationsVerifyData
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
     * @return WeimobShopFirstorderPromotionQualificationsVerifyData
     */
    public function getData(): ?WeimobShopFirstorderPromotionQualificationsVerifyData
    {
        return $this->data;
    }

    /**
     * @param WeimobShopFirstorderPromotionQualificationsVerifyData $data
     */
    public function setData(?WeimobShopFirstorderPromotionQualificationsVerifyData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFirstorderPromotionQualificationsVerifyData implements \JsonSerializable
{
    /**
     * 校验结果列表
     * @var array
     */
    private $resultList;

    /**
     * @param array $resultList
     */
    public function setResultList(?array $resultList): void
    {
        $this->resultList = $resultList;
    }

    /**
     * @return array
     */
    public function getResultList(): ?array
    {
        return $this->resultList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopFirstorderPromotionQualificationsVerifyDataResultList implements \JsonSerializable
{
    /**
     * 活动id
     * @var int
     */
    private $activityId;

    /**
     * 校验结果 true -  校验通过 false  - 校验失败
     * @var bool
     */
    private $result;

    /**
     * 结果说明
     * @var string
     */
    private $remark;

    /**
     * @param int $activityId
     */
    public function setActivityId(?int $activityId): void
    {
        $this->activityId = $activityId;
    }

    /**
     * @return int
     */
    public function getActivityId(): ?int
    {
        return $this->activityId;
    }

    /**
     * @param bool $result
     */
    public function setResult(?bool $result): void
    {
        $this->result = $result;
    }

    /**
     * @return bool
     */
    public function getResult(): ?bool
    {
        return $this->result;
    }

    /**
     * @param string $remark
     */
    public function setRemark(?string $remark): void
    {
        $this->remark = $remark;
    }

    /**
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

