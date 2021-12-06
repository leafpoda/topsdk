<?php
/**
 * TOP API: taobao.jushita.jms.user.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class JushitaJmsUserGetRequest
{
	/** 
	 * 需要查询的用户名
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "taobao.jushita.jms.user.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userNick,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
