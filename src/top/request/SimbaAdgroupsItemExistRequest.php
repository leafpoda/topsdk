<?php
/**
 * TOP API: taobao.simba.adgroups.item.exist request
 * 
 * @author auto create
 * @since 1.0, 2019.04.28
 */
class SimbaAdgroupsItemExistRequest
{
	/** 
	 * 推广计划Id
	 **/
	private $campaignId;
	
	/** 
	 * 商品Id
	 **/
	private $itemId;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	/** 
	 * 产品类型 101001005 代表普通推广，101001014代表销量明星
	 **/
	private $productId;
	
	private $apiParas = array();
	
	public function setCampaignId($campaignId)
	{
		$this->campaignId = $campaignId;
		$this->apiParas["campaign_id"] = $campaignId;
	}

	public function getCampaignId()
	{
		return $this->campaignId;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.adgroups.item.exist";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
