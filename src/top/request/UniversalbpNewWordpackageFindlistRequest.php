<?php
/**
 * TOP API: taobao.universalbp.new.wordpackage.findlist request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewWordpackageFindlistRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * 关键词词包查询
	 **/
	private $wordPackageQueryVO;
	
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

	public function setWordPackageQueryVO($wordPackageQueryVO)
	{
		$this->wordPackageQueryVO = $wordPackageQueryVO;
		$this->apiParas["word_package_query_v_o"] = $wordPackageQueryVO;
	}

	public function getWordPackageQueryVO()
	{
		return $this->wordPackageQueryVO;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.new.wordpackage.findlist";
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
