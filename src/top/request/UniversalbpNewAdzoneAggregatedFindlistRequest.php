<?php
/**
 * TOP API: taobao.universalbp.new.adzone.aggregated.findlist request
 * 
 * @author auto create
 * @since 1.0, 2024.09.26
 */
class UniversalbpNewAdzoneAggregatedFindlistRequest
{
	/** 
	 * adzoneRefQueryVO
	 **/
	private $adzoneRefQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setAdzoneRefQueryVO($adzoneRefQueryVO)
	{
		$this->adzoneRefQueryVO = $adzoneRefQueryVO;
		$this->apiParas["adzone_ref_query_v_o"] = $adzoneRefQueryVO;
	}

	public function getAdzoneRefQueryVO()
	{
		return $this->adzoneRefQueryVO;
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
		return "taobao.universalbp.new.adzone.aggregated.findlist";
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
