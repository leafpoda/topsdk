<?php
/**
 * dingtalk API: dingtalk.oapi.finance.userAuthInfo.query request
 * 
 * @author auto create
 * @since 1.0, 2021.02.03
 */
class OapiFinanceUserAuthInfoQueryRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.finance.userAuthInfo.query";
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
