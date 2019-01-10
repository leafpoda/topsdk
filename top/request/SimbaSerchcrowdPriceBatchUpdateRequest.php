<?php
/**
 * TOP API: taobao.simba.serchcrowd.price.batch.update request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class SimbaSerchcrowdPriceBatchUpdateRequest
{
	/** 
	 * 需要修改出价的人群包id,批量传入的时候用,分割
	 **/
	private $adgroupCrowdIds;
	
	/** 
	 * 推广单元id
	 **/
	private $adgroupId;
	
	/** 
	 * 人群溢价比例，溢价范围[5,300]
	 **/
	private $discount;
	
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

	public function setAdgroupId($adgroupId)
	{
		$this->adgroupId = $adgroupId;
		$this->apiParas["adgroup_id"] = $adgroupId;
	}

	public function getAdgroupId()
	{
		return $this->adgroupId;
	}

	public function setDiscount($discount)
	{
		$this->discount = $discount;
		$this->apiParas["discount"] = $discount;
	}

	public function getDiscount()
	{
		return $this->discount;
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
		return "taobao.simba.serchcrowd.price.batch.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupCrowdIds,"adgroupCrowdIds");
		RequestCheckUtil::checkMaxListSize($this->adgroupCrowdIds,20,"adgroupCrowdIds");
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
