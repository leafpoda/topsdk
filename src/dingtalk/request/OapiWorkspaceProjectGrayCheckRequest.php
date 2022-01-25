<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.project.gray.check request
 * 
 * @author auto create
 * @since 1.0, 2021.02.04
 */
class OapiWorkspaceProjectGrayCheckRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.workspace.project.gray.check";
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
