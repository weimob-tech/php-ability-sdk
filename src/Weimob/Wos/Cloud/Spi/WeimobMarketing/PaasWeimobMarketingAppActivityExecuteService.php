<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobMarketing;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 940
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface PaasWeimobMarketingAppActivityExecuteService
{
    const specType = 'wos';

    public function invoke(WeimobMarketingAppActivityExecuteRequest $request) : WeimobMarketingAppActivityExecuteResponse;
}

class WeimobMarketingAppActivityExecuteRequest implements \JsonSerializable
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
     * @var WeimobMarketingAppActivityExecuteParam
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
     * @param WeimobMarketingAppActivityExecuteParam $param
     */
    public function setParam(?WeimobMarketingAppActivityExecuteParam $param): void
    {
        $this->param = $param;
    }

    /**
     * @return WeimobMarketingAppActivityExecuteParam
     */
    public function getParam(): ?WeimobMarketingAppActivityExecuteParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobMarketingAppActivityExecuteParam implements \JsonSerializable
{
    /**
     * 业务方活动ID
     * @var int
     */
    private $activityId;

    /**
     * 业务方活动所属bosId
     * @var int
     */
    private $bosId;

    /**
     * 业务方活动所属产品ID
     * @var int
     */
    private $productId;

    /**
     * 业务方活动所属产品实例ID
     * @var int
     */
    private $productInstanceId;

    /**
     * 操作所属bosID
     * @var int
     */
    private $currentBosId;

    /**
     * 操作所属currentVid
     * @var int
     */
    private $currentVid;

    /**
     * 操作人
     * @var int
     */
    private $wid;

    /**
     * 动作    CREATE(1, "创建"),    UPDATE(5, "更新"),    WARMUP(10, "预热"),    START(15, "开启"),    PAUSE(20, "暂停"),    CLOSE(25, "结束"),    DELETE(30, "删除"),    OPERATE(35, "操作");
     * @var string
     */
    private $action;

    /**
     * 微盟活动ID
     * @var int
     */
    private $id;

    /**
     * @param int $activityId
     */
    public function setActivityId(?int $activityId): void
    {
        $this->activityId = $activityId;
    }

    /**
     * @return int
     */
    public function getActivityId(): ?int
    {
        return $this->activityId;
    }

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
     * @param int $productId
     */
    public function setProductId(?int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int $productInstanceId
     */
    public function setProductInstanceId(?int $productInstanceId): void
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
     * @param int $currentBosId
     */
    public function setCurrentBosId(?int $currentBosId): void
    {
        $this->currentBosId = $currentBosId;
    }

    /**
     * @return int
     */
    public function getCurrentBosId(): ?int
    {
        return $this->currentBosId;
    }

    /**
     * @param int $currentVid
     */
    public function setCurrentVid(?int $currentVid): void
    {
        $this->currentVid = $currentVid;
    }

    /**
     * @return int
     */
    public function getCurrentVid(): ?int
    {
        return $this->currentVid;
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
     * @param string $action
     */
    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    /**
     * @return string
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobMarketingAppActivityExecuteResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobMarketingAppActivityExecuteData
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
     * @return WeimobMarketingAppActivityExecuteData
     */
    public function getData(): ?WeimobMarketingAppActivityExecuteData
    {
        return $this->data;
    }

    /**
     * @param WeimobMarketingAppActivityExecuteData $data
     */
    public function setData(?WeimobMarketingAppActivityExecuteData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobMarketingAppActivityExecuteData implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

