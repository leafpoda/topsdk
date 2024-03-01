<?php
/**
 * TOP API: taobao.universalbp.new.bidword.update request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewBidwordUpdateRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * wordUpdateRequestVO
	 **/
	private $wordUpdateRequestVO;
	
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

	public function setWordUpdateRequestVO($wordUpdateRequestVO)
	{
		$this->wordUpdateRequestVO = $wordUpdateRequestVO;
		$this->apiParas["word_update_request_v_o"] = $wordUpdateRequestVO;
	}

	public function getWordUpdateRequestVO()
	{
		return $this->wordUpdateRequestVO;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.new.bidword.update";
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
