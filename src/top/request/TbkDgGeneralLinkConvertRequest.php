<?php
/**
 * TOP API: taobao.tbk.dg.general.link.convert request
 * 
 * @author auto create
 * @since 1.0, 2024.05.22
 */
class TbkDgGeneralLinkConvertRequest
{
	/** 
	 * 推广位id，mm_xx_xx_xx pid三段式中的第三段
	 **/
	private $adzoneId;
	
	/** 
	 * 1-动态ID转链场景，2-消费者比价场景，4-
	 **/
	private $bizSceneId;
	
	/** 
	 * 商品转链
	 **/
	private $itemDto;
	
	/** 
	 * 商品ID列表,多个时使用英文逗号拼接传入
	 **/
	private $itemIdList;
	
	/** 
	 * 链接/口令转链
	 **/
	private $materialDto;
	
	/** 
	 * 物料列表，可以为url或淘口令,多个时使用英文逗号拼接传入
	 **/
	private $materialList;
	
	/** 
	 * 会场页面转链
	 **/
	private $pageDto;
	
	/** 
	 * 会场ID列表,多个时使用英文逗号拼接传入
	 **/
	private $pageIdList;
	
	/** 
	 * 1-自购省，2-推广赚（代理模式专属ID，代理模式必填，其它模式不用填写本字段）
	 **/
	private $promotionType;
	
	/** 
	 * 渠道管理ID（如是主站选品推广场景，必须入参该字段，且bizSceneId字段需入参2-消费者比价场景，否则二次转链失败）
	 **/
	private $relationId;
	
	/** 
	 * 卖家ID列表,多个时使用英文逗号拼接传入
	 **/
	private $sellerIdList;
	
	/** 
	 * 店铺转链
	 **/
	private $shopDto;
	
	/** 
	 * 会员运营id
	 **/
	private $specialId;
	
	/** 
	 * 会场页面内定坑商品
	 **/
	private $targetItem;
	
	private $apiParas = array();
	
	public function setAdzoneId($adzoneId)
	{
		$this->adzoneId = $adzoneId;
		$this->apiParas["adzone_id"] = $adzoneId;
	}

	public function getAdzoneId()
	{
		return $this->adzoneId;
	}

	public function setBizSceneId($bizSceneId)
	{
		$this->bizSceneId = $bizSceneId;
		$this->apiParas["biz_scene_id"] = $bizSceneId;
	}

	public function getBizSceneId()
	{
		return $this->bizSceneId;
	}

	public function setItemDto($itemDto)
	{
		$this->itemDto = $itemDto;
		$this->apiParas["item_dto"] = $itemDto;
	}

	public function getItemDto()
	{
		return $this->itemDto;
	}

	public function setItemIdList($itemIdList)
	{
		$this->itemIdList = $itemIdList;
		$this->apiParas["item_id_list"] = $itemIdList;
	}

	public function getItemIdList()
	{
		return $this->itemIdList;
	}

	public function setMaterialDto($materialDto)
	{
		$this->materialDto = $materialDto;
		$this->apiParas["material_dto"] = $materialDto;
	}

	public function getMaterialDto()
	{
		return $this->materialDto;
	}

	public function setMaterialList($materialList)
	{
		$this->materialList = $materialList;
		$this->apiParas["material_list"] = $materialList;
	}

	public function getMaterialList()
	{
		return $this->materialList;
	}

	public function setPageDto($pageDto)
	{
		$this->pageDto = $pageDto;
		$this->apiParas["page_dto"] = $pageDto;
	}

	public function getPageDto()
	{
		return $this->pageDto;
	}

	public function setPageIdList($pageIdList)
	{
		$this->pageIdList = $pageIdList;
		$this->apiParas["page_id_list"] = $pageIdList;
	}

	public function getPageIdList()
	{
		return $this->pageIdList;
	}

	public function setPromotionType($promotionType)
	{
		$this->promotionType = $promotionType;
		$this->apiParas["promotion_type"] = $promotionType;
	}

	public function getPromotionType()
	{
		return $this->promotionType;
	}

	public function setRelationId($relationId)
	{
		$this->relationId = $relationId;
		$this->apiParas["relation_id"] = $relationId;
	}

	public function getRelationId()
	{
		return $this->relationId;
	}

	public function setSellerIdList($sellerIdList)
	{
		$this->sellerIdList = $sellerIdList;
		$this->apiParas["seller_id_list"] = $sellerIdList;
	}

	public function getSellerIdList()
	{
		return $this->sellerIdList;
	}

	public function setShopDto($shopDto)
	{
		$this->shopDto = $shopDto;
		$this->apiParas["shop_dto"] = $shopDto;
	}

	public function getShopDto()
	{
		return $this->shopDto;
	}

	public function setSpecialId($specialId)
	{
		$this->specialId = $specialId;
		$this->apiParas["special_id"] = $specialId;
	}

	public function getSpecialId()
	{
		return $this->specialId;
	}

	public function setTargetItem($targetItem)
	{
		$this->targetItem = $targetItem;
		$this->apiParas["target_item"] = $targetItem;
	}

	public function getTargetItem()
	{
		return $this->targetItem;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.dg.general.link.convert";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adzoneId,"adzoneId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
