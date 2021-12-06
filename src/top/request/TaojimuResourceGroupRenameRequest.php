<?php
/**
 * TOP API: taobao.taojimu.resource.group.rename request
 * 
 * @author auto create
 * @since 1.0, 2018.12.04
 */
class TaojimuResourceGroupRenameRequest
{
	/** 
	 * 分组id
	 **/
	private $id;
	
	/** 
	 * 分组名
	 **/
	private $name;
	
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
		return "taobao.taojimu.resource.group.rename";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->name,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
