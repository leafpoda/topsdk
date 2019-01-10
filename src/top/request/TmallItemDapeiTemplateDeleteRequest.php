<?php
/**
 * TOP API: tmall.item.dapei.template.delete request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallItemDapeiTemplateDeleteRequest
{
	/** 
	 * 搭配模板ID
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
		return "tmall.item.dapei.template.delete";
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
