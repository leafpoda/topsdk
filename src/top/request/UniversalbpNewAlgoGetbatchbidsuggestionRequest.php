<?php
/**
 * TOP API: taobao.universalbp.new.algo.getbatchbidsuggestion request
 * 
 * @author auto create
 * @since 1.0, 2024.01.30
 */
class UniversalbpNewAlgoGetbatchbidsuggestionRequest
{
	/** 
	 * algoQueryListVO
	 **/
	private $algoQueryListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setAlgoQueryListVO($algoQueryListVO)
	{
		$this->algoQueryListVO = $algoQueryListVO;
		$this->apiParas["algo_query_list_v_o"] = $algoQueryListVO;
	}

	public function getAlgoQueryListVO()
	{
		return $this->algoQueryListVO;
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
		return "taobao.universalbp.new.algo.getbatchbidsuggestion";
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
