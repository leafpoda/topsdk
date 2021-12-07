<?php
/**
 * TOP API: taobao.zuanshi.shop.item.find request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class ZuanshiShopItemFindRequest
{
	/** 
	 * 宝贝名称关键字
	 **/
	private $itemName;
	
	/** 
	 * 当前页数
	 **/
	private $pageNum;
	
	/** 
	 * 分页大小,最大20
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setItemName($itemName)
	{
		$this->itemName = $itemName;
		$this->apiParas["item_name"] = $itemName;
	}

	public function getItemName()
	{
		return $this->itemName;
	}

	public function setPageNum($pageNum)
	{
		$this->pageNum = $pageNum;
		$this->apiParas["page_num"] = $pageNum;
	}

	public function getPageNum()
	{
		return $this->pageNum;
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
		return "taobao.zuanshi.shop.item.find";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNum,"pageNum");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
