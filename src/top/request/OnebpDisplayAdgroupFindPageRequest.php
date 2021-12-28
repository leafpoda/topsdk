<?php
/**
 * TOP API: taobao.onebp.display.adgroup.find.page request
 * 
 * @author auto create
 * @since 1.0, 2021.12.21
 */
class OnebpDisplayAdgroupFindPageRequest
{
	/** 
	 * 单元分页查询参数
	 **/
	private $adgroupPageQuery;
	
	private $apiParas = array();
	
	public function setAdgroupPageQuery($adgroupPageQuery)
	{
		$this->adgroupPageQuery = $adgroupPageQuery;
		$this->apiParas["adgroup.page.query"] = $adgroupPageQuery;
	}

	public function getAdgroupPageQuery()
	{
		return $this->adgroupPageQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.adgroup.find.page";
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
