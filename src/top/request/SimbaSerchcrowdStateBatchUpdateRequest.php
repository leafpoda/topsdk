<?php
/**
 * TOP API: taobao.simba.serchcrowd.state.batch.update request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class SimbaSerchcrowdStateBatchUpdateRequest
{
	/** 
	 * 需要修改出价的人群包id,批量传入时用,分割
	 **/
	private $adgroupCrowdIds;
	
	/** 
	 * 推广单元id
	 **/
	private $adgroupId;
	
	/** 
	 * 被操作者的淘宝昵称
	 **/
	private $nick;
	
	/** 
	 * 人群状态,0:暂停;1:启用
	 **/
	private $state;
	
	private $apiParas = array();
	
	public function setAdgroupCrowdIds($adgroupCrowdIds)
	{
		$this->adgroupCrowdIds = $adgroupCrowdIds;
		$this->apiParas["adgroup_crowd_ids"] = $adgroupCrowdIds;
	}

	public function getAdgroupCrowdIds()
	{
		return $this->adgroupCrowdIds;
	}

	public function setAdgroupId($adgroupId)
	{
		$this->adgroupId = $adgroupId;
		$this->apiParas["adgroup_id"] = $adgroupId;
	}

	public function getAdgroupId()
	{
		return $this->adgroupId;
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

	public function setState($state)
	{
		$this->state = $state;
		$this->apiParas["state"] = $state;
	}

	public function getState()
	{
		return $this->state;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.serchcrowd.state.batch.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
