<?php
/**
 * dingtalk API: dingtalk.oapi.v2.user.getuserinfo request
 * 
 * @author auto create
 * @since 1.0, 2020.12.14
 */
class OapiV2UserGetuserinfoRequest
{
	/** 
	 * 免登授权码
	 **/
	private $code;
	
	private $apiParas = array();
	
	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.v2.user.getuserinfo";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->code,"code");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
