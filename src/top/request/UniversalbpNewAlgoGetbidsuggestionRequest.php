<?php
/**
 * TOP API: taobao.universalbp.new.algo.getbidsuggestion request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewAlgoGetbidsuggestionRequest
{
	/** 
	 * algoQueryVO
	 **/
	private $algoQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setAlgoQueryVO($algoQueryVO)
	{
		$this->algoQueryVO = $algoQueryVO;
		$this->apiParas["algo_query_v_o"] = $algoQueryVO;
	}

	public function getAlgoQueryVO()
	{
		return $this->algoQueryVO;
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
		return "taobao.universalbp.new.algo.getbidsuggestion";
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
