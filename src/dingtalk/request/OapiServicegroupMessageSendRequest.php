<?php
/**
 * dingtalk API: dingtalk.oapi.servicegroup.message.send request
 * 
 * @author auto create
 * @since 1.0, 2020.02.17
 */
class OapiServicegroupMessageSendRequest
{
	/** 
	 * 消息对象
	 **/
	private $conversationMessage;
	
	/** 
	 * 订单id
	 **/
	private $orderId;
	
	private $apiParas = array();
	
	public function setConversationMessage($conversationMessage)
	{
		$this->conversationMessage = $conversationMessage;
		$this->apiParas["conversation_message"] = $conversationMessage;
	}

	public function getConversationMessage()
	{
		return $this->conversationMessage;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.servicegroup.message.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
