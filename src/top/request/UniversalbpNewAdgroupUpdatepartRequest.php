<?php
/**
 * TOP API: taobao.universalbp.new.adgroup.updatepart request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewAdgroupUpdatepartRequest
{
	/** 
	 * adgroupUpdatePartListVO
	 **/
	private $adgroupUpdatePartListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setAdgroupUpdatePartListVO($adgroupUpdatePartListVO)
	{
		$this->adgroupUpdatePartListVO = $adgroupUpdatePartListVO;
		$this->apiParas["adgroup_update_part_list_v_o"] = $adgroupUpdatePartListVO;
	}

	public function getAdgroupUpdatePartListVO()
	{
		return $this->adgroupUpdatePartListVO;
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
		return "taobao.universalbp.new.adgroup.updatepart";
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
