<?php
/**
 * dingtalk API: dingtalk.oapi.edu.family.child.get request
 * 
 * @author auto create
 * @since 1.0, 2021.01.20
 */
class OapiEduFamilyChildGetRequest
{
	/** 
	 * 孩子userid
	 **/
	private $childUserid;
	
	/** 
	 * 操作者userid
	 **/
	private $opUserid;
	
	private $apiParas = array();
	
	public function setChildUserid($childUserid)
	{
		$this->childUserid = $childUserid;
		$this->apiParas["child_userid"] = $childUserid;
	}

	public function getChildUserid()
	{
		return $this->childUserid;
	}

	public function setOpUserid($opUserid)
	{
		$this->opUserid = $opUserid;
		$this->apiParas["op_userid"] = $opUserid;
	}

	public function getOpUserid()
	{
		return $this->opUserid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.family.child.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->childUserid,"childUserid");
		RequestCheckUtil::checkNotNull($this->opUserid,"opUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
