<?php
/**
 * TOP API: taobao.onebp.display.campaign.group.query request
 * 
 * @author auto create
 * @since 1.0, 2021.12.09
 */
class OnebpDisplayCampaignGroupQueryRequest
{
	/** 
	 * 计划组查询信息
	 **/
	private $campaignGroupPageQueryInfo;
	
	private $apiParas = array();
	
	public function setCampaignGroupPageQueryInfo($campaignGroupPageQueryInfo)
	{
		$this->campaignGroupPageQueryInfo = $campaignGroupPageQueryInfo;
		$this->apiParas["campaign_group_page_query_info"] = $campaignGroupPageQueryInfo;
	}

	public function getCampaignGroupPageQueryInfo()
	{
		return $this->campaignGroupPageQueryInfo;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.campaign.group.query";
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
