<?php
/**
 * dingtalk API: dingtalk.oapi.rhino.mos.layout.operationdefs.listsimple request
 * 
 * @author auto create
 * @since 1.0, 2020.07.16
 */
class OapiRhinoMosLayoutOperationdefsListsimpleRequest
{
	/** 
	 * 工序唯一ID
	 **/
	private $operationUids;
	
	/** 
	 * 订单ID
	 **/
	private $orderId;
	
	/** 
	 * 租户ID
	 **/
	private $tenantId;
	
	/** 
	 * 用户ID
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setOperationUids($operationUids)
	{
		$this->operationUids = $operationUids;
		$this->apiParas["operation_uids"] = $operationUids;
	}

	public function getOperationUids()
	{
		return $this->operationUids;
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

	public function setTenantId($tenantId)
	{
		$this->tenantId = $tenantId;
		$this->apiParas["tenant_id"] = $tenantId;
	}

	public function getTenantId()
	{
		return $this->tenantId;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.rhino.mos.layout.operationdefs.listsimple";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->operationUids,"operationUids");
		RequestCheckUtil::checkMaxListSize($this->operationUids,2000,"operationUids");
		RequestCheckUtil::checkNotNull($this->tenantId,"tenantId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
