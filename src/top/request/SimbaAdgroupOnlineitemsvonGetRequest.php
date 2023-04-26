<?php
/**
 * TOP API: taobao.simba.adgroup.onlineitemsvon.get request
 * 
 * @author auto create
 * @since 1.0, 2023.04.26
 */
class SimbaAdgroupOnlineitemsvonGetRequest
{
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	/** 
	 * 排序，true:降序， false:升序
	 **/
	private $orderBy;
	
	/** 
	 * 排序字段，starts：按开始时间排序bidCount:按销量排序
	 **/
	private $orderField;
	
	/** 
	 * 页码，从1开始,最大50。最大只能获取1W个宝贝
	 **/
	private $pageNo;
	
	/** 
	 * 页尺寸，最大200
	 **/
	private $pageSize;
	
	/** 
	 * 推广单元类型 101001005代表标准推广，101001014代表销量明星推广
	 **/
	private $productId;
	
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
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

	public function setOrderField($orderField)
	{
		$this->orderField = $orderField;
		$this->apiParas["order_field"] = $orderField;
	}

	public function getOrderField()
	{
		return $this->orderField;
	}

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

	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.adgroup.onlineitemsvon.get";
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
