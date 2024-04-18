<?php
/**
 * TOP API: taobao.fastlive.duration.solution.modify request
 * 
 * @author auto create
 * @since 1.0, 2024.04.18
 */
class FastliveDurationSolutionModifyRequest
{
	/** 
	 * 计划信息
	 **/
	private $paramCampaign;
	
	private $apiParas = array();
	
	public function setParamCampaign($paramCampaign)
	{
		$this->paramCampaign = $paramCampaign;
		$this->apiParas["param_campaign"] = $paramCampaign;
	}

	public function getParamCampaign()
	{
		return $this->paramCampaign;
	}

	public function getApiMethodName()
	{
		return "taobao.fastlive.duration.solution.modify";
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
