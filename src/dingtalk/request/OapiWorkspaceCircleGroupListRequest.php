<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.circle.group.list request
 * 
 * @author auto create
 * @since 1.0, 2020.08.03
 */
class OapiWorkspaceCircleGroupListRequest
{
	/** 
	 * 分页的游标，第一页传0
	 **/
	private $cursor;
	
	/** 
	 * 取多少条数据，取值范围[1,20]
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
		return "dingtalk.oapi.workspace.circle.group.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->size,"size");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
