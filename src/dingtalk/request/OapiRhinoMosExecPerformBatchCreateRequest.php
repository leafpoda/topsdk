<?php
/**
 * dingtalk API: dingtalk.oapi.rhino.mos.exec.perform.batch.create request
 * 
 * @author auto create
 * @since 1.0, 2020.07.14
 */
class OapiRhinoMosExecPerformBatchCreateRequest
{
	/** 
	 * 入参
	 **/
	private $batchCreateOperationReq;
	
	private $apiParas = array();
	
	public function setBatchCreateOperationReq($batchCreateOperationReq)
	{
		$this->batchCreateOperationReq = $batchCreateOperationReq;
		$this->apiParas["batch_create_operation_req"] = $batchCreateOperationReq;
	}

	public function getBatchCreateOperationReq()
	{
		return $this->batchCreateOperationReq;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.rhino.mos.exec.perform.batch.create";
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
