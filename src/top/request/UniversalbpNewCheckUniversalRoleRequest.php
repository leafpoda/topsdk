<?php
/**
 * TOP API: taobao.universalbp.new.check.universal.role request
 * 
 * @author auto create
 * @since 1.0, 2024.10.18
 */
class UniversalbpNewCheckUniversalRoleRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * universalMergeRoleQueryVO
	 **/
	private $universalMergeRoleQueryVO;
	
	private $apiParas = array();
	
	public function setTopServiceContext($topServiceContext)
	{
		$this->topServiceContext = $topServiceContext;
		$this->apiParas["top_service_context"] = $topServiceContext;
	}

	public function getTopServiceContext()
	{
		return $this->topServiceContext;
	}

	public function setUniversalMergeRoleQueryVO($universalMergeRoleQueryVO)
	{
		$this->universalMergeRoleQueryVO = $universalMergeRoleQueryVO;
		$this->apiParas["universal_merge_role_query_v_o"] = $universalMergeRoleQueryVO;
	}

	public function getUniversalMergeRoleQueryVO()
	{
		return $this->universalMergeRoleQueryVO;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.new.check.universal.role";
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
