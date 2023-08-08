<?php
/**
 * TOP API: taobao.zuanshi.banner.adgroup.get request
 * 
 * @author auto create
 * @since 1.0, 2023.08.08
 */
class ZuanshiBannerAdgroupGetRequest
{
	/** 
	 * 单元ID
	 **/
	private $id;
	
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

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.adgroup.get";
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
