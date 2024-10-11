<?php
/**
 * TOP API: taobao.universalbp.new.campaign.oneclick request
 * 
 * @author auto create
 * @since 1.0, 2024.08.27
 */
class UniversalbpNewCampaignOneclickRequest
{
	/** 
	 * oneClickVO
	 **/
	private $oneClickVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setOneClickVO($oneClickVO)
	{
		$this->oneClickVO = $oneClickVO;
		$this->apiParas["one_click_v_o"] = $oneClickVO;
	}

	public function getOneClickVO()
	{
		return $this->oneClickVO;
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
		return "taobao.universalbp.new.campaign.oneclick";
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
