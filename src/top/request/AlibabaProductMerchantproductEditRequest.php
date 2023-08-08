<?php
/**
 * TOP API: alibaba.product.merchantproduct.edit request
 * 
 * @author auto create
 * @since 1.0, 2023.03.09
 */
class AlibabaProductMerchantproductEditRequest
{
	/** 
	 * 产品ID
	 **/
	private $id;
	
	/** 
	 * schema协议内容
	 **/
	private $product;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
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
		return "alibaba.product.merchantproduct.edit";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->product,"product");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
