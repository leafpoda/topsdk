<?php
/**
 * dingtalk API: dingtalk.oapi.hire.onboarding.guide.complete request
 * 
 * @author auto create
 * @since 1.0, 2020.08.30
 */
class OapiHireOnboardingGuideCompleteRequest
{
	/** 
	 * 引导步骤名称
	 **/
	private $guideName;
	
	private $apiParas = array();
	
	public function setGuideName($guideName)
	{
		$this->guideName = $guideName;
		$this->apiParas["guide_name"] = $guideName;
	}

	public function getGuideName()
	{
		return $this->guideName;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.hire.onboarding.guide.complete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->guideName,"guideName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
