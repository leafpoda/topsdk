<?php
/**
 * TOP API: alibaba.ud.event.upload request
 * 
 * @author auto create
 * @since 1.0, 2023.05.23
 */
class AlibabaUdEventUploadRequest
{
	/** 
	 * 事件请求相关的信息
	 **/
	private $eventServiceRequest;
	
	private $apiParas = array();
	
	public function setEventServiceRequest($eventServiceRequest)
	{
		$this->eventServiceRequest = $eventServiceRequest;
		$this->apiParas["event_service_request"] = $eventServiceRequest;
	}

	public function getEventServiceRequest()
	{
		return $this->eventServiceRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ud.event.upload";
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
