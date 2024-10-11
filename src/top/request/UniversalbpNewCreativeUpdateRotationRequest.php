<?php
/**
 * TOP API: taobao.universalbp.new.creative.update.rotation request
 * 
 * @author auto create
 * @since 1.0, 2024.08.20
 */
class UniversalbpNewCreativeUpdateRotationRequest
{
	/** 
	 * creativeCommandVO
	 **/
	private $creativeCommandVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCreativeCommandVO($creativeCommandVO)
	{
		$this->creativeCommandVO = $creativeCommandVO;
		$this->apiParas["creative_command_v_o"] = $creativeCommandVO;
	}

	public function getCreativeCommandVO()
	{
		return $this->creativeCommandVO;
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
		return "taobao.universalbp.new.creative.update.rotation";
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
