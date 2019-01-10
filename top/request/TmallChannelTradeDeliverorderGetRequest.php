<?php
/**
 * TOP API: tmall.channel.trade.deliverorder.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallChannelTradeDeliverorderGetRequest
{
	/** 
	 * 是否包含子发货单
	 **/
	private $isIncludeSubOrder;
	
	/** 
	 * 发货单号
	 **/
	private $mainDeliverOrderNo;
	
	private $apiParas = array();
	
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

	public function getApiMethodName()
	{
		return "tmall.channel.trade.deliverorder.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mainDeliverOrderNo,"mainDeliverOrderNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
