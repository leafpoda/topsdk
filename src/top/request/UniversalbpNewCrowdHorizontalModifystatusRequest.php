<?php
/**
 * TOP API: taobao.universalbp.new.crowd.horizontal.modifystatus request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewCrowdHorizontalModifystatusRequest
{
	/** 
	 * crowdRefCommandListVO
	 **/
	private $crowdRefCommandListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCrowdRefCommandListVO($crowdRefCommandListVO)
	{
		$this->crowdRefCommandListVO = $crowdRefCommandListVO;
		$this->apiParas["crowd_ref_command_list_v_o"] = $crowdRefCommandListVO;
	}

	public function getCrowdRefCommandListVO()
	{
		return $this->crowdRefCommandListVO;
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
		return "taobao.universalbp.new.crowd.horizontal.modifystatus";
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
