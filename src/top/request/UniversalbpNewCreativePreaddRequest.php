<?php
/**
 * TOP API: taobao.universalbp.new.creative.preadd request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewCreativePreaddRequest
{
	/** 
	 * adgroupIdVO
	 **/
	private $adgroupIdVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setAdgroupIdVO($adgroupIdVO)
	{
		$this->adgroupIdVO = $adgroupIdVO;
		$this->apiParas["adgroup_id_v_o"] = $adgroupIdVO;
	}

	public function getAdgroupIdVO()
	{
		return $this->adgroupIdVO;
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
		return "taobao.universalbp.new.creative.preadd";
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
