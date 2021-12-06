<?php
/**
 * dingtalk API: dingtalk.oapi.rhino.humanres.employee.process.bestdevice.query request
 * 
 * @author auto create
 * @since 1.0, 2020.03.06
 */
class OapiRhinoHumanresEmployeeProcessBestdeviceQueryRequest
{
	/** 
	 * 可用设备型号
	 **/
	private $availableDeviceModels;
	
	/** 
	 * 人员工序关系
	 **/
	private $employeeProcessCapacityUnits;
	
	/** 
	 * 租户
	 **/
	private $tenantId;
	
	/** 
	 * 1
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setAvailableDeviceModels($availableDeviceModels)
	{
		$this->availableDeviceModels = $availableDeviceModels;
		$this->apiParas["available_device_models"] = $availableDeviceModels;
	}

	public function getAvailableDeviceModels()
	{
		return $this->availableDeviceModels;
	}

	public function setEmployeeProcessCapacityUnits($employeeProcessCapacityUnits)
	{
		$this->employeeProcessCapacityUnits = $employeeProcessCapacityUnits;
		$this->apiParas["employee_process_capacity_units"] = $employeeProcessCapacityUnits;
	}

	public function getEmployeeProcessCapacityUnits()
	{
		return $this->employeeProcessCapacityUnits;
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
		return "dingtalk.oapi.rhino.humanres.employee.process.bestdevice.query";
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
