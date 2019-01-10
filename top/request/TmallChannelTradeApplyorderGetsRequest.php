<?php
/**
 * TOP API: tmall.channel.trade.applyorder.gets request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallChannelTradeApplyorderGetsRequest
{
	/** 
	 * 审核状态列表
	 **/
	private $auditStatusList;
	
	/** 
	 * 渠道
	 **/
	private $channel;
	
	/** 
	 * 申请单号
	 **/
	private $channelPurchaseApplyOrderNo;
	
	/** 
	 * 分销商nick
	 **/
	private $distributorNick;
	
	/** 
	 * 是否需要分页
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
	 * 交易类型
	 **/
	private $tradeType;
	
	private $apiParas = array();
	
	public function setAuditStatusList($auditStatusList)
	{
		$this->auditStatusList = $auditStatusList;
		$this->apiParas["audit_status_list"] = $auditStatusList;
	}

	public function getAuditStatusList()
	{
		return $this->auditStatusList;
	}

	public function setChannel($channel)
	{
		$this->channel = $channel;
		$this->apiParas["channel"] = $channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}

	public function setChannelPurchaseApplyOrderNo($channelPurchaseApplyOrderNo)
	{
		$this->channelPurchaseApplyOrderNo = $channelPurchaseApplyOrderNo;
		$this->apiParas["channel_purchase_apply_order_no"] = $channelPurchaseApplyOrderNo;
	}

	public function getChannelPurchaseApplyOrderNo()
	{
		return $this->channelPurchaseApplyOrderNo;
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
		return "tmall.channel.trade.applyorder.gets";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->auditStatusList,20,"auditStatusList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
