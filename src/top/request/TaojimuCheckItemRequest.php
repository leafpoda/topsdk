<?php
/**
 * TOP API: taobao.taojimu.check.item request
 * 
 * @author auto create
 * @since 1.0, 2021.11.16
 */
class TaojimuCheckItemRequest
{
	/** 
	 * xiaopin|subway|zuanshi
	 **/
	private $bp;
	
	/** 
	 * 多个宝贝id逗号隔开（每次限制20个）
	 **/
	private $itemIds;
	
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

	public function setItemIds($itemIds)
	{
		$this->itemIds = $itemIds;
		$this->apiParas["item_ids"] = $itemIds;
	}

	public function getItemIds()
	{
		return $this->itemIds;
	}

	public function getApiMethodName()
	{
		return "taobao.taojimu.check.item";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bp,"bp");
		RequestCheckUtil::checkNotNull($this->itemIds,"itemIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
