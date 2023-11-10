<?php
/**
 * TOP API: taobao.unidesk.rta.assets.landingpage.get request
 * 
 * @author auto create
 * @since 1.0, 2023.05.17
 */
class UnideskRtaAssetsLandingpageGetRequest
{
	/** 
	 * 入参
	 **/
	private $mediaLandingPageTopQueryDto;
	
	private $apiParas = array();
	
	public function setMediaLandingPageTopQueryDto($mediaLandingPageTopQueryDto)
	{
		$this->mediaLandingPageTopQueryDto = $mediaLandingPageTopQueryDto;
		$this->apiParas["media_landing_page_top_query_dto"] = $mediaLandingPageTopQueryDto;
	}

	public function getMediaLandingPageTopQueryDto()
	{
		return $this->mediaLandingPageTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.assets.landingpage.get";
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
