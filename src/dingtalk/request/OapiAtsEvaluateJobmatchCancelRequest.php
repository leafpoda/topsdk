<?php
/**
 * dingtalk API: dingtalk.oapi.ats.evaluate.jobmatch.cancel request
 * 
 * @author auto create
 * @since 1.0, 2020.07.31
 */
class OapiAtsEvaluateJobmatchCancelRequest
{
	/** 
	 * 招聘业务标识
	 **/
	private $bizCode;
	
	/** 
	 * 请求扩展字段
	 **/
	private $extData;
	
	/** 
	 * 外部测评系统测评id，全局唯一
	 **/
	private $outerEvaluateId;
	
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

	public function setExtData($extData)
	{
		$this->extData = $extData;
		$this->apiParas["ext_data"] = $extData;
	}

	public function getExtData()
	{
		return $this->extData;
	}

	public function setOuterEvaluateId($outerEvaluateId)
	{
		$this->outerEvaluateId = $outerEvaluateId;
		$this->apiParas["outer_evaluate_id"] = $outerEvaluateId;
	}

	public function getOuterEvaluateId()
	{
		return $this->outerEvaluateId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.ats.evaluate.jobmatch.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->extData,"extData");
		RequestCheckUtil::checkNotNull($this->outerEvaluateId,"outerEvaluateId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
