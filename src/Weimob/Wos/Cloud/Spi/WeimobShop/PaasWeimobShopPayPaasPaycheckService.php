<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,180
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobShopPayPaasPaycheckService
{
    const specType = 'wos';

    public function invoke(WeimobShopPayPaasPaycheckRequest $request) : WeimobShopPayPaasPaycheckResponse;
}

class WeimobShopPayPaasPaycheckRequest implements \JsonSerializable
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
     * @var WeimobShopPayPaasPaycheckParam
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
     * @param WeimobShopPayPaasPaycheckParam $param
     */
    public function setParam(?WeimobShopPayPaasPaycheckParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobShopPayPaasPaycheckParam
     */
    public function getParam(): ?WeimobShopPayPaasPaycheckParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPaasPaycheckParam implements \JsonSerializable
{
    /**
     * 商户id
     * @var int
     */
    private $bosId;

    /**
     * 业务标识
     * @var string
     */
    private $actionKey;

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobShopPayPaasPaycheckResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobShopPayPaasPaycheckData
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
     * @return WeimobShopPayPaasPaycheckData
     */
    public function getData(): ?WeimobShopPayPaasPaycheckData
    {
        return $this->data;
    }

    /**
     * @param WeimobShopPayPaasPaycheckData $data
     */
    public function setData(?WeimobShopPayPaasPaycheckData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobShopPayPaasPaycheckData implements \JsonSerializable
{
    /**
     * paas是否开关是否开启
     * @var bool
     */
    private $isPaas;

    /**
     * @param bool $isPaas
     */
    public function setIsPaas(?bool $isPaas): void
    {
        $this->isPaas = $isPaas;
    }

    /**
     * @return bool
     */
    public function getIsPaas(): ?bool
    {
        return $this->isPaas;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

