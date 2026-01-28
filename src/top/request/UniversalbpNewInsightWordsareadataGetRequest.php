<?php
/**
 * TOP API: taobao.universalbp.new.insight.wordsareadata.get request
 * 
 * @author auto create
 * @since 1.0, 2026.01.22
 */
class UniversalbpNewInsightWordsareadataGetRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * wordsAreaDataQueryVO
	 **/
	private $wordsAreaDataQueryVO;
	
	private $apiParas = array();
	
	public function setTopServiceContext($topServiceContext)
	{
		$this->topServiceContext = $topServiceContext;
		$this->apiParas["top_service_context"] = $topServiceContext;
	}

	public function getTopServiceContext()
	{
		return $this->topServiceContext;
	}

	public function setWordsAreaDataQueryVO($wordsAreaDataQueryVO)
	{
		$this->wordsAreaDataQueryVO = $wordsAreaDataQueryVO;
		$this->apiParas["words_area_data_query_v_o"] = $wordsAreaDataQueryVO;
	}

	public function getWordsAreaDataQueryVO()
	{
		return $this->wordsAreaDataQueryVO;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.new.insight.wordsareadata.get";
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
