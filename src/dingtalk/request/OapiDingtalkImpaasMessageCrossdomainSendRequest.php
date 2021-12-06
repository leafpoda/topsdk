<?php
/**
 * dingtalk API: dingtalk.oapi.dingtalk.impaas.message.crossdomain.send request
 * 
 * @author auto create
 * @since 1.0, 2020.09.08
 */
class OapiDingtalkImpaasMessageCrossdomainSendRequest
{
	/** 
	 * 互通消息结构
	 **/
	private $crossdomainMessageSendModel;
	
	private $apiParas = array();
	
	public function setCrossdomainMessageSendModel($crossdomainMessageSendModel)
	{
		$this->crossdomainMessageSendModel = $crossdomainMessageSendModel;
		$this->apiParas["crossdomain_message_send_model"] = $crossdomainMessageSendModel;
	}

	public function getCrossdomainMessageSendModel()
	{
		return $this->crossdomainMessageSendModel;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.dingtalk.impaas.message.crossdomain.send";
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
