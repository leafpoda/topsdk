<?php
/**
 * TOP API: tmall.channel.trade.order.gets request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallChannelTradeOrderGetsRequest
{
	/** 
	 * 渠道编码
	 **/
	private $channel;
	
	/** 
	 * 分销商Nick
	 **/
	private $distributorNick;
	
	/** 
	 * 是否包含物流信息
	 **/
	private $isIncludeLogistics;
	
	/** 
	 * 是否包含主单
	 **/
	private $isIncludeMainOrder;
	
	/** 
	 * 是否包含子单
	 **/
	private $isIncludeSubOrder;
	
	/** 
	 * 主采购单号
	 **/
	private $mainPurchaseOrderNo;
	
	/** 
	 * 是否分页查询
	 **/
	private $needPagination;
	
	/** 
	 * 查询第几页
	 **/
	private $pageNumber;
	
	/** 
	 * 每页显示数量
	 **/
	private $pageSize;
	
	/** 
	 * 1-代销；2-经销
	 **/
	private $tradeType;
	
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

	public function setDistributorNick($distributorNick)
	{
		$this->distributorNick = $distributorNick;
		$this->apiParas["distributor_nick"] = $distributorNick;
	}

	public function getDistributorNick()
	{
		return $this->distributorNick;
	}

	public function setIsIncludeLogistics($isIncludeLogistics)
	{
		$this->isIncludeLogistics = $isIncludeLogistics;
		$this->apiParas["is_include_logistics"] = $isIncludeLogistics;
	}

	public function getIsIncludeLogistics()
	{
		return $this->isIncludeLogistics;
	}

	public function setIsIncludeMainOrder($isIncludeMainOrder)
	{
		$this->isIncludeMainOrder = $isIncludeMainOrder;
		$this->apiParas["is_include_main_order"] = $isIncludeMainOrder;
	}

	public function getIsIncludeMainOrder()
	{
		return $this->isIncludeMainOrder;
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

	public function setMainPurchaseOrderNo($mainPurchaseOrderNo)
	{
		$this->mainPurchaseOrderNo = $mainPurchaseOrderNo;
		$this->apiParas["main_purchase_order_no"] = $mainPurchaseOrderNo;
	}

	public function getMainPurchaseOrderNo()
	{
		return $this->mainPurchaseOrderNo;
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

	public function setTradeType($tradeType)
	{
		$this->tradeType = $tradeType;
		$this->apiParas["trade_type"] = $tradeType;
	}

	public function getTradeType()
	{
		return $this->tradeType;
	}

	public function getApiMethodName()
	{
		return "tmall.channel.trade.order.gets";
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
