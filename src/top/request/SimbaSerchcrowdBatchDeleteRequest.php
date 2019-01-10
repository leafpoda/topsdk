<?php
/**
 * TOP API: taobao.simba.serchcrowd.batch.delete request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class SimbaSerchcrowdBatchDeleteRequest
{
	/** 
	 * 需要删除的人群id
	 **/
	private $adgroupCrowdIds;
	
	/** 
	 * 被操作者的淘宝昵称
	 **/
	private $nick;
	
	/** 
	 * 子帐号nick
	 **/
	private $subNick;
	
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
		return "taobao.simba.serchcrowd.batch.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupCrowdIds,"adgroupCrowdIds");
		RequestCheckUtil::checkMaxListSize($this->adgroupCrowdIds,200,"adgroupCrowdIds");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
