<?php
/**
 * TOP API: taobao.universalbp.new.shield.textjudge request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewShieldTextjudgeRequest
{
	/** 
	 * shieldTextQueryVO
	 **/
	private $shieldTextQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setShieldTextQueryVO($shieldTextQueryVO)
	{
		$this->shieldTextQueryVO = $shieldTextQueryVO;
		$this->apiParas["shield_text_query_v_o"] = $shieldTextQueryVO;
	}

	public function getShieldTextQueryVO()
	{
		return $this->shieldTextQueryVO;
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
		return "taobao.universalbp.new.shield.textjudge";
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
