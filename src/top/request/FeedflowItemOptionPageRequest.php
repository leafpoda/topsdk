<?php
/**
 * TOP API: taobao.feedflow.item.option.page request
 * 
 * @author auto create
 * @since 1.0, 2019.05.07
 */
class FeedflowItemOptionPageRequest
{
	/** 
	 * 标签查询条件
	 **/
	private $labelQuery;
	
	private $apiParas = array();
	
	public function setLabelQuery($labelQuery)
	{
		$this->labelQuery = $labelQuery;
		$this->apiParas["label_query"] = $labelQuery;
	}

	public function getLabelQuery()
	{
		return $this->labelQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.option.page";
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
