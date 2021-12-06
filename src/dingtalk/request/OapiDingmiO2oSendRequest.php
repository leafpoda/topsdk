<?php
/**
 * dingtalk API: dingtalk.oapi.dingmi.o2o.send request
 * 
 * @author auto create
 * @since 1.0, 2020.09.27
 */
class OapiDingmiO2oSendRequest
{
	/** 
	 * 消息类型
	 **/
	private $msgKey;
	
	/** 
	 * 消息内容
	 **/
	private $msgParam;
	
	/** 
	 * 员工id
	 **/
	private $userid;
	
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

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.dingmi.o2o.send";
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
