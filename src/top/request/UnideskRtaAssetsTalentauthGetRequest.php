<?php
/**
 * TOP API: taobao.unidesk.rta.assets.talentauth.get request
 * 
 * @author auto create
 * @since 1.0, 2023.11.30
 */
class UnideskRtaAssetsTalentauthGetRequest
{
	/** 
	 * 入参
	 **/
	private $talentAuthorizationTopQueryDto;
	
	private $apiParas = array();
	
	public function setTalentAuthorizationTopQueryDto($talentAuthorizationTopQueryDto)
	{
		$this->talentAuthorizationTopQueryDto = $talentAuthorizationTopQueryDto;
		$this->apiParas["talent_authorization_top_query_dto"] = $talentAuthorizationTopQueryDto;
	}

	public function getTalentAuthorizationTopQueryDto()
	{
		return $this->talentAuthorizationTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.assets.talentauth.get";
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
