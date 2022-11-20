<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobShop;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,401
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobShopGoodsClassifyUpdateListener
{
    const topic = 'weimob_shop.goods.classify';
    const event = 'update';
    const classType = UpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateMessage implements \JsonSerializable
{
    /**
    * 分组ID集合
    * @var array
    */
    private $classifyIdList;

    /**
    * 组织架构节点ID
    * @var int
    */
    private $vid;

    /**
    * @param array $classifyIdList
    */
    public function setClassifyIdList(?array $classifyIdList)
    {
        $this->classifyIdList = $classifyIdList;
    }

    /**
    * @return array
    */
    public function getClassifyIdList(): ?array
    {
        return $this->classifyIdList;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

