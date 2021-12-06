<?php
/**
 * dingtalk API: dingtalk.oapi.alitrip.btrip.invoice.setting.modify request
 * 
 * @author auto create
 * @since 1.0, 2020.11.30
 */
class OapiAlitripBtripInvoiceSettingModifyRequest
{
	/** 
	 * 入参
	 **/
	private $request;
	
	private $apiParas = array();
	
	public function setRequest($request)
	{
		$this->request = $request;
		$this->apiParas["request"] = $request;
	}

	public function getRequest()
	{
		return $this->request;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.alitrip.btrip.invoice.setting.modify";
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
