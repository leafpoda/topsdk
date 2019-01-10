<?php
/**
 * TOP API: tmall.item.dapei.template.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallItemDapeiTemplateGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "tmall.item.dapei.template.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
