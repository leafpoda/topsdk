<?php
/**
 * TOP API: taobao.universalbp.bidword.findlist request
 * 
 * @author auto create
 * @since 1.0, 2023.10.18
 */
class UniversalbpBidwordFindlistRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * wordQueryVO
	 **/
	private $wordQueryVO;
	
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

	public function setWordQueryVO($wordQueryVO)
	{
		$this->wordQueryVO = $wordQueryVO;
		$this->apiParas["word_query_v_o"] = $wordQueryVO;
	}

	public function getWordQueryVO()
	{
		return $this->wordQueryVO;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.bidword.findlist";
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
