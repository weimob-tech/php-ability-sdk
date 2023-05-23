<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,559
 * @author weimobcloud
 * @create 2023-5-23
 */
interface PaasAddUserGrowthService
{
    const specType = 'xinyun';

    public function execute(SAddUserGrowthRequest $request) : SAddUserGrowthResponse;
}

class SAddUserGrowthRequest implements \JsonSerializable
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
     * @var SAddUserGrowthParam
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
     * @param SAddUserGrowthParam $param
     */
    public function setParam(?SAddUserGrowthParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return SAddUserGrowthParam
     */
    public function getParam(): ?SAddUserGrowthParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class SAddUserGrowthResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SAddUserGrowthData
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
     * @return SAddUserGrowthData
     */
    public function getData(): ?SAddUserGrowthData
    {
        return $this->data;
    }

    /**
     * @param SAddUserGrowthData $data
     */
    public function setData(?SAddUserGrowthData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SAddUserGrowthData implements \JsonSerializable
{
    /**
     * 当前成长值
     * @var int
     */
    private $currentGrowth;

    /**
     * @param int $currentGrowth
     */
    public function setCurrentGrowth(?int $currentGrowth): void
    {
        $this->currentGrowth = $currentGrowth;
    }

    /**
     * @return int
     */
    public function getCurrentGrowth(): ?int
    {
        return $this->currentGrowth;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

