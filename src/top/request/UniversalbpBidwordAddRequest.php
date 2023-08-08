<?php
/**
 * TOP API: taobao.universalbp.bidword.add request
 * 
 * @author auto create
 * @since 1.0, 2023.07.18
 */
class UniversalbpBidwordAddRequest
{
	/** 
	 * bidWordAddRequestVO
	 **/
	private $bidWordAddRequestVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setBidWordAddRequestVO($bidWordAddRequestVO)
	{
		$this->bidWordAddRequestVO = $bidWordAddRequestVO;
		$this->apiParas["bid_word_add_request_v_o"] = $bidWordAddRequestVO;
	}

	public function getBidWordAddRequestVO()
	{
		return $this->bidWordAddRequestVO;
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
		return "taobao.universalbp.bidword.add";
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
