<?php
/**
 * TOP API: tmall.channel.trade.deliverorder.gets request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallChannelTradeDeliverorderGetsRequest
{
	/** 
	 * 渠道
	 **/
	private $channel;
	
	/** 
	 * 是否包括子发货单
	 **/
	private $isIncludeSubOrder;
	
	/** 
	 * 发货单单号
	 **/
	private $mainDeliverOrderNo;
	
	/** 
	 * 是否分页查询
	 **/
	private $needPagination;
	
	/** 
	 * 发货单状态列表
	 **/
	private $orderStatusList;
	
	/** 
	 * 查询第几页
	 **/
	private $pageNumber;
	
	/** 
	 * 每页显示数量
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setChannel($channel)
	{
		$this->channel = $channel;
		$this->apiParas["channel"] = $channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}

	public function setIsIncludeSubOrder($isIncludeSubOrder)
	{
		$this->isIncludeSubOrder = $isIncludeSubOrder;
		$this->apiParas["is_include_sub_order"] = $isIncludeSubOrder;
	}

	public function getIsIncludeSubOrder()
	{
		return $this->isIncludeSubOrder;
	}

	public function setMainDeliverOrderNo($mainDeliverOrderNo)
	{
		$this->mainDeliverOrderNo = $mainDeliverOrderNo;
		$this->apiParas["main_deliver_order_no"] = $mainDeliverOrderNo;
	}

	public function getMainDeliverOrderNo()
	{
		return $this->mainDeliverOrderNo;
	}

	public function setNeedPagination($needPagination)
	{
		$this->needPagination = $needPagination;
		$this->apiParas["need_pagination"] = $needPagination;
	}

	public function getNeedPagination()
	{
		return $this->needPagination;
	}

	public function setOrderStatusList($orderStatusList)
	{
		$this->orderStatusList = $orderStatusList;
		$this->apiParas["order_status_list"] = $orderStatusList;
	}

	public function getOrderStatusList()
	{
		return $this->orderStatusList;
	}

	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
		$this->apiParas["page_number"] = $pageNumber;
	}

	public function getPageNumber()
	{
		return $this->pageNumber;
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
		return "tmall.channel.trade.deliverorder.gets";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->orderStatusList,20,"orderStatusList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
