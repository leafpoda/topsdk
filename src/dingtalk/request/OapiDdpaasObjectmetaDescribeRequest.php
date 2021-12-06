<?php
/**
 * dingtalk API: dingtalk.oapi.ddpaas.objectmeta.describe request
 * 
 * @author auto create
 * @since 1.0, 2020.06.28
 */
class OapiDdpaasObjectmetaDescribeRequest
{
	/** 
	 * PaaS应用ID
	 **/
	private $appUuid;
	
	/** 
	 * 表单编号
	 **/
	private $formCode;
	
	private $apiParas = array();
	
	public function setAppUuid($appUuid)
	{
		$this->appUuid = $appUuid;
		$this->apiParas["app_uuid"] = $appUuid;
	}

	public function getAppUuid()
	{
		return $this->appUuid;
	}

	public function setFormCode($formCode)
	{
		$this->formCode = $formCode;
		$this->apiParas["form_code"] = $formCode;
	}

	public function getFormCode()
	{
		return $this->formCode;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.ddpaas.objectmeta.describe";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appUuid,"appUuid");
		RequestCheckUtil::checkNotNull($this->formCode,"formCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
