<?php
/**
 * TOP API: taobao.zuanshi.advertiser.rpts.download.hour.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiAdvertiserRptsDownloadHourGetRequest
{
	/** 
	 * 计划类型。1：全店推广；4单品推广
	 **/
	private $campaignModel;
	
	/** 
	 * 下载那种广告实体的数据取值范围 campaign,adgroup,creative,target,adzone,targetAdzone。一次一个，不能多个。
	 **/
	private $hierarchy;
	
	/** 
	 * 日期
	 **/
	private $logDate;
	
	private $apiParas = array();
	
	public function setCampaignModel($campaignModel)
	{
		$this->campaignModel = $campaignModel;
		$this->apiParas["campaign_model"] = $campaignModel;
	}

	public function getCampaignModel()
	{
		return $this->campaignModel;
	}

	public function setHierarchy($hierarchy)
	{
		$this->hierarchy = $hierarchy;
		$this->apiParas["hierarchy"] = $hierarchy;
	}

	public function getHierarchy()
	{
		return $this->hierarchy;
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

	public function getApiMethodName()
	{
		return "taobao.zuanshi.advertiser.rpts.download.hour.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignModel,"campaignModel");
		RequestCheckUtil::checkNotNull($this->hierarchy,"hierarchy");
		RequestCheckUtil::checkNotNull($this->logDate,"logDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
