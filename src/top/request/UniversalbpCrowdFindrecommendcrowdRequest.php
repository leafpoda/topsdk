<?php
/**
 * TOP API: taobao.universalbp.crowd.findrecommendcrowd request
 * 
 * @author auto create
 * @since 1.0, 2023.09.20
 */
class UniversalbpCrowdFindrecommendcrowdRequest
{
	/** 
	 * crowdRecQueryVO
	 **/
	private $crowdRecQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCrowdRecQueryVO($crowdRecQueryVO)
	{
		$this->crowdRecQueryVO = $crowdRecQueryVO;
		$this->apiParas["crowd_rec_query_v_o"] = $crowdRecQueryVO;
	}

	public function getCrowdRecQueryVO()
	{
		return $this->crowdRecQueryVO;
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
		return "taobao.universalbp.crowd.findrecommendcrowd";
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
