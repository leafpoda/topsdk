<?php
/**
 * TOP API: tmall.item.series.itemseries.insertorupdate request
 * 
 * @author auto create
 * @since 1.0, 2023.04.27
 */
class TmallItemSeriesItemseriesInsertorupdateRequest
{
	/** 
	 * 商品系列创建或修改请求入参
	 **/
	private $itemSeriesRequest;
	
	private $apiParas = array();
	
	public function setItemSeriesRequest($itemSeriesRequest)
	{
		$this->itemSeriesRequest = $itemSeriesRequest;
		$this->apiParas["item_series_request"] = $itemSeriesRequest;
	}

	public function getItemSeriesRequest()
	{
		return $this->itemSeriesRequest;
	}

	public function getApiMethodName()
	{
		return "tmall.item.series.itemseries.insertorupdate";
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
