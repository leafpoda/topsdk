<?php
/**
 * dingtalk API: dingtalk.oapi.retail.user.bindapply request
 * 
 * @author auto create
 * @since 1.0, 2020.03.09
 */
class OapiRetailUserBindapplyRequest
{
	/** 
	 * 业务身份
	 **/
	private $channel;
	
	/** 
	 * 请求业务对象
	 **/
	private $request;
	
	private $apiParas = array();
	
	public function setChannel($channel)
	{
		$this->channel = $channel;
		$this->apiParas["channel"] = $channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}

	public function setRequest($request)
	{
		$this->request = $request;
		$this->apiParas["request"] = $request;
	}

	public function getRequest()
	{
		return $this->request;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.retail.user.bindapply";
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
