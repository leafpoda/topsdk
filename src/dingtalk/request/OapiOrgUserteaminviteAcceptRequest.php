<?php
/**
 * dingtalk API: dingtalk.oapi.org.userteaminvite.accept request
 * 
 * @author auto create
 * @since 1.0, 2020.09.22
 */
class OapiOrgUserteaminviteAcceptRequest
{
	/** 
	 * 手机号
	 **/
	private $mobile;
	
	/** 
	 * 国家码
	 **/
	private $stateCode;
	
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

	public function setStateCode($stateCode)
	{
		$this->stateCode = $stateCode;
		$this->apiParas["state_code"] = $stateCode;
	}

	public function getStateCode()
	{
		return $this->stateCode;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.org.userteaminvite.accept";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mobile,"mobile");
		RequestCheckUtil::checkNotNull($this->stateCode,"stateCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
