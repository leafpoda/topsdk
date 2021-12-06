<?php
/**
 * TOP API: taobao.simba.hour.report.account.get request
 * 
 * @author auto create
 * @since 1.0, 2020.04.08
 */
class SimbaHourReportAccountGetRequest
{
	/** 
	 * 当前小时
	 **/
	private $hour;
	
	/** 
	 * 昵称
	 **/
	private $nick;
	
	/** 
	 * 时间
	 **/
	private $theDate;
	
	private $apiParas = array();
	
	public function setHour($hour)
	{
		$this->hour = $hour;
		$this->apiParas["hour"] = $hour;
	}

	public function getHour()
	{
		return $this->hour;
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
		return "taobao.simba.hour.report.account.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->hour,"hour");
		RequestCheckUtil::checkNotNull($this->theDate,"theDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
