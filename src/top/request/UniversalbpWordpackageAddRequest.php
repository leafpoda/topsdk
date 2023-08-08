<?php
/**
 * TOP API: taobao.universalbp.wordpackage.add request
 * 
 * @author auto create
 * @since 1.0, 2023.07.18
 */
class UniversalbpWordpackageAddRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * wordPackageAddRequestVO
	 **/
	private $wordPackageAddRequestVO;
	
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

	public function setWordPackageAddRequestVO($wordPackageAddRequestVO)
	{
		$this->wordPackageAddRequestVO = $wordPackageAddRequestVO;
		$this->apiParas["word_package_add_request_v_o"] = $wordPackageAddRequestVO;
	}

	public function getWordPackageAddRequestVO()
	{
		return $this->wordPackageAddRequestVO;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.wordpackage.add";
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
