<?php
/**
 * TOP API: taobao.feedflow.item.adgroup.adzone.unbind request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class FeedflowItemAdgroupAdzoneUnbindRequest
{
	/** 
	 * 单元id
	 **/
	private $adgroupId;
	
	/** 
	 * 广告位id
	 **/
	private $adzoneIdList;
	
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

	public function setAdzoneIdList($adzoneIdList)
	{
		$this->adzoneIdList = $adzoneIdList;
		$this->apiParas["adzone_id_list"] = $adzoneIdList;
	}

	public function getAdzoneIdList()
	{
		return $this->adzoneIdList;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.adgroup.adzone.unbind";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->adzoneIdList,"adzoneIdList");
		RequestCheckUtil::checkMaxListSize($this->adzoneIdList,20,"adzoneIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
