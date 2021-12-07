<?php
/**
 * TOP API: taobao.feedflow.item.crowd.modifybind request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class FeedflowItemCrowdModifybindRequest
{
	/** 
	 * 单元id
	 **/
	private $adgroupId;
	
	/** 
	 * 人群信息
	 **/
	private $crowds;
	
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

	public function setCrowds($crowds)
	{
		$this->crowds = $crowds;
		$this->apiParas["crowds"] = $crowds;
	}

	public function getCrowds()
	{
		return $this->crowds;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.crowd.modifybind";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
