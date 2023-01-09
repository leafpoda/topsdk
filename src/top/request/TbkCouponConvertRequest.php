<?php
/**
 * TOP API: taobao.tbk.coupon.convert request
 * 
 * @author auto create
 * @since 1.0, 2023.01.09
 */
class TbkCouponConvertRequest
{
	/** 
	 * 推广位id，mm_xx_xx_xx pid三段式中的第三段
	 **/
	private $adzoneId;
	
	/** 
	 * 1-动态ID转链场景，2-消费者比价场景，3-商品库导购场景（不填默认为1）
	 **/
	private $bizSceneId;
	
	/** 
	 * 淘宝客外部用户标记，如自身系统账户ID；微信ID等
	 **/
	private $externalId;
	
	/** 
	 * 是否获取前N件佣金	,0-否，1-是,其他值-否
	 **/
	private $getTopnRate;
	
	/** 
	 * 淘客商品id
	 **/
	private $itemId;
	
	/** 
	 * 是否需要获取小程序链接，需要设置1。(暂未对外开放)
	 **/
	private $miniProgramLink;
	
	/** 
	 * 1：PC，2：无线，默认：１
	 **/
	private $platform;
	
	/** 
	 * 1-自购省，2-推广赚（代理模式专属ID，代理模式必填，其它模式不用填写本字段）
	 **/
	private $promotionType;
	
	/** 
	 * 渠道管理ID（如是主站选品推广场景，必须入参该字段，且bizSceneId字段需入参2-消费者比价场景，否则二次转链失败）
	 **/
	private $relationId;
	
	/** 
	 * 会员运营ID
	 **/
	private $specialId;
	
	/** 
	 * 会员人群ID，用于统计人群推广效果
	 **/
	private $ucrowdId;
	
	/** 
	 * 团长与下游渠道合作的特殊标识，用于统计渠道推广效果
	 **/
	private $xid;
	
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

	public function setExternalId($externalId)
	{
		$this->externalId = $externalId;
		$this->apiParas["external_id"] = $externalId;
	}

	public function getExternalId()
	{
		return $this->externalId;
	}

	public function setGetTopnRate($getTopnRate)
	{
		$this->getTopnRate = $getTopnRate;
		$this->apiParas["get_topn_rate"] = $getTopnRate;
	}

	public function getGetTopnRate()
	{
		return $this->getTopnRate;
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

	public function setMiniProgramLink($miniProgramLink)
	{
		$this->miniProgramLink = $miniProgramLink;
		$this->apiParas["mini_program_link"] = $miniProgramLink;
	}

	public function getMiniProgramLink()
	{
		return $this->miniProgramLink;
	}

	public function setPlatform($platform)
	{
		$this->platform = $platform;
		$this->apiParas["platform"] = $platform;
	}

	public function getPlatform()
	{
		return $this->platform;
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

	public function setSpecialId($specialId)
	{
		$this->specialId = $specialId;
		$this->apiParas["special_id"] = $specialId;
	}

	public function getSpecialId()
	{
		return $this->specialId;
	}

	public function setUcrowdId($ucrowdId)
	{
		$this->ucrowdId = $ucrowdId;
		$this->apiParas["ucrowd_id"] = $ucrowdId;
	}

	public function getUcrowdId()
	{
		return $this->ucrowdId;
	}

	public function setXid($xid)
	{
		$this->xid = $xid;
		$this->apiParas["xid"] = $xid;
	}

	public function getXid()
	{
		return $this->xid;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.coupon.convert";
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
