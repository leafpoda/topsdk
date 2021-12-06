<?php
/**
 * dingtalk API: dingtalk.oapi.edu.dept.list request
 * 
 * @author auto create
 * @since 1.0, 2020.06.23
 */
class OapiEduDeptListRequest
{
	/** 
	 * 页码，从1开始
	 **/
	private $pageNo;
	
	/** 
	 * 每页大小，最大30
	 **/
	private $pageSize;
	
	/** 
	 * 父部门节点id，如果不填，则默认获取第一层级的部门节点
	 **/
	private $superId;
	
	private $apiParas = array();
	
	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setSuperId($superId)
	{
		$this->superId = $superId;
		$this->apiParas["super_id"] = $superId;
	}

	public function getSuperId()
	{
		return $this->superId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.dept.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
