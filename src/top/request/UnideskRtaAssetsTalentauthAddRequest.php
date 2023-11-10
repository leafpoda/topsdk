<?php
/**
 * TOP API: taobao.unidesk.rta.assets.talentauth.add request
 * 
 * @author auto create
 * @since 1.0, 2023.06.27
 */
class UnideskRtaAssetsTalentauthAddRequest
{
	/** 
	 * 入参
	 **/
	private $talentAuthorizationTopDto;
	
	private $apiParas = array();
	
	public function setTalentAuthorizationTopDto($talentAuthorizationTopDto)
	{
		$this->talentAuthorizationTopDto = $talentAuthorizationTopDto;
		$this->apiParas["talent_authorization_top_dto"] = $talentAuthorizationTopDto;
	}

	public function getTalentAuthorizationTopDto()
	{
		return $this->talentAuthorizationTopDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.assets.talentauth.add";
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
