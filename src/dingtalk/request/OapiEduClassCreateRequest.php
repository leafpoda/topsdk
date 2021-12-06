<?php
/**
 * dingtalk API: dingtalk.oapi.edu.class.create request
 * 
 * @author auto create
 * @since 1.0, 2020.10.26
 */
class OapiEduClassCreateRequest
{
	/** 
	 * 班级
	 **/
	private $openClass;
	
	/** 
	 * 钉钉企业管理员
	 **/
	private $operator;
	
	/** 
	 * 年级id
	 **/
	private $superId;
	
	private $apiParas = array();
	
	public function setOpenClass($openClass)
	{
		$this->openClass = $openClass;
		$this->apiParas["open_class"] = $openClass;
	}

	public function getOpenClass()
	{
		return $this->openClass;
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

	public function setSuperId($superId)
	{
		$this->superId = $superId;
		$this->apiParas["super_id"] = $superId;
	}

	public function getSuperId()
	{
		return $this->superId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.class.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->operator,"operator");
		RequestCheckUtil::checkNotNull($this->superId,"superId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
