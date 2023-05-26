<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,393
 * @author weimobcloud
 * @create 2023-5-26
 */
interface PaasSubPointService
{
    const specType = 'xinyun';

    public function execute(SSubPointRequest $request) : SSubPointResponse;
}

class SSubPointRequest implements \JsonSerializable
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
     * @var SSubPointParam
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
     * @param SSubPointParam $param
     */
    public function setParams(?SSubPointParam $param): void
    {
        $this->params = $param;
    }

    /**
     * @return SSubPointParam
     */
    public function getParams(): ?SSubPointParam
    {
        return $this->params;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class SSubPointResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SSubPointData
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
     * @return SSubPointData
     */
    public function getData(): ?SSubPointData
    {
        return $this->data;
    }

    /**
     * @param SSubPointData $data
     */
    public function setData(?SSubPointData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SSubPointData implements \JsonSerializable
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

