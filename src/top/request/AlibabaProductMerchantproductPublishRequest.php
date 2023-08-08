<?php
/**
 * TOP API: alibaba.product.merchantproduct.publish request
 * 
 * @author auto create
 * @since 1.0, 2023.03.09
 */
class AlibabaProductMerchantproductPublishRequest
{
	/** 
	 * 叶子类目ID
	 **/
	private $catId;
	
	/** 
	 * schema协议值
	 **/
	private $product;
	
	private $apiParas = array();
	
	public function setCatId($catId)
	{
		$this->catId = $catId;
		$this->apiParas["cat_id"] = $catId;
	}

	public function getCatId()
	{
		return $this->catId;
	}

	public function setProduct($product)
	{
		$this->product = $product;
		$this->apiParas["product"] = $product;
	}

	public function getProduct()
	{
		return $this->product;
	}

	public function getApiMethodName()
	{
		return "alibaba.product.merchantproduct.publish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->catId,"catId");
		RequestCheckUtil::checkNotNull($this->product,"product");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
