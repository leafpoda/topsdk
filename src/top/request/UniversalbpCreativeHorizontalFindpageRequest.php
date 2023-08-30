<?php
/**
 * TOP API: taobao.universalbp.creative.horizontal.findpage request
 * 
 * @author auto create
 * @since 1.0, 2023.08.30
 */
class UniversalbpCreativeHorizontalFindpageRequest
{
	/** 
	 * creativeQueryVO
	 **/
	private $creativeQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCreativeQueryVO($creativeQueryVO)
	{
		$this->creativeQueryVO = $creativeQueryVO;
		$this->apiParas["creative_query_v_o"] = $creativeQueryVO;
	}

	public function getCreativeQueryVO()
	{
		return $this->creativeQueryVO;
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
		return "taobao.universalbp.creative.horizontal.findpage";
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
