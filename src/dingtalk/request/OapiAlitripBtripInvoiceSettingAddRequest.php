<?php
/**
 * dingtalk API: dingtalk.oapi.alitrip.btrip.invoice.setting.add request
 * 
 * @author auto create
 * @since 1.0, 2020.11.30
 */
class OapiAlitripBtripInvoiceSettingAddRequest
{
	/** 
	 * 入参
	 **/
	private $rq;
	
	private $apiParas = array();
	
	public function setRq($rq)
	{
		$this->rq = $rq;
		$this->apiParas["rq"] = $rq;
	}

	public function getRq()
	{
		return $this->rq;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.alitrip.btrip.invoice.setting.add";
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
