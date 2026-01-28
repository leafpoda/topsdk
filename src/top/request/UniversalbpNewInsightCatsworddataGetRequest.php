<?php
/**
 * TOP API: taobao.universalbp.new.insight.catsworddata.get request
 * 
 * @author auto create
 * @since 1.0, 2026.01.22
 */
class UniversalbpNewInsightCatsworddataGetRequest
{
	/** 
	 * catsWordDataQueryVO
	 **/
	private $catsWordDataQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCatsWordDataQueryVO($catsWordDataQueryVO)
	{
		$this->catsWordDataQueryVO = $catsWordDataQueryVO;
		$this->apiParas["cats_word_data_query_v_o"] = $catsWordDataQueryVO;
	}

	public function getCatsWordDataQueryVO()
	{
		return $this->catsWordDataQueryVO;
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
		return "taobao.universalbp.new.insight.catsworddata.get";
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
