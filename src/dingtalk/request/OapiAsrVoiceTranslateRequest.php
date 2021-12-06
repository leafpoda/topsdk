<?php
/**
 * dingtalk API: dingtalk.oapi.asr.voice.translate request
 * 
 * @author auto create
 * @since 1.0, 2020.09.11
 */
class OapiAsrVoiceTranslateRequest
{
	/** 
	 * media_id，获取方式见https://ding-doc.dingtalk.com/doc#/serverapi2/bcmg0i
	 **/
	private $mediaId;
	
	private $apiParas = array();
	
	public function setMediaId($mediaId)
	{
		$this->mediaId = $mediaId;
		$this->apiParas["media_id"] = $mediaId;
	}

	public function getMediaId()
	{
		return $this->mediaId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.asr.voice.translate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mediaId,"mediaId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
