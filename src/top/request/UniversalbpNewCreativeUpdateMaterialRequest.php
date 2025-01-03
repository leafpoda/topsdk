<?php
/**
 * TOP API: taobao.universalbp.new.creative.update.material request
 * 
 * @author auto create
 * @since 1.0, 2024.10.25
 */
class UniversalbpNewCreativeUpdateMaterialRequest
{
	/** 
	 * creativeMaterialVO
	 **/
	private $creativeMaterialVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCreativeMaterialVO($creativeMaterialVO)
	{
		$this->creativeMaterialVO = $creativeMaterialVO;
		$this->apiParas["creative_material_v_o"] = $creativeMaterialVO;
	}

	public function getCreativeMaterialVO()
	{
		return $this->creativeMaterialVO;
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
		return "taobao.universalbp.new.creative.update.material";
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
