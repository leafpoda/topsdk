<?php
/**
 * dingtalk API: dingtalk.oapi.edu.homework.query request
 * 
 * @author auto create
 * @since 1.0, 2020.04.28
 */
class OapiEduHomeworkQueryRequest
{
	/** 
	 * 业务编码
	 **/
	private $bizCode;
	
	/** 
	 * 作业ID
	 **/
	private $hwId;
	
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

	public function setHwId($hwId)
	{
		$this->hwId = $hwId;
		$this->apiParas["hw_id"] = $hwId;
	}

	public function getHwId()
	{
		return $this->hwId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.homework.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->hwId,"hwId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
