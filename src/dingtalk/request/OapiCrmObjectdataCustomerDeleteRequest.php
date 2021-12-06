<?php
/**
 * dingtalk API: dingtalk.oapi.crm.objectdata.customer.delete request
 * 
 * @author auto create
 * @since 1.0, 2020.10.09
 */
class OapiCrmObjectdataCustomerDeleteRequest
{
	/** 
	 * 客户实例ID
	 **/
	private $dataId;
	
	/** 
	 * 操作人用户ID
	 **/
	private $operatorUserid;
	
	private $apiParas = array();
	
	public function setDataId($dataId)
	{
		$this->dataId = $dataId;
		$this->apiParas["data_id"] = $dataId;
	}

	public function getDataId()
	{
		return $this->dataId;
	}

	public function setOperatorUserid($operatorUserid)
	{
		$this->operatorUserid = $operatorUserid;
		$this->apiParas["operator_userid"] = $operatorUserid;
	}

	public function getOperatorUserid()
	{
		return $this->operatorUserid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.crm.objectdata.customer.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dataId,"dataId");
		RequestCheckUtil::checkNotNull($this->operatorUserid,"operatorUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
