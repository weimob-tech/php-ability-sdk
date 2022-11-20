<?php

namespace WeimobAbility\Weimob\Cloud\Spi\Common;

/**
 * SPI响应参数
 * author bokang.li
 */
class PaasResponseCode implements \JsonSerializable
{
    /**
     * 	请求返回的状态码
     * @var string
     */
    private $errcode;

    /**
     * 	请求返回的状态码
     * @var string
     */
    private $errmsg;

    /**
     * @return string
     */
    public function getErrcode(): string
    {
        return $this->errcode;
    }

    /**
     * @param string $errcode
     */
    public function setErrcode(string $errcode): void
    {
        $this->errcode = $errcode;
    }

    /**
     * @return string
     */
    public function getErrmsg(): string
    {
        return $this->errmsg;
    }

    /**
     * @param string $errmsg
     */
    public function setErrmsg(string $errmsg): void
    {
        $this->errmsg = $errmsg;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}