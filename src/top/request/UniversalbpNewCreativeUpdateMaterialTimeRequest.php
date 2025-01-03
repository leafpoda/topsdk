<?php
/**
 * TOP API: taobao.universalbp.new.creative.update.material.time request
 * 
 * @author auto create
 * @since 1.0, 2024.10.25
 */
class UniversalbpNewCreativeUpdateMaterialTimeRequest
{
	/** 
	 * materialCommandVO
	 **/
	private $materialCommandVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setMaterialCommandVO($materialCommandVO)
	{
		$this->materialCommandVO = $materialCommandVO;
		$this->apiParas["material_command_v_o"] = $materialCommandVO;
	}

	public function getMaterialCommandVO()
	{
		return $this->materialCommandVO;
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
		return "taobao.universalbp.new.creative.update.material.time";
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
