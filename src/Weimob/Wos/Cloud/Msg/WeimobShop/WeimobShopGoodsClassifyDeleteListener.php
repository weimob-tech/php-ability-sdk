<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobShop;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,400
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface WeimobShopGoodsClassifyDeleteListener
{
    const topic = 'weimob_shop.goods.classify';
    const event = 'delete';
    const classType = DeleteMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class DeleteMessage implements \JsonSerializable
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
    public function setClassifyIdList(?array $classifyIdList): void
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

