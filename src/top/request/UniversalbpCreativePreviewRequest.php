<?php
/**
 * TOP API: taobao.universalbp.creative.preview request
 * 
 * @author auto create
 * @since 1.0, 2023.07.18
 */
class UniversalbpCreativePreviewRequest
{
	/** 
	 * creativePreviewQueryVO
	 **/
	private $creativePreviewQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCreativePreviewQueryVO($creativePreviewQueryVO)
	{
		$this->creativePreviewQueryVO = $creativePreviewQueryVO;
		$this->apiParas["creative_preview_query_v_o"] = $creativePreviewQueryVO;
	}

	public function getCreativePreviewQueryVO()
	{
		return $this->creativePreviewQueryVO;
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
		return "taobao.universalbp.creative.preview";
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
