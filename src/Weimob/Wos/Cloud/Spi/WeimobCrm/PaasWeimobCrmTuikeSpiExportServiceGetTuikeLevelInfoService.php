<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobCrm;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 485
 * @author weimobcloud
 * @create 2023-5-26
 */
interface PaasWeimobCrmTuikeSpiExportServiceGetTuikeLevelInfoService
{
    const specType = 'wos';

    public function invoke(WeimobCrmTuikeSpiExportServiceGetTuikeLevelInfoRequest $request) : WeimobCrmTuikeSpiExportServiceGetTuikeLevelInfoResponse;
}

class WeimobCrmTuikeSpiExportServiceGetTuikeLevelInfoRequest implements \JsonSerializable
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
     * @var WeimobCrmTuikeSpiExportServiceGetTuikeLevelInfoParam
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
     * @param WeimobCrmTuikeSpiExportServiceGetTuikeLevelInfoParam $param
     */
    public function setParams(?WeimobCrmTuikeSpiExportServiceGetTuikeLevelInfoParam $param): void
    {
        $this->params = $param;
    }

    /**
     * @return WeimobCrmTuikeSpiExportServiceGetTuikeLevelInfoParam
     */
    public function getParams(): ?WeimobCrmTuikeSpiExportServiceGetTuikeLevelInfoParam
    {
        return $this->params;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCrmTuikeSpiExportServiceGetTuikeLevelInfoParam implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobCrmTuikeSpiExportServiceGetTuikeLevelInfoResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobCrmTuikeSpiExportServiceGetTuikeLevelInfoData
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
     * @return WeimobCrmTuikeSpiExportServiceGetTuikeLevelInfoData
     */
    public function getData(): ?WeimobCrmTuikeSpiExportServiceGetTuikeLevelInfoData
    {
        return $this->data;
    }

    /**
     * @param WeimobCrmTuikeSpiExportServiceGetTuikeLevelInfoData $data
     */
    public function setData(?WeimobCrmTuikeSpiExportServiceGetTuikeLevelInfoData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCrmTuikeSpiExportServiceGetTuikeLevelInfoData implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

