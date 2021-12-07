<?php
/**
 * TOP API: taobao.feedflow.item.adgroup.adzone.page request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class FeedflowItemAdgroupAdzonePageRequest
{
	/** 
	 * 查询条件
	 **/
	private $adzoneBindQuery;
	
	private $apiParas = array();
	
	public function setAdzoneBindQuery($adzoneBindQuery)
	{
		$this->adzoneBindQuery = $adzoneBindQuery;
		$this->apiParas["adzone_bind_query"] = $adzoneBindQuery;
	}

	public function getAdzoneBindQuery()
	{
		return $this->adzoneBindQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.adgroup.adzone.page";
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
