<?php
/**
 * dingtalk API: dingtalk.oapi.user.getbyunionid request
 * 
 * @author auto create
 * @since 1.0, 2020.09.13
 */
class OapiUserGetbyunionidRequest
{
	/** 
	 * 员工在当前开发者企业账号范围内的唯一标识，系统生成，不会改变。
	 **/
	private $unionid;
	
	private $apiParas = array();
	
	public function setUnionid($unionid)
	{
		$this->unionid = $unionid;
		$this->apiParas["unionid"] = $unionid;
	}

	public function getUnionid()
	{
		return $this->unionid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.user.getbyunionid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->unionid,"unionid");
		RequestCheckUtil::checkMaxLength($this->unionid,100,"unionid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
