<?php
/**
 * TOP API: taobao.fuwu.purchase.order.pay request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class FuwuPurchaseOrderPayRequest
{
	/** 
	 * APPKEY，必填
	 **/
	private $appkey;
	
	/** 
	 * 设备类型，目前只支持PC，可选
	 **/
	private $deviceType;
	
	/** 
	 * 订单号，与外部订单号二选一
	 **/
	private $orderId;
	
	/** 
	 * 外部订单号，使用该参数完成查询订单等操作，与外部订单号二选一
	 **/
	private $outOrderId;
	
	private $apiParas = array();
	
	public function setAppkey($appkey)
	{
		$this->appkey = $appkey;
		$this->apiParas["appkey"] = $appkey;
	}

	public function getAppkey()
	{
		return $this->appkey;
	}

	public function setDeviceType($deviceType)
	{
		$this->deviceType = $deviceType;
		$this->apiParas["device_type"] = $deviceType;
	}

	public function getDeviceType()
	{
		return $this->deviceType;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setOutOrderId($outOrderId)
	{
		$this->outOrderId = $outOrderId;
		$this->apiParas["out_order_id"] = $outOrderId;
	}

	public function getOutOrderId()
	{
		return $this->outOrderId;
	}

	public function getApiMethodName()
	{
		return "taobao.fuwu.purchase.order.pay";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appkey,"appkey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
