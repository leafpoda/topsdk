<?php
/**
 * TOP API: taobao.sku.update.listing.tmall request
 * 
 * @author auto create
 * @since 1.0, 2024.03.13
 */
class SkuUpdateListingTmallRequest
{
	/** 
	 * 商品ID，必填
	 **/
	private $itemId;
	
	/** 
	 * skuId和sku状态的映射，其中状态1代表上架，-2代表下架，必填
	 **/
	private $skuMap;
	
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

	public function setSkuMap($skuMap)
	{
		$this->skuMap = $skuMap;
		$this->apiParas["sku_map"] = $skuMap;
	}

	public function getSkuMap()
	{
		return $this->skuMap;
	}

	public function getApiMethodName()
	{
		return "taobao.sku.update.listing.tmall";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->skuMap,"skuMap");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
