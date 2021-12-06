<?php
/**
 * TOP API: taobao.feedflow.item.adgroup.creative.page request
 * 
 * @author auto create
 * @since 1.0, 2020.10.16
 */
class FeedflowItemAdgroupCreativePageRequest
{
	/** 
	 * 绑定查询条件
	 **/
	private $creativeBindQuery;
	
	private $apiParas = array();
	
	public function setCreativeBindQuery($creativeBindQuery)
	{
		$this->creativeBindQuery = $creativeBindQuery;
		$this->apiParas["creative_bind_query"] = $creativeBindQuery;
	}

	public function getCreativeBindQuery()
	{
		return $this->creativeBindQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.adgroup.creative.page";
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
