<?php
/**
 * TOP API: taobao.universalbp.new.stdcategory.findlist request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewStdcategoryFindlistRequest
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
		return "taobao.universalbp.new.stdcategory.findlist";
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
