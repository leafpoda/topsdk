<?php
/**
 * TOP API: taobao.universalbp.new.creative.getbindcreativelist request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewCreativeGetbindcreativelistRequest
{
	/** 
	 * creativeRefQueryVO
	 **/
	private $creativeRefQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCreativeRefQueryVO($creativeRefQueryVO)
	{
		$this->creativeRefQueryVO = $creativeRefQueryVO;
		$this->apiParas["creative_ref_query_v_o"] = $creativeRefQueryVO;
	}

	public function getCreativeRefQueryVO()
	{
		return $this->creativeRefQueryVO;
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
		return "taobao.universalbp.new.creative.getbindcreativelist";
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
