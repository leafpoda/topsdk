<?php
/**
 * TOP API: taobao.feedflow.item.adgroup.creative.add.bind request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class FeedflowItemAdgroupCreativeAddBindRequest
{
	/** 
	 * 单元id
	 **/
	private $adgroupId;
	
	/** 
	 * 新增绑定的创意，一次最多2个
	 **/
	private $creativeBindList;
	
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

	public function setCreativeBindList($creativeBindList)
	{
		$this->creativeBindList = $creativeBindList;
		$this->apiParas["creative_bind_list"] = $creativeBindList;
	}

	public function getCreativeBindList()
	{
		return $this->creativeBindList;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.adgroup.creative.add.bind";
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
