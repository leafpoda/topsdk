<?php
/**
 * TOP API: taobao.universalbp.new.check.complete.scene request
 * 
 * @author auto create
 * @since 1.0, 2024.04.08
 */
class UniversalbpNewCheckCompleteSceneRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
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

	public function getApiMethodName()
	{
		return "taobao.universalbp.new.check.complete.scene";
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
