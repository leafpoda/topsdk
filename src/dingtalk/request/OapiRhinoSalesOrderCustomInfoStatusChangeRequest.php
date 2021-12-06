<?php
/**
 * dingtalk API: dingtalk.oapi.rhino.sales.order.custom.info.status.change request
 * 
 * @author auto create
 * @since 1.0, 2020.08.04
 */
class OapiRhinoSalesOrderCustomInfoStatusChangeRequest
{
	/** 
	 * 请求提体
	 **/
	private $salesOrderCustomInfoChangeReq;
	
	private $apiParas = array();
	
	public function setSalesOrderCustomInfoChangeReq($salesOrderCustomInfoChangeReq)
	{
		$this->salesOrderCustomInfoChangeReq = $salesOrderCustomInfoChangeReq;
		$this->apiParas["sales_order_custom_info_change_req"] = $salesOrderCustomInfoChangeReq;
	}

	public function getSalesOrderCustomInfoChangeReq()
	{
		return $this->salesOrderCustomInfoChangeReq;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.rhino.sales.order.custom.info.status.change";
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
