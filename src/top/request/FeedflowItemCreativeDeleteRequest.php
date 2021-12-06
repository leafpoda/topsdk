<?php
/**
 * TOP API: taobao.feedflow.item.creative.delete request
 * 
 * @author auto create
 * @since 1.0, 2019.05.07
 */
class FeedflowItemCreativeDeleteRequest
{
	/** 
	 * 创意id列表
	 **/
	private $creativeIdList;
	
	private $apiParas = array();
	
	public function setCreativeIdList($creativeIdList)
	{
		$this->creativeIdList = $creativeIdList;
		$this->apiParas["creative_id_list"] = $creativeIdList;
	}

	public function getCreativeIdList()
	{
		return $this->creativeIdList;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.creative.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->creativeIdList,"creativeIdList");
		RequestCheckUtil::checkMaxListSize($this->creativeIdList,20,"creativeIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
