<?php
/**
 * TOP API: taobao.universalbp.new.potential.bidword.find request
 * 
 * @author auto create
 * @since 1.0, 2024.09.27
 */
class UniversalbpNewPotentialBidwordFindRequest
{
	/** 
	 * potentialBidwordQueryVO
	 **/
	private $potentialBidwordQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setPotentialBidwordQueryVO($potentialBidwordQueryVO)
	{
		$this->potentialBidwordQueryVO = $potentialBidwordQueryVO;
		$this->apiParas["potential_bidword_query_v_o"] = $potentialBidwordQueryVO;
	}

	public function getPotentialBidwordQueryVO()
	{
		return $this->potentialBidwordQueryVO;
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
		return "taobao.universalbp.new.potential.bidword.find";
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
