<?php
/**
 * TOP API: alibaba.alimama.alimamacc.isv.sucai.query request
 * 
 * @author auto create
 * @since 1.0, 2024.04.03
 */
class AlibabaAlimamaAlimamaccIsvSucaiQueryRequest
{
	/** 
	 * 业务标识
	 **/
	private $bizCode;
	
	/** 
	 * 素材id
	 **/
	private $id;
	
	/** 
	 * 叉乘账号memberId
	 **/
	private $memberId;
	
	/** 
	 * 素材名称
	 **/
	private $name;
	
	/** 
	 * 分页
	 **/
	private $page;
	
	/** 
	 * 分页个数
	 **/
	private $perPage;
	
	/** 
	 * 比例，支持格式 1280/700 或 1 
	 **/
	private $ratio;
	
	/** 
	 * 尺寸，x 分隔
	 **/
	private $size;
	
	/** 
	 * 素材来源 0 表示用户本地上传，
	 **/
	private $source;
	
	/** 
	 * tagId，多个tagId 使用英文逗号分隔
	 **/
	private $tagIds;
	
	/** 
	 * 素材类型
	 **/
	private $type;
	
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

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
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

	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
	}

	public function setPerPage($perPage)
	{
		$this->perPage = $perPage;
		$this->apiParas["per_page"] = $perPage;
	}

	public function getPerPage()
	{
		return $this->perPage;
	}

	public function setRatio($ratio)
	{
		$this->ratio = $ratio;
		$this->apiParas["ratio"] = $ratio;
	}

	public function getRatio()
	{
		return $this->ratio;
	}

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
	}

	public function setTagIds($tagIds)
	{
		$this->tagIds = $tagIds;
		$this->apiParas["tag_ids"] = $tagIds;
	}

	public function getTagIds()
	{
		return $this->tagIds;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "alibaba.alimama.alimamacc.isv.sucai.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->page,"page");
		RequestCheckUtil::checkNotNull($this->perPage,"perPage");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
