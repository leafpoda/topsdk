<?php
/**
 * TOP API: taobao.simba.rtrpt.campaign.get request
 * 
 * @author auto create
 * @since 1.0, 2022.07.19
 */
class SimbaRtrptCampaignGetRequest
{
	/** 
	 * 用户名
	 **/
	private $nick;
	
	/** 
	 * 日期，格式yyyy-mm-dd
	 **/
	private $theDate;
	
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

	public function setTheDate($theDate)
	{
		$this->theDate = $theDate;
		$this->apiParas["the_date"] = $theDate;
	}

	public function getTheDate()
	{
		return $this->theDate;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.rtrpt.campaign.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->theDate,"theDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
