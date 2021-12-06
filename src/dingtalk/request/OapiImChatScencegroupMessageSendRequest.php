<?php
/**
 * dingtalk API: dingtalk.oapi.im.chat.scencegroup.message.send request
 * 
 * @author auto create
 * @since 1.0, 2020.12.02
 */
class OapiImChatScencegroupMessageSendRequest
{
	/** 
	 * @人的手机号列表
	 **/
	private $atMobiles;
	
	/** 
	 * 是否@所有人
	 **/
	private $isAtAll;
	
	/** 
	 * 消息模板内容替换参数-多媒体类型
	 **/
	private $msgMediaIdParamMap;
	
	/** 
	 * 消息模板内容替换参数-普通文本类型
	 **/
	private $msgParamMap;
	
	/** 
	 * 模板ID
	 **/
	private $msgTemplateId;
	
	/** 
	 * 用于发送卡片的机器人编码，与场景群模板中的机器人编码保持一致
	 **/
	private $robotCode;
	
	/** 
	 * 接收消息的群的openConversationId
	 **/
	private $targetOpenConversationId;
	
	private $apiParas = array();
	
	public function setAtMobiles($atMobiles)
	{
		$this->atMobiles = $atMobiles;
		$this->apiParas["at_mobiles"] = $atMobiles;
	}

	public function getAtMobiles()
	{
		return $this->atMobiles;
	}

	public function setIsAtAll($isAtAll)
	{
		$this->isAtAll = $isAtAll;
		$this->apiParas["is_at_all"] = $isAtAll;
	}

	public function getIsAtAll()
	{
		return $this->isAtAll;
	}

	public function setMsgMediaIdParamMap($msgMediaIdParamMap)
	{
		$this->msgMediaIdParamMap = $msgMediaIdParamMap;
		$this->apiParas["msg_media_id_param_map"] = $msgMediaIdParamMap;
	}

	public function getMsgMediaIdParamMap()
	{
		return $this->msgMediaIdParamMap;
	}

	public function setMsgParamMap($msgParamMap)
	{
		$this->msgParamMap = $msgParamMap;
		$this->apiParas["msg_param_map"] = $msgParamMap;
	}

	public function getMsgParamMap()
	{
		return $this->msgParamMap;
	}

	public function setMsgTemplateId($msgTemplateId)
	{
		$this->msgTemplateId = $msgTemplateId;
		$this->apiParas["msg_template_id"] = $msgTemplateId;
	}

	public function getMsgTemplateId()
	{
		return $this->msgTemplateId;
	}

	public function setRobotCode($robotCode)
	{
		$this->robotCode = $robotCode;
		$this->apiParas["robot_code"] = $robotCode;
	}

	public function getRobotCode()
	{
		return $this->robotCode;
	}

	public function setTargetOpenConversationId($targetOpenConversationId)
	{
		$this->targetOpenConversationId = $targetOpenConversationId;
		$this->apiParas["target_open_conversation_id"] = $targetOpenConversationId;
	}

	public function getTargetOpenConversationId()
	{
		return $this->targetOpenConversationId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.im.chat.scencegroup.message.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->atMobiles,999,"atMobiles");
		RequestCheckUtil::checkNotNull($this->msgTemplateId,"msgTemplateId");
		RequestCheckUtil::checkNotNull($this->robotCode,"robotCode");
		RequestCheckUtil::checkNotNull($this->targetOpenConversationId,"targetOpenConversationId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
