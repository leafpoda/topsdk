<?php
/**
 * TOP API: alibaba.alimama.alimamacc.isv.sucai.put request
 * 
 * @author auto create
 * @since 1.0, 2024.04.03
 */
class AlibabaAlimamaAlimamaccIsvSucaiPutRequest
{
	/** 
	 * 业务标识
	 **/
	private $bizCode;
	
	/** 
	 * 是否推送到内容中台获取tbVideoId
	 **/
	private $bizFlow;
	
	/** 
	 * 素材可访问地址
	 **/
	private $fileUrl;
	
	/** 
	 * 素材高
	 **/
	private $height;
	
	/** 
	 * 叉乘账号memberId
	 **/
	private $memberId;
	
	/** 
	 * 素材名称
	 **/
	private $name;
	
	/** 
	 * 服务商系统中素材唯一标识
	 **/
	private $outerId;
	
	/** 
	 * 素材宽
	 **/
	private $width;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setBizFlow($bizFlow)
	{
		$this->bizFlow = $bizFlow;
		$this->apiParas["biz_flow"] = $bizFlow;
	}

	public function getBizFlow()
	{
		return $this->bizFlow;
	}

	public function setFileUrl($fileUrl)
	{
		$this->fileUrl = $fileUrl;
		$this->apiParas["file_url"] = $fileUrl;
	}

	public function getFileUrl()
	{
		return $this->fileUrl;
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

	public function setMemberId($memberId)
	{
		$this->memberId = $memberId;
		$this->apiParas["member_id"] = $memberId;
	}

	public function getMemberId()
	{
		return $this->memberId;
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

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
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

	public function getApiMethodName()
	{
		return "alibaba.alimama.alimamacc.isv.sucai.put";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->fileUrl,"fileUrl");
		RequestCheckUtil::checkNotNull($this->height,"height");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkNotNull($this->width,"width");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
