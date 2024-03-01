<?php
/**
 * TOP API: taobao.universalbp.new.crowd.findlist request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewCrowdFindlistRequest
{
	/** 
	 * crowdBindQueryListVO
	 **/
	private $crowdBindQueryListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCrowdBindQueryListVO($crowdBindQueryListVO)
	{
		$this->crowdBindQueryListVO = $crowdBindQueryListVO;
		$this->apiParas["crowd_bind_query_list_v_o"] = $crowdBindQueryListVO;
	}

	public function getCrowdBindQueryListVO()
	{
		return $this->crowdBindQueryListVO;
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
		return "taobao.universalbp.new.crowd.findlist";
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
