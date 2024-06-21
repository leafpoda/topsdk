<?php
/**
 * TOP API: alibaba.ud.creativedata.get request
 * 
 * @author auto create
 * @since 1.0, 2024.03.08
 */
class AlibabaUdCreativedataGetRequest
{
	/** 
	 * 此值为alibaba.ud.event.upload接口中回传的pub_request_id或track_id（也使用此参数），逗号分隔
	 **/
	private $requestId;
	
	private $apiParas = array();
	
	public function setRequestId($requestId)
	{
		$this->requestId = $requestId;
		$this->apiParas["request_id"] = $requestId;
	}

	public function getRequestId()
	{
		return $this->requestId;
	}

	public function getApiMethodName()
	{
		return "alibaba.ud.creativedata.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->requestId,"requestId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
