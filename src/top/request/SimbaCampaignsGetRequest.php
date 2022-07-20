<?php
/**
 * TOP API: taobao.simba.campaigns.get request
 * 
 * @author auto create
 * @since 1.0, 2022.07.19
 */
class SimbaCampaignsGetRequest
{
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	/** 
	 * 计划类型0位标准计划，16位销量明星计划
	 **/
	private $type;
	
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.campaigns.get";
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
