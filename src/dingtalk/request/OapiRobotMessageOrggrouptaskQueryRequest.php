<?php
/**
 * dingtalk API: dingtalk.oapi.robot.message.orggrouptask.query request
 * 
 * @author auto create
 * @since 1.0, 2020.05.25
 */
class OapiRobotMessageOrggrouptaskQueryRequest
{
	/** 
	 * 申请到的企业机器人唯一标识符
	 **/
	private $chatbotId;
	
	/** 
	 * 开放的群ID
	 **/
	private $openConversationId;
	
	/** 
	 * 用于查询发送进度的唯一标识
	 **/
	private $processQueryKey;
	
	/** 
	 * 机器人webhook中的access_token参数，与chatbot_id+open_conversation_id 只需要填1种
	 **/
	private $token;
	
	private $apiParas = array();
	
	public function setChatbotId($chatbotId)
	{
		$this->chatbotId = $chatbotId;
		$this->apiParas["chatbot_id"] = $chatbotId;
	}

	public function getChatbotId()
	{
		return $this->chatbotId;
	}

	public function setOpenConversationId($openConversationId)
	{
		$this->openConversationId = $openConversationId;
		$this->apiParas["open_conversation_id"] = $openConversationId;
	}

	public function getOpenConversationId()
	{
		return $this->openConversationId;
	}

	public function setProcessQueryKey($processQueryKey)
	{
		$this->processQueryKey = $processQueryKey;
		$this->apiParas["process_query_key"] = $processQueryKey;
	}

	public function getProcessQueryKey()
	{
		return $this->processQueryKey;
	}

	public function setToken($token)
	{
		$this->token = $token;
		$this->apiParas["token"] = $token;
	}

	public function getToken()
	{
		return $this->token;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.robot.message.orggrouptask.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->processQueryKey,"processQueryKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
