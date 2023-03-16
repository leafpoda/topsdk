<?php
/**
 * TOP API: taobao.unidesk.rta.assets.profile.delete request
 * 
 * @author auto create
 * @since 1.0, 2023.02.01
 */
class UnideskRtaAssetsProfileDeleteRequest
{
	/** 
	 * 入参
	 **/
	private $advertiserProfileTopDeleteDto;
	
	private $apiParas = array();
	
	public function setAdvertiserProfileTopDeleteDto($advertiserProfileTopDeleteDto)
	{
		$this->advertiserProfileTopDeleteDto = $advertiserProfileTopDeleteDto;
		$this->apiParas["advertiser_profile_top_delete_dto"] = $advertiserProfileTopDeleteDto;
	}

	public function getAdvertiserProfileTopDeleteDto()
	{
		return $this->advertiserProfileTopDeleteDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.assets.profile.delete";
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
