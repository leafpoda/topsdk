<?php
/**
 * dingtalk API: dingtalk.oapi.im.groupapp.sysmsg.send request
 * 
 * @author auto create
 * @since 1.0, 2020.06.30
 */
class OapiImGroupappSysmsgSendRequest
{
	/** 
	 * 申请到的消息模板唯一标识符
	 **/
	private $msgKey;
	
	/** 
	 * 消息模板中，变量本次替换的值
	 **/
	private $msgParam;
	
	/** 
	 * 开放的群ID
	 **/
	private $openConversationId;
	
	private $apiParas = array();
	
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
		return "dingtalk.oapi.im.groupapp.sysmsg.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->msgKey,"msgKey");
		RequestCheckUtil::checkNotNull($this->msgParam,"msgParam");
		RequestCheckUtil::checkNotNull($this->openConversationId,"openConversationId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
