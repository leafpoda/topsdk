<?php
/**
 * dingtalk API: dingtalk.oapi.ats.resume.checkexistence request
 * 
 * @author auto create
 * @since 1.0, 2020.10.26
 */
class OapiAtsResumeCheckexistenceRequest
{
	/** 
	 * 业务唯一标识
	 **/
	private $bizCode;
	
	/** 
	 * 结构化简历详情
	 **/
	private $resumeDetailInfo;
	
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

	public function setResumeDetailInfo($resumeDetailInfo)
	{
		$this->resumeDetailInfo = $resumeDetailInfo;
		$this->apiParas["resume_detail_info"] = $resumeDetailInfo;
	}

	public function getResumeDetailInfo()
	{
		return $this->resumeDetailInfo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.ats.resume.checkexistence";
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
