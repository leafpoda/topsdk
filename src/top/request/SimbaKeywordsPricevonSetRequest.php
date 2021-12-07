<?php
/**
 * TOP API: taobao.simba.keywords.pricevon.set request
 * 
 * @author auto create
 * @since 1.0, 2019.08.29
 */
class SimbaKeywordsPricevonSetRequest
{
	/** 
	 * 关键词ID，出价和匹配方式json字符串，keywordId:词ID，整数。maxPrice：价格，是整数，以“分”为单位，不能小于5，不能大于日限额,也不能大于99.99元,当使用默认出价时必须将这个值设置为0。; isDefaultPrice：是否使用默认出价，只能是0。matchscope只能是1,4（1代表精确匹配，4代表广泛匹配），maxMobilePrice：代表无线出价（如果是0，则代表无线出价=PC*无线溢价），mobileIsDefaultPrice代表无线出价是否采用pc*无线溢价，只能传0
	 **/
	private $keywordidPrices;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setKeywordidPrices($keywordidPrices)
	{
		$this->keywordidPrices = $keywordidPrices;
		$this->apiParas["keywordid_prices"] = $keywordidPrices;
	}

	public function getKeywordidPrices()
	{
		return $this->keywordidPrices;
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
		return "taobao.simba.keywords.pricevon.set";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->keywordidPrices,"keywordidPrices");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
