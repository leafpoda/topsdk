<?php
/**
 * TOP API: taobao.universalbp.new.blackword.update request
 * 
 * @author auto create
 * @since 1.0, 2024.08.20
 */
class UniversalbpNewBlackwordUpdateRequest
{
	/** 
	 * bidBlackWordVO
	 **/
	private $bidBlackWordVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setBidBlackWordVO($bidBlackWordVO)
	{
		$this->bidBlackWordVO = $bidBlackWordVO;
		$this->apiParas["bid_black_word_v_o"] = $bidBlackWordVO;
	}

	public function getBidBlackWordVO()
	{
		return $this->bidBlackWordVO;
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
		return "taobao.universalbp.new.blackword.update";
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
