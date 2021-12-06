<?php
/**
 * dingtalk API: dingtalk.oapi.hire.onboarding.get request
 * 
 * @author auto create
 * @since 1.0, 2020.09.11
 */
class OapiHireOnboardingGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.hire.onboarding.get";
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
