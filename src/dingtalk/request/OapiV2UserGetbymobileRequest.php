<?php
/**
 * dingtalk API: dingtalk.oapi.v2.user.getbymobile request
 * 
 * @author auto create
 * @since 1.0, 2020.09.13
 */
class OapiV2UserGetbymobileRequest
{
	/** 
	 * 手机号
	 **/
	private $mobile;
	
	private $apiParas = array();
	
	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.v2.user.getbymobile";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mobile,"mobile");
		RequestCheckUtil::checkMaxLength($this->mobile,15,"mobile");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
