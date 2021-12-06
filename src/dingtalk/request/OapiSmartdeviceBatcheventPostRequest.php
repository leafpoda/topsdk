<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.batchevent.post request
 * 
 * @author auto create
 * @since 1.0, 2020.11.25
 */
class OapiSmartdeviceBatcheventPostRequest
{
	/** 
	 * 自动创建
	 **/
	private $deviceEventVos;
	
	private $apiParas = array();
	
	public function setDeviceEventVos($deviceEventVos)
	{
		$this->deviceEventVos = $deviceEventVos;
		$this->apiParas["device_event_vos"] = $deviceEventVos;
	}

	public function getDeviceEventVos()
	{
		return $this->deviceEventVos;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartdevice.batchevent.post";
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
