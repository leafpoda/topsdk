<?php
/**
 * TOP API: taobao.fenxiao.distributor.product.quantity.get request
 * 
 * @author auto create
 * @since 1.0, 2022.09.23
 */
class FenxiaoDistributorProductQuantityGetRequest
{
	/** 
	 * 产品ID
	 **/
	private $productId;
	
	/** 
	 * SKU ID
	 **/
	private $skuId;
	
	private $apiParas = array();
	
	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
		$this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId()
	{
		return $this->skuId;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.distributor.product.quantity.get";
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
