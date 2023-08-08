<?php
/**
 * TOP API: taobao.universalbp.stdcategory.findcategorycondition request
 * 
 * @author auto create
 * @since 1.0, 2023.08.04
 */
class UniversalbpStdcategoryFindcategoryconditionRequest
{
	/** 
	 * stdCategoryQueryVO
	 **/
	private $stdCategoryQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setStdCategoryQueryVO($stdCategoryQueryVO)
	{
		$this->stdCategoryQueryVO = $stdCategoryQueryVO;
		$this->apiParas["std_category_query_v_o"] = $stdCategoryQueryVO;
	}

	public function getStdCategoryQueryVO()
	{
		return $this->stdCategoryQueryVO;
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
		return "taobao.universalbp.stdcategory.findcategorycondition";
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
