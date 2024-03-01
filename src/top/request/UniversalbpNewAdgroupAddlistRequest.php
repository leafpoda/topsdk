<?php
/**
 * TOP API: taobao.universalbp.new.adgroup.addlist request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewAdgroupAddlistRequest
{
	/** 
	 * adgroupAddCommandVO
	 **/
	private $adgroupAddCommandVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setAdgroupAddCommandVO($adgroupAddCommandVO)
	{
		$this->adgroupAddCommandVO = $adgroupAddCommandVO;
		$this->apiParas["adgroup_add_command_v_o"] = $adgroupAddCommandVO;
	}

	public function getAdgroupAddCommandVO()
	{
		return $this->adgroupAddCommandVO;
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
		return "taobao.universalbp.new.adgroup.addlist";
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
