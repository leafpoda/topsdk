<?php

/**
 * 产品线列表。返回 ProductCat 包含的字段信息。
 * @author auto create
 */
class ProductCat
{
	
	/** 
	 * 产品代销采购价
	 **/
	public $cost_percent_agent;
	
	/** 
	 * 产品经销采购价
	 **/
	public $cost_percent_dealer;
	
	/** 
	 * 产品线ID
	 **/
	public $id;
	
	/** 
	 * 产品线名称
	 **/
	public $name;
	
	/** 
	 * 产品数量
	 **/
	public $product_num;
	
	/** 
	 * 产品最高零售价
	 **/
	public $retail_high_percent;
	
	/** 
	 * 产品最低零售价
	 **/
	public $retail_low_percent;	
}
?>