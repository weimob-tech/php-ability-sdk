<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 580
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobShopCouponPaasBatchLockCouponService
{
    const specType = 'wos';

    public function invoke(WeimobShopCouponPaasBatchLockCouponRequest $request) : WeimobShopCouponPaasBatchLockCouponResponse;
}

class WeimobShopCouponPaasBatchLockCouponRequest implements \JsonSerializable
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
    * @var WeimobShopCouponPaasBatchLockCouponParam
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
    * @param WeimobShopCouponPaasBatchLockCouponParam $param
    */
    public function setParam(?WeimobShopCouponPaasBatchLockCouponParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobShopCouponPaasBatchLockCouponParam
    */
    public function getParam(): ?WeimobShopCouponPaasBatchLockCouponParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasBatchLockCouponParam implements \JsonSerializable
{
    /**
    * 优惠券
    * @var array
    */
    private $couponList;

    /**
    * 商品信息
    * @var array
    */
    private $storeGoodsInfoDTOS;

    /**
    * 1
    * @var int
    */
    private $wid;

    /**
    * 订单金额
    * @var int
    */
    private $orderAmount;

    /**
    *  冻结时是否忽略商品等维度的check
    * @var bool
    */
    private $isIgnoreGoodsInfo;

    /**
    * 核销场景
    * @var int
    */
    private $useScene;

    /**
    * @param array $couponList
    */
    public function setCouponList(?array $couponList)
    {
        $this->couponList = $couponList;
    }

    /**
    * @return array
    */
    public function getCouponList(): ?array
    {
        return $this->couponList;
    }

    /**
    * @param array $storeGoodsInfoDTOS
    */
    public function setStoreGoodsInfoDTOS(?array $storeGoodsInfoDTOS)
    {
        $this->storeGoodsInfoDTOS = $storeGoodsInfoDTOS;
    }

    /**
    * @return array
    */
    public function getStoreGoodsInfoDTOS(): ?array
    {
        return $this->storeGoodsInfoDTOS;
    }

    /**
    * @param int $wid
    */
    public function setWid(?int $wid)
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

    /**
    * @param int $orderAmount
    */
    public function setOrderAmount(?int $orderAmount)
    {
        $this->orderAmount = $orderAmount;
    }

    /**
    * @return int
    */
    public function getOrderAmount(): ?int
    {
        return $this->orderAmount;
    }

    /**
    * @param bool $isIgnoreGoodsInfo
    */
    public function setIsIgnoreGoodsInfo(?bool $isIgnoreGoodsInfo)
    {
        $this->isIgnoreGoodsInfo = $isIgnoreGoodsInfo;
    }

    /**
    * @return bool
    */
    public function getIsIgnoreGoodsInfo(): ?bool
    {
        return $this->isIgnoreGoodsInfo;
    }

    /**
    * @param int $useScene
    */
    public function setUseScene(?int $useScene)
    {
        $this->useScene = $useScene;
    }

    /**
    * @return int
    */
    public function getUseScene(): ?int
    {
        return $this->useScene;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasBatchLockCouponParamCouponList implements \JsonSerializable
{
    private $bosId;

    /**
    * vid
    * @var int
    */
    private $vid;

    private $wid;

    private $couponTemplateId;

    /**
    * 订单id
    * @var string
    */
    private $orderId;

    /**
    * 订单id
    * @var string
    */
    private $orderNo;

    /**
    *  优惠码码值
    * @var string
    */
    private $code;

    /**
    * 校验的金额
    * @var int
    */
    private $amount;

    /**
    * 核销场景
    * @var int
    */
    private $useScene;

    /**
    * @param int $bosId
    */
    public function setBosId(?int $bosId)
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
    public function setVid(?int $vid)
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
    * @param int $wid
    */
    public function setWid(?int $wid)
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

    /**
    * @param int $couponTemplateId
    */
    public function setCouponTemplateId(?int $couponTemplateId)
    {
        $this->couponTemplateId = $couponTemplateId;
    }

    /**
    * @return int
    */
    public function getCouponTemplateId(): ?int
    {
        return $this->couponTemplateId;
    }

    /**
    * @param string $orderId
    */
    public function setOrderId(?string $orderId)
    {
        $this->orderId = $orderId;
    }

    /**
    * @return string
    */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
    * @param string $orderNo
    */
    public function setOrderNo(?string $orderNo)
    {
        $this->orderNo = $orderNo;
    }

    /**
    * @return string
    */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
    * @param string $code
    */
    public function setCode(?string $code)
    {
        $this->code = $code;
    }

    /**
    * @return string
    */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
    * @param int $amount
    */
    public function setAmount(?int $amount)
    {
        $this->amount = $amount;
    }

    /**
    * @return int
    */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
    * @param int $useScene
    */
    public function setUseScene(?int $useScene)
    {
        $this->useScene = $useScene;
    }

    /**
    * @return int
    */
    public function getUseScene(): ?int
    {
        return $this->useScene;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasBatchLockCouponParamStoreGoodsInfoDTOS implements \JsonSerializable
{
    private $vidNodeList;

    private $goodsInfos;

    /**
    * @param WeimobShopCouponPaasBatchLockCouponParamVidNodeList $vidNodeList
    */
    public function setVidNodeList(?WeimobShopCouponPaasBatchLockCouponParamVidNodeList $vidNodeList)
    {
        $this->vidNodeList = $vidNodeList;
    }

    /**
    * @return WeimobShopCouponPaasBatchLockCouponParamVidNodeList
    */
    public function getVidNodeList(): ?WeimobShopCouponPaasBatchLockCouponParamVidNodeList
    {
        return $this->vidNodeList;
    }

    /**
    * @param array $goodsInfos
    */
    public function setGoodsInfos(?array $goodsInfos)
    {
        $this->goodsInfos = $goodsInfos;
    }

    /**
    * @return array
    */
    public function getGoodsInfos(): ?array
    {
        return $this->goodsInfos;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasBatchLockCouponParamVidNodeList implements \JsonSerializable
{
    private $parentVids;

    /**
    * @param array $parentVids
    */
    public function setParentVids(?array $parentVids)
    {
        $this->parentVids = $parentVids;
    }

    /**
    * @return array
    */
    public function getParentVids(): ?array
    {
        return $this->parentVids;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasBatchLockCouponParamParentVids implements \JsonSerializable
{
    /**
    * merchantId
    * @var int
    */
    private $merchantId;

    /**
    * vid
    * @var int
    */
    private $vid;

    /**
    * vidName
    * @var string
    */
    private $vidName;

    /**
    * vidType
    * @var int
    */
    private $vidType;

    /**
    * @param int $merchantId
    */
    public function setMerchantId(?int $merchantId)
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
    * @param int $vid
    */
    public function setVid(?int $vid)
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
    * @param string $vidName
    */
    public function setVidName(?string $vidName)
    {
        $this->vidName = $vidName;
    }

    /**
    * @return string
    */
    public function getVidName(): ?string
    {
        return $this->vidName;
    }

    /**
    * @param int $vidType
    */
    public function setVidType(?int $vidType)
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasBatchLockCouponParamGoodsInfos implements \JsonSerializable
{
    /**
    *  skus
    * @var array
    */
    private $skus;

    /**
    * id
    * @var int
    */
    private $id;

    private $categoryIds;

    private $tags;

    private $groupIds;

    /**
    * @param array $skus
    */
    public function setSkus(?array $skus)
    {
        $this->skus = $skus;
    }

    /**
    * @return array
    */
    public function getSkus(): ?array
    {
        return $this->skus;
    }

    /**
    * @param int $id
    */
    public function setId(?int $id)
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
    * @param array $categoryIds
    */
    public function setCategoryIds(?array $categoryIds)
    {
        $this->categoryIds = $categoryIds;
    }

    /**
    * @return array
    */
    public function getCategoryIds(): ?array
    {
        return $this->categoryIds;
    }

    /**
    * @param array $tags
    */
    public function setTags(?array $tags)
    {
        $this->tags = $tags;
    }

    /**
    * @return array
    */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
    * @param array $groupIds
    */
    public function setGroupIds(?array $groupIds)
    {
        $this->groupIds = $groupIds;
    }

    /**
    * @return array
    */
    public function getGroupIds(): ?array
    {
        return $this->groupIds;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasBatchLockCouponParamSkus implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobShopCouponPaasBatchLockCouponResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobShopCouponPaasBatchLockCouponData
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
    * @return WeimobShopCouponPaasBatchLockCouponData
    */
    public function getData(): ?WeimobShopCouponPaasBatchLockCouponData
    {
        return $this->data;
    }

    /**
    * @param WeimobShopCouponPaasBatchLockCouponData $data
    */
    public function setData(?WeimobShopCouponPaasBatchLockCouponData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasBatchLockCouponData implements \JsonSerializable
{
    /**
    * 1
    * @var bool
    */
    private $success;

    /**
    * @param bool $success
    */
    public function setSuccess(?bool $success)
    {
        $this->success = $success;
    }

    /**
    * @return bool
    */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

