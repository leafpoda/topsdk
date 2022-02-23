<?php
/**
 * TOP API: taobao.zuanshi.banner.adgroup.find request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class ZuanshiBannerAdgroupFindRequest
{
	/** 
	 * 单元id列表
	 **/
	private $adgroupIdList;
	
	/** 
	 * 计划ID
	 **/
	private $campaignId;
	
	/** 
	 * 单元名称
	 **/
	private $name;
	
	/** 
	 * 当前页码
	 **/
	private $pageNum;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 状态，1：正常投放，0：暂停投放，9：结束投放
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setAdgroupIdList($adgroupIdList)
	{
		$this->adgroupIdList = $adgroupIdList;
		$this->apiParas["adgroup_id_list"] = $adgroupIdList;
	}

	public function getAdgroupIdList()
	{
		return $this->adgroupIdList;
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

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.adgroup.find";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->adgroupIdList,20,"adgroupIdList");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
