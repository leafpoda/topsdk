<?php
/**
 * dingtalk API: dingtalk.oapi.edu.class.listbyteacher request
 * 
 * @author auto create
 * @since 1.0, 2020.04.28
 */
class OapiEduClassListbyteacherRequest
{
	/** 
	 * 过滤入参
	 **/
	private $filterParam;
	
	/** 
	 * 用户ID
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setFilterParam($filterParam)
	{
		$this->filterParam = $filterParam;
		$this->apiParas["filter_param"] = $filterParam;
	}

	public function getFilterParam()
	{
		return $this->filterParam;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.class.listbyteacher";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
