<?php

namespace WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobShop;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,402
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface WeimobShopGoodsClassifyCreateListener
{
    const topic = 'weimob_shop.goods.classify';
    const event = 'create';
    const classType = CreateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateMessage implements \JsonSerializable
{
    /**
     * 分组ID
     * @var int
     */
    private $classifyId;

    /**
     * 组织架构节点ID

     * @var int
     */
    private $vid;

    /**
     * @param int $classifyId
     */
    public function setClassifyId(?int $classifyId): void
    {
        $this->classifyId = $classifyId;
    }

    /**
     * @return int
     */
    public function getClassifyId(): ?int
    {
        return $this->classifyId;
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

