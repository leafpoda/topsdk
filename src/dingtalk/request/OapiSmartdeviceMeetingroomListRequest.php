<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.meetingroom.list request
 * 
 * @author auto create
 * @since 1.0, 2020.12.16
 */
class OapiSmartdeviceMeetingroomListRequest
{
	/** 
	 * 如果为null,那么就从头开始查询.
	 **/
	private $cursor;
	
	/** 
	 * 最大500
	 **/
	private $size;
	
	private $apiParas = array();
	
	public function setCursor($cursor)
	{
		$this->cursor = $cursor;
		$this->apiParas["cursor"] = $cursor;
	}

	public function getCursor()
	{
		return $this->cursor;
	}

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartdevice.meetingroom.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->size,"size");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
