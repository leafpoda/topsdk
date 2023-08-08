<?php
/**
 * TOP API: alibaba.product.merchantproduct.publish.get request
 * 
 * @author auto create
 * @since 1.0, 2023.03.09
 */
class AlibabaProductMerchantproductPublishGetRequest
{
	/** 
	 * 叶子类目ID
	 **/
	private $catId;
	
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

	public function getApiMethodName()
	{
		return "alibaba.product.merchantproduct.publish.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->catId,"catId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
