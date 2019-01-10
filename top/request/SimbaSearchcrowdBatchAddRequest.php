<?php
/**
 * TOP API: taobao.simba.searchcrowd.batch.add request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class SimbaSearchcrowdBatchAddRequest
{
	/** 
	 * 推广单元id
	 **/
	private $adgroupId;
	
	/** 
	 * 新增人群信息,批量接口,入参为list,溢价(discount)范围为[105,400]
	 **/
	private $adgroupTargetingTags;
	
	/** 
	 * 被操作者的淘宝昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setAdgroupId($adgroupId)
	{
		$this->adgroupId = $adgroupId;
		$this->apiParas["adgroup_id"] = $adgroupId;
	}

	public function getAdgroupId()
	{
		return $this->adgroupId;
	}

	public function setAdgroupTargetingTags($adgroupTargetingTags)
	{
		$this->adgroupTargetingTags = $adgroupTargetingTags;
		$this->apiParas["adgroup_targeting_tags"] = $adgroupTargetingTags;
	}

	public function getAdgroupTargetingTags()
	{
		return $this->adgroupTargetingTags;
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
		return "taobao.simba.searchcrowd.batch.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->adgroupTargetingTags,"adgroupTargetingTags");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
