<?php
/**
 * TOP API: taobao.fuwu.purchase.order.confirm request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class FuwuPurchaseOrderConfirmRequest
{
	/** 
	 * 内购服务下单接口参数
	 **/
	private $paramOrderConfirmQueryDTO;
	
	private $apiParas = array();
	
	public function setParamOrderConfirmQueryDTO($paramOrderConfirmQueryDTO)
	{
		$this->paramOrderConfirmQueryDTO = $paramOrderConfirmQueryDTO;
		$this->apiParas["param_order_confirm_query_d_t_o"] = $paramOrderConfirmQueryDTO;
	}

	public function getParamOrderConfirmQueryDTO()
	{
		return $this->paramOrderConfirmQueryDTO;
	}

	public function getApiMethodName()
	{
		return "taobao.fuwu.purchase.order.confirm";
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
