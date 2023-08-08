<?php
/**
 * TOP API: taobao.universalbp.bidword.suggestdefaultlist request
 * 
 * @author auto create
 * @since 1.0, 2023.08.03
 */
class UniversalbpBidwordSuggestdefaultlistRequest
{
	/** 
	 * bidwordDefaultQueryVO
	 **/
	private $bidwordDefaultQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setBidwordDefaultQueryVO($bidwordDefaultQueryVO)
	{
		$this->bidwordDefaultQueryVO = $bidwordDefaultQueryVO;
		$this->apiParas["bidword_default_query_v_o"] = $bidwordDefaultQueryVO;
	}

	public function getBidwordDefaultQueryVO()
	{
		return $this->bidwordDefaultQueryVO;
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
		return "taobao.universalbp.bidword.suggestdefaultlist";
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
