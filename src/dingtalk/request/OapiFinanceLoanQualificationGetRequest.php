<?php
/**
 * dingtalk API: dingtalk.oapi.finance.loan.qualification.get request
 * 
 * @author auto create
 * @since 1.0, 2020.12.04
 */
class OapiFinanceLoanQualificationGetRequest
{
	/** 
	 * 用户免登录授权码
	 **/
	private $code;
	
	/** 
	 * 布点渠道类型
	 **/
	private $openChannelType;
	
	private $apiParas = array();
	
	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function setOpenChannelType($openChannelType)
	{
		$this->openChannelType = $openChannelType;
		$this->apiParas["open_channel_type"] = $openChannelType;
	}

	public function getOpenChannelType()
	{
		return $this->openChannelType;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.finance.loan.qualification.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->code,"code");
		RequestCheckUtil::checkNotNull($this->openChannelType,"openChannelType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
