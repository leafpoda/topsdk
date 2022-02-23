<?php
/**
 * TOP API: taobao.zuanshi.banner.campaign.find request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class ZuanshiBannerCampaignFindRequest
{
	/** 
	 * 计划ID列表
	 **/
	private $campaignIdList;
	
	/** 
	 * 计划类型：-1：自定义，1：日常托管，2：日常推荐，3：拉新托管，4：拉新推荐
	 **/
	private $marketingdemand;
	
	/** 
	 * 计划名称
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
	 * 计划状态，0:暂停,1:投放中,9:投放结束
	 **/
	private $statusList;
	
	/** 
	 * 2:cpm,8:cpc
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setCampaignIdList($campaignIdList)
	{
		$this->campaignIdList = $campaignIdList;
		$this->apiParas["campaign_id_list"] = $campaignIdList;
	}

	public function getCampaignIdList()
	{
		return $this->campaignIdList;
	}

	public function setMarketingdemand($marketingdemand)
	{
		$this->marketingdemand = $marketingdemand;
		$this->apiParas["marketingdemand"] = $marketingdemand;
	}

	public function getMarketingdemand()
	{
		return $this->marketingdemand;
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

	public function setStatusList($statusList)
	{
		$this->statusList = $statusList;
		$this->apiParas["status_list"] = $statusList;
	}

	public function getStatusList()
	{
		return $this->statusList;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.campaign.find";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->campaignIdList,15,"campaignIdList");
		RequestCheckUtil::checkMaxListSize($this->statusList,3,"statusList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
