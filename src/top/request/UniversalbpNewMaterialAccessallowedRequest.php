<?php
/**
 * TOP API: taobao.universalbp.new.material.accessallowed request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewMaterialAccessallowedRequest
{
	/** 
	 * materialAccessAllowQueryVO
	 **/
	private $materialAccessAllowQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setMaterialAccessAllowQueryVO($materialAccessAllowQueryVO)
	{
		$this->materialAccessAllowQueryVO = $materialAccessAllowQueryVO;
		$this->apiParas["material_access_allow_query_v_o"] = $materialAccessAllowQueryVO;
	}

	public function getMaterialAccessAllowQueryVO()
	{
		return $this->materialAccessAllowQueryVO;
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
		return "taobao.universalbp.new.material.accessallowed";
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
