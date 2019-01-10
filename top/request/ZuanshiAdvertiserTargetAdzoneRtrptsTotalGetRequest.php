<?php
/**
 * TOP API: taobao.zuanshi.advertiser.target.adzone.rtrpts.total.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiAdvertiserTargetAdzoneRtrptsTotalGetRequest
{
	/** 
	 * 推广单元id
	 **/
	private $adgroupId;
	
	/** 
	 * 资源位id
	 **/
	private $adzoneId;
	
	/** 
	 * 计划id
	 **/
	private $campaignId;
	
	/** 
	 * 日期
	 **/
	private $logDate;
	
	/** 
	 * 分页偏移量
	 **/
	private $offset;
	
	/** 
	 * 分页记录数
	 **/
	private $pageSize;
	
	/** 
	 * 定向id
	 **/
	private $targetId;
	
	private $apiParas = array();
	
	public function setAdgroupId($adgroupId)
	{
		$this->adgroupId = $adgroupId;
		$this->apiParas["adgroup_id"] = $adgroupId;
	}

	public function getAdgroupId()
	{
		return $this->adgroupId;
	}

	public function setAdzoneId($adzoneId)
	{
		$this->adzoneId = $adzoneId;
		$this->apiParas["adzone_id"] = $adzoneId;
	}

	public function getAdzoneId()
	{
		return $this->adzoneId;
	}

	public function setCampaignId($campaignId)
	{
		$this->campaignId = $campaignId;
		$this->apiParas["campaign_id"] = $campaignId;
	}

	public function getCampaignId()
	{
		return $this->campaignId;
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

	public function setTargetId($targetId)
	{
		$this->targetId = $targetId;
		$this->apiParas["target_id"] = $targetId;
	}

	public function getTargetId()
	{
		return $this->targetId;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.advertiser.target.adzone.rtrpts.total.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->logDate,"logDate");
		RequestCheckUtil::checkNotNull($this->offset,"offset");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
