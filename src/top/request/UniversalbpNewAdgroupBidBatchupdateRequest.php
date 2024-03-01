<?php
/**
 * TOP API: taobao.universalbp.new.adgroup.bid.batchupdate request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewAdgroupBidBatchupdateRequest
{
	/** 
	 * adgroupBidCommandListVO
	 **/
	private $adgroupBidCommandListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setAdgroupBidCommandListVO($adgroupBidCommandListVO)
	{
		$this->adgroupBidCommandListVO = $adgroupBidCommandListVO;
		$this->apiParas["adgroup_bid_command_list_v_o"] = $adgroupBidCommandListVO;
	}

	public function getAdgroupBidCommandListVO()
	{
		return $this->adgroupBidCommandListVO;
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
		return "taobao.universalbp.new.adgroup.bid.batchupdate";
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
