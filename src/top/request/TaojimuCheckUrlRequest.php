<?php
/**
 * TOP API: taobao.taojimu.check.url request
 * 
 * @author auto create
 * @since 1.0, 2021.11.16
 */
class TaojimuCheckUrlRequest
{
	/** 
	 * zhuanshi|xiaopin|subway
	 **/
	private $bp;
	
	/** 
	 * 多个url逗号隔开
	 **/
	private $urls;
	
	private $apiParas = array();
	
	public function setBp($bp)
	{
		$this->bp = $bp;
		$this->apiParas["bp"] = $bp;
	}

	public function getBp()
	{
		return $this->bp;
	}

	public function setUrls($urls)
	{
		$this->urls = $urls;
		$this->apiParas["urls"] = $urls;
	}

	public function getUrls()
	{
		return $this->urls;
	}

	public function getApiMethodName()
	{
		return "taobao.taojimu.check.url";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bp,"bp");
		RequestCheckUtil::checkNotNull($this->urls,"urls");
		RequestCheckUtil::checkMaxListSize($this->urls,20,"urls");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
