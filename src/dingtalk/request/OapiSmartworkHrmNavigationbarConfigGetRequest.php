<?php
/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.navigationbar.config.get request
 * 
 * @author auto create
 * @since 1.0, 2021.01.19
 */
class OapiSmartworkHrmNavigationbarConfigGetRequest
{
	/** 
	 * isv变更导航栏属性
	 **/
	private $changeParam;
	
	/** 
	 * 基础导航了类型，枚举值, "pc"-PC端, "oa"-OA端
	 **/
	private $type;
	
	/** 
	 * 导航栏访问员工ID
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setChangeParam($changeParam)
	{
		$this->changeParam = $changeParam;
		$this->apiParas["change_param"] = $changeParam;
	}

	public function getChangeParam()
	{
		return $this->changeParam;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartwork.hrm.navigationbar.config.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->type,"type");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
