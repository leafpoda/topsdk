<?php
/**
 * dingtalk API: dingtalk.oapi.edu.userid.get request
 * 
 * @author auto create
 * @since 1.0, 2020.11.20
 */
class OapiEduUseridGetRequest
{
	/** 
	 * 手机列表，最大不超过50个
	 **/
	private $mobiles;
	
	/** 
	 * 操作者id
	 **/
	private $operator;
	
	private $apiParas = array();
	
	public function setMobiles($mobiles)
	{
		$this->mobiles = $mobiles;
		$this->apiParas["mobiles"] = $mobiles;
	}

	public function getMobiles()
	{
		return $this->mobiles;
	}

	public function setOperator($operator)
	{
		$this->operator = $operator;
		$this->apiParas["operator"] = $operator;
	}

	public function getOperator()
	{
		return $this->operator;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.userid.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mobiles,"mobiles");
		RequestCheckUtil::checkMaxListSize($this->mobiles,999,"mobiles");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
