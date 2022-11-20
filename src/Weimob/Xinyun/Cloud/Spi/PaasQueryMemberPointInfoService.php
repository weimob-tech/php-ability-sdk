<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Spi;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,349
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasQueryMemberPointInfoService
{
    const specType = 'xinyun';

    public function execute(SQueryMemberPointInfoRequest $request) : SQueryMemberPointInfoResponse;
}

class SQueryMemberPointInfoRequest implements \JsonSerializable
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
    * @var SQueryMemberPointInfoParam
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
    * @param SQueryMemberPointInfoParam $param
    */
    public function setParam(?SQueryMemberPointInfoParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return SQueryMemberPointInfoParam
    */
    public function getParam(): ?SQueryMemberPointInfoParam
    {
        return $this->param;
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
    public function setAvailablePoint(?int $availablePoint)
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
    public function setCurrentPoint(?int $currentPoint)
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
    public function setTotalPoint(?int $totalPoint)
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

