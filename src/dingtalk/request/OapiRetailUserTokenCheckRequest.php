<?php
/**
 * dingtalk API: dingtalk.oapi.retail.user.token.check request
 * 
 * @author auto create
 * @since 1.0, 2020.03.09
 */
class OapiRetailUserTokenCheckRequest
{
	/** 
	 * 业务身份
	 **/
	private $channel;
	
	/** 
	 * token信息
	 **/
	private $token;
	
	private $apiParas = array();
	
	public function setChannel($channel)
	{
		$this->channel = $channel;
		$this->apiParas["channel"] = $channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}

	public function setToken($token)
	{
		$this->token = $token;
		$this->apiParas["token"] = $token;
	}

	public function getToken()
	{
		return $this->token;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.retail.user.token.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
