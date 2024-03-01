<?php
/**
 * TOP API: taobao.wireless.bunting.shop.shorturl.create request
 * 
 * @author auto create
 * @since 1.0, 2024.01.24
 */
class WirelessBuntingShopShorturlCreateRequest
{
	/** 
	 * 店铺id
	 **/
	private $shopId;
	
	private $apiParas = array();
	
	public function setShopId($shopId)
	{
		$this->shopId = $shopId;
		$this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId()
	{
		return $this->shopId;
	}

	public function getApiMethodName()
	{
		return "taobao.wireless.bunting.shop.shorturl.create";
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
