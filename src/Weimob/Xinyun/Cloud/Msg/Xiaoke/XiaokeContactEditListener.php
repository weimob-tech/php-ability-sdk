<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Xiaoke;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,883
 * @author weimobcloud
 * @create 2023-5-23
 */
interface XiaokeContactEditListener
{
    const topic = 'xiaoke_contact';
    const event = 'edit';
    const classType = EditMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class EditMessage implements \JsonSerializable
{
    /**
     * 更新的具体字段数据
     * @var XiaokeContactEditFieldKeyValue
     */
    private $fieldKeyValue;

    /**
     * 更新数据的唯一标识
     * @var string
     */
    private $id;

    /**
     * @param XiaokeContactEditFieldKeyValue $fieldKeyValue
     */
    public function setFieldKeyValue(?XiaokeContactEditFieldKeyValue $fieldKeyValue): void
    {
        $this->fieldKeyValue = $fieldKeyValue;
    }

    /**
     * @return XiaokeContactEditFieldKeyValue
     */
    public function getFieldKeyValue(): ?XiaokeContactEditFieldKeyValue
    {
        return $this->fieldKeyValue;
    }

    /**
     * @param string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class XiaokeContactEditFieldKeyValue implements \JsonSerializable
{
    /**
     * 联系人名称
     * @var string
     */
    private $s_contact_name;

    /**
     * 电话
     * @var string
     */
    private $s_telephone;

    /**
     * 手机
     * @var string
     */
    private $s_mobile_phone;

    /**
     * 关联的客户ID
     * @var string
     */
    private $s_customer_key;

    /**
     * 性别
     * @var string
     */
    private $s_gender;

    /**
     * 职位
     * @var string
     */
    private $s_post;

    /**
     * 生日
     * @var int
     */
    private $s_birthday;

    /**
     * QQ号码
     * @var string
     */
    private $s_qq;

    /**
     * @param string $s_contact_name
     */
    public function setSContactName(?string $s_contact_name): void
    {
        $this->s_contact_name = $s_contact_name;
    }

    /**
     * @return string
     */
    public function getSContactName(): ?string
    {
        return $this->s_contact_name;
    }

    /**
     * @param string $s_telephone
     */
    public function setSTelephone(?string $s_telephone): void
    {
        $this->s_telephone = $s_telephone;
    }

    /**
     * @return string
     */
    public function getSTelephone(): ?string
    {
        return $this->s_telephone;
    }

    /**
     * @param string $s_mobile_phone
     */
    public function setSMobilePhone(?string $s_mobile_phone): void
    {
        $this->s_mobile_phone = $s_mobile_phone;
    }

    /**
     * @return string
     */
    public function getSMobilePhone(): ?string
    {
        return $this->s_mobile_phone;
    }

    /**
     * @param string $s_customer_key
     */
    public function setSCustomerKey(?string $s_customer_key): void
    {
        $this->s_customer_key = $s_customer_key;
    }

    /**
     * @return string
     */
    public function getSCustomerKey(): ?string
    {
        return $this->s_customer_key;
    }

    /**
     * @param string $s_gender
     */
    public function setSGender(?string $s_gender): void
    {
        $this->s_gender = $s_gender;
    }

    /**
     * @return string
     */
    public function getSGender(): ?string
    {
        return $this->s_gender;
    }

    /**
     * @param string $s_post
     */
    public function setSPost(?string $s_post): void
    {
        $this->s_post = $s_post;
    }

    /**
     * @return string
     */
    public function getSPost(): ?string
    {
        return $this->s_post;
    }

    /**
     * @param int $s_birthday
     */
    public function setSBirthday(?int $s_birthday): void
    {
        $this->s_birthday = $s_birthday;
    }

    /**
     * @return int
     */
    public function getSBirthday(): ?int
    {
        return $this->s_birthday;
    }

    /**
     * @param string $s_qq
     */
    public function setSQq(?string $s_qq): void
    {
        $this->s_qq = $s_qq;
    }

    /**
     * @return string
     */
    public function getSQq(): ?string
    {
        return $this->s_qq;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

