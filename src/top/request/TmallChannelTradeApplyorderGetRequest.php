<?php
/**
 * TOP API: tmall.channel.trade.applyorder.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallChannelTradeApplyorderGetRequest
{
	/** 
	 * 采购申请单单号
	 **/
	private $channelPurchaseApplyOrderNo;
	
	private $apiParas = array();
	
	public function setChannelPurchaseApplyOrderNo($channelPurchaseApplyOrderNo)
	{
		$this->channelPurchaseApplyOrderNo = $channelPurchaseApplyOrderNo;
		$this->apiParas["channel_purchase_apply_order_no"] = $channelPurchaseApplyOrderNo;
	}

	public function getChannelPurchaseApplyOrderNo()
	{
		return $this->channelPurchaseApplyOrderNo;
	}

	public function getApiMethodName()
	{
		return "tmall.channel.trade.applyorder.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->channelPurchaseApplyOrderNo,"channelPurchaseApplyOrderNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
