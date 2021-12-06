<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.testapp.install request
 * 
 * @author auto create
 * @since 1.0, 2020.06.10
 */
class OapiWorkspaceTestappInstallRequest
{
	/** 
	 * 为isv组织下的圈子安装测试应用
	 **/
	private $installTestapp;
	
	private $apiParas = array();
	
	public function setInstallTestapp($installTestapp)
	{
		$this->installTestapp = $installTestapp;
		$this->apiParas["install_testapp"] = $installTestapp;
	}

	public function getInstallTestapp()
	{
		return $this->installTestapp;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.workspace.testapp.install";
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
