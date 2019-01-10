<?php
/**
 * TOP API: tmall.channel.trade.order.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallChannelTradeOrderGetRequest
{
	/** 
	 * 是否包含物流信息
	 **/
	private $isIncludeLogistics;
	
	/** 
	 * 是否包含主采购单（针对特殊业务）
	 **/
	private $isIncludeMainOrder;
	
	/** 
	 * 是否包含子采购单
	 **/
	private $isIncludeSubOrder;
	
	/** 
	 * 主采购单ID
	 **/
	private $mainPurchaseOrderNo;
	
	private $apiParas = array();
	
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

	public function getApiMethodName()
	{
		return "tmall.channel.trade.order.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mainPurchaseOrderNo,"mainPurchaseOrderNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
