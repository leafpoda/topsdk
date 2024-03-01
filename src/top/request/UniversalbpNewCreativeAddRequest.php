<?php
/**
 * TOP API: taobao.universalbp.new.creative.add request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewCreativeAddRequest
{
	/** 
	 * creativeCommandListVO
	 **/
	private $creativeCommandListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCreativeCommandListVO($creativeCommandListVO)
	{
		$this->creativeCommandListVO = $creativeCommandListVO;
		$this->apiParas["creative_command_list_v_o"] = $creativeCommandListVO;
	}

	public function getCreativeCommandListVO()
	{
		return $this->creativeCommandListVO;
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
		return "taobao.universalbp.new.creative.add";
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
