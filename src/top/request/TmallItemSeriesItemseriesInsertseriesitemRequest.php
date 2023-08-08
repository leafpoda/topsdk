<?php
/**
 * TOP API: tmall.item.series.itemseries.insertseriesitem request
 * 
 * @author auto create
 * @since 1.0, 2023.04.19
 */
class TmallItemSeriesItemseriesInsertseriesitemRequest
{
	/** 
	 * 系列商品编辑入参
	 **/
	private $seriesItemRequest;
	
	private $apiParas = array();
	
	public function setSeriesItemRequest($seriesItemRequest)
	{
		$this->seriesItemRequest = $seriesItemRequest;
		$this->apiParas["series_item_request"] = $seriesItemRequest;
	}

	public function getSeriesItemRequest()
	{
		return $this->seriesItemRequest;
	}

	public function getApiMethodName()
	{
		return "tmall.item.series.itemseries.insertseriesitem";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
