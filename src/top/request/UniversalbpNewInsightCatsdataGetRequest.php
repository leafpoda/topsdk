<?php
/**
 * TOP API: taobao.universalbp.new.insight.catsdata.get request
 * 
 * @author auto create
 * @since 1.0, 2026.01.22
 */
class UniversalbpNewInsightCatsdataGetRequest
{
	/** 
	 * catsDataQueryVO
	 **/
	private $catsDataQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCatsDataQueryVO($catsDataQueryVO)
	{
		$this->catsDataQueryVO = $catsDataQueryVO;
		$this->apiParas["cats_data_query_v_o"] = $catsDataQueryVO;
	}

	public function getCatsDataQueryVO()
	{
		return $this->catsDataQueryVO;
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
		return "taobao.universalbp.new.insight.catsdata.get";
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
