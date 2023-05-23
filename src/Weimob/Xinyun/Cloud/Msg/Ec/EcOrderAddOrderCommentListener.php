<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Ec;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,904
 * @author weimobcloud
 * @create 2023-5-23
 */
interface EcOrderAddOrderCommentListener
{
    const topic = 'ec_order';
    const event = 'addOrderComment';
    const classType = AddOrderCommentMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class AddOrderCommentMessage implements \JsonSerializable
{
    /**
     * 订单商品评价List
     * @var array
     */
    private $goodsComments;

    /**
     * 订单号
     * @var int
     */
    private $orderNo;

    /**
     * 服务态度等级（1-5分）
     * @var int
     */
    private $serviceAttitudeScore;

    /**
     * 物流评论等级（1-5分）
     * @var int
     */
    private $logisticsServiceScore;

    /**
     * @param array $goodsComments
     */
    public function setGoodsComments(?array $goodsComments): void
    {
        $this->goodsComments = $goodsComments;
    }

    /**
     * @return array
     */
    public function getGoodsComments(): ?array
    {
        return $this->goodsComments;
    }

    /**
     * @param int $orderNo
     */
    public function setOrderNo(?int $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }

    /**
     * @param int $serviceAttitudeScore
     */
    public function setServiceAttitudeScore(?int $serviceAttitudeScore): void
    {
        $this->serviceAttitudeScore = $serviceAttitudeScore;
    }

    /**
     * @return int
     */
    public function getServiceAttitudeScore(): ?int
    {
        return $this->serviceAttitudeScore;
    }

    /**
     * @param int $logisticsServiceScore
     */
    public function setLogisticsServiceScore(?int $logisticsServiceScore): void
    {
        $this->logisticsServiceScore = $logisticsServiceScore;
    }

    /**
     * @return int
     */
    public function getLogisticsServiceScore(): ?int
    {
        return $this->logisticsServiceScore;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class EcOrderAddOrderCommentGoodsComments implements \JsonSerializable
{
    /**
     * 用户头像图片地址
     * @var string
     */
    private $userImageUrl;

    /**
     * 用户昵称
     * @var string
     */
    private $userNickname;

    /**
     * 商品名称
     * @var string
     */
    private $goodsTitle;

    /**
     * 商品图片地址
     * @var string
     */
    private $goodsIndexImage;

    /**
     * 评论等级（1-5分）
     * @var int
     */
    private $commentScore;

    /**
     * 评论内容（1:好2:中3:差）
     * @var int
     */
    private $commentLevel;

    /**
     * 评论内容
     * @var string
     */
    private $commentContent;

    /**
     * 评论的图片地址list，json
     * @var string
     */
    private $commentImageUrl;

    /**
     * 评论视频地址
     * @var string
     */
    private $commentVideoUrl;

    /**
     * 评论视频图片地址(不播放时的展示图片)
     * @var string
     */
    private $commentVideoImageUrl;

    /**
     * 是否系统自评（0：否，1：是）
     * @var string
     */
    private $isAutoComment;

    /**
     * @param string $userImageUrl
     */
    public function setUserImageUrl(?string $userImageUrl): void
    {
        $this->userImageUrl = $userImageUrl;
    }

    /**
     * @return string
     */
    public function getUserImageUrl(): ?string
    {
        return $this->userImageUrl;
    }

    /**
     * @param string $userNickname
     */
    public function setUserNickname(?string $userNickname): void
    {
        $this->userNickname = $userNickname;
    }

    /**
     * @return string
     */
    public function getUserNickname(): ?string
    {
        return $this->userNickname;
    }

    /**
     * @param string $goodsTitle
     */
    public function setGoodsTitle(?string $goodsTitle): void
    {
        $this->goodsTitle = $goodsTitle;
    }

    /**
     * @return string
     */
    public function getGoodsTitle(): ?string
    {
        return $this->goodsTitle;
    }

    /**
     * @param string $goodsIndexImage
     */
    public function setGoodsIndexImage(?string $goodsIndexImage): void
    {
        $this->goodsIndexImage = $goodsIndexImage;
    }

    /**
     * @return string
     */
    public function getGoodsIndexImage(): ?string
    {
        return $this->goodsIndexImage;
    }

    /**
     * @param int $commentScore
     */
    public function setCommentScore(?int $commentScore): void
    {
        $this->commentScore = $commentScore;
    }

    /**
     * @return int
     */
    public function getCommentScore(): ?int
    {
        return $this->commentScore;
    }

    /**
     * @param int $commentLevel
     */
    public function setCommentLevel(?int $commentLevel): void
    {
        $this->commentLevel = $commentLevel;
    }

    /**
     * @return int
     */
    public function getCommentLevel(): ?int
    {
        return $this->commentLevel;
    }

    /**
     * @param string $commentContent
     */
    public function setCommentContent(?string $commentContent): void
    {
        $this->commentContent = $commentContent;
    }

    /**
     * @return string
     */
    public function getCommentContent(): ?string
    {
        return $this->commentContent;
    }

    /**
     * @param string $commentImageUrl
     */
    public function setCommentImageUrl(?string $commentImageUrl): void
    {
        $this->commentImageUrl = $commentImageUrl;
    }

    /**
     * @return string
     */
    public function getCommentImageUrl(): ?string
    {
        return $this->commentImageUrl;
    }

    /**
     * @param string $commentVideoUrl
     */
    public function setCommentVideoUrl(?string $commentVideoUrl): void
    {
        $this->commentVideoUrl = $commentVideoUrl;
    }

    /**
     * @return string
     */
    public function getCommentVideoUrl(): ?string
    {
        return $this->commentVideoUrl;
    }

    /**
     * @param string $commentVideoImageUrl
     */
    public function setCommentVideoImageUrl(?string $commentVideoImageUrl): void
    {
        $this->commentVideoImageUrl = $commentVideoImageUrl;
    }

    /**
     * @return string
     */
    public function getCommentVideoImageUrl(): ?string
    {
        return $this->commentVideoImageUrl;
    }

    /**
     * @param string $isAutoComment
     */
    public function setIsAutoComment(?string $isAutoComment): void
    {
        $this->isAutoComment = $isAutoComment;
    }

    /**
     * @return string
     */
    public function getIsAutoComment(): ?string
    {
        return $this->isAutoComment;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

