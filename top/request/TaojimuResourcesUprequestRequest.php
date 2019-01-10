<?php
/**
 * TOP API: taobao.taojimu.resources.uprequest request
 * 
 * @author auto create
 * @since 1.0, 2018.08.02
 */
class TaojimuResourcesUprequestRequest
{
	/** 
	 * 图片格式扩展名（不带.）
	 **/
	private $extname;
	
	/** 
	 * 素材分组id
	 **/
	private $groupId;
	
	/** 
	 * 1为图片，3为视频
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setExtname($extname)
	{
		$this->extname = $extname;
		$this->apiParas["extname"] = $extname;
	}

	public function getExtname()
	{
		return $this->extname;
	}

	public function setGroupId($groupId)
	{
		$this->groupId = $groupId;
		$this->apiParas["group_id"] = $groupId;
	}

	public function getGroupId()
	{
		return $this->groupId;
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
		return "taobao.taojimu.resources.uprequest";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
