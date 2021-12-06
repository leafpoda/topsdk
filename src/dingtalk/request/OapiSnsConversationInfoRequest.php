<?php
/**
 * dingtalk API: dingtalk.oapi.sns.conversation.info request
 * 
 * @author auto create
 * @since 1.0, 2020.10.15
 */
class OapiSnsConversationInfoRequest
{
	/** 
	 * 会话ID
	 **/
	private $openConversationId;
	
	private $apiParas = array();
	
	public function setOpenConversationId($openConversationId)
	{
		$this->openConversationId = $openConversationId;
		$this->apiParas["open_conversation_id"] = $openConversationId;
	}

	public function getOpenConversationId()
	{
		return $this->openConversationId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.sns.conversation.info";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->openConversationId,"openConversationId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
