<?php
/**
 * dingtalk API: dingtalk.oapi.dingpay.redenvelope.get request
 * 
 * @author auto create
 * @since 1.0, 2021.01.20
 */
class OapiDingpayRedenvelopeGetRequest
{
	/** 
	 * 企业订单号
	 **/
	private $corpBizNo;
	
	private $apiParas = array();
	
	public function setCorpBizNo($corpBizNo)
	{
		$this->corpBizNo = $corpBizNo;
		$this->apiParas["corp_biz_no"] = $corpBizNo;
	}

	public function getCorpBizNo()
	{
		return $this->corpBizNo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.dingpay.redenvelope.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->corpBizNo,"corpBizNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
