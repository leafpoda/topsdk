<?php
/**
 * TOP API: taobao.dmp.tag.option.find request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class DmpTagOptionFindRequest
{
	/** 
	 * 当前页数
	 **/
	private $intCurrentPage;
	
	/** 
	 * 分页大小
	 **/
	private $intPageSize;
	
	/** 
	 * 选项名称
	 **/
	private $optionName;
	
	/** 
	 * 父选项id
	 **/
	private $parentOptionId;
	
	/** 
	 * 标签id
	 **/
	private $tagId;
	
	/** 
	 * 标签选项分组id
	 **/
	private $tagOptionGroupId;
	
	private $apiParas = array();
	
	public function setIntCurrentPage($intCurrentPage)
	{
		$this->intCurrentPage = $intCurrentPage;
		$this->apiParas["int_current_page"] = $intCurrentPage;
	}

	public function getIntCurrentPage()
	{
		return $this->intCurrentPage;
	}

	public function setIntPageSize($intPageSize)
	{
		$this->intPageSize = $intPageSize;
		$this->apiParas["int_page_size"] = $intPageSize;
	}

	public function getIntPageSize()
	{
		return $this->intPageSize;
	}

	public function setOptionName($optionName)
	{
		$this->optionName = $optionName;
		$this->apiParas["option_name"] = $optionName;
	}

	public function getOptionName()
	{
		return $this->optionName;
	}

	public function setParentOptionId($parentOptionId)
	{
		$this->parentOptionId = $parentOptionId;
		$this->apiParas["parent_option_id"] = $parentOptionId;
	}

	public function getParentOptionId()
	{
		return $this->parentOptionId;
	}

	public function setTagId($tagId)
	{
		$this->tagId = $tagId;
		$this->apiParas["tag_id"] = $tagId;
	}

	public function getTagId()
	{
		return $this->tagId;
	}

	public function setTagOptionGroupId($tagOptionGroupId)
	{
		$this->tagOptionGroupId = $tagOptionGroupId;
		$this->apiParas["tag_option_group_id"] = $tagOptionGroupId;
	}

	public function getTagOptionGroupId()
	{
		return $this->tagOptionGroupId;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.tag.option.find";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tagId,"tagId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
