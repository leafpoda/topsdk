<?php
/**
 * TOP API: taobao.unidesk.rta.assets.profile.add request
 * 
 * @author auto create
 * @since 1.0, 2023.02.01
 */
class UnideskRtaAssetsProfileAddRequest
{
	/** 
	 * 入参
	 **/
	private $advertiserProfileTopDto;
	
	private $apiParas = array();
	
	public function setAdvertiserProfileTopDto($advertiserProfileTopDto)
	{
		$this->advertiserProfileTopDto = $advertiserProfileTopDto;
		$this->apiParas["advertiser_profile_top_dto"] = $advertiserProfileTopDto;
	}

	public function getAdvertiserProfileTopDto()
	{
		return $this->advertiserProfileTopDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.assets.profile.add";
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
