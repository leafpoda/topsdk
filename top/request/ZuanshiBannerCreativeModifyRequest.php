<?php
/**
 * TOP API: taobao.zuanshi.banner.creative.modify request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiBannerCreativeModifyRequest
{
	/** 
	 * 类目ID，1,女装 2,彩妆，护肤 3,女鞋 4,男装 5,男鞋 6,箱包 7,食品，茶叶，烟酒 8,内衣 9,保健 10,饰品，服饰 11,运动 12,居家 13,童装，母婴 14,电器 15,数码 16,游戏 17,团购 18,其他
	 **/
	private $catId;
	
	/** 
	 * 点击链接
	 **/
	private $clickUrl;
	
	/** 
	 * 创意ID
	 **/
	private $id;
	
	/** 
	 * 图片内容.图片最大为2M,只支持jpg,png,jpeg
	 **/
	private $image;
	
	/** 
	 * 是否需要pc转无线链接，true：是，false：否
	 **/
	private $isTransToWifi;
	
	/** 
	 * 创意名称
	 **/
	private $name;
	
	private $apiParas = array();
	
	public function setCatId($catId)
	{
		$this->catId = $catId;
		$this->apiParas["cat_id"] = $catId;
	}

	public function getCatId()
	{
		return $this->catId;
	}

	public function setClickUrl($clickUrl)
	{
		$this->clickUrl = $clickUrl;
		$this->apiParas["click_url"] = $clickUrl;
	}

	public function getClickUrl()
	{
		return $this->clickUrl;
	}

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setIsTransToWifi($isTransToWifi)
	{
		$this->isTransToWifi = $isTransToWifi;
		$this->apiParas["is_trans_to_wifi"] = $isTransToWifi;
	}

	public function getIsTransToWifi()
	{
		return $this->isTransToWifi;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.creative.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
