<?php
/**
 * dingtalk API: dingtalk.oapi.chat.chatid.transformqrcode.get request
 * 
 * @author auto create
 * @since 1.0, 2020.10.12
 */
class OapiChatChatidTransformqrcodeGetRequest
{
	/** 
	 * 群二维码的url
	 **/
	private $groupUrl;
	
	private $apiParas = array();
	
	public function setGroupUrl($groupUrl)
	{
		$this->groupUrl = $groupUrl;
		$this->apiParas["group_url"] = $groupUrl;
	}

	public function getGroupUrl()
	{
		return $this->groupUrl;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.chat.chatid.transformqrcode.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupUrl,"groupUrl");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
