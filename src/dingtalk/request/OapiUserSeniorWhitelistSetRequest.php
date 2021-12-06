<?php
/**
 * dingtalk API: dingtalk.oapi.user.senior.whitelist.set request
 * 
 * @author auto create
 * @since 1.0, 2020.09.15
 */
class OapiUserSeniorWhitelistSetRequest
{
	/** 
	 * 高管白名单设置请求对象
	 **/
	private $seniorWhitelistRequest;
	
	private $apiParas = array();
	
	public function setSeniorWhitelistRequest($seniorWhitelistRequest)
	{
		$this->seniorWhitelistRequest = $seniorWhitelistRequest;
		$this->apiParas["senior_whitelist_request"] = $seniorWhitelistRequest;
	}

	public function getSeniorWhitelistRequest()
	{
		return $this->seniorWhitelistRequest;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.user.senior.whitelist.set";
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
