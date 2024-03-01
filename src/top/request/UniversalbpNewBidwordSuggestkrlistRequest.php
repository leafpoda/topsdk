<?php
/**
 * TOP API: taobao.universalbp.new.bidword.suggestkrlist request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewBidwordSuggestkrlistRequest
{
	/** 
	 * bidwordSuggestQueryVO
	 **/
	private $bidwordSuggestQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setBidwordSuggestQueryVO($bidwordSuggestQueryVO)
	{
		$this->bidwordSuggestQueryVO = $bidwordSuggestQueryVO;
		$this->apiParas["bidword_suggest_query_v_o"] = $bidwordSuggestQueryVO;
	}

	public function getBidwordSuggestQueryVO()
	{
		return $this->bidwordSuggestQueryVO;
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
		return "taobao.universalbp.new.bidword.suggestkrlist";
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
