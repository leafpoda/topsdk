<?php
/**
 * dingtalk API: dingtalk.oapi.sceneservicegroup.group.get request
 * 
 * @author auto create
 * @since 1.0, 2021.09.08
 */
class OapiSceneservicegroupGroupGetRequest
{
	/** 
	 * 开放群ID
	 **/
	private $openConversationid;
	
	private $apiParas = array();
	
	public function setOpenConversationid($openConversationid)
	{
		$this->openConversationid = $openConversationid;
		$this->apiParas["open_conversationid"] = $openConversationid;
	}

	public function getOpenConversationid()
	{
		return $this->openConversationid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.sceneservicegroup.group.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->openConversationid,"openConversationid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
