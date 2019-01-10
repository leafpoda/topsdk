<?php
/**
 * TOP API: tmall.channel.trade.applyorder.modify request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallChannelTradeApplyorderModifyRequest
{
	/** 
	 * 修改关联的的宝贝信息
	 **/
	private $applyOrderRelateItemModifyParamList;
	
	/** 
	 * 采购申请单号
	 **/
	private $channelPurchaseApplyOrderNo;
	
	private $apiParas = array();
	
	public function setApplyOrderRelateItemModifyParamList($applyOrderRelateItemModifyParamList)
	{
		$this->applyOrderRelateItemModifyParamList = $applyOrderRelateItemModifyParamList;
		$this->apiParas["apply_order_relate_item_modify_param_list"] = $applyOrderRelateItemModifyParamList;
	}

	public function getApplyOrderRelateItemModifyParamList()
	{
		return $this->applyOrderRelateItemModifyParamList;
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

	public function getApiMethodName()
	{
		return "tmall.channel.trade.applyorder.modify";
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
