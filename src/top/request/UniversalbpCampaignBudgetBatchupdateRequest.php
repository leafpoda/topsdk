<?php
/**
 * TOP API: taobao.universalbp.campaign.budget.batchupdate request
 * 
 * @author auto create
 * @since 1.0, 2023.07.18
 */
class UniversalbpCampaignBudgetBatchupdateRequest
{
	/** 
	 * list
	 **/
	private $dataList;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setDataList($dataList)
	{
		$this->dataList = $dataList;
		$this->apiParas["data_list"] = $dataList;
	}

	public function getDataList()
	{
		return $this->dataList;
	}

	public function setTopServiceContext($topServiceContext)
	{
		$this->topServiceContext = $topServiceContext;
		$this->apiParas["top_service_context"] = $topServiceContext;
	}

	public function getTopServiceContext()
	{
		return $this->topServiceContext;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.campaign.budget.batchupdate";
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
