<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,392
 * @author weimobcloud
 * @create 2023-5-23
 */
interface PaasAddPointService
{
    const specType = 'xinyun';

    public function execute(SAddPointRequest $request) : SAddPointResponse;
}

class SAddPointRequest implements \JsonSerializable
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
     * @var SAddPointParam
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
     * @param SAddPointParam $param
     */
    public function setParam(?SAddPointParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return SAddPointParam
     */
    public function getParam(): ?SAddPointParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class SAddPointResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SAddPointData
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
     * @return SAddPointData
     */
    public function getData(): ?SAddPointData
    {
        return $this->data;
    }

    /**
     * @param SAddPointData $data
     */
    public function setData(?SAddPointData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SAddPointData implements \JsonSerializable
{
    /**
     * 商户id
     * @var int
     */
    private $pid;

    /**
     * 会员wid
     * @var int
     */
    private $wid;

    /**
     * 会员卡code
     * @var string
     */
    private $code;

    /**
     * 变更积分
     * @var int
     */
    private $changePoint;

    /**
     * 当前积分
     * @var int
     */
    private $currentPoint;

    /**
     * 积分记录id
     * @var int
     */
    private $pointLogId;

    /**
     * @param int $pid
     */
    public function setPid(?int $pid): void
    {
        $this->pid = $pid;
    }

    /**
     * @return int
     */
    public function getPid(): ?int
    {
        return $this->pid;
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
     * @param string $code
     */
    public function setCode(?string $code): void
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
     * @param int $changePoint
     */
    public function setChangePoint(?int $changePoint): void
    {
        $this->changePoint = $changePoint;
    }

    /**
     * @return int
     */
    public function getChangePoint(): ?int
    {
        return $this->changePoint;
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

    /**
     * @param int $pointLogId
     */
    public function setPointLogId(?int $pointLogId): void
    {
        $this->pointLogId = $pointLogId;
    }

    /**
     * @return int
     */
    public function getPointLogId(): ?int
    {
        return $this->pointLogId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

