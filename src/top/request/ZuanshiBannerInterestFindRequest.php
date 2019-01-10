<?php
/**
 * TOP API: taobao.zuanshi.banner.interest.find request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiBannerInterestFindRequest
{
	/** 
	 * 按宝贝ID列表查询兴趣点
	 **/
	private $itemIds;
	
	/** 
	 * 按关键字查询兴趣点
	 **/
	private $keyword;
	
	/** 
	 * 按店铺名称查询兴趣点
	 **/
	private $nickname;
	
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

	public function setKeyword($keyword)
	{
		$this->keyword = $keyword;
		$this->apiParas["keyword"] = $keyword;
	}

	public function getKeyword()
	{
		return $this->keyword;
	}

	public function setNickname($nickname)
	{
		$this->nickname = $nickname;
		$this->apiParas["nickname"] = $nickname;
	}

	public function getNickname()
	{
		return $this->nickname;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.interest.find";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->itemIds,20,"itemIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
