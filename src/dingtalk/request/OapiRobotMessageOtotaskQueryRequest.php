<?php
/**
 * dingtalk API: dingtalk.oapi.robot.message.ototask.query request
 * 
 * @author auto create
 * @since 1.0, 2020.11.20
 */
class OapiRobotMessageOtotaskQueryRequest
{
	/** 
	 * 申请到的企业机器人唯一标识符
	 **/
	private $chatbotId;
	
	/** 
	 * 用于查询发送进度的唯一标识
	 **/
	private $processQueryKey;
	
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

	public function setProcessQueryKey($processQueryKey)
	{
		$this->processQueryKey = $processQueryKey;
		$this->apiParas["process_query_key"] = $processQueryKey;
	}

	public function getProcessQueryKey()
	{
		return $this->processQueryKey;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.robot.message.ototask.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->chatbotId,"chatbotId");
		RequestCheckUtil::checkNotNull($this->processQueryKey,"processQueryKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
