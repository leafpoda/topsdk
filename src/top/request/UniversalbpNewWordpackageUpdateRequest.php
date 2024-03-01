<?php
/**
 * TOP API: taobao.universalbp.new.wordpackage.update request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewWordpackageUpdateRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * wordPackageUpdateRequestVO
	 **/
	private $wordPackageUpdateRequestVO;
	
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

	public function setWordPackageUpdateRequestVO($wordPackageUpdateRequestVO)
	{
		$this->wordPackageUpdateRequestVO = $wordPackageUpdateRequestVO;
		$this->apiParas["word_package_update_request_v_o"] = $wordPackageUpdateRequestVO;
	}

	public function getWordPackageUpdateRequestVO()
	{
		return $this->wordPackageUpdateRequestVO;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.new.wordpackage.update";
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
