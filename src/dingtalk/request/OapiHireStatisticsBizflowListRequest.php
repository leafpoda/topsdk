<?php
/**
 * dingtalk API: dingtalk.oapi.hire.statistics.bizflow.list request
 * 
 * @author auto create
 * @since 1.0, 2020.08.21
 */
class OapiHireStatisticsBizflowListRequest
{
	/** 
	 * 分页游标位置，不传默认第一页
	 **/
	private $cursor;
	
	/** 
	 * 分页大小，最大200
	 **/
	private $size;
	
	private $apiParas = array();
	
	public function setCursor($cursor)
	{
		$this->cursor = $cursor;
		$this->apiParas["cursor"] = $cursor;
	}

	public function getCursor()
	{
		return $this->cursor;
	}

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.hire.statistics.bizflow.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->size,"size");
		RequestCheckUtil::checkMaxValue($this->size,200,"size");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
