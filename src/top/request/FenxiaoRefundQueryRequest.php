<?php
/**
 * TOP API: taobao.fenxiao.refund.query request
 * 
 * @author auto create
 * @since 1.0, 2023.11.10
 */
class FenxiaoRefundQueryRequest
{
	/** 
	 * 渠道市场编码，可批量指定。 当不指定时，按照配置的分销市场生效 渠道编码枚举：1-供销平台（淘宝）；2-供销平台（天猫）；3-供销平台（天猫超市）；5-供销平台（淘乡甜）；110001-供销平台（全球购）；110007-淘分销；200002-消费电子市场
	 **/
	private $channelCodes;
	
	/** 
	 * 查询退款单的修改时间结束,格式如:yyyy-MM-dd HH:mm:ss
	 **/
	private $endDate;
	
	/** 
	 * 页码（大于0的整数。无值或小于1的值按默认值1计）
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数（大于0但小于等于50的整数。无值或大于50或小于1的值按默认值50计）
	 **/
	private $pageSize;
	
	/** 
	 * 是否查询下游消费者的退款信息
	 **/
	private $querySellerRefund;
	
	/** 
	 * 退款流程类型：4：发货前退款；1：发货后退款不退货；2：发货后退款退货；3：售后退款；5：拒收；6：售后退货退款
	 **/
	private $refundFlowTypes;
	
	/** 
	 * 查询退款单的修改时间开始,格式如:yyyy-MM-dd HH:mm:ss
	 **/
	private $startDate;
	
	/** 
	 * 查询的经营模式，当不指定时，默认查询代销订单 代销：1 经销：2 寄售（自营寄售）：5 平台寄售
	 **/
	private $tradeTypes;
	
	/** 
	 * 角色，供应商：2，分销商：1
	 **/
	private $userRoleType;
	
	private $apiParas = array();
	
	public function setChannelCodes($channelCodes)
	{
		$this->channelCodes = $channelCodes;
		$this->apiParas["channel_codes"] = $channelCodes;
	}

	public function getChannelCodes()
	{
		return $this->channelCodes;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
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

	public function setQuerySellerRefund($querySellerRefund)
	{
		$this->querySellerRefund = $querySellerRefund;
		$this->apiParas["query_seller_refund"] = $querySellerRefund;
	}

	public function getQuerySellerRefund()
	{
		return $this->querySellerRefund;
	}

	public function setRefundFlowTypes($refundFlowTypes)
	{
		$this->refundFlowTypes = $refundFlowTypes;
		$this->apiParas["refund_flow_types"] = $refundFlowTypes;
	}

	public function getRefundFlowTypes()
	{
		return $this->refundFlowTypes;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setTradeTypes($tradeTypes)
	{
		$this->tradeTypes = $tradeTypes;
		$this->apiParas["trade_types"] = $tradeTypes;
	}

	public function getTradeTypes()
	{
		return $this->tradeTypes;
	}

	public function setUserRoleType($userRoleType)
	{
		$this->userRoleType = $userRoleType;
		$this->apiParas["user_role_type"] = $userRoleType;
	}

	public function getUserRoleType()
	{
		return $this->userRoleType;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.refund.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->channelCodes,999,"channelCodes");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
		RequestCheckUtil::checkMaxListSize($this->tradeTypes,999,"tradeTypes");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
