<?php
/**
 * dingtalk API: dingtalk.oapi.appstore.internal.remind request
 * 
 * @author auto create
 * @since 1.0, 2020.04.09
 */
class OapiAppstoreInternalRemindRequest
{
	/** 
	 * 商品码
	 **/
	private $goodsCode;
	
	/** 
	 * 试用审批单id
	 **/
	private $processInstanceId;
	
	private $apiParas = array();
	
	public function setGoodsCode($goodsCode)
	{
		$this->goodsCode = $goodsCode;
		$this->apiParas["goods_code"] = $goodsCode;
	}

	public function getGoodsCode()
	{
		return $this->goodsCode;
	}

	public function setProcessInstanceId($processInstanceId)
	{
		$this->processInstanceId = $processInstanceId;
		$this->apiParas["process_instance_id"] = $processInstanceId;
	}

	public function getProcessInstanceId()
	{
		return $this->processInstanceId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.appstore.internal.remind";
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
