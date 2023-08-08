<?php
/**
 * TOP API: taobao.uop.tob.order.create request
 * 
 * @author auto create
 * @since 1.0, 2022.09.19
 */
class UopTobOrderCreateRequest
{
	/** 
	 * ERP出库对象
	 **/
	private $deliveryOrder;
	
	private $apiParas = array();
	
	public function setDeliveryOrder($deliveryOrder)
	{
		$this->deliveryOrder = $deliveryOrder;
		$this->apiParas["delivery_order"] = $deliveryOrder;
	}

	public function getDeliveryOrder()
	{
		return $this->deliveryOrder;
	}

	public function getApiMethodName()
	{
		return "taobao.uop.tob.order.create";
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
