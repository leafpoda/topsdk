<?php
/**
 * TOP API: taobao.onebp.display.solution.solution.add request
 * 
 * @author auto create
 * @since 1.0, 2022.09.20
 */
class OnebpDisplaySolutionSolutionAddRequest
{
	/** 
	 * 新建解决方案
	 **/
	private $solutionAdd;
	
	private $apiParas = array();
	
	public function setSolutionAdd($solutionAdd)
	{
		$this->solutionAdd = $solutionAdd;
		$this->apiParas["solution_add"] = $solutionAdd;
	}

	public function getSolutionAdd()
	{
		return $this->solutionAdd;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.solution.solution.add";
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
