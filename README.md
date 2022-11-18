# php-ability-sdk
微盟云开放平台的PHP项目的能力SDK，根据开放能力的元数据规范，提供一套PHP语言的能力定义，帮助开发者减少开发成本，使其可以快速接入微盟云的开放生态。

## 介绍
### 功能列表
* SPI能力定义
	* Interface
	* Request
	* Response
* MSG能力定义
	* Listener
	* Message

### 项目结构

```
|-- composer.json
|-- README.md
|-- LICENSE
|-- .gitignore
|-- src/                         # 源码目录
|   |-- Weimob/Wos/Cloud/        # Wos开放能力
|       |-- Spi/                 # SPI能力定义
|       |-- Msg/                 # MSG能力定义
|   |-- Weimob/Xinyun/Cloud/     # Xinyun开放能力
|       |-- Spi/                 # SPI能力定义
|       |-- Msg/                 # MSG能力定义
```

## 快速开始
1. 使用composer管理包，在php项目工程的composer.json添加依赖
	
	``` json
	"require": {
		... 
		"weimob-cloud/php-ability-sdk": "${last_version}"
	}
	```
2. 安装包，使用composer命令
	* composer install
	* composer update
	* composer dumpautoload
	* composer ... [详细文档](https://getcomposer.org/)
3. Spi实现

	``` php
	//实现SPI的逻辑
	class DemoWosSpiImpl extends BaseFramework implements PaasWeimobShopCouponPaasBatchLockCouponService
	{
	    public function invoke(WeimobShopCouponPaasBatchLockCouponRequest $request): WeimobShopCouponPaasBatchLockCouponResponse
	    {
	        $paasResponse = new WeimobShopCouponPaasBatchLockCouponResponse();
	        $paasResponseCode = new PaasResponseCode();
	        $paasResponseCode->setErrcode("success");
	        $paasResponseCode->setErrmsg("success");
	
	        $data = new WeimobShopCouponPaasBatchLockCouponData();
	        $data->setSuccess(true);
	        $paasResponse->setData($data);
	        $paasResponse->setCode($paasResponseCode);
	
	        return $paasResponse;
	    }
	}
	
	//注册SPI实现
	$spiRegistry->register("demoSpiImpl",\WeimobCloudBootDemo\Ability\Spi\Wos\DemoWosSpiImpl::class,SpecTypeEnum::WOS);
	``` 
4. Msg实现

	``` php
	//实现消息订阅逻辑
	class DemoWosMsgListerner extends BaseFramework implements WeimobCrmBalanceChangeBalanceChangeListener
	{
	    public function onMessage(WeimobMessage $message) : WeimobMessageAck
	    {
	        $weimobMessageAck = new WeimobMessageAck();
	        $code = new Code();
	        $code->setErrcode("success");
	        $code->setErrmsg("成功");
	        $weimobMessageAck->setCode($code);
	
	        return $weimobMessageAck;
	    }
	}
	
	//订阅消息
	$msgSubscription->subscribe(new MsgInfo("weimob_crm.balance.change","balanceChange"),\WeimobCloudBootDemo\Ability\Msg\Wos\DemoWosMsgListerner::class,SpecTypeEnum::WOS);
	``` 

## 使用文档
* [能力文档](http://doc.weimobcloud.com/list?tag=2396&menuId=19&childMenuId=1&isold=2)
* [开发者入驻](http://doc.weimobcloud.com/word?menuId=46&childMenuId=47&tag=2970&isold=2)
* [应用开发](http://doc.weimobcloud.com/word?menuId=53&childMenuId=54&tag=2488&isold=2)
* [PHP工程](http://doc.weimobcloud.com/word?menuId=53&childMenuId=54&tag=2488&isold=2)

## 贡献方法
* 申请加入weimob_tech

## 联系我们
* Weimob-tech@weimob.com
