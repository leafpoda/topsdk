<?php
/**
 * TOP API: taobao.universalbp.new.template.getsuggest request
 * 
 * @author auto create
 * @since 1.0, 2025.04.08
 */
class UniversalbpNewTemplateGetsuggestRequest
{
	/** 
	 * tetrisTemplateQueryVO
	 **/
	private $tetrisTemplateQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setTetrisTemplateQueryVO($tetrisTemplateQueryVO)
	{
		$this->tetrisTemplateQueryVO = $tetrisTemplateQueryVO;
		$this->apiParas["tetris_template_query_v_o"] = $tetrisTemplateQueryVO;
	}

	public function getTetrisTemplateQueryVO()
	{
		return $this->tetrisTemplateQueryVO;
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
		return "taobao.universalbp.new.template.getsuggest";
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
