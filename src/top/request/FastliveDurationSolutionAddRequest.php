<?php
/**
 * TOP API: taobao.fastlive.duration.solution.add request
 * 
 * @author auto create
 * @since 1.0, 2024.04.03
 */
class FastliveDurationSolutionAddRequest
{
	/** 
	 * 计划信息
	 **/
	private $solution;
	
	private $apiParas = array();
	
	public function setSolution($solution)
	{
		$this->solution = $solution;
		$this->apiParas["solution"] = $solution;
	}

	public function getSolution()
	{
		return $this->solution;
	}

	public function getApiMethodName()
	{
		return "taobao.fastlive.duration.solution.add";
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
