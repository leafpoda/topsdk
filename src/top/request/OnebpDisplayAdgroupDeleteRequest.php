<?php
/**
 * TOP API: taobao.onebp.display.adgroup.delete request
 * 
 * @author auto create
 * @since 1.0, 2022.09.20
 */
class OnebpDisplayAdgroupDeleteRequest
{
	/** 
	 * list
	 **/
	private $dataList;
	
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

	public function getApiMethodName()
	{
		return "taobao.onebp.display.adgroup.delete";
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
