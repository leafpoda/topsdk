<?php
/**
 * TOP API: taobao.taojimu.resources.group request
 * 
 * @author auto create
 * @since 1.0, 2021.11.16
 */
class TaojimuResourcesGroupRequest
{
	/** 
	 * 第几页
	 **/
	private $currentPage;
	
	/** 
	 * 是否降序排列 [true|false]
	 **/
	private $desc;
	
	/** 
	 * 排列字段 [modify_date|create_date]
	 **/
	private $orderBy;
	
	/** 
	 * 每页条目数
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
		$this->apiParas["order_by"] = $orderBy;
	}

	public function getOrderBy()
	{
		return $this->orderBy;
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

	public function getApiMethodName()
	{
		return "taobao.taojimu.resources.group";
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
