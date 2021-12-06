<?php
/**
 * TOP API: taobao.feedflow.item.adgroup.adzone.bind request
 * 
 * @author auto create
 * @since 1.0, 2019.05.07
 */
class FeedflowItemAdgroupAdzoneBindRequest
{
	/** 
	 * 单元id
	 **/
	private $adgroupId;
	
	/** 
	 * 新增的绑定资源位
	 **/
	private $bindAdzoneList;
	
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

	public function setBindAdzoneList($bindAdzoneList)
	{
		$this->bindAdzoneList = $bindAdzoneList;
		$this->apiParas["bind_adzone_list"] = $bindAdzoneList;
	}

	public function getBindAdzoneList()
	{
		return $this->bindAdzoneList;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.adgroup.adzone.bind";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
