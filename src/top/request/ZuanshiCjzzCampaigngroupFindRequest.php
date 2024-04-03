<?php
/**
 * TOP API: taobao.zuanshi.cjzz.campaigngroup.find request
 * 
 * @author auto create
 * @since 1.0, 2024.04.03
 */
class ZuanshiCjzzCampaigngroupFindRequest
{
	/** 
	 * 未知人群探索
	 **/
	private $bizCode;
	
	/** 
	 * 计划组id列表
	 **/
	private $campaignGroupIdList;
	
	/** 
	 * 计划组名称
	 **/
	private $campaignGroupName;
	
	/** 
	 * 页码，从1开始
	 **/
	private $currentPage;
	
	/** 
	 * 每页数量
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setCampaignGroupIdList($campaignGroupIdList)
	{
		$this->campaignGroupIdList = $campaignGroupIdList;
		$this->apiParas["campaign_group_id_list"] = $campaignGroupIdList;
	}

	public function getCampaignGroupIdList()
	{
		return $this->campaignGroupIdList;
	}

	public function setCampaignGroupName($campaignGroupName)
	{
		$this->campaignGroupName = $campaignGroupName;
		$this->apiParas["campaign_group_name"] = $campaignGroupName;
	}

	public function getCampaignGroupName()
	{
		return $this->campaignGroupName;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
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
		return "taobao.zuanshi.cjzz.campaigngroup.find";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkMaxListSize($this->campaignGroupIdList,999,"campaignGroupIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
