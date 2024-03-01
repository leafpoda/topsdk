<?php
/**
 * TOP API: taobao.universalbp.new.bidword.delete request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewBidwordDeleteRequest
{
	/** 
	 * bidWordDeleteVO
	 **/
	private $bidWordDeleteVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setBidWordDeleteVO($bidWordDeleteVO)
	{
		$this->bidWordDeleteVO = $bidWordDeleteVO;
		$this->apiParas["bid_word_delete_v_o"] = $bidWordDeleteVO;
	}

	public function getBidWordDeleteVO()
	{
		return $this->bidWordDeleteVO;
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
		return "taobao.universalbp.new.bidword.delete";
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
