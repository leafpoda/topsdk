<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.circle.post.create request
 * 
 * @author auto create
 * @since 1.0, 2020.11.06
 */
class OapiWorkspaceCirclePostCreateRequest
{
	/** 
	 * 创建动态的入参
	 **/
	private $req;
	
	private $apiParas = array();
	
	public function setReq($req)
	{
		$this->req = $req;
		$this->apiParas["req"] = $req;
	}

	public function getReq()
	{
		return $this->req;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.workspace.circle.post.create";
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
