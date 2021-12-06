<?php
/**
 * dingtalk API: dingtalk.oapi.alitrip.btrip.reimbursement.get request
 * 
 * @author auto create
 * @since 1.0, 2020.06.15
 */
class OapiAlitripBtripReimbursementGetRequest
{
	/** 
	 * corp id
	 **/
	private $corpid;
	
	/** 
	 * 第三方流程id
	 **/
	private $thirdpartyFlowId;
	
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

	public function setThirdpartyFlowId($thirdpartyFlowId)
	{
		$this->thirdpartyFlowId = $thirdpartyFlowId;
		$this->apiParas["thirdparty_flow_id"] = $thirdpartyFlowId;
	}

	public function getThirdpartyFlowId()
	{
		return $this->thirdpartyFlowId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.alitrip.btrip.reimbursement.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->corpid,"corpid");
		RequestCheckUtil::checkNotNull($this->thirdpartyFlowId,"thirdpartyFlowId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
