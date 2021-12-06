<?php
/**
 * dingtalk API: dingtalk.oapi.alitrip.btrip.unbind.taobao request
 * 
 * @author auto create
 * @since 1.0, 2020.02.19
 */
class OapiAlitripBtripUnbindTaobaoRequest
{
	/** 
	 * 请求对象
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
		return "dingtalk.oapi.alitrip.btrip.unbind.taobao";
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
