<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 579
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobShopCouponPaasBatchUnLockCouponService
{
    const specType = 'wos';

    public function invoke(WeimobShopCouponPaasBatchUnLockCouponRequest $request) : WeimobShopCouponPaasBatchUnLockCouponResponse;
}

class WeimobShopCouponPaasBatchUnLockCouponRequest implements \JsonSerializable
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
     * @var WeimobShopCouponPaasBatchUnLockCouponParam
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
     * @param WeimobShopCouponPaasBatchUnLockCouponParam $param
     */
    public function setParam(?WeimobShopCouponPaasBatchUnLockCouponParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobShopCouponPaasBatchUnLockCouponParam
     */
    public function getParam(): ?WeimobShopCouponPaasBatchUnLockCouponParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasBatchUnLockCouponParam implements \JsonSerializable
{
    /**
     * 优惠券列表
     * @var array
     */
    private $couponList;

    /**
     * 用户id
     * @var int
     */
    private $wid;

    /**
     * 商家id	
     * @var int
     */
    private $merchantId;

    /**
     * 节点类型
     * @var int
     */
    private $vidType;

    /**
     * 节点id	
     * @var int
     */
    private $vid;

    /**
     * 商户id	
     * @var int
     */
    private $bosId;

    /**
     * 产品实例id	
     * @var int
     */
    private $productInstanceId;

    /**
     * 租户类型
     * @var string
     */
    private $tcode;

    /**
     * @param array $couponList
     */
    public function setCouponList(?array $couponList): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasBatchUnLockCouponParamCouponList implements \JsonSerializable
{
    /**
     * bosId
     * @var int
     */
    private $bosId;

    /**
     * 券模板id
     * @var int
     */
    private $couponTemplateId;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 优惠码码值
     * @var int
     */
    private $code;

    /**
     * 校验的金额(单位元)
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
     * @param int $couponTemplateId
     */
    public function setCouponTemplateId(?int $couponTemplateId): void
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
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
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
     * @param int $code
     */
    public function setCode(?int $code): void
    {
        $this->code = $code;
    }

    /**
     * @return int
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * @param int $amount
     */
    public function setAmount(?int $amount): void
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
    public function setUseScene(?int $useScene): void
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


class WeimobShopCouponPaasBatchUnLockCouponResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobShopCouponPaasBatchUnLockCouponData
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
     * @return WeimobShopCouponPaasBatchUnLockCouponData
     */
    public function getData(): ?WeimobShopCouponPaasBatchUnLockCouponData
    {
        return $this->data;
    }

    /**
     * @param WeimobShopCouponPaasBatchUnLockCouponData $data
     */
    public function setData(?WeimobShopCouponPaasBatchUnLockCouponData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

