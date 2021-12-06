<?php
/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.master.corpconfig.update request
 * 
 * @author auto create
 * @since 1.0, 2020.08.17
 */
class OapiSmartworkHrmMasterCorpconfigUpdateRequest
{
	/** 
	 * 业务类型
	 **/
	private $scopeCode;
	
	/** 
	 * 企业开通状态 1:开通 2:关闭
	 **/
	private $status;
	
	/** 
	 * 租户id
	 **/
	private $tenantId;
	
	private $apiParas = array();
	
	public function setScopeCode($scopeCode)
	{
		$this->scopeCode = $scopeCode;
		$this->apiParas["scope_code"] = $scopeCode;
	}

	public function getScopeCode()
	{
		return $this->scopeCode;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
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

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartwork.hrm.master.corpconfig.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->scopeCode,"scopeCode");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->tenantId,"tenantId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
