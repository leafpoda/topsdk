<?php
/**
 * TOP API: tmall.channel.trade.applyorder.refuse request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallChannelTradeApplyorderRefuseRequest
{
	/** 
	 * 采购申请单号
	 **/
	private $channelPurchaseApplyOrderNo;
	
	/** 
	 * 操作描述
	 **/
	private $operateDesc;
	
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

	public function setOperateDesc($operateDesc)
	{
		$this->operateDesc = $operateDesc;
		$this->apiParas["operate_desc"] = $operateDesc;
	}

	public function getOperateDesc()
	{
		return $this->operateDesc;
	}

	public function getApiMethodName()
	{
		return "tmall.channel.trade.applyorder.refuse";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->channelPurchaseApplyOrderNo,"channelPurchaseApplyOrderNo");
		RequestCheckUtil::checkNotNull($this->operateDesc,"operateDesc");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
