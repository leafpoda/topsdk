<?php
/**
 * TOP API: taobao.zuanshi.advertiser.campaign.rtrpts.total.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class ZuanshiAdvertiserCampaignRtrptsTotalGetRequest
{
	/** 
	 * 计划id
	 **/
	private $campaignId;
	
	/** 
	 * 计划类型。1：全店推广，4：单品推广。
	 **/
	private $campaignModel;
	
	/** 
	 * 日期
	 **/
	private $logDate;
	
	/** 
	 * 偏移量
	 **/
	private $offset;
	
	/** 
	 * 每页记录数
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setCampaignId($campaignId)
	{
		$this->campaignId = $campaignId;
		$this->apiParas["campaign_id"] = $campaignId;
	}

	public function getCampaignId()
	{
		return $this->campaignId;
	}

	public function setCampaignModel($campaignModel)
	{
		$this->campaignModel = $campaignModel;
		$this->apiParas["campaign_model"] = $campaignModel;
	}

	public function getCampaignModel()
	{
		return $this->campaignModel;
	}

	public function setLogDate($logDate)
	{
		$this->logDate = $logDate;
		$this->apiParas["log_date"] = $logDate;
	}

	public function getLogDate()
	{
		return $this->logDate;
	}

	public function setOffset($offset)
	{
		$this->offset = $offset;
		$this->apiParas["offset"] = $offset;
	}

	public function getOffset()
	{
		return $this->offset;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.advertiser.campaign.rtrpts.total.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignModel,"campaignModel");
		RequestCheckUtil::checkNotNull($this->logDate,"logDate");
		RequestCheckUtil::checkNotNull($this->offset,"offset");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
