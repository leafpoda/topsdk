<?php
/**
 * TOP API: taobao.dmp.tag.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class DmpTagGetRequest
{
	/** 
	 * 标签ID
	 **/
	private $tagId;
	
	private $apiParas = array();
	
	public function setTagId($tagId)
	{
		$this->tagId = $tagId;
		$this->apiParas["tag_id"] = $tagId;
	}

	public function getTagId()
	{
		return $this->tagId;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.tag.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tagId,"tagId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
