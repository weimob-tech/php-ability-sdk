<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobAewc;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,422
 * @author weimobcloud
 * @create 2023-5-23
 */
interface WeimobAewcCustomerGroupAddMemberListener
{
    const topic = 'weimob_aewc.customer.group';
    const event = 'addMember';
    const classType = AddMemberMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class AddMemberMessage implements \JsonSerializable
{
    /**
     * 群中客户在微盟的唯一标识
     * @var int
     */
    private $wid;

    /**
     * 客户群ID
     * @var string
     */
    private $groupId;

    /**
     * 群中客户在腾讯侧的Id
     * @var string
     */
    private $memberId;

    /**
     * 群成员类型 1 员工 2 客户
     * @var int
     */
    private $type;

    /**
     * 客户入群时间
     * @var string
     */
    private $joinTime;

    /**
     * 入群方式 1 - 由成员邀请入群（直接邀请入群） 2 - 由成员邀请入群（通过邀请链接入群） 3 - 通过扫描群二维码入群
     * @var int
     */
    private $joinScene;

    /**
     * 客户昵称
     * @var string
     */
    private $nickname;

    /**
     * 客户在群里的昵称
     * @var string
     */
    private $groupNickname;

    /**
     * 邀请者在腾讯侧的ID
     * @var string
     */
    private $invitorOrgUserid;

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
     * @param string $groupId
     */
    public function setGroupId(?string $groupId): void
    {
        $this->groupId = $groupId;
    }

    /**
     * @return string
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    /**
     * @param string $memberId
     */
    public function setMemberId(?string $memberId): void
    {
        $this->memberId = $memberId;
    }

    /**
     * @return string
     */
    public function getMemberId(): ?string
    {
        return $this->memberId;
    }

    /**
     * @param int $type
     */
    public function setType(?int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param string $joinTime
     */
    public function setJoinTime(?string $joinTime): void
    {
        $this->joinTime = $joinTime;
    }

    /**
     * @return string
     */
    public function getJoinTime(): ?string
    {
        return $this->joinTime;
    }

    /**
     * @param int $joinScene
     */
    public function setJoinScene(?int $joinScene): void
    {
        $this->joinScene = $joinScene;
    }

    /**
     * @return int
     */
    public function getJoinScene(): ?int
    {
        return $this->joinScene;
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
     * @param string $groupNickname
     */
    public function setGroupNickname(?string $groupNickname): void
    {
        $this->groupNickname = $groupNickname;
    }

    /**
     * @return string
     */
    public function getGroupNickname(): ?string
    {
        return $this->groupNickname;
    }

    /**
     * @param string $invitorOrgUserid
     */
    public function setInvitorOrgUserid(?string $invitorOrgUserid): void
    {
        $this->invitorOrgUserid = $invitorOrgUserid;
    }

    /**
     * @return string
     */
    public function getInvitorOrgUserid(): ?string
    {
        return $this->invitorOrgUserid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

