<?php
/**
 * TOP API: taobao.universalbp.new.insight.wordsdata.get request
 * 
 * @author auto create
 * @since 1.0, 2026.01.22
 */
class UniversalbpNewInsightWordsdataGetRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * wordsDataQueryVO
	 **/
	private $wordsDataQueryVO;
	
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

	public function setWordsDataQueryVO($wordsDataQueryVO)
	{
		$this->wordsDataQueryVO = $wordsDataQueryVO;
		$this->apiParas["words_data_query_v_o"] = $wordsDataQueryVO;
	}

	public function getWordsDataQueryVO()
	{
		return $this->wordsDataQueryVO;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.new.insight.wordsdata.get";
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
