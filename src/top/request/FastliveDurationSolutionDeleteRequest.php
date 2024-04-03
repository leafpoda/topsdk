<?php
/**
 * TOP API: taobao.fastlive.duration.solution.delete request
 * 
 * @author auto create
 * @since 1.0, 2024.04.03
 */
class FastliveDurationSolutionDeleteRequest
{
	/** 
	 * 计划ID
	 **/
	private $param0;
	
	private $apiParas = array();
	
	public function setParam0($param0)
	{
		$this->param0 = $param0;
		$this->apiParas["param_0"] = $param0;
	}

	public function getParam0()
	{
		return $this->param0;
	}

	public function getApiMethodName()
	{
		return "taobao.fastlive.duration.solution.delete";
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
