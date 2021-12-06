<?php
/**
 * dingtalk API: dingtalk.oapi.im.chat.scencegroup.interactivecard.callback.register request
 * 
 * @author auto create
 * @since 1.0, 2020.10.26
 */
class OapiImChatScencegroupInteractivecardCallbackRegisterRequest
{
	/** 
	 * 加密密钥用于校验来源
	 **/
	private $apiSecret;
	
	/** 
	 * 回调地址
	 **/
	private $callbackUrl;
	
	private $apiParas = array();
	
	public function setApiSecret($apiSecret)
	{
		$this->apiSecret = $apiSecret;
		$this->apiParas["api_secret"] = $apiSecret;
	}

	public function getApiSecret()
	{
		return $this->apiSecret;
	}

	public function setCallbackUrl($callbackUrl)
	{
		$this->callbackUrl = $callbackUrl;
		$this->apiParas["callback_url"] = $callbackUrl;
	}

	public function getCallbackUrl()
	{
		return $this->callbackUrl;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.im.chat.scencegroup.interactivecard.callback.register";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->callbackUrl,"callbackUrl");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
