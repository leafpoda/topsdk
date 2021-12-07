<?php
/**
 * TOP API: taobao.onebp.display.campaign.delete request
 * 
 * @author auto create
 * @since 1.0, 2021.12.02
 */
class OnebpDisplayCampaignDeleteRequest
{
	/** 
	 * 计划查询条件
	 **/
	private $campaignPageQuery;
	
	private $apiParas = array();
	
	public function setCampaignPageQuery($campaignPageQuery)
	{
		$this->campaignPageQuery = $campaignPageQuery;
		$this->apiParas["campaign.page.query"] = $campaignPageQuery;
	}

	public function getCampaignPageQuery()
	{
		return $this->campaignPageQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.campaign.delete";
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
