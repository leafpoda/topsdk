<?php
/**
 * TOP API: taobao.universalbp.bidword.qscore request
 * 
 * @author auto create
 * @since 1.0, 2023.10.26
 */
class UniversalbpBidwordQscoreRequest
{
	/** 
	 * qscoreRealQueryVO
	 **/
	private $qscoreRealQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setQscoreRealQueryVO($qscoreRealQueryVO)
	{
		$this->qscoreRealQueryVO = $qscoreRealQueryVO;
		$this->apiParas["qscore_real_query_v_o"] = $qscoreRealQueryVO;
	}

	public function getQscoreRealQueryVO()
	{
		return $this->qscoreRealQueryVO;
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
		return "taobao.universalbp.bidword.qscore";
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
