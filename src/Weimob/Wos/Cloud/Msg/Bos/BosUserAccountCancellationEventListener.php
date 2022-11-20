<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\Bos;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,366
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface BosUserAccountCancellationEventListener
{
    const topic = 'bos.user';
    const event = 'accountCancellationEvent';
    const classType = AccountCancellationEventMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class AccountCancellationEventMessage implements \JsonSerializable
{
    /**
     * 账号渠道列表
     * @var array
     */
    private $widSourceList;

    /**
     * wid
     * @var int
     */
    private $wid;

    /**
     * 商户id
     * @var int
     */
    private $bosId;

    /**
     * 注销时间（废弃，用time）
     * @var int
     */
    private $logoutTime;

    /**
     * 注销时间
     * @var int
     */
    private $time;

    /**
     * @param array $widSourceList
     */
    public function setWidSourceList(?array $widSourceList): void
    {
        $this->widSourceList = $widSourceList;
    }

    /**
     * @return array
     */
    public function getWidSourceList(): ?array
    {
        return $this->widSourceList;
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
     * @param int $logoutTime
     */
    public function setLogoutTime(?int $logoutTime): void
    {
        $this->logoutTime = $logoutTime;
    }

    /**
     * @return int
     */
    public function getLogoutTime(): ?int
    {
        return $this->logoutTime;
    }

    /**
     * @param int $time
     */
    public function setTime(?int $time): void
    {
        $this->time = $time;
    }

    /**
     * @return int
     */
    public function getTime(): ?int
    {
        return $this->time;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class BosUserAccountCancellationEventWidSourceList implements \JsonSerializable
{
    /**
     * 渠道类型渠道类型(0:微信公众号，1:微信小程序，2:unionId（微信渠道），3:weimobopenid，4:手机号，6:企业微信，7:百度小程序，8:swanid（百度渠道），9:达摩用户，10:通用免登用户，11:虚拟WID，13:微信id，14:微信号，16:企业微信外部联系人，20:字节小程序，21:业务用户，22:QQ小程序, 23:QQ互联UNIONID, 24:支付宝，25:快手小程序)        
     * @var int
     */
    private $source;

    /**
     * 三方应用id
     * @var string
     */
    private $appId;

    /**
     * 三方渠道账号id
     * @var string
     */
    private $originalId;

    /**
     * 创建时间
     * @var int
     */
    private $gmtCreate;

    /**
     * 修改时间
     * @var int
     */
    private $gmtModified;

    /**
     * @param int $source
     */
    public function setSource(?int $source): void
    {
        $this->source = $source;
    }

    /**
     * @return int
     */
    public function getSource(): ?int
    {
        return $this->source;
    }

    /**
     * @param string $appId
     */
    public function setAppId(?string $appId): void
    {
        $this->appId = $appId;
    }

    /**
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * @param string $originalId
     */
    public function setOriginalId(?string $originalId): void
    {
        $this->originalId = $originalId;
    }

    /**
     * @return string
     */
    public function getOriginalId(): ?string
    {
        return $this->originalId;
    }

    /**
     * @param int $gmtCreate
     */
    public function setGmtCreate(?int $gmtCreate): void
    {
        $this->gmtCreate = $gmtCreate;
    }

    /**
     * @return int
     */
    public function getGmtCreate(): ?int
    {
        return $this->gmtCreate;
    }

    /**
     * @param int $gmtModified
     */
    public function setGmtModified(?int $gmtModified): void
    {
        $this->gmtModified = $gmtModified;
    }

    /**
     * @return int
     */
    public function getGmtModified(): ?int
    {
        return $this->gmtModified;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

