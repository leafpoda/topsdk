<?php
/**
 * TOP API: taobao.unidesk.rta.ad.creativegroup.get request
 * 
 * @author auto create
 * @since 1.0, 2023.03.15
 */
class UnideskRtaAdCreativegroupGetRequest
{
	/** 
	 * 查询入参
	 **/
	private $creativeGroupTopQueryDto;
	
	private $apiParas = array();
	
	public function setCreativeGroupTopQueryDto($creativeGroupTopQueryDto)
	{
		$this->creativeGroupTopQueryDto = $creativeGroupTopQueryDto;
		$this->apiParas["creative_group_top_query_dto"] = $creativeGroupTopQueryDto;
	}

	public function getCreativeGroupTopQueryDto()
	{
		return $this->creativeGroupTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.ad.creativegroup.get";
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
