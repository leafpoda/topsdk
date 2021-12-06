<?php
/**
 * dingtalk API: dingtalk.oapi.ats.job.get request
 * 
 * @author auto create
 * @since 1.0, 2020.08.25
 */
class OapiAtsJobGetRequest
{
	/** 
	 * 业务唯一标识，接入前请提前沟通
	 **/
	private $bizCode;
	
	/** 
	 * 职位唯一标识
	 **/
	private $jobId;
	
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

	public function setJobId($jobId)
	{
		$this->jobId = $jobId;
		$this->apiParas["job_id"] = $jobId;
	}

	public function getJobId()
	{
		return $this->jobId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.ats.job.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->jobId,"jobId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
