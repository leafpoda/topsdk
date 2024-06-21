<?php
/**
 * TOP API: taobao.tbk.order.refund.get request
 * 
 * @author auto create
 * @since 1.0, 2022.12.20
 */
class TbkOrderRefundGetRequest
{
	/** 
	 * 全量维权订单查询入参
	 **/
	private $publisherRefundOrderQueryOption;
	
	private $apiParas = array();
	
	public function setPublisherRefundOrderQueryOption($publisherRefundOrderQueryOption)
	{
		$this->publisherRefundOrderQueryOption = $publisherRefundOrderQueryOption;
		$this->apiParas["publisher_refund_order_query_option"] = $publisherRefundOrderQueryOption;
	}

	public function getPublisherRefundOrderQueryOption()
	{
		return $this->publisherRefundOrderQueryOption;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.order.refund.get";
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
