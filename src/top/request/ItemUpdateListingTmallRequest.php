<?php
/**
 * TOP API: taobao.item.update.listing.tmall request
 * 
 * @author auto create
 * @since 1.0, 2022.09.19
 */
class ItemUpdateListingTmallRequest
{
	/** 
	 * 需要上架的商品的数量。取值范围:大于零的整数。如果商品有sku，则上架数量默认为所有sku数量总和，不可修改。否则商品数量根据设置数量调整为num
	 **/
	private $num;
	
	/** 
	 * 商品数字ID，该参数必须
	 **/
	private $numIid;
	
	private $apiParas = array();
	
	public function setNum($num)
	{
		$this->num = $num;
		$this->apiParas["num"] = $num;
	}

	public function getNum()
	{
		return $this->num;
	}

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
	}

	public function getApiMethodName()
	{
		return "taobao.item.update.listing.tmall";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->num,"num");
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
