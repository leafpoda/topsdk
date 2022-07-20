<?php
/**
 * TOP API: taobao.fenxiao.refund.get request
 * 
 * @author auto create
 * @since 1.0, 2022.07.20
 */
class FenxiaoRefundGetRequest
{
	/** 
	 * 是否查询下游消费者订单对应退款信息
	 **/
	private $querySellerRefund;
	
	/** 
	 * 退款单id（分销子订单号和退款单id，两者至少必填一个，都填的情况下，以退款单id为准）
	 **/
	private $refundId;
	
	/** 
	 * 要查询的退款对应的分销子订单号
	 **/
	private $subOrderId;
	
	private $apiParas = array();
	
	public function setQuerySellerRefund($querySellerRefund)
	{
		$this->querySellerRefund = $querySellerRefund;
		$this->apiParas["query_seller_refund"] = $querySellerRefund;
	}

	public function getQuerySellerRefund()
	{
		return $this->querySellerRefund;
	}

	public function setRefundId($refundId)
	{
		$this->refundId = $refundId;
		$this->apiParas["refund_id"] = $refundId;
	}

	public function getRefundId()
	{
		return $this->refundId;
	}

	public function setSubOrderId($subOrderId)
	{
		$this->subOrderId = $subOrderId;
		$this->apiParas["sub_order_id"] = $subOrderId;
	}

	public function getSubOrderId()
	{
		return $this->subOrderId;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.refund.get";
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
