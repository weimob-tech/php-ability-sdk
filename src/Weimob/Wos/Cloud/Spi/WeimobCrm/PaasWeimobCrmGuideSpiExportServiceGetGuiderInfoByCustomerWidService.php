<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 484
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobCrmGuideSpiExportServiceGetGuiderInfoByCustomerWidService
{
    const specType = 'wos';

    public function invoke(WeimobCrmGuideSpiExportServiceGetGuiderInfoByCustomerWidRequest $request) : WeimobCrmGuideSpiExportServiceGetGuiderInfoByCustomerWidResponse;
}

class WeimobCrmGuideSpiExportServiceGetGuiderInfoByCustomerWidRequest implements \JsonSerializable
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
     * @var WeimobCrmGuideSpiExportServiceGetGuiderInfoByCustomerWidParam
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
     * @param WeimobCrmGuideSpiExportServiceGetGuiderInfoByCustomerWidParam $param
     */
    public function setParam(?WeimobCrmGuideSpiExportServiceGetGuiderInfoByCustomerWidParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobCrmGuideSpiExportServiceGetGuiderInfoByCustomerWidParam
     */
    public function getParam(): ?WeimobCrmGuideSpiExportServiceGetGuiderInfoByCustomerWidParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCrmGuideSpiExportServiceGetGuiderInfoByCustomerWidParam implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobCrmGuideSpiExportServiceGetGuiderInfoByCustomerWidResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobCrmGuideSpiExportServiceGetGuiderInfoByCustomerWidData
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
     * @return WeimobCrmGuideSpiExportServiceGetGuiderInfoByCustomerWidData
     */
    public function getData(): ?WeimobCrmGuideSpiExportServiceGetGuiderInfoByCustomerWidData
    {
        return $this->data;
    }

    /**
     * @param WeimobCrmGuideSpiExportServiceGetGuiderInfoByCustomerWidData $data
     */
    public function setData(?WeimobCrmGuideSpiExportServiceGetGuiderInfoByCustomerWidData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCrmGuideSpiExportServiceGetGuiderInfoByCustomerWidData implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

