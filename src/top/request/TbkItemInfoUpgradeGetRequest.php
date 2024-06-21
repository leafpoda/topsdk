<?php
/**
 * TOP API: taobao.tbk.item.info.upgrade.get request
 * 
 * @author auto create
 * @since 1.0, 2024.04.25
 */
class TbkItemInfoUpgradeGetRequest
{
	/** 
	 * 1-动态ID转链场景，2-消费者比价场景，3-商品库导购场景（不填默认为1）；场景id使用说明参考《淘宝客新商品ID升级》白皮书：https://www.yuque.com/taobaolianmengguanfangxiaoer/zmig94/tfyt0pahmlpzu2ud
	 **/
	private $bizSceneId;
	
	/** 
	 * ip地址，影响邮费获取，如果不传或者传入不准确，邮费无法精准提供
	 **/
	private $ip;
	
	/** 
	 * 商品ID。多个用","分割，一次最多查询20个
	 **/
	private $itemId;
	
	/** 
	 * 商品库服务账户(场景id3权限对应的memberid）
	 **/
	private $manageItemPubId;
	
	/** 
	 * 1-自购省，2-推广赚（代理模式专属ID，代理模式必填，非代理模式不用填写该字段）
	 **/
	private $promotionType;
	
	/** 
	 * 渠道关系ID，仅适用于渠道推广场景
	 **/
	private $relationId;
	
	private $apiParas = array();
	
	public function setBizSceneId($bizSceneId)
	{
		$this->bizSceneId = $bizSceneId;
		$this->apiParas["biz_scene_id"] = $bizSceneId;
	}

	public function getBizSceneId()
	{
		return $this->bizSceneId;
	}

	public function setIp($ip)
	{
		$this->ip = $ip;
		$this->apiParas["ip"] = $ip;
	}

	public function getIp()
	{
		return $this->ip;
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

	public function setManageItemPubId($manageItemPubId)
	{
		$this->manageItemPubId = $manageItemPubId;
		$this->apiParas["manage_item_pub_id"] = $manageItemPubId;
	}

	public function getManageItemPubId()
	{
		return $this->manageItemPubId;
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

	public function getApiMethodName()
	{
		return "taobao.tbk.item.info.upgrade.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
