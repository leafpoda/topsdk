<?php
/**
 * dingtalk API: dingtalk.oapi.mpdev.accesskey.get request
 * 
 * @author auto create
 * @since 1.0, 2020.10.15
 */
class OapiMpdevAccesskeyGetRequest
{
	/** 
	 * 小程序ID
	 **/
	private $miniappId;
	
	private $apiParas = array();
	
	public function setMiniappId($miniappId)
	{
		$this->miniappId = $miniappId;
		$this->apiParas["miniapp_id"] = $miniappId;
	}

	public function getMiniappId()
	{
		return $this->miniappId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.mpdev.accesskey.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->miniappId,"miniappId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
