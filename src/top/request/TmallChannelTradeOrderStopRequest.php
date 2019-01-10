<?php
/**
 * TOP API: tmall.channel.trade.order.stop request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallChannelTradeOrderStopRequest
{
	/** 
	 * 主采购单号
	 **/
	private $mainPurchaseOrderNo;
	
	/** 
	 * 幂等单号
	 **/
	private $requestNo;
	
	private $apiParas = array();
	
	public function setMainPurchaseOrderNo($mainPurchaseOrderNo)
	{
		$this->mainPurchaseOrderNo = $mainPurchaseOrderNo;
		$this->apiParas["main_purchase_order_no"] = $mainPurchaseOrderNo;
	}

	public function getMainPurchaseOrderNo()
	{
		return $this->mainPurchaseOrderNo;
	}

	public function setRequestNo($requestNo)
	{
		$this->requestNo = $requestNo;
		$this->apiParas["request_no"] = $requestNo;
	}

	public function getRequestNo()
	{
		return $this->requestNo;
	}

	public function getApiMethodName()
	{
		return "tmall.channel.trade.order.stop";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mainPurchaseOrderNo,"mainPurchaseOrderNo");
		RequestCheckUtil::checkNotNull($this->requestNo,"requestNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
