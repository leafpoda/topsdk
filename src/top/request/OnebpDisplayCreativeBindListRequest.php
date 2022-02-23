<?php
/**
 * TOP API: taobao.onebp.display.creative.bind.list request
 * 
 * @author auto create
 * @since 1.0, 2022.02.15
 */
class OnebpDisplayCreativeBindListRequest
{
	/** 
	 * 创意查询条件信息
	 **/
	private $creativePageQuery;
	
	private $apiParas = array();
	
	public function setCreativePageQuery($creativePageQuery)
	{
		$this->creativePageQuery = $creativePageQuery;
		$this->apiParas["creative_page_query"] = $creativePageQuery;
	}

	public function getCreativePageQuery()
	{
		return $this->creativePageQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.creative.bind.list";
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
