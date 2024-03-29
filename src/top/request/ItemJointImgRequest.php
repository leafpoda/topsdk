<?php
/**
 * TOP API: taobao.item.joint.img request
 * 
 * @author auto create
 * @since 1.0, 2022.05.31
 */
class ItemJointImgRequest
{
	/** 
	 * 商品图片id(如果是更新图片，则需要传该参数)
	 **/
	private $id;
	
	/** 
	 * 上传的图片是否关联为商品主图
	 **/
	private $isMajor;
	
	/** 
	 * 是否3:4长方形图片，绑定3:4主图视频时用于上传3:4商品主图
	 **/
	private $isRectangle;
	
	/** 
	 * 商品数字ID，必选
	 **/
	private $numIid;
	
	/** 
	 * 图片URL,图片空间图片的相对地址，支持的文件类型：jpg,jpeg,png
	 **/
	private $picPath;
	
	/** 
	 * 图片序号
	 **/
	private $position;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setIsMajor($isMajor)
	{
		$this->isMajor = $isMajor;
		$this->apiParas["is_major"] = $isMajor;
	}

	public function getIsMajor()
	{
		return $this->isMajor;
	}

	public function setIsRectangle($isRectangle)
	{
		$this->isRectangle = $isRectangle;
		$this->apiParas["is_rectangle"] = $isRectangle;
	}

	public function getIsRectangle()
	{
		return $this->isRectangle;
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

	public function setPicPath($picPath)
	{
		$this->picPath = $picPath;
		$this->apiParas["pic_path"] = $picPath;
	}

	public function getPicPath()
	{
		return $this->picPath;
	}

	public function setPosition($position)
	{
		$this->position = $position;
		$this->apiParas["position"] = $position;
	}

	public function getPosition()
	{
		return $this->position;
	}

	public function getApiMethodName()
	{
		return "taobao.item.joint.img";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
		RequestCheckUtil::checkNotNull($this->picPath,"picPath");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
