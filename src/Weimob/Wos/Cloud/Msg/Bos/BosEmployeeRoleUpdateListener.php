<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\Bos;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,388
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface BosEmployeeRoleUpdateListener
{
    const topic = 'bos.employee.role';
    const event = 'update';
    const classType = UpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateMessage implements \JsonSerializable
{
    /**
    * 员工组织角色变更详情集合
    * @var array
    */
    private $operateRelations;

    /**
    * 账号id	
    * @var int
    */
    private $wid;

    /**
    * @param array $operateRelations
    */
    public function setOperateRelations(?array $operateRelations)
    {
        $this->operateRelations = $operateRelations;
    }

    /**
    * @return array
    */
    public function getOperateRelations(): ?array
    {
        return $this->operateRelations;
    }

    /**
    * @param int $wid
    */
    public function setWid(?int $wid)
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class BosEmployeeRoleUpdateOperateRelations implements \JsonSerializable
{
    /**
    * 节点集合
    * @var array
    */
    private $vidRelationDetailList;

    /**
    * 角色id
    * @var int
    */
    private $roleId;

    /**
    * 角色类型，0:产品默认角色,1:系统定义角色,5:系统默认管理员角色,6:系统默认普通角色,7:自定义角色,8:节点类型管理员角色,9:自定义节点角色
    * @var int
    */
    private $roleType;

    /**
    * 系统角色扩展属性，roleType为6的角色会有
    * @var string
    */
    private $extendAttr;

    /**
    * @param array $vidRelationDetailList
    */
    public function setVidRelationDetailList(?array $vidRelationDetailList)
    {
        $this->vidRelationDetailList = $vidRelationDetailList;
    }

    /**
    * @return array
    */
    public function getVidRelationDetailList(): ?array
    {
        return $this->vidRelationDetailList;
    }

    /**
    * @param int $roleId
    */
    public function setRoleId(?int $roleId)
    {
        $this->roleId = $roleId;
    }

    /**
    * @return int
    */
    public function getRoleId(): ?int
    {
        return $this->roleId;
    }

    /**
    * @param int $roleType
    */
    public function setRoleType(?int $roleType)
    {
        $this->roleType = $roleType;
    }

    /**
    * @return int
    */
    public function getRoleType(): ?int
    {
        return $this->roleType;
    }

    /**
    * @param string $extendAttr
    */
    public function setExtendAttr(?string $extendAttr)
    {
        $this->extendAttr = $extendAttr;
    }

    /**
    * @return string
    */
    public function getExtendAttr(): ?string
    {
        return $this->extendAttr;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class BosEmployeeRoleUpdateVidRelationDetailList implements \JsonSerializable
{
    /**
    * 节点集合
    * @var array
    */
    private $vidList;

    /**
    * 关系最终状态，0 生效，1 删除
    * @var int
    */
    private $finalStatus;

    /**
    * @param array $vidList
    */
    public function setVidList(?array $vidList)
    {
        $this->vidList = $vidList;
    }

    /**
    * @return array
    */
    public function getVidList(): ?array
    {
        return $this->vidList;
    }

    /**
    * @param int $finalStatus
    */
    public function setFinalStatus(?int $finalStatus)
    {
        $this->finalStatus = $finalStatus;
    }

    /**
    * @return int
    */
    public function getFinalStatus(): ?int
    {
        return $this->finalStatus;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

