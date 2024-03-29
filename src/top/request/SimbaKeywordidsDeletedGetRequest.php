<?php
/**
 * TOP API: taobao.simba.keywordids.deleted.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class SimbaKeywordidsDeletedGetRequest
{
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	/** 
	 * 返回的第几页数据，默认为1
	 **/
	private $pageNo;
	
	/** 
	 * 返回的每页数据量大小,默认200最大1000
	 **/
	private $pageSize;
	
	/** 
	 * 得到此时间点之后的数据，不能大于一个月
	 **/
	private $startTime;
	
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

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.keywordids.deleted.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
