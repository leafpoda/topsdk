<?php
/**
 * TOP API: taobao.onebp.dkx.campaign.campaign.noreport request
 * 
 * @author auto create
 * @since 1.0, 2021.10.08
 */
class OnebpDkxCampaignCampaignNoreportRequest
{
	/** 
	 * 请求体
	 **/
	private $apiServiceContext;
	
	/** 
	 * 计划查询参数
	 **/
	private $campaignQuery;
	
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
		return "taobao.onebp.dkx.campaign.campaign.noreport";
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
