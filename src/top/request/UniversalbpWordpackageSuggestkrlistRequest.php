<?php
/**
 * TOP API: taobao.universalbp.wordpackage.suggestkrlist request
 * 
 * @author auto create
 * @since 1.0, 2023.11.08
 */
class UniversalbpWordpackageSuggestkrlistRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * wordPackageSuggestQueryVO
	 **/
	private $wordPackageSuggestQueryVO;
	
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

	public function setWordPackageSuggestQueryVO($wordPackageSuggestQueryVO)
	{
		$this->wordPackageSuggestQueryVO = $wordPackageSuggestQueryVO;
		$this->apiParas["word_package_suggest_query_v_o"] = $wordPackageSuggestQueryVO;
	}

	public function getWordPackageSuggestQueryVO()
	{
		return $this->wordPackageSuggestQueryVO;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.wordpackage.suggestkrlist";
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
