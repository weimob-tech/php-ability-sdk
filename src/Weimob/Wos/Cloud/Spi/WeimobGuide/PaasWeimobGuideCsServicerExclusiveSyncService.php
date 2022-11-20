<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 725
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobGuideCsServicerExclusiveSyncService
{
    const specType = 'wos';

    public function invoke(WeimobGuideCsServicerExclusiveSyncRequest $request) : WeimobGuideCsServicerExclusiveSyncResponse;
}

class WeimobGuideCsServicerExclusiveSyncRequest implements \JsonSerializable
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
     * @var WeimobGuideCsServicerExclusiveSyncParam
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
     * @param WeimobGuideCsServicerExclusiveSyncParam $param
     */
    public function setParam(?WeimobGuideCsServicerExclusiveSyncParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobGuideCsServicerExclusiveSyncParam
     */
    public function getParam(): ?WeimobGuideCsServicerExclusiveSyncParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCsServicerExclusiveSyncParam implements \JsonSerializable
{
    /**
     * 商业操作系统ID
     * @var int
     */
    private $bosId;

    /**
     * 专属客服类型
     * @var int
     */
    private $exclusiveType;

    /**
     * 客服产品实例id
     * @var int
     */
    private $targetProductInstanceId;

    /**
     * 客服id集合
     * @var array
     */
    private $servicerIdList;

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
     * @param int $exclusiveType
     */
    public function setExclusiveType(?int $exclusiveType): void
    {
        $this->exclusiveType = $exclusiveType;
    }

    /**
     * @return int
     */
    public function getExclusiveType(): ?int
    {
        return $this->exclusiveType;
    }

    /**
     * @param int $targetProductInstanceId
     */
    public function setTargetProductInstanceId(?int $targetProductInstanceId): void
    {
        $this->targetProductInstanceId = $targetProductInstanceId;
    }

    /**
     * @return int
     */
    public function getTargetProductInstanceId(): ?int
    {
        return $this->targetProductInstanceId;
    }

    /**
     * @param array $servicerIdList
     */
    public function setServicerIdList(?array $servicerIdList): void
    {
        $this->servicerIdList = $servicerIdList;
    }

    /**
     * @return array
     */
    public function getServicerIdList(): ?array
    {
        return $this->servicerIdList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideCsServicerExclusiveSyncResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobGuideCsServicerExclusiveSyncData
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
     * @return WeimobGuideCsServicerExclusiveSyncData
     */
    public function getData(): ?WeimobGuideCsServicerExclusiveSyncData
    {
        return $this->data;
    }

    /**
     * @param WeimobGuideCsServicerExclusiveSyncData $data
     */
    public function setData(?WeimobGuideCsServicerExclusiveSyncData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCsServicerExclusiveSyncData implements \JsonSerializable
{
    /**
     * 是否成功
     * @var bool
     */
    private $success;

    /**
     * @param bool $success
     */
    public function setSuccess(?bool $success): void
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

