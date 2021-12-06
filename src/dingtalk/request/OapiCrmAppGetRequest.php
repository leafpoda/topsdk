<?php
/**
 * dingtalk API: dingtalk.oapi.crm.app.get request
 * 
 * @author auto create
 * @since 1.0, 2020.09.24
 */
class OapiCrmAppGetRequest
{
	/** 
	 * 业务表示,crm颁发或者申请
	 **/
	private $bizKey;
	
	private $apiParas = array();
	
	public function setBizKey($bizKey)
	{
		$this->bizKey = $bizKey;
		$this->apiParas["biz_key"] = $bizKey;
	}

	public function getBizKey()
	{
		return $this->bizKey;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.crm.app.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizKey,"bizKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
