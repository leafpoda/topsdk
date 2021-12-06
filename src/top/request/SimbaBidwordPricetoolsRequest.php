<?php
/**
 * TOP API: taobao.simba.bidword.pricetools request
 * 
 * @author auto create
 * @since 1.0, 2020.04.08
 */
class SimbaBidwordPricetoolsRequest
{
	/** 
	 * 推广单元id
	 **/
	private $adgroupId;
	
	/** 
	 * 关键词id
	 **/
	private $bidwordId;
	
	/** 
	 * 区分渠道 ，计算机：PC，无线 ：WL
	 **/
	private $trafficType;
	
	/** 
	 * 出价目标 ，1：争取排名；2：提升展现；3：提示点击；4：提升转化
	 **/
	private $type;
	
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

	public function setBidwordId($bidwordId)
	{
		$this->bidwordId = $bidwordId;
		$this->apiParas["bidword_id"] = $bidwordId;
	}

	public function getBidwordId()
	{
		return $this->bidwordId;
	}

	public function setTrafficType($trafficType)
	{
		$this->trafficType = $trafficType;
		$this->apiParas["traffic_type"] = $trafficType;
	}

	public function getTrafficType()
	{
		return $this->trafficType;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.bidword.pricetools";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->bidwordId,"bidwordId");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
