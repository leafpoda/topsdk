<?php
/**
 * TOP API: tmall.channel.trade.deliverorder.agree request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallChannelTradeDeliverorderAgreeRequest
{
	/** 
	 * 发货单号
	 **/
	private $mainDeliverOrderNo;
	
	/** 
	 * 同意理由
	 **/
	private $operateDesc;
	
	private $apiParas = array();
	
	public function setMainDeliverOrderNo($mainDeliverOrderNo)
	{
		$this->mainDeliverOrderNo = $mainDeliverOrderNo;
		$this->apiParas["main_deliver_order_no"] = $mainDeliverOrderNo;
	}

	public function getMainDeliverOrderNo()
	{
		return $this->mainDeliverOrderNo;
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
		return "tmall.channel.trade.deliverorder.agree";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mainDeliverOrderNo,"mainDeliverOrderNo");
		RequestCheckUtil::checkNotNull($this->operateDesc,"operateDesc");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
