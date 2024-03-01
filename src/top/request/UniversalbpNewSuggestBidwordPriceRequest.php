<?php
/**
 * TOP API: taobao.universalbp.new.suggest.bidword.price request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewSuggestBidwordPriceRequest
{
	/** 
	 * bidwordSingleQueryVO
	 **/
	private $bidwordSingleQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setBidwordSingleQueryVO($bidwordSingleQueryVO)
	{
		$this->bidwordSingleQueryVO = $bidwordSingleQueryVO;
		$this->apiParas["bidword_single_query_v_o"] = $bidwordSingleQueryVO;
	}

	public function getBidwordSingleQueryVO()
	{
		return $this->bidwordSingleQueryVO;
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
		return "taobao.universalbp.new.suggest.bidword.price";
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
