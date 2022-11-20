<?php

namespace WeimobAbility\Weimob\Cloud\Msg\Common;

/**
 * 消息响应参数
 * author bokang.li
 */
class WeimobMessageAck implements \JsonSerializable
{
    /**
     * 请求返回的对象
     * @var Code
     */
    var $code;

    /**
     * @return Code
     */
    public function getCode(): Code
    {
        return $this->code;
    }

    /**
     * @param Code $code
     */
    public function setCode(Code $code): void
    {
        $this->code = $code;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}

class Code implements \JsonSerializable
{
    //请求返回的状态码
    var $errcode;
    //请求返回的信息
    var $errmsg;

    /**
     * @return mixed
     */
    public function getErrcode()
    {
        return $this->errcode;
    }

    /**
     * @param mixed $errcode
     */
    public function setErrcode($errcode): void
    {
        $this->errcode = $errcode;
    }

    /**
     * @return mixed
     */
    public function getErrmsg()
    {
        return $this->errmsg;
    }

    /**
     * @param mixed $errmsg
     */
    public function setErrmsg($errmsg): void
    {
        $this->errmsg = $errmsg;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}