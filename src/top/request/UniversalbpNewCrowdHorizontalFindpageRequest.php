<?php
/**
 * TOP API: taobao.universalbp.new.crowd.horizontal.findpage request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewCrowdHorizontalFindpageRequest
{
	/** 
	 * crowdBindQueryVO
	 **/
	private $crowdBindQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCrowdBindQueryVO($crowdBindQueryVO)
	{
		$this->crowdBindQueryVO = $crowdBindQueryVO;
		$this->apiParas["crowd_bind_query_v_o"] = $crowdBindQueryVO;
	}

	public function getCrowdBindQueryVO()
	{
		return $this->crowdBindQueryVO;
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
		return "taobao.universalbp.new.crowd.horizontal.findpage";
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
