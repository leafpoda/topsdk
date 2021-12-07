<?php
/**
 * TOP API: taobao.zuanshi.banner.adgroup.adzone.findpage request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class ZuanshiBannerAdgroupAdzoneFindpageRequest
{
	/** 
	 * 推广单元id
	 **/
	private $adgroupId;
	
	/** 
	 * 广告位id列表
	 **/
	private $adzoneIdList;
	
	/** 
	 * 广告位名称
	 **/
	private $adzoneName;
	
	/** 
	 * 广告位尺寸
	 **/
	private $adzoneSize;
	
	/** 
	 * 计划id
	 **/
	private $campaignId;
	
	/** 
	 * 页码
	 **/
	private $pageNum;
	
	/** 
	 * 分页每页大小
	 **/
	private $pageSize;
	
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

	public function setAdzoneIdList($adzoneIdList)
	{
		$this->adzoneIdList = $adzoneIdList;
		$this->apiParas["adzone_id_list"] = $adzoneIdList;
	}

	public function getAdzoneIdList()
	{
		return $this->adzoneIdList;
	}

	public function setAdzoneName($adzoneName)
	{
		$this->adzoneName = $adzoneName;
		$this->apiParas["adzone_name"] = $adzoneName;
	}

	public function getAdzoneName()
	{
		return $this->adzoneName;
	}

	public function setAdzoneSize($adzoneSize)
	{
		$this->adzoneSize = $adzoneSize;
		$this->apiParas["adzone_size"] = $adzoneSize;
	}

	public function getAdzoneSize()
	{
		return $this->adzoneSize;
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

	public function setPageNum($pageNum)
	{
		$this->pageNum = $pageNum;
		$this->apiParas["page_num"] = $pageNum;
	}

	public function getPageNum()
	{
		return $this->pageNum;
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
		return "taobao.zuanshi.banner.adgroup.adzone.findpage";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
