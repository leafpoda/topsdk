<?php
/**
 * dingtalk API: dingtalk.oapi.industry.organization.get request
 * 
 * @author auto create
 * @since 1.0, 2020.08.05
 */
class OapiIndustryOrganizationGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.industry.organization.get";
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
