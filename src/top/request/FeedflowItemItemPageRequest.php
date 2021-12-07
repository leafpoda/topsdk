<?php
/**
 * TOP API: taobao.feedflow.item.item.page request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class FeedflowItemItemPageRequest
{
	/** 
	 * 查询条件
	 **/
	private $itemQuery;
	
	private $apiParas = array();
	
	public function setItemQuery($itemQuery)
	{
		$this->itemQuery = $itemQuery;
		$this->apiParas["item_query"] = $itemQuery;
	}

	public function getItemQuery()
	{
		return $this->itemQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.item.page";
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
