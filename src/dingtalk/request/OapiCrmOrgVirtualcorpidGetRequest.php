<?php
/**
 * dingtalk API: dingtalk.oapi.crm.org.virtualcorpid.get request
 * 
 * @author auto create
 * @since 1.0, 2020.09.24
 */
class OapiCrmOrgVirtualcorpidGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.crm.org.virtualcorpid.get";
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
