<?php
/**
 * TOP API: tmall.item.series.itemseries.removeitemfromseries request
 * 
 * @author auto create
 * @since 1.0, 2023.04.19
 */
class TmallItemSeriesItemseriesRemoveitemfromseriesRequest
{
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 市场
	 **/
	private $market;
	
	/** 
	 * 商品系列id
	 **/
	private $seriesId;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setMarket($market)
	{
		$this->market = $market;
		$this->apiParas["market"] = $market;
	}

	public function getMarket()
	{
		return $this->market;
	}

	public function setSeriesId($seriesId)
	{
		$this->seriesId = $seriesId;
		$this->apiParas["series_id"] = $seriesId;
	}

	public function getSeriesId()
	{
		return $this->seriesId;
	}

	public function getApiMethodName()
	{
		return "tmall.item.series.itemseries.removeitemfromseries";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->seriesId,"seriesId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
