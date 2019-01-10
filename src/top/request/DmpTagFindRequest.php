<?php
/**
 * TOP API: taobao.dmp.tag.find request
 * 
 * @author auto create
 * @since 1.0, 2018.08.14
 */
class DmpTagFindRequest
{
	/** 
	 * 标签名称模糊查询
	 **/
	private $tagName;
	
	private $apiParas = array();
	
	public function setTagName($tagName)
	{
		$this->tagName = $tagName;
		$this->apiParas["tag_name"] = $tagName;
	}

	public function getTagName()
	{
		return $this->tagName;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.tag.find";
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
