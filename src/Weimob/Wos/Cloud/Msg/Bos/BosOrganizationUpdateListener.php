<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\Bos;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,243
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface BosOrganizationUpdateListener
{
    const topic = 'bos.organization';
    const event = 'update';
    const classType = UpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateMessage implements \JsonSerializable
{
    /**
     * 组织编号
     * @var int
     */
    private $vid;

    /**
     * 变更类型，枚举值：1-创建组织、2-删除组织、3-组织变更父节、4-组织编码变更、5-组织状态变更
     * @var int
     */
    private $updateType;

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
     * @param int $updateType
     */
    public function setUpdateType(?int $updateType): void
    {
        $this->updateType = $updateType;
    }

    /**
     * @return int
     */
    public function getUpdateType(): ?int
    {
        return $this->updateType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

