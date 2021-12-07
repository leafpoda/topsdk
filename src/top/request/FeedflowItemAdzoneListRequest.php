<?php
/**
 * TOP API: taobao.feedflow.item.adzone.list request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class FeedflowItemAdzoneListRequest
{
	/** 
	 * 广告位查询条件
	 **/
	private $adzoneQuery;
	
	private $apiParas = array();
	
	public function setAdzoneQuery($adzoneQuery)
	{
		$this->adzoneQuery = $adzoneQuery;
		$this->apiParas["adzone_query"] = $adzoneQuery;
	}

	public function getAdzoneQuery()
	{
		return $this->adzoneQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.adzone.list";
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
