<?php
/**
 * TOP API: taobao.simba.searchtagtemplate.get request
 * 
 * @author auto create
 * @since 1.0, 2022.09.19
 */
class SimbaSearchtagtemplateGetRequest
{
	/** 
	 * 被操作者的淘宝昵称
	 **/
	private $nick;
	
	/** 
	 * 子帐号nick
	 **/
	private $subNick;
	
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setSubNick($subNick)
	{
		$this->subNick = $subNick;
		$this->apiParas["sub_nick"] = $subNick;
	}

	public function getSubNick()
	{
		return $this->subNick;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.searchtagtemplate.get";
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
