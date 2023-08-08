<?php
/**
 * TOP API: alibaba.product.merchantproducts.search request
 * 
 * @author auto create
 * @since 1.0, 2023.03.09
 */
class AlibabaProductMerchantproductsSearchRequest
{
	/** 
	 * 关键词，建议填条形码
	 **/
	private $keyword;
	
	private $apiParas = array();
	
	public function setKeyword($keyword)
	{
		$this->keyword = $keyword;
		$this->apiParas["keyword"] = $keyword;
	}

	public function getKeyword()
	{
		return $this->keyword;
	}

	public function getApiMethodName()
	{
		return "alibaba.product.merchantproducts.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->keyword,"keyword");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
