<?php
/**
 * TOP API: taobao.unidesk.rta.assets.landingpage.add request
 * 
 * @author auto create
 * @since 1.0, 2023.05.17
 */
class UnideskRtaAssetsLandingpageAddRequest
{
	/** 
	 * 入参
	 **/
	private $mediaLandingPageTopDto;
	
	private $apiParas = array();
	
	public function setMediaLandingPageTopDto($mediaLandingPageTopDto)
	{
		$this->mediaLandingPageTopDto = $mediaLandingPageTopDto;
		$this->apiParas["media_landing_page_top_dto"] = $mediaLandingPageTopDto;
	}

	public function getMediaLandingPageTopDto()
	{
		return $this->mediaLandingPageTopDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.assets.landingpage.add";
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
