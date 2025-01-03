<?php
/**
 * TOP API: taobao.universalbp.new.word.gategory.find request
 * 
 * @author auto create
 * @since 1.0, 2024.12.12
 */
class UniversalbpNewWordGategoryFindRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * wordCategoryQueryVO
	 **/
	private $wordCategoryQueryVO;
	
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

	public function setWordCategoryQueryVO($wordCategoryQueryVO)
	{
		$this->wordCategoryQueryVO = $wordCategoryQueryVO;
		$this->apiParas["word_category_query_v_o"] = $wordCategoryQueryVO;
	}

	public function getWordCategoryQueryVO()
	{
		return $this->wordCategoryQueryVO;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.new.word.gategory.find";
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
