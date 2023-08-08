<?php
/**
 * TOP API: taobao.universalbp.campaigngroup.findlist request
 * 
 * @author auto create
 * @since 1.0, 2023.08.04
 */
class UniversalbpCampaigngroupFindlistRequest
{
	/** 
	 * campaignGroupQueryVO
	 **/
	private $campaignGroupQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCampaignGroupQueryVO($campaignGroupQueryVO)
	{
		$this->campaignGroupQueryVO = $campaignGroupQueryVO;
		$this->apiParas["campaign_group_query_v_o"] = $campaignGroupQueryVO;
	}

	public function getCampaignGroupQueryVO()
	{
		return $this->campaignGroupQueryVO;
	}

	public function setTopServiceContext($topServiceContext)
	{
		$this->topServiceContext = $topServiceContext;
		$this->apiParas["top_service_context"] = $topServiceContext;
	}

	public function getTopServiceContext()
	{
		return $this->topServiceContext;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.campaigngroup.findlist";
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
