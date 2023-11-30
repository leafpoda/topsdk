<?php
/**
 * TOP API: taobao.universalbp.adzone.horizontal.findpage request
 * 
 * @author auto create
 * @since 1.0, 2023.11.28
 */
class UniversalbpAdzoneHorizontalFindpageRequest
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
		return "taobao.universalbp.adzone.horizontal.findpage";
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
