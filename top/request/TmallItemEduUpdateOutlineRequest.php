<?php
/**
 * TOP API: tmall.item.edu.update.outline request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallItemEduUpdateOutlineRequest
{
	/** 
	 * 宝贝Id
	 **/
	private $itemId;
	
	/** 
	 * 课程大纲json
	 **/
	private $outlineInfo;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setOutlineInfo($outlineInfo)
	{
		$this->outlineInfo = $outlineInfo;
		$this->apiParas["outline_info"] = $outlineInfo;
	}

	public function getOutlineInfo()
	{
		return $this->outlineInfo;
	}

	public function getApiMethodName()
	{
		return "tmall.item.edu.update.outline";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->outlineInfo,"outlineInfo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
