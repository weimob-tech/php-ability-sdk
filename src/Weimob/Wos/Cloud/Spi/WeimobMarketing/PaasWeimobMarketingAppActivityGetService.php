<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobMarketing;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 941
 * @author weimobcloud
 * @create 2023-5-26
 */
interface PaasWeimobMarketingAppActivityGetService
{
    const specType = 'wos';

    public function invoke(WeimobMarketingAppActivityGetRequest $request) : WeimobMarketingAppActivityGetResponse;
}

class WeimobMarketingAppActivityGetRequest implements \JsonSerializable
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
     * @var WeimobMarketingAppActivityGetParam
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
     * @param WeimobMarketingAppActivityGetParam $param
     */
    public function setParams(?WeimobMarketingAppActivityGetParam $param): void
    {
        $this->params = $param;
    }

    /**
     * @return WeimobMarketingAppActivityGetParam
     */
    public function getParams(): ?WeimobMarketingAppActivityGetParam
    {
        return $this->params;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobMarketingAppActivityGetParam implements \JsonSerializable
{
    /**
     * 业务方activityId
     * @var int
     */
    private $activityId;

    /**
     * 业务方活动bosId
     * @var int
     */
    private $bosId;

    /**
     * 业务方活动wid
     * @var int
     */
    private $wid;

    /**
     * 操作currentVid
     * @var int
     */
    private $currentVid;

    /**
     * 操作currentBosId
     * @var int
     */
    private $currentBosId;

    /**
     * 业务方活动productId
     * @var int
     */
    private $productId;

    /**
     * 业务方活动productInstanceId
     * @var int
     */
    private $productInstanceId;

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


class WeimobMarketingAppActivityGetResponse implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var PaasResponseCode
     */
    private $code;

    /**
     * 请求返回的数据
     * @var WeimobMarketingAppActivityGetData
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
     * @return WeimobMarketingAppActivityGetData
     */
    public function getData(): ?WeimobMarketingAppActivityGetData
    {
        return $this->data;
    }

    /**
     * @param WeimobMarketingAppActivityGetData $data
     */
    public function setData(?WeimobMarketingAppActivityGetData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobMarketingAppActivityGetData implements \JsonSerializable
{
    /**
     * 适用范围
     * @var array
     */
    private $vNodes;

    /**
     * 投放渠道
     * @var array
     */
    private $qrCodes;

    /**
     * id
     * @var int
     */
    private $id;

    /**
     * 业务方bosId
     * @var int
     */
    private $bosId;

    /**
     * 业务方productId
     * @var int
     */
    private $productId;

    /**
     * 业务方productInstanceId
     * @var int
     */
    private $productInstanceId;

    /**
     * 业务方活动创建的vid
     * @var int
     */
    private $vid;

    /**
     * 业务方活动创建的vidType
     * @var int
     */
    private $vidType;

    /**
     * 业务方activityId
     * @var int
     */
    private $activityId;

    /**
     * 业务方activityName
     * @var string
     */
    private $activityName;

    /**
     * 业务方活动图片
     * @var string
     */
    private $activityPic;

    /**
     * 业务方活动描述
     * @var string
     */
    private $activityDesc;

    /**
     * 开始时间
     * @var string
     */
    private $startTime;

    /**
     * 结束时间
     * @var string
     */
    private $endTime;

    /**
     * 是否适用所有节点
     * @var bool
     */
    private $matchAllVid;

    /**
     * 活动状态   (-5, "未创建"),    (0, "未开始"),    (10, "预热"),    (15, "进行中"),    (20, "暂停"),    (25, "结束"),    (30, "删除")
     * @var int
     */
    private $status;

    /**
     * @param array $vNodes
     */
    public function setVNodes(?array $vNodes): void
    {
        $this->vNodes = $vNodes;
    }

    /**
     * @return array
     */
    public function getVNodes(): ?array
    {
        return $this->vNodes;
    }

    /**
     * @param array $qrCodes
     */
    public function setQrCodes(?array $qrCodes): void
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
     * @param int $vidType
     */
    public function setVidType(?int $vidType): void
    {
        $this->vidType = $vidType;
    }

    /**
     * @return int
     */
    public function getVidType(): ?int
    {
        return $this->vidType;
    }

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
     * @param string $activityName
     */
    public function setActivityName(?string $activityName): void
    {
        $this->activityName = $activityName;
    }

    /**
     * @return string
     */
    public function getActivityName(): ?string
    {
        return $this->activityName;
    }

    /**
     * @param string $activityPic
     */
    public function setActivityPic(?string $activityPic): void
    {
        $this->activityPic = $activityPic;
    }

    /**
     * @return string
     */
    public function getActivityPic(): ?string
    {
        return $this->activityPic;
    }

    /**
     * @param string $activityDesc
     */
    public function setActivityDesc(?string $activityDesc): void
    {
        $this->activityDesc = $activityDesc;
    }

    /**
     * @return string
     */
    public function getActivityDesc(): ?string
    {
        return $this->activityDesc;
    }

    /**
     * @param string $startTime
     */
    public function setStartTime(?string $startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * @param string $endTime
     */
    public function setEndTime(?string $endTime): void
    {
        $this->endTime = $endTime;
    }

    /**
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @param bool $matchAllVid
     */
    public function setMatchAllVid(?bool $matchAllVid): void
    {
        $this->matchAllVid = $matchAllVid;
    }

    /**
     * @return bool
     */
    public function getMatchAllVid(): ?bool
    {
        return $this->matchAllVid;
    }

    /**
     * @param int $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobMarketingAppActivityGetDataVNodes implements \JsonSerializable
{
    /**
     * bosId
     * @var int
     */
    private $bosId;

    /**
     * productId
     * @var int
     */
    private $productId;

    /**
     * productInstanceId
     * @var int
     */
    private $productInstanceId;

    /**
     * id
     * @var int
     */
    private $id;

    /**
     * name
     * @var string
     */
    private $name;

    /**
     * avatar
     * @var string
     */
    private $avatar;

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

    /**
     * @param string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $avatar
     */
    public function setAvatar(?string $avatar): void
    {
        $this->avatar = $avatar;
    }

    /**
     * @return string
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobMarketingAppActivityGetDataQrCodes implements \JsonSerializable
{
    /**
     * 渠道名称
     * @var int
     */
    private $channel;

    /**
     * 渠道名称
     * @var string
     */
    private $name;

    /**
     * 链接
     * @var string
     */
    private $url;

    /**
     * 页面
     * @var string
     */
    private $page;

    /**
     * @param int $channel
     */
    public function setChannel(?int $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @return int
     */
    public function getChannel(): ?int
    {
        return $this->channel;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $page
     */
    public function setPage(?string $page): void
    {
        $this->page = $page;
    }

    /**
     * @return string
     */
    public function getPage(): ?string
    {
        return $this->page;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

