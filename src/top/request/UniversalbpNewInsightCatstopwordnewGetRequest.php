<?php
/**
 * TOP API: taobao.universalbp.new.insight.catstopwordnew.get request
 * 
 * @author auto create
 * @since 1.0, 2026.01.22
 */
class UniversalbpNewInsightCatstopwordnewGetRequest
{
	/** 
	 * catsTopWordQueryVO
	 **/
	private $catsTopWordQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCatsTopWordQueryVO($catsTopWordQueryVO)
	{
		$this->catsTopWordQueryVO = $catsTopWordQueryVO;
		$this->apiParas["cats_top_word_query_v_o"] = $catsTopWordQueryVO;
	}

	public function getCatsTopWordQueryVO()
	{
		return $this->catsTopWordQueryVO;
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
		return "taobao.universalbp.new.insight.catstopwordnew.get";
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
