<?php
/**
 * TOP API: taobao.universalbp.new.insight.relatedwords.get request
 * 
 * @author auto create
 * @since 1.0, 2026.01.22
 */
class UniversalbpNewInsightRelatedwordsGetRequest
{
	/** 
	 * relatedWordsQueryVO
	 **/
	private $relatedWordsQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setRelatedWordsQueryVO($relatedWordsQueryVO)
	{
		$this->relatedWordsQueryVO = $relatedWordsQueryVO;
		$this->apiParas["related_words_query_v_o"] = $relatedWordsQueryVO;
	}

	public function getRelatedWordsQueryVO()
	{
		return $this->relatedWordsQueryVO;
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
		return "taobao.universalbp.new.insight.relatedwords.get";
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
