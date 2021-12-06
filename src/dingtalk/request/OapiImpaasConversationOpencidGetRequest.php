<?php
/**
 * dingtalk API: dingtalk.oapi.impaas.conversation.opencid.get request
 * 
 * @author auto create
 * @since 1.0, 2020.09.24
 */
class OapiImpaasConversationOpencidGetRequest
{
	/** 
	 * 基础会话对象
	 **/
	private $model;
	
	private $apiParas = array();
	
	public function setModel($model)
	{
		$this->model = $model;
		$this->apiParas["model"] = $model;
	}

	public function getModel()
	{
		return $this->model;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.impaas.conversation.opencid.get";
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
