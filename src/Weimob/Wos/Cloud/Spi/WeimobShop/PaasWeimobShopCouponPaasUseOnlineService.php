<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 578
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobShopCouponPaasUseOnlineService
{
    const specType = 'wos';

    public function invoke(WeimobShopCouponPaasUseOnlineRequest $request) : WeimobShopCouponPaasUseOnlineResponse;
}

class WeimobShopCouponPaasUseOnlineRequest implements \JsonSerializable
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
    * @var WeimobShopCouponPaasUseOnlineParam
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
    * @param WeimobShopCouponPaasUseOnlineParam $param
    */
    public function setParam(?WeimobShopCouponPaasUseOnlineParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobShopCouponPaasUseOnlineParam
    */
    public function getParam(): ?WeimobShopCouponPaasUseOnlineParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopCouponPaasUseOnlineParam implements \JsonSerializable
{
    /**
    * 优惠券信息
    * @var array
    */
    private $couponList;

    /**
    * 用户wid
    * @var int
    */
    private $wid;

    /**
    * 订单金额
    * @var int
    */
    private $orderAmount;

    /**
    * 商户id
    * @var int
    */
    private $merchantId;

    /**
    * bosId
    * @var int
    */
    private $bosId;

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
    * 租户类型
    * @var string
    */
    private $tcode;

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
    * @param int $productId
    */
    public function setProductId(?int $productId)
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
    public function setProductInstanceId(?int $productInstanceId)
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
    public function setTcode(?string $tcode)
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

class WeimobShopCouponPaasUseOnlineParamCouponList implements \JsonSerializable
{
    /**
    * 校验的金额
    * @var int
    */
    private $amount;

    /**
    * 优惠码码值
    * @var string
    */
    private $code;

    /**
    * 券模板id
    * @var int
    */
    private $couponTemplateId;

    /**
    * 订单编号
    * @var int
    */
    private $orderNo;

    /**
    * 核销场景
    * @var string
    */
    private $useScene;

    /**
    * vid
    * @var int
    */
    private $vid;

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
    * @param int $orderNo
    */
    public function setOrderNo(?int $orderNo)
    {
        $this->orderNo = $orderNo;
    }

    /**
    * @return int
    */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }

    /**
    * @param string $useScene
    */
    public function setUseScene(?string $useScene)
    {
        $this->useScene = $useScene;
    }

    /**
    * @return string
    */
    public function getUseScene(): ?string
    {
        return $this->useScene;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobShopCouponPaasUseOnlineResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobShopCouponPaasUseOnlineData
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
    * @return WeimobShopCouponPaasUseOnlineData
    */
    public function getData(): ?WeimobShopCouponPaasUseOnlineData
    {
        return $this->data;
    }

    /**
    * @param WeimobShopCouponPaasUseOnlineData $data
    */
    public function setData(?WeimobShopCouponPaasUseOnlineData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

