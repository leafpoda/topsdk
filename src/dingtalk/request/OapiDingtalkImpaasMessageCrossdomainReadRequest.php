<?php
/**
 * dingtalk API: dingtalk.oapi.dingtalk.impaas.message.crossdomain.read request
 * 
 * @author auto create
 * @since 1.0, 2020.09.08
 */
class OapiDingtalkImpaasMessageCrossdomainReadRequest
{
	/** 
	 * 消息已读结构
	 **/
	private $messageReadModel;
	
	private $apiParas = array();
	
	public function setMessageReadModel($messageReadModel)
	{
		$this->messageReadModel = $messageReadModel;
		$this->apiParas["message_read_model"] = $messageReadModel;
	}

	public function getMessageReadModel()
	{
		return $this->messageReadModel;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.dingtalk.impaas.message.crossdomain.read";
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
