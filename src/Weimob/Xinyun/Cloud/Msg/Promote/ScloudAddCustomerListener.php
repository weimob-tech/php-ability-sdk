<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Promote;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,269
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface ScloudAddCustomerListener
{
    const topic = 'scloud';
    const event = 'addCustomer';
    const classType = AddCustomerMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class AddCustomerMessage implements \JsonSerializable
{
    /**
     * 客户标签
     * @var array
     */
    private $tag;

    /**
     * 客户ID
     * @var int
     */
    private $id;

    /**
     * 客户WID
     * @var int
     */
    private $customerWid;

    /**
     * 微信昵称
     * @var string
     */
    private $nickname;

    /**
     * 微信头像Url
     * @var string
     */
    private $avatarUrl;

    /**
     * 真实姓名
     * @var string
     */
    private $realName;

    /**
     * 手机号
     * @var string
     */
    private $phone;

    /**
     * 创建时间戳
     * @var int
     */
    private $createTime;

    /**
     * 最后活跃时间戳
     * @var int
     */
    private $lastActiveTime;

    /**
     * 微信号
     * @var string
     */
    private $wxId;

    /**
     * 客户生日时间戳
     * @var int
     */
    private $birthday;

    /**
     * 客户所在城市
     * @var string
     */
    private $city;

    /**
     * 客户所在公司
     * @var string
     */
    private $corpName;

    /**
     * 客户所从事的工作
     * @var string
     */
    private $job;

    /**
     * 备注
     * @var string
     */
    private $remark;

    /**
     * 客户来源
     * @var string
     */
    private $source;

    /**
     * 跟进阶段
     * @var string
     */
    private $followStage;

    /**
     * 预计成交率
     * @var int
     */
    private $turnoverRate;

    /**
     * 员工（跟进人）wid
     * @var int
     */
    private $employeeWid;

    /**
     * 员工（跟进人）名称
     * @var string
     */
    private $employeeName;

    /**
     * 员工 (跟进人)微信userId
     * @var string
     */
    private $employeeUserId;

    /**
     * 首次联系时间戳
     * @var int
     */
    private $firstContactTime;

    /**
     * @param array $tag
     */
    public function setTag(?array $tag): void
    {
        $this->tag = $tag;
    }

    /**
     * @return array
     */
    public function getTag(): ?array
    {
        return $this->tag;
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
     * @param int $customerWid
     */
    public function setCustomerWid(?int $customerWid): void
    {
        $this->customerWid = $customerWid;
    }

    /**
     * @return int
     */
    public function getCustomerWid(): ?int
    {
        return $this->customerWid;
    }

    /**
     * @param string $nickname
     */
    public function setNickname(?string $nickname): void
    {
        $this->nickname = $nickname;
    }

    /**
     * @return string
     */
    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    /**
     * @param string $avatarUrl
     */
    public function setAvatarUrl(?string $avatarUrl): void
    {
        $this->avatarUrl = $avatarUrl;
    }

    /**
     * @return string
     */
    public function getAvatarUrl(): ?string
    {
        return $this->avatarUrl;
    }

    /**
     * @param string $realName
     */
    public function setRealName(?string $realName): void
    {
        $this->realName = $realName;
    }

    /**
     * @return string
     */
    public function getRealName(): ?string
    {
        return $this->realName;
    }

    /**
     * @param string $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param int $createTime
     */
    public function setCreateTime(?int $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * @param int $lastActiveTime
     */
    public function setLastActiveTime(?int $lastActiveTime): void
    {
        $this->lastActiveTime = $lastActiveTime;
    }

    /**
     * @return int
     */
    public function getLastActiveTime(): ?int
    {
        return $this->lastActiveTime;
    }

    /**
     * @param string $wxId
     */
    public function setWxId(?string $wxId): void
    {
        $this->wxId = $wxId;
    }

    /**
     * @return string
     */
    public function getWxId(): ?string
    {
        return $this->wxId;
    }

    /**
     * @param int $birthday
     */
    public function setBirthday(?int $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return int
     */
    public function getBirthday(): ?int
    {
        return $this->birthday;
    }

    /**
     * @param string $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $corpName
     */
    public function setCorpName(?string $corpName): void
    {
        $this->corpName = $corpName;
    }

    /**
     * @return string
     */
    public function getCorpName(): ?string
    {
        return $this->corpName;
    }

    /**
     * @param string $job
     */
    public function setJob(?string $job): void
    {
        $this->job = $job;
    }

    /**
     * @return string
     */
    public function getJob(): ?string
    {
        return $this->job;
    }

    /**
     * @param string $remark
     */
    public function setRemark(?string $remark): void
    {
        $this->remark = $remark;
    }

    /**
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @param string $source
     */
    public function setSource(?string $source): void
    {
        $this->source = $source;
    }

    /**
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string $followStage
     */
    public function setFollowStage(?string $followStage): void
    {
        $this->followStage = $followStage;
    }

    /**
     * @return string
     */
    public function getFollowStage(): ?string
    {
        return $this->followStage;
    }

    /**
     * @param int $turnoverRate
     */
    public function setTurnoverRate(?int $turnoverRate): void
    {
        $this->turnoverRate = $turnoverRate;
    }

    /**
     * @return int
     */
    public function getTurnoverRate(): ?int
    {
        return $this->turnoverRate;
    }

    /**
     * @param int $employeeWid
     */
    public function setEmployeeWid(?int $employeeWid): void
    {
        $this->employeeWid = $employeeWid;
    }

    /**
     * @return int
     */
    public function getEmployeeWid(): ?int
    {
        return $this->employeeWid;
    }

    /**
     * @param string $employeeName
     */
    public function setEmployeeName(?string $employeeName): void
    {
        $this->employeeName = $employeeName;
    }

    /**
     * @return string
     */
    public function getEmployeeName(): ?string
    {
        return $this->employeeName;
    }

    /**
     * @param string $employeeUserId
     */
    public function setEmployeeUserId(?string $employeeUserId): void
    {
        $this->employeeUserId = $employeeUserId;
    }

    /**
     * @return string
     */
    public function getEmployeeUserId(): ?string
    {
        return $this->employeeUserId;
    }

    /**
     * @param int $firstContactTime
     */
    public function setFirstContactTime(?int $firstContactTime): void
    {
        $this->firstContactTime = $firstContactTime;
    }

    /**
     * @return int
     */
    public function getFirstContactTime(): ?int
    {
        return $this->firstContactTime;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

