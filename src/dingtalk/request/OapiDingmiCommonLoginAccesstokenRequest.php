<?php
/**
 * dingtalk API: dingtalk.oapi.dingmi.common.login.accesstoken request
 * 
 * @author auto create
 * @since 1.0, 2021.04.15
 */
class OapiDingmiCommonLoginAccesstokenRequest
{
	/** 
	 * 用户外部系统id
	 **/
	private $foreignId;
	
	/** 
	 * 登录用户昵称
	 **/
	private $nick;
	
	/** 
	 * 业务账号登录source
	 **/
	private $source;
	
	private $apiParas = array();
	
	public function setForeignId($foreignId)
	{
		$this->foreignId = $foreignId;
		$this->apiParas["foreign_id"] = $foreignId;
	}

	public function getForeignId()
	{
		return $this->foreignId;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.dingmi.common.login.accesstoken";
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
