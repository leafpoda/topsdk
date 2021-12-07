<?php
/**
 * TOP API: taobao.feedflow.item.adgroup.page request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class FeedflowItemAdgroupPageRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $adgroupQuery;
	
	private $apiParas = array();
	
	public function setAdgroupQuery($adgroupQuery)
	{
		$this->adgroupQuery = $adgroupQuery;
		$this->apiParas["adgroup_query"] = $adgroupQuery;
	}

	public function getAdgroupQuery()
	{
		return $this->adgroupQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.adgroup.page";
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
