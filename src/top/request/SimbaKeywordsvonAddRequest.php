<?php
/**
 * TOP API: taobao.simba.keywordsvon.add request
 * 
 * @author auto create
 * @since 1.0, 2022.09.09
 */
class SimbaKeywordsvonAddRequest
{
	/** 
	 * 推广组id
	 **/
	private $adgroupId;
	
	/** 
	 * 关键词、计算机出价、无线出价和匹配方式json字符串，word:词，不能有一些特殊字符。maxPrice：计算机出价，是整数，以“分”为单位，不能小于5，不能大于日限额, maxMobilePrice：代表无线出价，规则同maxPice 当matchscope只能是1,4（1代表精确匹配，4代表广泛匹配）。
	 **/
	private $keywordPrices;
	
	/** 
	 * 主人昵称
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

	public function setKeywordPrices($keywordPrices)
	{
		$this->keywordPrices = $keywordPrices;
		$this->apiParas["keyword_prices"] = $keywordPrices;
	}

	public function getKeywordPrices()
	{
		return $this->keywordPrices;
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
		return "taobao.simba.keywordsvon.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->keywordPrices,"keywordPrices");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
