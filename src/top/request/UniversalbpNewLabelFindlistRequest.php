<?php
/**
 * TOP API: taobao.universalbp.new.label.findlist request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewLabelFindlistRequest
{
	/** 
	 * labelQueryVO
	 **/
	private $labelQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setLabelQueryVO($labelQueryVO)
	{
		$this->labelQueryVO = $labelQueryVO;
		$this->apiParas["label_query_v_o"] = $labelQueryVO;
	}

	public function getLabelQueryVO()
	{
		return $this->labelQueryVO;
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
		return "taobao.universalbp.new.label.findlist";
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
