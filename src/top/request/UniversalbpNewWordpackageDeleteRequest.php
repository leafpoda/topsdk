<?php
/**
 * TOP API: taobao.universalbp.new.wordpackage.delete request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewWordpackageDeleteRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * wordPackageCommandListVO
	 **/
	private $wordPackageCommandListVO;
	
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

	public function setWordPackageCommandListVO($wordPackageCommandListVO)
	{
		$this->wordPackageCommandListVO = $wordPackageCommandListVO;
		$this->apiParas["word_package_command_list_v_o"] = $wordPackageCommandListVO;
	}

	public function getWordPackageCommandListVO()
	{
		return $this->wordPackageCommandListVO;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.new.wordpackage.delete";
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
