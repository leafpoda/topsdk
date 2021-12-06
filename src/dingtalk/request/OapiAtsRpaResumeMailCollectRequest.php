<?php
/**
 * dingtalk API: dingtalk.oapi.ats.rpa.resume.mail.collect request
 * 
 * @author auto create
 * @since 1.0, 2020.12.07
 */
class OapiAtsRpaResumeMailCollectRequest
{
	/** 
	 * 业务唯一标识，接入前请提前沟通
	 **/
	private $bizCode;
	
	/** 
	 * 简历文件参数
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
		return "dingtalk.oapi.ats.rpa.resume.mail.collect";
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
