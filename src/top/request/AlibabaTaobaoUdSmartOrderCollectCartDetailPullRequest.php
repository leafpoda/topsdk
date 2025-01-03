<?php
/**
 * TOP API: alibaba.taobao.ud.smart.order.collect.cart.detail.pull request
 * 
 * @author auto create
 * @since 1.0, 2024.12.25
 */
class AlibabaTaobaoUdSmartOrderCollectCartDetailPullRequest
{
	/** 
	 * 查询入参
	 **/
	private $orderTopCursorQueryDto;
	
	private $apiParas = array();
	
	public function setOrderTopCursorQueryDto($orderTopCursorQueryDto)
	{
		$this->orderTopCursorQueryDto = $orderTopCursorQueryDto;
		$this->apiParas["order_top_cursor_query_dto"] = $orderTopCursorQueryDto;
	}

	public function getOrderTopCursorQueryDto()
	{
		return $this->orderTopCursorQueryDto;
	}

	public function getApiMethodName()
	{
		return "alibaba.taobao.ud.smart.order.collect.cart.detail.pull";
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
