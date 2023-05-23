<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobAewc;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,404
 * @author weimobcloud
 * @create 2023-5-23
 */
interface WeimobAewcCustomerAddMsgAddListener
{
    const topic = 'weimob_aewc.customer.add.msg';
    const event = 'add';
    const classType = AddMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class AddMessage implements \JsonSerializable
{
    /**
     * bosId
     * @var int
     */
    private $bosId;

    /**
     * 微盟侧wid
     * @var int
     */
    private $wid;

    /**
     * 添加时间
     * @var int
     */
    private $addTime;

    /**
     * 企微侧员工id
     * @var string
     */
    private $employeeId;

    /**
     * 腾讯侧企微客户id
     * @var string
     */
    private $externalUserId;

    /**
     * unionId目前密文场景下没有
     * @var string
     */
    private $unionid;

    /**
     * 腾讯侧员工Id
     * @var string
     */
    private $txUserId;

    /**
     * state 腾讯侧自定义字段
     * @var string
     */
    private $state;

    /**
     * 微盟侧客户id
     * @var string
     */
    private $customerId;

    /**
     * 客户昵称
     * @var string
     */
    private $name;

    /**
     *  企微侧欢迎语（如果腾讯侧welcomeCode为null，则填充默认值no_welcomeCode）
     * @var string
     */
    private $customWelcomeCode;

    /**
     * 腾讯侧欢迎语
     * @var string
     */
    private $welcomeCode;

    /**
     * 企业微信的唯一标识id
     * @var string
     */
    private $corpid;

    /**
     * 添加方式，具体如下
    UNKNOWN(0, "未知来源"),
    QR_CODE(1, "扫描二维码"),
    PHONE_SEARCH(2, "搜索手机号"),
    CARD_SHARE(3, "名片分享"),
    GROUP_CHAT(4, "群聊"),
    PHONE_CONTACT(5, "手机通讯录"),
    WECHAT_CONTACT(6, "微信联系人"),
    WECHAT_FRIEND_REQUEST(7, "来自微信的添加好友申请"),
    THIRD_ADP_ASSISTER(8, "安装第三方应用时自动添加的客服人员"),
    MAIL_SEARCH(9, "搜索邮箱"),
    WECHAT_VIDEO_CHANNEL(10, "视频号主页添加"),
    SCHEDULE_JOINER(11, "通过日程参与人添加"),
    MEETING_JOINER(12, "通过会议参与人添加"),
    WECHATWORK_FRIEND_TO_QI_YE_HAOYOU(13, "添加微信好友对应的企业微信"),
    ZHI_HUI_YING_JIAN_ZHUAN_SHU_KE_FU_ADD(14, "通过智慧硬件专属客服添加"),
    INNER_MEMBER_SHARE(201, "内部成员共享"),
    ADMIN_DISTRIBUTION(202, "管理员/负责人分配");
     * @var int
     */
    private $addWay;

    /**
     * 是否为历史外部联系人同步 0:否 1：是

     * @var int
     */
    private $historyCustomerSync;

    /**
     * 员工给客户的备注电话

     * @var array
     */
    private $remarkMobiles;

    /**
     * 外部联系人的类型，1表示该外部联系人是微信用户，2表示该外部联系人是企业微信用户
     * @var int
     */
    private $externalUserType;

    /**
     * 员工新增、成为好友时间、state相比历史state是否发生变化
     * @var bool
     */
    private $userStateChangeFlag;

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
     * @param int $addTime
     */
    public function setAddTime(?int $addTime): void
    {
        $this->addTime = $addTime;
    }

    /**
     * @return int
     */
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

    /**
     * @param string $employeeId
     */
    public function setEmployeeId(?string $employeeId): void
    {
        $this->employeeId = $employeeId;
    }

    /**
     * @return string
     */
    public function getEmployeeId(): ?string
    {
        return $this->employeeId;
    }

    /**
     * @param string $externalUserId
     */
    public function setExternalUserId(?string $externalUserId): void
    {
        $this->externalUserId = $externalUserId;
    }

    /**
     * @return string
     */
    public function getExternalUserId(): ?string
    {
        return $this->externalUserId;
    }

    /**
     * @param string $unionid
     */
    public function setUnionid(?string $unionid): void
    {
        $this->unionid = $unionid;
    }

    /**
     * @return string
     */
    public function getUnionid(): ?string
    {
        return $this->unionid;
    }

    /**
     * @param string $txUserId
     */
    public function setTxUserId(?string $txUserId): void
    {
        $this->txUserId = $txUserId;
    }

    /**
     * @return string
     */
    public function getTxUserId(): ?string
    {
        return $this->txUserId;
    }

    /**
     * @param string $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string $customerId
     */
    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * @return string
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
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
     * @param string $customWelcomeCode
     */
    public function setCustomWelcomeCode(?string $customWelcomeCode): void
    {
        $this->customWelcomeCode = $customWelcomeCode;
    }

    /**
     * @return string
     */
    public function getCustomWelcomeCode(): ?string
    {
        return $this->customWelcomeCode;
    }

    /**
     * @param string $welcomeCode
     */
    public function setWelcomeCode(?string $welcomeCode): void
    {
        $this->welcomeCode = $welcomeCode;
    }

    /**
     * @return string
     */
    public function getWelcomeCode(): ?string
    {
        return $this->welcomeCode;
    }

    /**
     * @param string $corpid
     */
    public function setCorpid(?string $corpid): void
    {
        $this->corpid = $corpid;
    }

    /**
     * @return string
     */
    public function getCorpid(): ?string
    {
        return $this->corpid;
    }

    /**
     * @param int $addWay
     */
    public function setAddWay(?int $addWay): void
    {
        $this->addWay = $addWay;
    }

    /**
     * @return int
     */
    public function getAddWay(): ?int
    {
        return $this->addWay;
    }

    /**
     * @param int $historyCustomerSync
     */
    public function setHistoryCustomerSync(?int $historyCustomerSync): void
    {
        $this->historyCustomerSync = $historyCustomerSync;
    }

    /**
     * @return int
     */
    public function getHistoryCustomerSync(): ?int
    {
        return $this->historyCustomerSync;
    }

    /**
     * @param array $remarkMobiles
     */
    public function setRemarkMobiles(?array $remarkMobiles): void
    {
        $this->remarkMobiles = $remarkMobiles;
    }

    /**
     * @return array
     */
    public function getRemarkMobiles(): ?array
    {
        return $this->remarkMobiles;
    }

    /**
     * @param int $externalUserType
     */
    public function setExternalUserType(?int $externalUserType): void
    {
        $this->externalUserType = $externalUserType;
    }

    /**
     * @return int
     */
    public function getExternalUserType(): ?int
    {
        return $this->externalUserType;
    }

    /**
     * @param bool $userStateChangeFlag
     */
    public function setUserStateChangeFlag(?bool $userStateChangeFlag): void
    {
        $this->userStateChangeFlag = $userStateChangeFlag;
    }

    /**
     * @return bool
     */
    public function getUserStateChangeFlag(): ?bool
    {
        return $this->userStateChangeFlag;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

