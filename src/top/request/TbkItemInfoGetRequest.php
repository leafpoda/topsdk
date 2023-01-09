<?php
/**
 * TOP API: taobao.tbk.item.info.get request
 * 
 * @author auto create
 * @since 1.0, 2022.08.31
 */
class TbkItemInfoGetRequest
{
	/** 
	 * 1-动态ID转链场景，2-消费者比价场景，3-商品库导购场景（不填默认为1）
	 **/
	private $bizSceneId;
	
	/** 
	 * ip地址，影响邮费获取，如果不传或者传入不准确，邮费无法精准提供
	 **/
	private $ip;
	
	/** 
	 * 商品ID串，用,分割，最大40个
	 **/
	private $numIids;
	
	/** 
	 * 链接形式：1：PC，2：无线，默认：１
	 **/
	private $platform;
	
	/** 
	 * 1-自购省，2-推广赚（代理模式专属ID，代理模式必填，非代理模式不用填写该字段）
	 **/
	private $promotionType;
	
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

	public function setNumIids($numIids)
	{
		$this->numIids = $numIids;
		$this->apiParas["num_iids"] = $numIids;
	}

	public function getNumIids()
	{
		return $this->numIids;
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

	public function getApiMethodName()
	{
		return "taobao.tbk.item.info.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->numIids,"numIids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
