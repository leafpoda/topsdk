<?php
/**
 * TOP API: taobao.subway.adgroup.offline.layeredfind request
 * 
 * @author auto create
 * @since 1.0, 2022.07.27
 */
class SubwayAdgroupOfflineLayeredfindRequest
{
	/** 
	 * 需要查询的单元id列表，不传表示不限制
	 **/
	private $adgroupIdIn;
	
	/** 
	 * 转化周期30-30天
	 **/
	private $effect;
	
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 页码（0为第一页）
	 **/
	private $offset;
	
	/** 
	 * 每页显示的记录条数
	 **/
	private $pageSize;
	
	/** 
	 * 数据来源（pc站内：1；pc站外：2；无限站内：4；无限站内：5；销量明星：6）
	 **/
	private $pvTypeIn;
	
	/** 
	 * 开始时间
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setAdgroupIdIn($adgroupIdIn)
	{
		$this->adgroupIdIn = $adgroupIdIn;
		$this->apiParas["adgroup_id_in"] = $adgroupIdIn;
	}

	public function getAdgroupIdIn()
	{
		return $this->adgroupIdIn;
	}

	public function setEffect($effect)
	{
		$this->effect = $effect;
		$this->apiParas["effect"] = $effect;
	}

	public function getEffect()
	{
		return $this->effect;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setOffset($offset)
	{
		$this->offset = $offset;
		$this->apiParas["offset"] = $offset;
	}

	public function getOffset()
	{
		return $this->offset;
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

	public function setPvTypeIn($pvTypeIn)
	{
		$this->pvTypeIn = $pvTypeIn;
		$this->apiParas["pv_type_in"] = $pvTypeIn;
	}

	public function getPvTypeIn()
	{
		return $this->pvTypeIn;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "taobao.subway.adgroup.offline.layeredfind";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->adgroupIdIn,20,"adgroupIdIn");
		RequestCheckUtil::checkNotNull($this->effect,"effect");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->offset,"offset");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
