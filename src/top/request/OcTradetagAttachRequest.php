<?php
/**
 * TOP API: taobao.oc.tradetag.attach request
 * 
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OcTradetagAttachRequest
{
	/** 
	 * 标签名称
	 **/
	private $tagName;
	
	/** 
	 * 标签类型       1：官方标签      2：自定义标签
	 **/
	private $tagType;
	
	/** 
	 * 标签值，json格式
	 **/
	private $tagValue;
	
	/** 
	 * 订单id
	 **/
	private $tid;
	
	/** 
	 * 该标签在消费者端是否显示,0:不显示,1：显示
	 **/
	private $visible;
	
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

	public function setTagType($tagType)
	{
		$this->tagType = $tagType;
		$this->apiParas["tag_type"] = $tagType;
	}

	public function getTagType()
	{
		return $this->tagType;
	}

	public function setTagValue($tagValue)
	{
		$this->tagValue = $tagValue;
		$this->apiParas["tag_value"] = $tagValue;
	}

	public function getTagValue()
	{
		return $this->tagValue;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function setVisible($visible)
	{
		$this->visible = $visible;
		$this->apiParas["visible"] = $visible;
	}

	public function getVisible()
	{
		return $this->visible;
	}

	public function getApiMethodName()
	{
		return "taobao.oc.tradetag.attach";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tagName,"tagName");
		RequestCheckUtil::checkNotNull($this->tagValue,"tagValue");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
