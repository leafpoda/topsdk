<?php
/**
 * TOP API: taobao.simba.adgroup.mobilediscount.update request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class SimbaAdgroupMobilediscountUpdateRequest
{
	/** 
	 * 推广组id数组(推广组id集合元素个数在1-200个之间，推广组id需要在同一个推广计划中)
	 **/
	private $adgroupIds;
	
	/** 
	 * 折扣（折扣值在1-400之间）
	 **/
	private $mobileDiscount;
	
	/** 
	 * 昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setAdgroupIds($adgroupIds)
	{
		$this->adgroupIds = $adgroupIds;
		$this->apiParas["adgroup_ids"] = $adgroupIds;
	}

	public function getAdgroupIds()
	{
		return $this->adgroupIds;
	}

	public function setMobileDiscount($mobileDiscount)
	{
		$this->mobileDiscount = $mobileDiscount;
		$this->apiParas["mobile_discount"] = $mobileDiscount;
	}

	public function getMobileDiscount()
	{
		return $this->mobileDiscount;
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
		return "taobao.simba.adgroup.mobilediscount.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupIds,"adgroupIds");
		RequestCheckUtil::checkMaxListSize($this->adgroupIds,200,"adgroupIds");
		RequestCheckUtil::checkNotNull($this->mobileDiscount,"mobileDiscount");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
