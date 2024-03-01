<?php
/**
 * TOP API: taobao.universalbp.new.diagnose.adgroup.faultlist request
 * 
 * @author auto create
 * @since 1.0, 2024.01.30
 */
class UniversalbpNewDiagnoseAdgroupFaultlistRequest
{
	/** 
	 * adgroupIdListVO
	 **/
	private $adgroupIdListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setAdgroupIdListVO($adgroupIdListVO)
	{
		$this->adgroupIdListVO = $adgroupIdListVO;
		$this->apiParas["adgroup_id_list_v_o"] = $adgroupIdListVO;
	}

	public function getAdgroupIdListVO()
	{
		return $this->adgroupIdListVO;
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
		return "taobao.universalbp.new.diagnose.adgroup.faultlist";
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
