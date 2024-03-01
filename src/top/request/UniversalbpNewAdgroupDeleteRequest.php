<?php
/**
 * TOP API: taobao.universalbp.new.adgroup.delete request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewAdgroupDeleteRequest
{
	/** 
	 * adgroupDeleteListVO
	 **/
	private $adgroupDeleteListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setAdgroupDeleteListVO($adgroupDeleteListVO)
	{
		$this->adgroupDeleteListVO = $adgroupDeleteListVO;
		$this->apiParas["adgroup_delete_list_v_o"] = $adgroupDeleteListVO;
	}

	public function getAdgroupDeleteListVO()
	{
		return $this->adgroupDeleteListVO;
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
		return "taobao.universalbp.new.adgroup.delete";
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
