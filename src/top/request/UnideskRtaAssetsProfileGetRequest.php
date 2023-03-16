<?php
/**
 * TOP API: taobao.unidesk.rta.assets.profile.get request
 * 
 * @author auto create
 * @since 1.0, 2023.02.02
 */
class UnideskRtaAssetsProfileGetRequest
{
	/** 
	 * 查询参数
	 **/
	private $advertiserProfileTopQueryDto;
	
	private $apiParas = array();
	
	public function setAdvertiserProfileTopQueryDto($advertiserProfileTopQueryDto)
	{
		$this->advertiserProfileTopQueryDto = $advertiserProfileTopQueryDto;
		$this->apiParas["advertiser_profile_top_query_dto"] = $advertiserProfileTopQueryDto;
	}

	public function getAdvertiserProfileTopQueryDto()
	{
		return $this->advertiserProfileTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.assets.profile.get";
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
