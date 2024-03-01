<?php
/**
 * TOP API: taobao.universalbp.new.bidword.findlist request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewBidwordFindlistRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * 关键词查询
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
		return "taobao.universalbp.new.bidword.findlist";
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
