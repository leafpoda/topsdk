<?php
/**
 * TOP API: taobao.zuanshi.banner.upgrade.crowd.page request
 * 
 * @author auto create
 * @since 1.0, 2019.04.03
 */
class ZuanshiBannerUpgradeCrowdPageRequest
{
	/** 
	 * 单元id
	 **/
	private $adgroupId;
	
	/** 
	 * 单元名称
	 **/
	private $adgroupName;
	
	/** 
	 * 计划id
	 **/
	private $campaignId;
	
	/** 
	 * 计划名称
	 **/
	private $campaignName;
	
	/** 
	 * 定向id
	 **/
	private $crowdId;
	
	/** 
	 * 人群名称
	 **/
	private $crowdName;
	
	/** 
	 * 分页偏移量
	 **/
	private $offset;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 人群状态
	 **/
	private $status;
	
	/** 
	 * 定向类型
	 **/
	private $targetType;
	
	/** 
	 * 定向类型
	 **/
	private $targetTypes;
	
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

	public function setAdgroupName($adgroupName)
	{
		$this->adgroupName = $adgroupName;
		$this->apiParas["adgroup_name"] = $adgroupName;
	}

	public function getAdgroupName()
	{
		return $this->adgroupName;
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

	public function setCampaignName($campaignName)
	{
		$this->campaignName = $campaignName;
		$this->apiParas["campaign_name"] = $campaignName;
	}

	public function getCampaignName()
	{
		return $this->campaignName;
	}

	public function setCrowdId($crowdId)
	{
		$this->crowdId = $crowdId;
		$this->apiParas["crowd_id"] = $crowdId;
	}

	public function getCrowdId()
	{
		return $this->crowdId;
	}

	public function setCrowdName($crowdName)
	{
		$this->crowdName = $crowdName;
		$this->apiParas["crowd_name"] = $crowdName;
	}

	public function getCrowdName()
	{
		return $this->crowdName;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setTargetType($targetType)
	{
		$this->targetType = $targetType;
		$this->apiParas["target_type"] = $targetType;
	}

	public function getTargetType()
	{
		return $this->targetType;
	}

	public function setTargetTypes($targetTypes)
	{
		$this->targetTypes = $targetTypes;
		$this->apiParas["target_types"] = $targetTypes;
	}

	public function getTargetTypes()
	{
		return $this->targetTypes;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.upgrade.crowd.page";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkMaxListSize($this->targetTypes,20,"targetTypes");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
