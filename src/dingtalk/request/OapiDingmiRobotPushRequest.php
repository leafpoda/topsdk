<?php
/**
 * dingtalk API: dingtalk.oapi.dingmi.robot.push request
 * 
 * @author auto create
 * @since 1.0, 2020.09.23
 */
class OapiDingmiRobotPushRequest
{
	/** 
	 * 会话ID
	 **/
	private $conversationId;
	
	/** 
	 * 消息类型
	 **/
	private $msgKey;
	
	/** 
	 * 参考文档
	 **/
	private $msgParam;
	
	private $apiParas = array();
	
	public function setConversationId($conversationId)
	{
		$this->conversationId = $conversationId;
		$this->apiParas["conversation_id"] = $conversationId;
	}

	public function getConversationId()
	{
		return $this->conversationId;
	}

	public function setMsgKey($msgKey)
	{
		$this->msgKey = $msgKey;
		$this->apiParas["msg_key"] = $msgKey;
	}

	public function getMsgKey()
	{
		return $this->msgKey;
	}

	public function setMsgParam($msgParam)
	{
		$this->msgParam = $msgParam;
		$this->apiParas["msg_param"] = $msgParam;
	}

	public function getMsgParam()
	{
		return $this->msgParam;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.dingmi.robot.push";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
