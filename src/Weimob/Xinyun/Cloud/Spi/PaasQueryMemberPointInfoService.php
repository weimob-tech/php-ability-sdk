<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,349
 * @author weimobcloud
 * @create 2023-5-29
 */
interface PaasQueryMemberPointInfoService
{
    const specType = 'xinyun';

    public function execute(SQueryMemberPointInfoRequest $request) : SQueryMemberPointInfoResponse;
}

class SQueryMemberPointInfoRequest implements \JsonSerializable
{
    /**
    * 商业操作系统ID（解决方案体系）
    * @var int
    */
    private $pid;

    /**
    * 签名
    * @var string
    */
    private $sign;

    /**
    * 发送方时间戳，验签的时候使用
    * @var string
    */
    private $timestamp;

    /**
    * @var SQueryMemberPointInfoParam
    */
    private $params;

    /**
    * 商业操作系统ID（产品方案体系）
    * @var int
    */
    private $bosId;

    /**
    * actionKey
    * @var string
    */
    private $actionKey;

    /**
    * 组织结构节点ID
    * @var int
    */
    private $vid;

    /**
    * 组织结构节点类型
    * @var int
    */
    private $vType;

    /**
    *  源产品id
    * @var int
    */
    private $originProductId;

    /**
    * 目标产品id
    * @var int
    */
    private $targetProductId;

    /**
    * 源代产品实例id
    * @var int
    */
    private $originProductInstanceId;

    /**
    * 目标产品实例id
    * @var int
    */
    private $targetProductInstanceId;

    /**
    * 功能集ID
    * @var int
    */
    private $functionId;

    /**
    * @return int
    */
    public function getPid(): ?int
    {
        return $this->pid;
    }

    /**
    * @param int $pid
    */
    public function setPid(?int $pid): void
    {
        $this->pid = $pid;
    }

    /**
    * @return string
    */
    public function getSign(): ?string
    {
        return $this->sign;
    }

    /**
    * @param string $sign
    */
    public function setSign(?string $sign): void
    {
        $this->sign = $sign;
    }

    /**
    * @return string
    */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }

    /**
    * @param string $timestamp
    */
    public function setTimestamp(?string $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
    * @param SQueryMemberPointInfoParam $param
    */
    public function setParams(?SQueryMemberPointInfoParam $param): void
    {
        $this->params = $param;
    }

    /**
    * @return SQueryMemberPointInfoParam
    */
    public function getParams(): ?SQueryMemberPointInfoParam
    {
        return $this->params;
    }

    /**
    * @return int
    */
    public function getBosId(): ?int
    {
        return $this->bosId;
    }

    /**
    * @param int $bosId
    */
    public function setBosId(?int $bosId): void
    {
        $this->bosId = $bosId;
    }

    /**
    * @return string
    */
    public function getActionKey(): ?string
    {
        return $this->actionKey;
    }

    /**
    * @param string $actionKey
    */
    public function setActionKey(?string $actionKey): void
    {
        $this->actionKey = $actionKey;
    }

    /**
    * @return int
    */
    public function getVid(): ?int
    {
        return $this->vid;
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
    public function getVType(): ?int
    {
        return $this->vType;
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
    public function getOriginProductId(): ?int
    {
        return $this->originProductId;
    }

    /**
    * @param int $originProductId
    */
    public function setOriginProductId(?int $originProductId): void
    {
        $this->originProductId = $originProductId;
    }

    /**
    * @return int
    */
    public function getTargetProductId(): ?int
    {
        return $this->targetProductId;
    }

    /**
    * @param int $targetProductId
    */
    public function setTargetProductId(?int $targetProductId): void
    {
        $this->targetProductId = $targetProductId;
    }

    /**
    * @return int
    */
    public function getOriginProductInstanceId(): ?int
    {
        return $this->originProductInstanceId;
    }

    /**
    * @param int $originProductInstanceId
    */
    public function setOriginProductInstanceId(?int $originProductInstanceId): void
    {
        $this->originProductInstanceId = $originProductInstanceId;
    }

    /**
    * @return int
    */
    public function getTargetProductInstanceId(): ?int
    {
        return $this->targetProductInstanceId;
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
    public function getFunctionId(): ?int
    {
        return $this->functionId;
    }

    /**
    * @param int $functionId
    */
    public function setFunctionId(?int $functionId): void
    {
        $this->functionId = $functionId;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class SQueryMemberPointInfoResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var SQueryMemberPointInfoData
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
     * @return SQueryMemberPointInfoData
     */
    public function getData(): ?SQueryMemberPointInfoData
    {
        return $this->data;
    }

    /**
     * @param SQueryMemberPointInfoData $data
     */
    public function setData(?SQueryMemberPointInfoData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class SQueryMemberPointInfoData implements \JsonSerializable
{
    /**
     * 用户可用积分，用户当前积分减去用户已锁定积分，无则返回0
     * @var int
     */
    private $availablePoint;

    /**
     * 用户当前积分，无则返回0
     * @var int
     */
    private $currentPoint;

    /**
     * 累计获得总积分，无则返回0
     * @var int
     */
    private $totalPoint;

    /**
     * @param int $availablePoint
     */
    public function setAvailablePoint(?int $availablePoint): void
    {
        $this->availablePoint = $availablePoint;
    }

    /**
     * @return int
     */
    public function getAvailablePoint(): ?int
    {
        return $this->availablePoint;
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
     * @param int $totalPoint
     */
    public function setTotalPoint(?int $totalPoint): void
    {
        $this->totalPoint = $totalPoint;
    }

    /**
     * @return int
     */
    public function getTotalPoint(): ?int
    {
        return $this->totalPoint;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

