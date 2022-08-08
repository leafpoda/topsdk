<?php
/**
 * TOP API: taobao.onebp.dkx.campaign.campaign.add request
 * 
 * @author auto create
 * @since 1.0, 2022.08.08
 */
class OnebpDkxCampaignCampaignAddRequest
{
	/** 
	 * 请求体
	 **/
	private $apiServiceContext;
	
	/** 
	 * 创建计划入参
	 **/
	private $solutionResult;
	
	private $apiParas = array();
	
	public function setApiServiceContext($apiServiceContext)
	{
		$this->apiServiceContext = $apiServiceContext;
		$this->apiParas["api_service_context"] = $apiServiceContext;
	}

	public function getApiServiceContext()
	{
		return $this->apiServiceContext;
	}

	public function setSolutionResult($solutionResult)
	{
		$this->solutionResult = $solutionResult;
		$this->apiParas["solution_result"] = $solutionResult;
	}

	public function getSolutionResult()
	{
		return $this->solutionResult;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.dkx.campaign.campaign.add";
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
