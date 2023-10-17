<?php
/**
 * TOP API: taobao.universalbp.creative.findrequire request
 * 
 * @author auto create
 * @since 1.0, 2023.09.14
 */
class UniversalbpCreativeFindrequireRequest
{
	/** 
	 * creativeRequireQueryVO
	 **/
	private $creativeRequireQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCreativeRequireQueryVO($creativeRequireQueryVO)
	{
		$this->creativeRequireQueryVO = $creativeRequireQueryVO;
		$this->apiParas["creative_require_query_v_o"] = $creativeRequireQueryVO;
	}

	public function getCreativeRequireQueryVO()
	{
		return $this->creativeRequireQueryVO;
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
		return "taobao.universalbp.creative.findrequire";
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
