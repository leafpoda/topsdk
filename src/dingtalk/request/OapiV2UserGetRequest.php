<?php
/**
 * dingtalk API: dingtalk.oapi.v2.user.get request
 * 
 * @author auto create
 * @since 1.0, 2020.12.07
 */
class OapiV2UserGetRequest
{
	/** 
	 * 语言
	 **/
	private $language;
	
	/** 
	 * 用户id
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setLanguage($language)
	{
		$this->language = $language;
		$this->apiParas["language"] = $language;
	}

	public function getLanguage()
	{
		return $this->language;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.v2.user.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->language,6,"language");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
		RequestCheckUtil::checkMaxLength($this->userid,64,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
