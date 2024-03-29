<?php
/**
 * TOP API: taobao.scitem.add request
 * 
 * @author auto create
 * @since 1.0, 2022.07.29
 */
class ScitemAddRequest
{
	/** 
	 * 条形码
	 **/
	private $barCode;
	
	/** 
	 * 品牌id
	 **/
	private $brandId;
	
	/** 
	 * brand_Name
	 **/
	private $brandName;
	
	/** 
	 * 高 单位：mm
	 **/
	private $height;
	
	/** 
	 * 1表示区域销售，0或是空是非区域销售
	 **/
	private $isAreaSale;
	
	/** 
	 * 是否是贵重品 0:不是 1：是
	 **/
	private $isCostly;
	
	/** 
	 * 是否危险 0：不是  1：是
	 **/
	private $isDangerous;
	
	/** 
	 * 是否易碎 0：不是  1：是
	 **/
	private $isFriable;
	
	/** 
	 * 是否保质期：0:不是 1：是
	 **/
	private $isWarranty;
	
	/** 
	 * 商品名称
	 **/
	private $itemName;
	
	/** 
	 * 0.普通供应链商品 1.供应链组合主商品
	 **/
	private $itemType;
	
	/** 
	 * 长度 单位：mm
	 **/
	private $length;
	
	/** 
	 * 0:液体，1：粉体，2：固体
	 **/
	private $matterStatus;
	
	/** 
	 * 商家编码
	 **/
	private $outerCode;
	
	/** 
	 * 价格 单位：分
	 **/
	private $price;
	
	/** 
	 * 商品属性格式是  p1:v1,p2:v2,p3:v3
	 **/
	private $properties;
	
	/** 
	 * remark
	 **/
	private $remark;
	
	/** 
	 * spuId或是cspuid
	 **/
	private $spuId;
	
	/** 
	 * 体积：立方厘米
	 **/
	private $volume;
	
	/** 
	 * 重量 单位：g
	 **/
	private $weight;
	
	/** 
	 * 宽 单位：mm
	 **/
	private $width;
	
	/** 
	 * 仓储商编码
	 **/
	private $wmsCode;
	
	private $apiParas = array();
	
	public function setBarCode($barCode)
	{
		$this->barCode = $barCode;
		$this->apiParas["bar_code"] = $barCode;
	}

	public function getBarCode()
	{
		return $this->barCode;
	}

	public function setBrandId($brandId)
	{
		$this->brandId = $brandId;
		$this->apiParas["brand_id"] = $brandId;
	}

	public function getBrandId()
	{
		return $this->brandId;
	}

	public function setBrandName($brandName)
	{
		$this->brandName = $brandName;
		$this->apiParas["brand_name"] = $brandName;
	}

	public function getBrandName()
	{
		return $this->brandName;
	}

	public function setHeight($height)
	{
		$this->height = $height;
		$this->apiParas["height"] = $height;
	}

	public function getHeight()
	{
		return $this->height;
	}

	public function setIsAreaSale($isAreaSale)
	{
		$this->isAreaSale = $isAreaSale;
		$this->apiParas["is_area_sale"] = $isAreaSale;
	}

	public function getIsAreaSale()
	{
		return $this->isAreaSale;
	}

	public function setIsCostly($isCostly)
	{
		$this->isCostly = $isCostly;
		$this->apiParas["is_costly"] = $isCostly;
	}

	public function getIsCostly()
	{
		return $this->isCostly;
	}

	public function setIsDangerous($isDangerous)
	{
		$this->isDangerous = $isDangerous;
		$this->apiParas["is_dangerous"] = $isDangerous;
	}

	public function getIsDangerous()
	{
		return $this->isDangerous;
	}

	public function setIsFriable($isFriable)
	{
		$this->isFriable = $isFriable;
		$this->apiParas["is_friable"] = $isFriable;
	}

	public function getIsFriable()
	{
		return $this->isFriable;
	}

	public function setIsWarranty($isWarranty)
	{
		$this->isWarranty = $isWarranty;
		$this->apiParas["is_warranty"] = $isWarranty;
	}

	public function getIsWarranty()
	{
		return $this->isWarranty;
	}

	public function setItemName($itemName)
	{
		$this->itemName = $itemName;
		$this->apiParas["item_name"] = $itemName;
	}

	public function getItemName()
	{
		return $this->itemName;
	}

	public function setItemType($itemType)
	{
		$this->itemType = $itemType;
		$this->apiParas["item_type"] = $itemType;
	}

	public function getItemType()
	{
		return $this->itemType;
	}

	public function setLength($length)
	{
		$this->length = $length;
		$this->apiParas["length"] = $length;
	}

	public function getLength()
	{
		return $this->length;
	}

	public function setMatterStatus($matterStatus)
	{
		$this->matterStatus = $matterStatus;
		$this->apiParas["matter_status"] = $matterStatus;
	}

	public function getMatterStatus()
	{
		return $this->matterStatus;
	}

	public function setOuterCode($outerCode)
	{
		$this->outerCode = $outerCode;
		$this->apiParas["outer_code"] = $outerCode;
	}

	public function getOuterCode()
	{
		return $this->outerCode;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setProperties($properties)
	{
		$this->properties = $properties;
		$this->apiParas["properties"] = $properties;
	}

	public function getProperties()
	{
		return $this->properties;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setSpuId($spuId)
	{
		$this->spuId = $spuId;
		$this->apiParas["spu_id"] = $spuId;
	}

	public function getSpuId()
	{
		return $this->spuId;
	}

	public function setVolume($volume)
	{
		$this->volume = $volume;
		$this->apiParas["volume"] = $volume;
	}

	public function getVolume()
	{
		return $this->volume;
	}

	public function setWeight($weight)
	{
		$this->weight = $weight;
		$this->apiParas["weight"] = $weight;
	}

	public function getWeight()
	{
		return $this->weight;
	}

	public function setWidth($width)
	{
		$this->width = $width;
		$this->apiParas["width"] = $width;
	}

	public function getWidth()
	{
		return $this->width;
	}

	public function setWmsCode($wmsCode)
	{
		$this->wmsCode = $wmsCode;
		$this->apiParas["wms_code"] = $wmsCode;
	}

	public function getWmsCode()
	{
		return $this->wmsCode;
	}

	public function getApiMethodName()
	{
		return "taobao.scitem.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemName,"itemName");
		RequestCheckUtil::checkNotNull($this->outerCode,"outerCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
