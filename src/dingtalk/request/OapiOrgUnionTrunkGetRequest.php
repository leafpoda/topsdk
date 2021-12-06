<?php
/**
 * dingtalk API: dingtalk.oapi.org.union.trunk.get request
 * 
 * @author auto create
 * @since 1.0, 2020.07.29
 */
class OapiOrgUnionTrunkGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.org.union.trunk.get";
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
