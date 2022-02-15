<?php

/**
 * sku详情
 * @author auto create
 */
class ArticleItemViewUnit
{
	
	/** 
	 * 需要支付的价格，单位：元
	 **/
	public $actual_price;
	
	/** 
	 * 用户是否可以购买
	 **/
	public $can_sub;
	
	/** 
	 * 周期数，如1，3，6，12。对于周期型和周期计量型返回。
	 **/
	public $cyc_num;
	
	/** 
	 * 1-年，2-月，3-日。对于周期型和周期计量型返回。
	 **/
	public $cyc_unit;
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 错误文案
	 **/
	public $error_msg;
	
	/** 
	 * 收费项目code
	 **/
	public $item_code;
	
	/** 
	 * 收费项目名称
	 **/
	public $item_name;
	
	/** 
	 * 原价，单位：元
	 **/
	public $origin_price;
	
	/** 
	 * 优惠，单位：元
	 **/
	public $prom_price;
	
	/** 
	 * 数量。对于周期计量型返回计量数。
	 **/
	public $quantity;	
}
?>