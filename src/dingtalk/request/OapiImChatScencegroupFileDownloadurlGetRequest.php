<?php
/**
 * dingtalk API: dingtalk.oapi.im.chat.scencegroup.file.downloadurl.get request
 * 
 * @author auto create
 * @since 1.0, 2021.04.01
 */
class OapiImChatScencegroupFileDownloadurlGetRequest
{
	/** 
	 * downloadCode 会包含在如聊天消息推送等链路中提供给业务方
	 **/
	private $downloadCode;
	
	private $apiParas = array();
	
	public function setDownloadCode($downloadCode)
	{
		$this->downloadCode = $downloadCode;
		$this->apiParas["download_code"] = $downloadCode;
	}

	public function getDownloadCode()
	{
		return $this->downloadCode;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.im.chat.scencegroup.file.downloadurl.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->downloadCode,"downloadCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
