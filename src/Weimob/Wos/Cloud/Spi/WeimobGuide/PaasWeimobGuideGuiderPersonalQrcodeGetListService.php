<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobGuide;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 1,375
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface PaasWeimobGuideGuiderPersonalQrcodeGetListService
{
    const specType = 'wos';

    public function invoke(WeimobGuideGuiderPersonalQrcodeGetListRequest $request) : WeimobGuideGuiderPersonalQrcodeGetListResponse;
}

class WeimobGuideGuiderPersonalQrcodeGetListRequest implements \JsonSerializable
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
    * @var WeimobGuideGuiderPersonalQrcodeGetListParam
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
    * @param WeimobGuideGuiderPersonalQrcodeGetListParam $param
    */
    public function setParam(?WeimobGuideGuiderPersonalQrcodeGetListParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobGuideGuiderPersonalQrcodeGetListParam
    */
    public function getParam(): ?WeimobGuideGuiderPersonalQrcodeGetListParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGuiderPersonalQrcodeGetListParam implements \JsonSerializable
{
    /**
    * 导购列表入参
    * @var array
    */
    private $guiderList;

    /**
    * @param array $guiderList
    */
    public function setGuiderList(?array $guiderList)
    {
        $this->guiderList = $guiderList;
    }

    /**
    * @return array
    */
    public function getGuiderList(): ?array
    {
        return $this->guiderList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGuiderPersonalQrcodeGetListParamGuiderList implements \JsonSerializable
{
    /**
    * 导购wid
    * @var int
    */
    private $guiderWid;

    /**
    * 导购员手机号
    * @var string
    */
    private $guiderPhone;

    /**
    * @param int $guiderWid
    */
    public function setGuiderWid(?int $guiderWid)
    {
        $this->guiderWid = $guiderWid;
    }

    /**
    * @return int
    */
    public function getGuiderWid(): ?int
    {
        return $this->guiderWid;
    }

    /**
    * @param string $guiderPhone
    */
    public function setGuiderPhone(?string $guiderPhone)
    {
        $this->guiderPhone = $guiderPhone;
    }

    /**
    * @return string
    */
    public function getGuiderPhone(): ?string
    {
        return $this->guiderPhone;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobGuideGuiderPersonalQrcodeGetListResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobGuideGuiderPersonalQrcodeGetListData
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
    * @return WeimobGuideGuiderPersonalQrcodeGetListData
    */
    public function getData(): ?WeimobGuideGuiderPersonalQrcodeGetListData
    {
        return $this->data;
    }

    /**
    * @param WeimobGuideGuiderPersonalQrcodeGetListData $data
    */
    public function setData(?WeimobGuideGuiderPersonalQrcodeGetListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGuiderPersonalQrcodeGetListData implements \JsonSerializable
{
    /**
    * 导购个人二维码列表
    * @var array
    */
    private $guiderList;

    /**
    * @param array $guiderList
    */
    public function setGuiderList(?array $guiderList)
    {
        $this->guiderList = $guiderList;
    }

    /**
    * @return array
    */
    public function getGuiderList(): ?array
    {
        return $this->guiderList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobGuideGuiderPersonalQrcodeGetListDataGuiderList implements \JsonSerializable
{
    /**
    * 导购wid
    * @var int
    */
    private $guiderWid;

    /**
    * 导购个人二维码（支持多个）
    * @var array
    */
    private $qrCodes;

    /**
    * @param int $guiderWid
    */
    public function setGuiderWid(?int $guiderWid)
    {
        $this->guiderWid = $guiderWid;
    }

    /**
    * @return int
    */
    public function getGuiderWid(): ?int
    {
        return $this->guiderWid;
    }

    /**
    * @param array $qrCodes
    */
    public function setQrCodes(?array $qrCodes)
    {
        $this->qrCodes = $qrCodes;
    }

    /**
    * @return array
    */
    public function getQrCodes(): ?array
    {
        return $this->qrCodes;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

