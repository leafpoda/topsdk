<?php
/**
 * TOP API: taobao.universalbp.new.wordpackage.suggestdefaultlist request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewWordpackageSuggestdefaultlistRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * wordPackageDefaultQueryVO
	 **/
	private $wordPackageDefaultQueryVO;
	
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

	public function setWordPackageDefaultQueryVO($wordPackageDefaultQueryVO)
	{
		$this->wordPackageDefaultQueryVO = $wordPackageDefaultQueryVO;
		$this->apiParas["word_package_default_query_v_o"] = $wordPackageDefaultQueryVO;
	}

	public function getWordPackageDefaultQueryVO()
	{
		return $this->wordPackageDefaultQueryVO;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.new.wordpackage.suggestdefaultlist";
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
