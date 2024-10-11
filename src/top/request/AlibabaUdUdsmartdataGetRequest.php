<?php
/**
 * TOP API: alibaba.ud.udsmartdata.get request
 * 
 * @author auto create
 * @since 1.0, 2024.09.24
 */
class AlibabaUdUdsmartdataGetRequest
{
	/** 
	 * ud_smart_service_request
	 **/
	private $udSmartServiceRequest;
	
	private $apiParas = array();
	
	public function setUdSmartServiceRequest($udSmartServiceRequest)
	{
		$this->udSmartServiceRequest = $udSmartServiceRequest;
		$this->apiParas["ud_smart_service_request"] = $udSmartServiceRequest;
	}

	public function getUdSmartServiceRequest()
	{
		return $this->udSmartServiceRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ud.udsmartdata.get";
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
