<?php
/**
 * TOP API: alibaba.alimama.alimamacc.isv.sucai.query request
 * 
 * @author auto create
 * @since 1.0, 2023.07.12
 */
class AlibabaAlimamaAlimamaccIsvSucaiQueryRequest
{
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
	 * 尺寸，x 分隔
	 **/
	private $size;
	
	/** 
	 * 素材类型
	 **/
	private $type;
	
	private $apiParas = array();
	
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

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
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
		
		RequestCheckUtil::checkNotNull($this->page,"page");
		RequestCheckUtil::checkNotNull($this->perPage,"perPage");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
