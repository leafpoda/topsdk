<?php
/**
 * TOP API: taobao.zuanshi.banner.creative.find.bind request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiBannerCreativeFindBindRequest
{
	/** 
	 * 单元ID
	 **/
	private $adgroupId;
	
	/** 
	 * 待审核：-4,-1,0，审核通过：1，审核拒绝：-2,-5,-9
	 **/
	private $auditStatusList;
	
	/** 
	 * 计划ID
	 **/
	private $campaignId;
	
	/** 
	 * 创意等级,1：一级，2：二级，3：三级，4：四级，10：十级，99：未分级
	 **/
	private $creativeLevel;
	
	/** 
	 * 图片：2，flash：3，视频：4，文字链：5，Flash不遮盖：9，模板：10，
	 **/
	private $formatList;
	
	/** 
	 * 创意名称
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
	 * 创意尺寸
	 **/
	private $sizeList;
	
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

	public function setAuditStatusList($auditStatusList)
	{
		$this->auditStatusList = $auditStatusList;
		$this->apiParas["audit_status_list"] = $auditStatusList;
	}

	public function getAuditStatusList()
	{
		return $this->auditStatusList;
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

	public function setCreativeLevel($creativeLevel)
	{
		$this->creativeLevel = $creativeLevel;
		$this->apiParas["creative_level"] = $creativeLevel;
	}

	public function getCreativeLevel()
	{
		return $this->creativeLevel;
	}

	public function setFormatList($formatList)
	{
		$this->formatList = $formatList;
		$this->apiParas["format_list"] = $formatList;
	}

	public function getFormatList()
	{
		return $this->formatList;
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

	public function setSizeList($sizeList)
	{
		$this->sizeList = $sizeList;
		$this->apiParas["size_list"] = $sizeList;
	}

	public function getSizeList()
	{
		return $this->sizeList;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.creative.find.bind";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkMaxListSize($this->auditStatusList,20,"auditStatusList");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkMaxListSize($this->formatList,20,"formatList");
		RequestCheckUtil::checkMaxListSize($this->sizeList,20,"sizeList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
