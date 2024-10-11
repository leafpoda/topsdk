<?php
/**
 * TOP API: taobao.universalbp.new.itemcross.promotion.find request
 * 
 * @author auto create
 * @since 1.0, 2024.08.29
 */
class UniversalbpNewItemcrossPromotionFindRequest
{
	/** 
	 * itemCrossPromotionVO
	 **/
	private $itemCrossPromotionVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setItemCrossPromotionVO($itemCrossPromotionVO)
	{
		$this->itemCrossPromotionVO = $itemCrossPromotionVO;
		$this->apiParas["item_cross_promotion_v_o"] = $itemCrossPromotionVO;
	}

	public function getItemCrossPromotionVO()
	{
		return $this->itemCrossPromotionVO;
	}

	public function setTopServiceContext($topServiceContext)
	{
		$this->topServiceContext = $topServiceContext;
		$this->apiParas["top_service_context"] = $topServiceContext;
	}

	public function getTopServiceContext()
	{
		return $this->topServiceContext;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.new.itemcross.promotion.find";
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
