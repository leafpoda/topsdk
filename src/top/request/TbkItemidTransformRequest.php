<?php
/**
 * TOP API: taobao.tbk.itemid.transform request
 * 
 * @author auto create
 * @since 1.0, 2022.08.30
 */
class TbkItemidTransformRequest
{
	/** 
	 * 商品id列表，使用英文逗号拼接
	 **/
	private $itemIds;
	
	private $apiParas = array();
	
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
		return "taobao.tbk.itemid.transform";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemIds,"itemIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
