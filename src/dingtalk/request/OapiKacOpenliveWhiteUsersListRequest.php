<?php
/**
 * dingtalk API: dingtalk.oapi.kac.openlive.white_users.list request
 * 
 * @author auto create
 * @since 1.0, 2021.03.17
 */
class OapiKacOpenliveWhiteUsersListRequest
{
	/** 
	 * 直播id
	 **/
	private $liveId;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 分页号，从1开始
	 **/
	private $pageStart;
	
	private $apiParas = array();
	
	public function setLiveId($liveId)
	{
		$this->liveId = $liveId;
		$this->apiParas["live_id"] = $liveId;
	}

	public function getLiveId()
	{
		return $this->liveId;
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

	public function setPageStart($pageStart)
	{
		$this->pageStart = $pageStart;
		$this->apiParas["page_start"] = $pageStart;
	}

	public function getPageStart()
	{
		return $this->pageStart;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.kac.openlive.white_users.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->liveId,"liveId");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->pageStart,"pageStart");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
