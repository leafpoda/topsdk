<?php
/**
 * TOP API: taobao.universalbp.new.material.find.spot request
 * 
 * @author auto create
 * @since 1.0, 2024.08.20
 */
class UniversalbpNewMaterialFindSpotRequest
{
	/** 
	 * spotQueryVO
	 **/
	private $spotQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setSpotQueryVO($spotQueryVO)
	{
		$this->spotQueryVO = $spotQueryVO;
		$this->apiParas["spot_query_v_o"] = $spotQueryVO;
	}

	public function getSpotQueryVO()
	{
		return $this->spotQueryVO;
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
		return "taobao.universalbp.new.material.find.spot";
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
