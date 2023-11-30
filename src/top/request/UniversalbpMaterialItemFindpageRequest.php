<?php
/**
 * TOP API: taobao.universalbp.material.item.findpage request
 * 
 * @author auto create
 * @since 1.0, 2023.11.28
 */
class UniversalbpMaterialItemFindpageRequest
{
	/** 
	 * itemQueryVO
	 **/
	private $itemQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setItemQueryVO($itemQueryVO)
	{
		$this->itemQueryVO = $itemQueryVO;
		$this->apiParas["item_query_v_o"] = $itemQueryVO;
	}

	public function getItemQueryVO()
	{
		return $this->itemQueryVO;
	}

	public function setTopServiceContext($topServiceContext)
	{
		$this->topServiceContext = $topServiceContext;
		$this->apiParas["top_service_context"] = $topServiceContext;
	}

	public function getTopServiceContext()
	{
		return $this->topServiceContext;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.material.item.findpage";
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
