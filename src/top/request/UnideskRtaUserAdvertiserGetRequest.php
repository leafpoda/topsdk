<?php
/**
 * TOP API: taobao.unidesk.rta.user.advertiser.get request
 * 
 * @author auto create
 * @since 1.0, 2023.08.03
 */
class UnideskRtaUserAdvertiserGetRequest
{
	/** 
	 * 查询参数
	 **/
	private $advertiserTopQueryDto;
	
	private $apiParas = array();
	
	public function setAdvertiserTopQueryDto($advertiserTopQueryDto)
	{
		$this->advertiserTopQueryDto = $advertiserTopQueryDto;
		$this->apiParas["advertiser_top_query_dto"] = $advertiserTopQueryDto;
	}

	public function getAdvertiserTopQueryDto()
	{
		return $this->advertiserTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.user.advertiser.get";
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
