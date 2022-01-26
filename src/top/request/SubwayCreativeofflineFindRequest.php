<?php
/**
 * TOP API: taobao.subway.creativeoffline.find request
 * 
 * @author auto create
 * @since 1.0, 2022.01.26
 */
class SubwayCreativeofflineFindRequest
{
	/** 
	 * 需要查询的创意id，不传表示不限
	 **/
	private $creativeIdEqual;
	
	/** 
	 * 需要查询的创意id列表，不传表示不限制
	 **/
	private $creativeIdIn;
	
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
	
	public function setCreativeIdEqual($creativeIdEqual)
	{
		$this->creativeIdEqual = $creativeIdEqual;
		$this->apiParas["creative_id_equal"] = $creativeIdEqual;
	}

	public function getCreativeIdEqual()
	{
		return $this->creativeIdEqual;
	}

	public function setCreativeIdIn($creativeIdIn)
	{
		$this->creativeIdIn = $creativeIdIn;
		$this->apiParas["creative_id_in"] = $creativeIdIn;
	}

	public function getCreativeIdIn()
	{
		return $this->creativeIdIn;
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
		return "taobao.subway.creativeoffline.find";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->creativeIdIn,20,"creativeIdIn");
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
