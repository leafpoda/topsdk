<?php
/**
 * TOP API: taobao.fastlive.duration.solution.get request
 * 
 * @author auto create
 * @since 1.0, 2021.03.17
 */
class FastliveDurationSolutionGetRequest
{
	/** 
	 * 计划id
	 **/
	private $campaginId;
	
	private $apiParas = array();
	
	public function setCampaginId($campaginId)
	{
		$this->campaginId = $campaginId;
		$this->apiParas["campagin_id"] = $campaginId;
	}

	public function getCampaginId()
	{
		return $this->campaginId;
	}

	public function getApiMethodName()
	{
		return "taobao.fastlive.duration.solution.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaginId,"campaginId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
