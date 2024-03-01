<?php
/**
 * TOP API: taobao.universalbp.new.creative.updatecreativeandtemplate request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewCreativeUpdatecreativeandtemplateRequest
{
	/** 
	 * creativeAndTemplateListVO
	 **/
	private $creativeAndTemplateListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCreativeAndTemplateListVO($creativeAndTemplateListVO)
	{
		$this->creativeAndTemplateListVO = $creativeAndTemplateListVO;
		$this->apiParas["creative_and_template_list_v_o"] = $creativeAndTemplateListVO;
	}

	public function getCreativeAndTemplateListVO()
	{
		return $this->creativeAndTemplateListVO;
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
		return "taobao.universalbp.new.creative.updatecreativeandtemplate";
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
