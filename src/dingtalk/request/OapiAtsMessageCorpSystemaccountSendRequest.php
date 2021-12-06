<?php
/**
 * dingtalk API: dingtalk.oapi.ats.message.corp.systemaccount.send request
 * 
 * @author auto create
 * @since 1.0, 2020.12.01
 */
class OapiAtsMessageCorpSystemaccountSendRequest
{
	/** 
	 * 业务标识
	 **/
	private $bizCode;
	
	/** 
	 * 系统账号发送消息参数
	 **/
	private $param;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setParam($param)
	{
		$this->param = $param;
		$this->apiParas["param"] = $param;
	}

	public function getParam()
	{
		return $this->param;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.ats.message.corp.systemaccount.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
