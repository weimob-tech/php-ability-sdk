<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 748
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobGuideCustomerConsumeGetListService
{
    const specType = 'wos';

    public function invoke(WeimobGuideCustomerConsumeGetListRequest $request) : WeimobGuideCustomerConsumeGetListResponse;
}

class WeimobGuideCustomerConsumeGetListRequest implements \JsonSerializable
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
    * @var WeimobGuideCustomerConsumeGetListParam
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
    * @param WeimobGuideCustomerConsumeGetListParam $param
    */
    public function setParam(?WeimobGuideCustomerConsumeGetListParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobGuideCustomerConsumeGetListParam
    */
    public function getParam(): ?WeimobGuideCustomerConsumeGetListParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerConsumeGetListParam implements \JsonSerializable
{
    /**
    * 客户wid
    * @var array
    */
    private $widList;

    /**
    * 组织结构节点	
    * @var int
    */
    private $vid;

    /**
    * 产品实例id	
    * @var int
    */
    private $productInstanceId;

    /**
    * 商业操作系统ID	
    * @var int
    */
    private $bosId;

    /**
    * 组织结构节点类型	
    * @var int
    */
    private $vidType	;

    /**
    * @param array $widList
    */
    public function setWidList(?array $widList)
    {
        $this->widList = $widList;
    }

    /**
    * @return array
    */
    public function getWidList(): ?array
    {
        return $this->widList;
    }

    /**
    * @param int $vid
    */
    public function setVid(?int $vid)
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
    * @param int $productInstanceId
    */
    public function setProductInstanceId(?int $productInstanceId)
    {
        $this->productInstanceId = $productInstanceId;
    }

    /**
    * @return int
    */
    public function getProductInstanceId(): ?int
    {
        return $this->productInstanceId;
    }

    /**
    * @param int $bosId
    */
    public function setBosId(?int $bosId)
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
    * @param int $vidType	
    */
    public function setVidType	(?int $vidType	)
    {
        $this->vidType	 = $vidType	;
    }

    /**
    * @return int
    */
    public function getVidType	(): ?int
    {
        return $this->vidType	;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerConsumeGetListParamWidList implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideCustomerConsumeGetListResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobGuideCustomerConsumeGetListData
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
    * @return WeimobGuideCustomerConsumeGetListData
    */
    public function getData(): ?WeimobGuideCustomerConsumeGetListData
    {
        return $this->data;
    }

    /**
    * @param WeimobGuideCustomerConsumeGetListData $data
    */
    public function setData(?WeimobGuideCustomerConsumeGetListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideCustomerConsumeGetListData implements \JsonSerializable
{
    /**
    * wid
    * @var string
    */
    private $ukey;

    /**
    * 总的消费金额
    * @var int
    */
    private $totalConsumptionAmount;

    /**
    * 总的消费次数
    * @var int
    */
    private $totalConsumptionCount;

    /**
    * 最近支付时间
    * @var int
    */
    private $lastPayTime;

    /**
    * @param string $ukey
    */
    public function setUkey(?string $ukey)
    {
        $this->ukey = $ukey;
    }

    /**
    * @return string
    */
    public function getUkey(): ?string
    {
        return $this->ukey;
    }

    /**
    * @param int $totalConsumptionAmount
    */
    public function setTotalConsumptionAmount(?int $totalConsumptionAmount)
    {
        $this->totalConsumptionAmount = $totalConsumptionAmount;
    }

    /**
    * @return int
    */
    public function getTotalConsumptionAmount(): ?int
    {
        return $this->totalConsumptionAmount;
    }

    /**
    * @param int $totalConsumptionCount
    */
    public function setTotalConsumptionCount(?int $totalConsumptionCount)
    {
        $this->totalConsumptionCount = $totalConsumptionCount;
    }

    /**
    * @return int
    */
    public function getTotalConsumptionCount(): ?int
    {
        return $this->totalConsumptionCount;
    }

    /**
    * @param int $lastPayTime
    */
    public function setLastPayTime(?int $lastPayTime)
    {
        $this->lastPayTime = $lastPayTime;
    }

    /**
    * @return int
    */
    public function getLastPayTime(): ?int
    {
        return $this->lastPayTime;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

