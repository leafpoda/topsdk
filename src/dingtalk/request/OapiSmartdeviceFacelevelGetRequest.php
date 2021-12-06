<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.facelevel.get request
 * 
 * @author auto create
 * @since 1.0, 2020.06.28
 */
class OapiSmartdeviceFacelevelGetRequest
{
	/** 
	 * 字符串数组
	 **/
	private $useridList;
	
	private $apiParas = array();
	
	public function setUseridList($useridList)
	{
		$this->useridList = $useridList;
		$this->apiParas["userid_list"] = $useridList;
	}

	public function getUseridList()
	{
		return $this->useridList;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartdevice.facelevel.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->useridList,"useridList");
		RequestCheckUtil::checkMaxListSize($this->useridList,100,"useridList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
