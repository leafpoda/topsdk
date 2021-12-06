<?php
/**
 * dingtalk API: dingtalk.oapi.user.listadmin request
 * 
 * @author auto create
 * @since 1.0, 2020.09.13
 */
class OapiUserListadminRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.user.listadmin";
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
