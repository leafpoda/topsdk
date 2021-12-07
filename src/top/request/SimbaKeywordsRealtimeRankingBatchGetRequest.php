<?php
/**
 * TOP API: taobao.simba.keywords.realtime.ranking.batch.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class SimbaKeywordsRealtimeRankingBatchGetRequest
{
	/** 
	 * adgroupId
	 **/
	private $adGroupId;
	
	/** 
	 * 关键词列表集合,id用半角逗号分割，一次最多20个
	 **/
	private $bidwordIds;
	
	/** 
	 * 旺旺名称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setAdGroupId($adGroupId)
	{
		$this->adGroupId = $adGroupId;
		$this->apiParas["ad_group_id"] = $adGroupId;
	}

	public function getAdGroupId()
	{
		return $this->adGroupId;
	}

	public function setBidwordIds($bidwordIds)
	{
		$this->bidwordIds = $bidwordIds;
		$this->apiParas["bidword_ids"] = $bidwordIds;
	}

	public function getBidwordIds()
	{
		return $this->bidwordIds;
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
		return "taobao.simba.keywords.realtime.ranking.batch.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adGroupId,"adGroupId");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
