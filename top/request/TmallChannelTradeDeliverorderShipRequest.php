<?php
/**
 * TOP API: tmall.channel.trade.deliverorder.ship request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallChannelTradeDeliverorderShipRequest
{
	/** 
	 * 渠道
	 **/
	private $channel;
	
	/** 
	 * 分销商Nick
	 **/
	private $distributorNick;
	
	/** 
	 * 物流运单子项
	 **/
	private $logisticsOrderList;
	
	/** 
	 * 幂等单号
	 **/
	private $requestNo;
	
	/** 
	 * 发货单子项
	 **/
	private $subDeliverOrderCreateList;
	
	private $apiParas = array();
	
	public function setChannel($channel)
	{
		$this->channel = $channel;
		$this->apiParas["channel"] = $channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}

	public function setDistributorNick($distributorNick)
	{
		$this->distributorNick = $distributorNick;
		$this->apiParas["distributor_nick"] = $distributorNick;
	}

	public function getDistributorNick()
	{
		return $this->distributorNick;
	}

	public function setLogisticsOrderList($logisticsOrderList)
	{
		$this->logisticsOrderList = $logisticsOrderList;
		$this->apiParas["logistics_order_list"] = $logisticsOrderList;
	}

	public function getLogisticsOrderList()
	{
		return $this->logisticsOrderList;
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

	public function setSubDeliverOrderCreateList($subDeliverOrderCreateList)
	{
		$this->subDeliverOrderCreateList = $subDeliverOrderCreateList;
		$this->apiParas["sub_deliver_order_create_list"] = $subDeliverOrderCreateList;
	}

	public function getSubDeliverOrderCreateList()
	{
		return $this->subDeliverOrderCreateList;
	}

	public function getApiMethodName()
	{
		return "tmall.channel.trade.deliverorder.ship";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->channel,"channel");
		RequestCheckUtil::checkNotNull($this->distributorNick,"distributorNick");
		RequestCheckUtil::checkNotNull($this->requestNo,"requestNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
