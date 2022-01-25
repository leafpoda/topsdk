<?php
/**
 * dingtalk API: dingtalk.oapi.connector.trigger.send_v2 request
 * 
 * @author auto create
 * @since 1.0, 2021.01.06
 */
class OapiConnectorTriggerSendV2Request
{
	/** 
	 * 触发消息请求结构体
	 **/
	private $triggerMsgRequest;
	
	private $apiParas = array();
	
	public function setTriggerMsgRequest($triggerMsgRequest)
	{
		$this->triggerMsgRequest = $triggerMsgRequest;
		$this->apiParas["trigger_msg_request"] = $triggerMsgRequest;
	}

	public function getTriggerMsgRequest()
	{
		return $this->triggerMsgRequest;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.connector.trigger.send_v2";
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
