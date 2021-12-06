<?php
/**
 * dingtalk API: dingtalk.oapi.alitrip.btrip.project.delete request
 * 
 * @author auto create
 * @since 1.0, 2020.11.30
 */
class OapiAlitripBtripProjectDeleteRequest
{
	/** 
	 * 企业id
	 **/
	private $corpid;
	
	/** 
	 * 第三方项目ID
	 **/
	private $thirdPartId;
	
	private $apiParas = array();
	
	public function setCorpid($corpid)
	{
		$this->corpid = $corpid;
		$this->apiParas["corpid"] = $corpid;
	}

	public function getCorpid()
	{
		return $this->corpid;
	}

	public function setThirdPartId($thirdPartId)
	{
		$this->thirdPartId = $thirdPartId;
		$this->apiParas["third_part_id"] = $thirdPartId;
	}

	public function getThirdPartId()
	{
		return $this->thirdPartId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.alitrip.btrip.project.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->corpid,"corpid");
		RequestCheckUtil::checkNotNull($this->thirdPartId,"thirdPartId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
