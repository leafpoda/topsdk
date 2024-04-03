<?php
/**
 * TOP API: taobao.fastlive.duration.solution.page request
 * 
 * @author auto create
 * @since 1.0, 2024.04.03
 */
class FastliveDurationSolutionPageRequest
{
	/** 
	 * 入参
	 **/
	private $campaignQuery;
	
	private $apiParas = array();
	
	public function setCampaignQuery($campaignQuery)
	{
		$this->campaignQuery = $campaignQuery;
		$this->apiParas["campaign_query"] = $campaignQuery;
	}

	public function getCampaignQuery()
	{
		return $this->campaignQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.fastlive.duration.solution.page";
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
