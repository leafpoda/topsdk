<?php
/**
 * TOP API: alibaba.taobao.ud.smart.order.collect.cart.detail.pull request
 * 
 * @author auto create
 * @since 1.0, 2025.01.07
 */
class AlibabaTaobaoUdItemGet
{
	/** 
	 * 查询入参
	 **/
	private $dpaItemTopQueryDto;
	
	private $apiParas = array();
	
	public function setDpaItemTopQueryDto($dpaItemTopQueryDto)
	{
		$this->dpaItemTopQueryDto = $dpaItemTopQueryDto;
		$this->apiParas["dpa_item_top_query_dto"] = $dpaItemTopQueryDto;
	}

	public function getDpaItemTopQueryDto()
	{
		return $this->dpaItemTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "alibaba.taobao.ud.item.get";
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
