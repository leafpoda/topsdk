<?php
/**
 * TOP API: taobao.universalbp.new.solution.modify request
 * 
 * @author auto create
 * @since 1.0, 2024.10.10
 */
class UniversalbpNewSolutionModifyRequest
{
	/** 
	 * solutionCommandListVO
	 **/
	private $solutionCommandListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setSolutionCommandListVO($solutionCommandListVO)
	{
		$this->solutionCommandListVO = $solutionCommandListVO;
		$this->apiParas["solution_command_list_v_o"] = $solutionCommandListVO;
	}

	public function getSolutionCommandListVO()
	{
		return $this->solutionCommandListVO;
	}

	public function setTopServiceContext($topServiceContext)
	{
		$this->topServiceContext = $topServiceContext;
		$this->apiParas["top_service_context"] = $topServiceContext;
	}

	public function getTopServiceContext()
	{
		return $this->topServiceContext;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.new.solution.modify";
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
