<?php
/**
 * TOP API: taobao.subway.cia.update request
 * 
 * @author auto create
 * @since 1.0, 2021.11.18
 */
class SubwayCiaUpdateRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $ciaConfigs;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setCiaConfigs($ciaConfigs)
	{
		$this->ciaConfigs = $ciaConfigs;
		$this->apiParas["cia_configs"] = $ciaConfigs;
	}

	public function getCiaConfigs()
	{
		return $this->ciaConfigs;
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

	public function getApiMethodName()
	{
		return "taobao.subway.cia.update";
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
