<?php
/**
 * TOP API: taobao.universalbp.new.creative.check.role request
 * 
 * @author auto create
 * @since 1.0, 2024.07.03
 */
class UniversalbpNewCreativeCheckRoleRequest
{
	/** 
	 * creativeRoleQueryVO
	 **/
	private $creativeRoleQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCreativeRoleQueryVO($creativeRoleQueryVO)
	{
		$this->creativeRoleQueryVO = $creativeRoleQueryVO;
		$this->apiParas["creative_role_query_v_o"] = $creativeRoleQueryVO;
	}

	public function getCreativeRoleQueryVO()
	{
		return $this->creativeRoleQueryVO;
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
		return "taobao.universalbp.new.creative.check.role";
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
