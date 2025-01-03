<?php
/**
 * TOP API: taobao.universalbp.new.word.index.detail request
 * 
 * @author auto create
 * @since 1.0, 2024.12.12
 */
class UniversalbpNewWordIndexDetailRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * wordIndexQueryVO
	 **/
	private $wordIndexQueryVO;
	
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

	public function setWordIndexQueryVO($wordIndexQueryVO)
	{
		$this->wordIndexQueryVO = $wordIndexQueryVO;
		$this->apiParas["word_index_query_v_o"] = $wordIndexQueryVO;
	}

	public function getWordIndexQueryVO()
	{
		return $this->wordIndexQueryVO;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.new.word.index.detail";
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
