<?php
/**
 * TOP API: taobao.universalbp.crowd.horizontal.modifydiscount request
 * 
 * @author auto create
 * @since 1.0, 2023.07.18
 */
class UniversalbpCrowdHorizontalModifydiscountRequest
{
	/** 
	 * list
	 **/
	private $dataList;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setDataList($dataList)
	{
		$this->dataList = $dataList;
		$this->apiParas["data_list"] = $dataList;
	}

	public function getDataList()
	{
		return $this->dataList;
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
		return "taobao.universalbp.crowd.horizontal.modifydiscount";
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
