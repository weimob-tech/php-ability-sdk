<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,391
 * @author weimobcloud
 * @create 2023-5-23
 */
interface PaasRefundPointService
{
    const specType = 'xinyun';

    public function execute(SRefundPointRequest $request) : SRefundPointResponse;
}

class SRefundPointRequest implements \JsonSerializable
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
     * @var SRefundPointParam
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
     * @param SRefundPointParam $param
     */
    public function setParam(?SRefundPointParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return SRefundPointParam
     */
    public function getParam(): ?SRefundPointParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class SRefundPointResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SRefundPointData
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
     * @return SRefundPointData
     */
    public function getData(): ?SRefundPointData
    {
        return $this->data;
    }

    /**
     * @param SRefundPointData $data
     */
    public function setData(?SRefundPointData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SRefundPointData implements \JsonSerializable
{
    /**
     * 退还积分
     * @var int
     */
    private $refundPoint;

    /**
     * 当前积分（使用后）
     * @var int
     */
    private $currentPoint;

    /**
     * @param int $refundPoint
     */
    public function setRefundPoint(?int $refundPoint): void
    {
        $this->refundPoint = $refundPoint;
    }

    /**
     * @return int
     */
    public function getRefundPoint(): ?int
    {
        return $this->refundPoint;
    }

    /**
     * @param int $currentPoint
     */
    public function setCurrentPoint(?int $currentPoint): void
    {
        $this->currentPoint = $currentPoint;
    }

    /**
     * @return int
     */
    public function getCurrentPoint(): ?int
    {
        return $this->currentPoint;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

