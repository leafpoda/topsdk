<?php
/**
 * TOP API: taobao.universalbp.new.creative.unbind request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewCreativeUnbindRequest
{
	/** 
	 * creativeRefCommandListVO
	 **/
	private $creativeRefCommandListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCreativeRefCommandListVO($creativeRefCommandListVO)
	{
		$this->creativeRefCommandListVO = $creativeRefCommandListVO;
		$this->apiParas["creative_ref_command_list_v_o"] = $creativeRefCommandListVO;
	}

	public function getCreativeRefCommandListVO()
	{
		return $this->creativeRefCommandListVO;
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
		return "taobao.universalbp.new.creative.unbind";
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
